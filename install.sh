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

echo "Delete old theme files... "
cd "${theme_dir}"
rm -rf Quantic

echo "Copy new theme files... "
cd Quantic-Theme-master/
mv Quantic "${theme_dir}"

echo "Clean up... "
cd ../
rm -rf Quantic-Theme-master

echo "Quantic theme installed. "
