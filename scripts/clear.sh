#!/bin/bash

DIR="$( cd "$( dirname "${BASH_SOURCE[0]}" )"/../ && pwd )"
CDIR=$( pwd )

cd $DIR

rm .tmp/*

cd $CDIR