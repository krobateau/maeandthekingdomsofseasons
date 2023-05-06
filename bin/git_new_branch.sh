#!/bin/bash

if [ "$1" == "" ]; then
  echo "Usage: [branch name]"
  exit 1
fi

export SKIP_POST_CHECKOUT=1

MAIN_BRANCH=$(git branch | cut -c 3- | grep -w 'main\|master\|develop')

if [ "$MAIN_BRANCH" == "" ]; then
  echo "No root branch found"
  exit 1
fi

git checkout $MAIN_BRANCH \
  && git pull \
  && git branch "$1" \
  && git checkout "$1" 