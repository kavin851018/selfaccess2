<?php
//connection to mysql and database select
define('HOST', 'localhost');

define('USER_SELF_ACCESS', 'self_access');
define('PWD_SELF_ACCESS', 'Zephyr_self_access_2016');
define('DB_SELF_ACCESS', 'self_access');

$host = HOST;

$user_self_access = USER_SELF_ACCESS;
$pwd_self_access = PWD_SELF_ACCESS;
$db_self_access = DB_SELF_ACCESS;
$self_access_conn = mysql_connect($host,$user_self_access,$pwd_self_access);

if($self_access_conn->connect_error)
{
    die("Connection failed: ".$conn->connect_error);
}
else
{
	mysql_select_db($db_self_access,$self_access_conn);
	error_reporting(0);
}
?>
