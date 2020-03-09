<?php
require_once '../shared/header.php';
require_once '../shared/db.php';
require_once '../shared/guard.php';


$id = $_GET['id'] ?? '';
$knownleadge = $knownleadge_model->find($id)[0];
$id_us = $_SESSION['user_id'];

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'] ?? '';
    $id_us = $_SESSION['user_id'];

    $hobbie_model->update($id, $name, $id_user);
    return header("Location: /knowleadge");
}

require_once './form.php';
 ?>