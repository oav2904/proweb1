<?php
require_once '../shared/header.php';
require_once '../shared/db.php';
require_once '../shared/guard.php';
 ?>

<div class="container">

<div class="container">
    <h1>Knowleadge</h1>
    <a class="button is-success" href="/hobbie/create.php">New knowleadge</a>
</div>
<div class="columns is-multiline">
    <?php
     $knownleadge = $knownleadge_model->read($_SESSION['user_id']);
    if  ($knownleadge) {
        foreach  ($knownleadge as $knownleadges) {
            require './card.php';
        }
    }
    ?>
</div>
</div>