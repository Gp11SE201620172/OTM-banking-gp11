<?php
error_reporting(E_ALL ^ E_DEPRECATED);
mysql_select_db('otm-banking',  mysql_connect('localhost','root','password'))or die(mysql_error());
?>
