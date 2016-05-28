#!/bin/bash
rm -Rf app/cache/*
rm -Rf app/logs/*
app/console cache:clear
app/console assets:install -e prod public_html
app/console assetic:dump
chmod -R 777 app/cache
chmod -R 777 app/logs
chown -R mybenefits:mybenefits *
