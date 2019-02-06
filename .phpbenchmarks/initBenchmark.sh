#!/usr/bin/env bash

rm -rf storage/cache/*
[ "$?" != "0" ] && exit 1

chmod -R 777 storage/cache
[ "$?" != "0" ] && exit 1

# --ansi to have colors when this script is called in PHP
composer install --no-dev --classmap-authoritative --ansi
[ $? != "0" ] && exit 1

# don't forget to indicate this script has no error
exit 0
