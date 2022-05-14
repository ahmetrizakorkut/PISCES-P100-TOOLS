#!/bin/bash

if [[ $EUID -ne 0 ]]; then
   echo "This script must be run as root"
   exit 1
fi

echo "::::::::::::  Updating Logs Page  :::::::::::::::::::::::::::::::::::"
echo ""
cd /var/dashboard/pages/
mv logs.php logs.php.bak
wget https://raw.githubusercontent.com/ahmetrizakorkut/PISCES-P100-TOOLS/main/logs.php -O logs.php
echo ""
echo "::::::::::: The operation is successful. You can now refresh your Log page.:::::::::::::::::::::"

