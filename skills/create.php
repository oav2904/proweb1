<?php
require_once '../shared/header.php';
require_once '../shared/db.php';
require_once '../shared/guard.php';

$name= $_POST['name'] ?? '';
$value= $_POST['value'] ?? '';
$id_user= $_SESSION['user_id'];
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $skill_model->create($name,$value, $id_user);
    return header("Location: /skill");
}
require_once './form.php';
 ?>