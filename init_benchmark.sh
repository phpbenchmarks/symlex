#!/usr/bin/env bash

function init() {
    composer install --no-dev -n
    [ "$?" != "0" ] && exit 1

    return 0
}