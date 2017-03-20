<?php

$user = "tdenisenko";
$pwd = "davheeD1!";
$host = "tdenisenkocom1.ipagemysql.com";
$db = "exchangerates";


$conn = mysql_connect($host,$user,$pwd) or die("MySQL Connection failed".mysql_error());

mysql_select_db($db) or die("Can not select database".mysql_error());

?>