#!/usr/bin/bash

#SBATCH --job-name gdc_array
#SBATCH --account BUTTERWORTH-SL3-CPU
#SBATCH --partition icelake-himem
#SBATCH --time=10:00:00
#SBATCH --mail-type=NONE
#SBATCH --array=1-386
#SBATCH --output=/rds/project/jmmh2/rds-jmmh2-pre_qc_data/cptac/slurm/_gdc_%A_%a.o
#SBATCH --error=/rds/project/jmmh2/rds-jmmh2-pre_qc_data/cptac/slurm/_gdc_%A_%a.e

. /etc/profile.d/modules.sh
module purge
module load rhel8/default-icl
module load ceuadmin/gdc

export renal=~/rds/pre_qc_data/cptac/temp_CPTAC_GDC/renal
awk 'NR==1||NR==ENVIRON["SLURM_ARRAY_TASK_ID"]+1' ${renal}/scripts_and_tokens/kidney_gdc_manifest.2023-12-01.txt > kidney-${SLURM_ARRAY_TASK_ID}.manifest

gdc-client download -m kidney-${SLURM_ARRAY_TASK_ID}.manifest -t ${renal}/scripts_and_tokens/gdc-user-token.2023-11-30T13_15_20.115Z.txt
