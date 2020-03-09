<?php
require_once '../shared/header.php';
require_once '../shared/db.php';
require_once '../shared/guard.php';


$id = $_GET['id'] ?? '';
$animal = $experience_model->find($id)[0];
$id_us = $_SESSION['user_id'];

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'] ?? '';
    $platform = $_POST['platform'] ?? '';
    $description = $_POST['description'] ?? '';
    $url= $_POST['url'] ?? '';
    $id_us = $_SESSION['user_id'];

    $experience_model->update($id, $name,$platform,$description, $url, $id_user);
    return header("Location: /experience");
}

require_once './form.php';
 ?>