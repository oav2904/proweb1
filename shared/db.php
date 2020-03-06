<?php

require_once 'vendor/autoload.php';
require_once __DIR__ . '/../models/User.php';

use crojasaragonez\UtnDb\PgConnection;

$con = new PgConnection('postgres', '29041999ariasv', 'isw', 5432, 'localhost');
$con->connect();

$user_model = new User($con);
// $con->disconnect();

