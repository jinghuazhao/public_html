#!/usr/bin/bash

function create_github_repository()
{
  export user=jinghuazhao
  export token=$(awk "NR==2" ~/doc/access)
  export API=https://api.github.com
  export header="Accept: application/vnd.github.v3+json"
  export name=public_html
}

function rest()
{
# 1. create the repository
  curl -X POST -u $user:$token -H "$header" -d '{"name": "'"$name"'"}' $API/user/repos

# 2. list the repository
  curl -H "$header" $API/repos/$user/$name

# 3. delete the repository
# curl -X DELETE -u $user:$token -H "$header" $API/repos/$user/$name

# 4. customise settings and commit
  git config --global user.email "jinghuazhao@hotmail.com"
  git config --global user.name "jinghuazhao@github.com"
  git config --global url."https://jinghuazhao@github.com".insteadOf "https://github.com"
  git init
  git branch -M main
  git remote add origin git@github.com:jinghuazhao/public_html.git
  git push --set-upstream origin main
}

funciton biosketch()
{
  git add jing_cv.*
  git commit -m "biosketch"
  git push
}

# create_github_repository
# rest

for f in $(ls)
do
  echo adding ${f}
  git add ${f}
  git commit -m "${f}"
done
git push
du -h --exclude .git --exclude grav --exclude adams_team
