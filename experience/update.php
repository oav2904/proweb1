<?php
require_once '../shared/header.php';
require_once '../shared/db.php';
require_once '../shared/guard.php';


$id = $_GET['id'] ?? '';
$experience = $experience_model->find($id)[0];
$id_us = $_SESSION['user_id'];

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $company = $_POST['company'] ?? '';
    $position = $_POST['position'] ?? '';
    $description = $_POST['description'] ?? '';
    $timeperiod = $_POST['timeperiod'] ?? '';
    $id_us = $_SESSION['user_id'];

    $experience_model->update($id, $company, $position, $description, $timeperiod, $id_user);
    return header("Location: /experience");
}

require_once './form.php';
 ?>