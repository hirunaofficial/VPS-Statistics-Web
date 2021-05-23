#!/bin/bash
#Script By GD Hiruna

red=`tput setaf 1`
green=`tput setaf 2`
yellow=`tput setaf 3`
ip="$(dig +short myip.opendns.com @resolver1.opendns.com)"
clear
echo "${yellow}▀█░█▀ █▀▀█ █▀▀   █▀▀ ▀▀█▀▀ █▀▀█ ▀▀█▀▀ ░▀░ █▀▀ ▀▀█▀▀ ░▀░ █▀▀ █▀▀   █░░░█ █▀▀ █▀▀▄"
echo "${yellow}░█▄█░ █░░█ ▀▀█   ▀▀█ ░░█░░ █▄▄█ ░░█░░ ▀█▀ ▀▀█ ░░█░░ ▀█▀ █░░ ▀▀█   █▄█▄█ █▀▀ █▀▀▄"
echo "${yellow}░░▀░░ █▀▀▀ ▀▀▀   ▀▀▀ ░░▀░░ ▀░░▀ ░░▀░░ ▀▀▀ ▀▀▀ ░░▀░░ ▀▀▀ ▀▀▀ ▀▀▀   ░▀░▀░ ▀▀▀ ▀▀▀░"
echo ""
echo "${yellow}Downloading and Installing Requirements of VPS Statistics Web ${red}(Script By GD Hiruna)${green}"
apt-get update
apt-get install wget
sudo apt-get install zip unzip
apt-get install apache2
sudo apt install php libapache2-mod-php
sudo systemctl restart apache2
echo "${yellow}Downloading and Installing VPS Statistics Web ${red}(Script By GD Hiruna)${green}"
cd /var/www/html/
wget https://github.com/hirunaofficial/VPS-Statistics-Web/archive/refs/heads/main.zip
unzip main.zip
rm -R main.zip
mv /var/www/html/VPS-Statistics-Web-main /var/www/html/VPS-Statistics-Web
cd /var/www/html/VPS-Statistics-Web
chmod -R 777 *
clear
echo "${yellow}VPS Statistics Web Successfully Installed ${red}(Script By GD Hiruna)"
echo "${green}http://${ip}/VPS-Statistics-Web"