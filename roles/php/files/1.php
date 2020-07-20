<?php
session_start();

$maxlifetime = ini_get("session.gc_maxlifetime");

$cookielifetime = ini_get("session.cookie_lifetime");
echo "-maxlifetim-";
echo $maxlifetime;
echo "+cookielifetime-";
echo $cookielifetime;


echo "<div align=center>";
echo "=======================================================================<br><br>";
echo "USER: ";
echo `/usr/bin/whoami`;
echo "<br><br>=======================================================================<br><br>";
echo " UID, GID, groups: ";
system (id);
echo "<br><br>=======================================================================<br><br>";
echo `/usr/sbin/httpd.itk -l`;
echo "<br><br>=======================================================================<br><br>";
echo `/usr/sbin/apachectl -v`;
echo "<br><br>=======================================================================<br><br>";
echo "<dr><dr>";
echo "</div>";
phpinfo();
?>



