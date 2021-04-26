#!/bin/bash

repository=$(git remote -v | grep origin | awk '{print $2}' | grep -o "[^/]*$" | head -n 1)
CURRENT_BRANCH=$(git branch | grep '[*]' | awk '{print $2}')

git push

if [ "$?" != "0" ]; then
  git push --set-upstream origin $CURRENT_BRANCH
fi
exit $?
