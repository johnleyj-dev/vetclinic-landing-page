<?php

require_once 'vendor/autoload.php';

$google_client = new Google_Client();

$google_client->setClientId('155443346510-9668fl8edl5ac3argfgutgi8464djg1k.apps.googleusercontent.com');

$google_client->setClientSecret('IEZCpZUmUnFCDZfEc7-BiZkU');

$google_client->setRedirectUri('http://localhost/Sitio%20Beterinaryo%20Appointment%20System%20Web/home2.php');

$google_client->addScope('email');

$google_client->addScope('profile');


?>