<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');
$user = base64_decode('U2NvdHRTdGV3YXJ0');
$pass = base64_decode('V2VBcmVNdWx0aXBseSE=');
$host = base64_decode('MTA3LjE4MC41NC4yNTU=');
$char = 'utf8mb4';
$dbname = base64_decode('U2NvdHRTdGV3YXJ0');
$conn = mysqli_connect($host, $user, $pass, $dbname);
?>