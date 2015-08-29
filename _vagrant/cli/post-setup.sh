#!/bin/sh

# -- App Install/Update
# =========================================
cd /vagrant/ && composer --no-interaction install
cd /vagrant/ && composer --no-interaction update