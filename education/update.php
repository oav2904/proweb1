<?php
require_once '../shared/header.php';
require_once '../shared/db.php';
require_once '../shared/guard.php';


$id = $_GET['id'] ?? '';
$education = $education_model->find($id)[0];
$id_us = $_SESSION['user_id'];

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $degree = $_POST['degree'] ?? '';
    $description = $_POST['description'] ?? '';
    $timeperiod = $_POST['timeperiod'] ?? '';
    $website = $_POST['website'] ?? '';
    $id_us = $_SESSION['user_id'];

    $experience_model->update($id, $degree, $timeperiod, $description, $website, $id_user);
    return header("Location: /education");
}

require_once './form.php';
 ?>