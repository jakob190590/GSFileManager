#!/bin/bash

find "$1" -mindepth 1 -maxdepth 1 -not -name .git\* -not -name tools   -exec  cp -ruf "{}" "$2" \;
#'xcopy "{}" "'$2'" /y /q /s /l /d' \;
