#!/usr/bin/env bash

rm -rf storage/cache/*
chmod -R 777 storage/cache

composer install --no-dev --classmap-authoritative --ansi
