<?php
include('googlelogin.php');
session_start();
session_unset();
$google_client->revokeToken();
session_destroy();
header('location: login.php');
?>