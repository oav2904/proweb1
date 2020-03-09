<?php
require_once '../shared/header.php';
require_once '../shared/db.php';
require_once '../shared/guard.php';

$name= $_POST['name'] ?? '';
$description= $_POST['description'] ?? '';
$url= $_POST['url'] ?? '';
$id_user= $_SESSION['user_id'];
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $contribution_model->create($name, $description, $url, $id_user);
    return header("Location: /contribution");
}
require_once './form.php';
 ?>