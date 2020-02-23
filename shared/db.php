<?php

require_once 'vendor/autoload.php';

use crojasaragonez\UtnDb\PgConnection;

$con = new PgConnection('postgres', '29041999ariasv', 'isw', 5432, 'localhost');
$con->connect();

$con->disconnect();

