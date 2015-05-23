#!/bin/sh

# -- App Install/Update
# =========================================
cd /vagrant/ && composer install
cd /vagrant/ && composer update
