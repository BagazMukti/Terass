<?php
# Terass Installer
print "Copying 'terass' to '/data/data/com.termux/files/usr/bin'...\n";
system('cp terass /data/data/com.termux/files/usr/bin');
sleep(1);
print "Chmod 'terass'...\n";
system('chmod +x /data/data/com.termux/files/usr/bin/terass');
sleep(1);
print "Checking 'terass'...\n";
if(is_file('/data/data/com.termux/files/usr/bin/terass')) {
	print "Installed...\n";
} else {
	print "Error...\n";
}