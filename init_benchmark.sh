#!/usr/bin/env bash

function clearCache() {
    sudo /bin/rm -rf storage/cache/*
    [ "$?" != "0" ] && exit 1

    sudo /bin/chmod -R 777 storage/cache
    [ "$?" != "0" ] && exit 1
}

function init() {
    clearCache
    composer install --no-dev --classmap-authoritative

    return 0
}
