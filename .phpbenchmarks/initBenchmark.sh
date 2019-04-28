#!/usr/bin/env bash

set -e

rm -rf storage/cache/*
chmod -R 777 storage/cache
composer install --no-dev --classmap-authoritative --ansi
