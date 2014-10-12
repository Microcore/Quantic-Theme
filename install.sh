#!/bin/bash

set -o nounset
set -o errexit


theme_dir=""

echo "Theme will be installed to \`${theme_dir}\` "

echo "Download theme pack... "
wget -O quantic-theme.zip https://github.com/Microcore/Quantic-Theme/archive/master.zip

echo "Unpack theme files... "
unzip quantic-theme.zip
rm quantic-theme.zip

echo "Install theme files... "
cd Quantic-Theme-master/
mv Quantic "${theme_dir}"
cd ../
rmdir Quantic-Theme-master

echo "Quantic theme installed. "
