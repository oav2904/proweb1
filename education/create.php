<?php
require_once '../shared/header.php';
require_once '../shared/db.php';
require_once '../shared/guard.php';

$degree= $_POST['degree'] ?? '';
$website= $_POST['website'] ?? '';
$description= $_POST['description'] ?? '';
$timeperiod= $_POST['timeperiod'] ?? '';
$id_user= $_SESSION['user_id'];
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $education_model->create($degree, $timeperiod, $description, $website, $id_user);
    return header("Location: /education");
}
require_once './form.php';
 ?>