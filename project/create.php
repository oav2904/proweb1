<?php
require_once '../shared/header.php';
require_once '../shared/db.php';
require_once '../shared/guard.php';

$name= $_POST['name'] ?? '';
$platform= $_POST['platform'] ?? '';
$description= $_POST['description'] ?? '';
$url= $_POST['url'] ?? '';
$id_user= $_SESSION['user_id'];
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $project_model->create($company, $name, $description, $url, $id_user);
    return header("Location: /project");
}
require_once './form.php';
 ?>