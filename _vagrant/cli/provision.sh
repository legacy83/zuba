#!/bin/sh

###########################################################
# Cli Provision
###########################################################

domain='192.168.27.14.xip.io'

apache2AddVhost="$(curl -sS https://raw.githubusercontent.com/trsenna/gozma14/0.5.0/cli/stuff/apache2/addVhost.sh)"
apache2Add301Redirect="$(curl -sS https://raw.githubusercontent.com/trsenna/gozma14/0.5.0/cli/stuff/apache2/add301Redirect.sh)"
mySQLCreateDB="$(curl -sS https://raw.githubusercontent.com/trsenna/gozma14/0.5.0/cli/stuff/mySQL/createDB.sh)"

##########################################
# WWW Setup
##########################################

echo "$apache2AddVhost" | bash -s "$domain"
echo "$apache2AddVhost" | bash -s "www.$domain"
echo "$apache2Add301Redirect" | bash -s "$domain" "www.$domain"

##########################################
# App Project Setup
##########################################

echo "$mySQLCreateDB" | bash -s "zuba"

rm -rf "/var/www/www.$domain/public_html"
ln -s /vagrant/public "/var/www/www.$domain/public_html"

##########################################
# Sample Project Setup
##########################################

#echo "$mySQLCreateDB" | bash -s "sample"
#echo "$apache2AddVhost" | bash -s "sample.$domain"

#rm -rf "/var/www/sample.$domain/public_html"
#ln -s /vagrant/projects/sample "/var/www/sample.$domain/public_html"

##########################################
# Apache2 Reload
##########################################

service apache2 reload
