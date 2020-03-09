<?php
require_once '../shared/header.php';
require_once '../shared/db.php';
require_once '../shared/guard.php';


$id = $_GET['id'] ?? '';
$contribution = $contribution_model->find($id)[0];
$id_us = $_SESSION['user_id'];

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'] ?? '';
    $description = $_POST['description'] ?? '';
    $url = $_POST['url'] ?? '';
    $id_us = $_SESSION['user_id'];

    $experience_model->update($id, $company, $position, $description, $timeperiod, $id_user);
    return header("Location: /contribution");
}

require_once './form.php';
 ?>