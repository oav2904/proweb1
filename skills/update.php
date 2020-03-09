<?php
require_once '../shared/header.php';
require_once '../shared/db.php';
require_once '../shared/guard.php';


$id = $_GET['id'] ?? '';
$skill = $skill_model->find($id)[0];
$id_us = $_SESSION['user_id'];

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'] ?? '';
    $name = $_POST['name'] ?? '';
    $id_us = $_SESSION['user_id'];

    $hobbie_model->update($id, $name,$value, $id_user);
    return header("Location: /skill");
}

require_once './form.php';
 ?>