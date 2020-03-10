<?php

require_once __DIR__ . '/../vendor/autoload.php';
require_once __DIR__ . '/../models/User.php';
require_once __DIR__ . '/../models/Skill.php';
require_once __DIR__ . '/../models/Project.php';
require_once __DIR__ . '/../models/Knowleadge.php';
require_once __DIR__ . '/../models/Hobbie.php';
require_once __DIR__ . '/../models/Experience.php';
require_once __DIR__ . '/../models/Education.php';
require_once __DIR__ . '/../models/Contribution.php';

use crojasaragonez\UtnDb\PgConnection;

$con = new PgConnection('postgres', '29041999ariasv', 'ISW', 5432, 'localhost');
$con->connect();

$user_model = new User($con);
$skill_model = new Skill($con);
$project_model = new Project($con);
$knowleadge_model = new Knowleadge($con);
$hobbie_model = new Hobbie($con);
$experience_model = new Experience($con);
$education_model = new Education($con);
$contribution_model = new Contribution($con);
