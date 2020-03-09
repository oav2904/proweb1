<?php
require_once '../shared/header.php';
require_once '../shared/db.php';

$id = $_GET['id'] ?? '';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $skill_model->delete($id);
    return header("Location: /skill");
}

?>

<div class="container">
    <h1>¿Esta seguro?</h1>
    <form method="POST">
        <button>Accept</button>
        <a href="/hobbie">Cancel</a>
    </form>
</div>