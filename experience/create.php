<?php
require_once '../shared/header.php';
require_once '../shared/db.php';
require_once '../shared/guard.php';

$company= $_POST['company'] ?? '';
$position= $_POST['position'] ?? '';
$description= $_POST['description'] ?? '';
$timeperiod= $_POST['timeperiod'] ?? '';
$id_user= $_SESSION['user_id'];
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $experience_model->create($company, $position, $description, $timeperiod, $id_user);
    return header("Location: /experience");
}
require_once './form.php';
 ?>