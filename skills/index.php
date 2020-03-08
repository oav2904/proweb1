<?php
require_once '../shared/header.php';
require_once '../shared/db.php';
require_once '../shared/guard.php';
 ?>

<div class="container">

<div class="container">
    <h1>Experiences</h1>
    <a class="button is-success" href="/experience/create.php">New Experience</a>
</div>
<div class="columns is-multiline">
    <?php
     $experience = $experience_model->read($_SESSION['user_id']);
    if  ($experience) {
        foreach  ($experience as $experiences) {
            require './card.php';
        }
    }
    ?>
</div>
</div>