#!/usr/bin/env bash

function init() {
    composer install --no-dev --classmap-authoritative
    app/clearcache
    [ "$?" != "0" ] && exit 1

    return 0
}
