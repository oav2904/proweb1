<?php
require_once '../shared/header.php';
require_once '../shared/db.php';
require_once '../shared/guard.php';

$name= $_POST['name'] ?? '';
$id_user= $_SESSION['user_id'];
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $knownleadge_model->create($name, $id_user);
    return header("Location: /knownleadge");
}
require_once './form.php';
 ?>