<?php
include_once("db.php");
session_start();
$username = $_POST['username'];
$password = $_POST['password'];

if (empty($username) || empty($password))
	{
		header("location:login.php");
	}
else{
$sql = "SELECT * FROM user WHERE username = '$username' AND password = '$password'";
$hasil = mysql_query($sql);
$record = mysql_fetch_array($hasil);
echo "berhasil";
$_SESSION['username'] = $username;
    header ("location:index.php");


}

?>