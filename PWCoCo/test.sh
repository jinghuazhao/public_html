#!/usr/bin/bash

# 1KG
export rt=~/rds/public_databases/1000G
export f=ALL.chr1.phase3_shapeit2_mvncall_integrated_v5a.20130502.genotypes.vcf.gz
export rtf=${rt}/${f}

module load gcc/6
module load ceuadmin/plink/2.00a3.3
plink --vcf ${rtf} --make-bed --chr 1 --from-bp 247469995 --to-bp 247722023 --out chr1
awk '
{
  if (NR>1)
  {
    split($1,a,"_");
    if (a[3]<a[4]) snpid=a[1]"_"a[2]"_"a[3]"_"a[4]; else snpid=a[1]"_"a[2]"_"a[4]"_"a[3]
    $1=snpid
  }
};1' OFS="\t" crp_signal.tsv > crp.tsv
awk '
{
  if (NR>1)
  {
    split($1,a,"_");
    if (a[3]<a[4]) snpid=a[1]"_"a[2]"_"a[3]"_"a[4]; else snpid=a[1]"_"a[2]"_"a[4]"_"a[3]
    $1=snpid
  }
};1' OFS="\t" nlrp3_signal.tsv > nlrp3.tsv
awk '
{
  if (NR>1)
  {
    if ($5<$6) snpid=$1"_"$4"_"$5"_"$6; else snpid=$1"_"$4"_"$6"_"$5
    $3=snpid
  }
};1' OFS="\t" chr1.bim | \
grep -f <(cut -f1 crp.tsv) > chr1.tsv
cut -f2 chr1.tsv > rsid.lst
cut -f3 chr1.tsv > snpid.lst
(
  head -1 crp.tsv
  grep -f snpid.lst crp.tsv | \
  join -12 -t$'\t' <(cut -f2,3 chr1.tsv) - | \
  cut -f1 --complement
) | \
tr '\t' ' '> crp_new.tsv
(
  head -1 nlrp3.tsv
  grep -f snpid.lst nlrp3.tsv | \
  join -12 -t$'\t' <(cut -f2,3 chr1.tsv) - | \
  cut -f1 --complement
) | \
tr '\t' ' '> nlrp3_new.tsv

plink --bfile chr1 --extract rsid.lst --make-bed --out ref
paste <(cut -f2 ref.bim) <(sed '1d' nlrp3_new.tsv | cut -f1) <(sed '1d' crp_new.tsv | cut -f1)
module load ceuadmin/PWCoCo/pwcoco
pwcoco --bfile ref --sum_stats1 nlrp3_new.tsv --sum_stats2 crp_new.tsv --maf 0.01 --threads 6 --out_cond --out nlrp3_crp_1KG
pwcoco --bfile merged_imputation --sum_stats1 nlrp3_new.tsv --sum_stats2 crp_new.tsv --maf 0.01 --threads 6 --out_cond --out nlrp3_crp_imputation
pwcoco --bfile ${INF}/INTERVAL/cardio/INTERVAL --sum_stats1 nlrp3.tsv --sum_stats2 crp.tsv --maf 0.01 --threads 6 --out_cond --out nlrp3_crp_INTERVAL

# bcftools annotate --set-id '%CHROM:%POS\_%REF\/%FIRST_ALT'
# gunzip -c ${rtf} > ${HPC_WORK}/work/chr1.vcf
# qctool -filetype vcf -g ${HPC_WORK}/work/chr1.vcf -ofiletype binary_ped -og ${HPC_WORK}/work/chr1
