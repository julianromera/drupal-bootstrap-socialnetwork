#!/bin/sh


if [ "x$1" = "x" ];then
        echo "$0 <commit message>"
        exit 0
fi

git add .
git commit -am "$1"
git pull origin master
git push origin --all
