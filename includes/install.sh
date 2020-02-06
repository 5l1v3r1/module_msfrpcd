#!/bin/bash
echo
echo "installing msfconsole..."
echo

curl https://raw.githubusercontent.com/rapid7/metasploit-omnibus/master/config/templates/metasploit-framework-wrappers/msfupdate.erb > msfinstall && chmod 755 msfinstall && ./msfinstall


echo 
echo "Cleaning Up..."
echo

rm msfinstall

echo "..DONE.."
exit


