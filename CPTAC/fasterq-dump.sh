#!/usr/bin/bash

module load perl-5.20.0-gcc-5.4.0-4npvg5p
module load ceuadmin/sra-tools

TMPDIR=~/rds/rds-jmmh2-public_databases/CPTAC/TEMP
export cwd=${PWD}
cd ${TMPDIR}/prefetch
cat ${cwd}/gastric.list | \
parallel -C' ' -j1 '
  export accession={}
  echo ${accession}
  fasterq-dump ${accession} --outdir ${TMPDIR}
'
cd -
