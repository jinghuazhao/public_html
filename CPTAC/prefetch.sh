#!/usr/bin/bash

module load perl-5.20.0-gcc-5.4.0-4npvg5p
module load ceuadmin/sra-tools

export TMPDIR=~/rds/rds-jmmh2-public_databases/CPTAC/TEMP
export cwd=${PWD}
cd ${TMPDIR}
cat ${cwd}/gastric.list | \
parallel -C' ' -j5 '
  export accession={}
  (
    vdb-dump ${accession} --info
    prefetch --force ALL --transport http --max-size u --progress ${accession}
  ) > ${accession}.log
'
cd -
