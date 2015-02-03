#!/bin/bash
if [[ $# -eq 0 ]] ; then
    echo 'Commands: cache'
fi

shopt -s extglob

function cacheclear
{
  rm -f httpdocs/assets/cache/?(*.css|*.js)
  shopt -u extglob
}


type $1 &>/dev/null && $1 $2 || echo "command not found"