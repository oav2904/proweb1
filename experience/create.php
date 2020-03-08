<?php
require_once '../shared/header.php';
require_once '../shared/db.php';
require_once '../shared/guard.php';

$company= $_POST['name'] ?? '';
$position= $_POST['name'] ?? '';
$description= $_POST['name'] ?? '';
$timeperiod= $_POST['name'] ?? '';
$id_user= $_POST['name'] ?? '';
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $experience_model->create($company, $position, $description, $timeperiod, $id_user);
    return header("Location: /experience");
}
require_once './form.php';
 ?>