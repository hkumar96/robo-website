<?php
$dbhost = 'localhost:3036';
$dbuser = 'guest';
$dbpass = 'guest123';

$conn = mysql_connect($dbhost,$dbuser,$dbpass);
session_start();
$username = $_SESSION['login_user'];
$sql = "SELECT user_name from profile where user_name = $username;";
//echo $sql;
mysql_select_db('ROBO');
$retval = mysql_query($sql,$conn);
$row = mysql_fetch_assoc($retval);
$login_session = $row['user_name'];
//echo $login_session;
mysql_close($conn);
if(!isset($login_session)){
	header('location:index.php');
}
?>