<?php
require_once '../shared/header.php';
require_once '../shared/db.php';
require_once '../shared/guard.php';
 ?>

<div class="container">

<div class="container">
    <h1>Experiences</h1>
    <a class="button is-success" href="/education/create.php">New education</a>
</div>
<div class="columns is-multiline">
    <?php
     $education = $education_model->read($_SESSION['user_id']);
    if  ($education) {
        foreach  ($education as $educations) {
            require './card.php';
        }
    }
    ?>
</div>
</div>