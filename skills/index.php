<?php
require_once '../shared/header.php';
require_once '../shared/db.php';
require_once '../shared/guard.php';
 ?>

<div class="container">

<div class="container">
    <h1>Skills</h1>
    <a class="button is-success" href="/skill/create.php">New skill</a>
</div>
<div class="columns is-multiline">
    <?php
     $skill = $skill_model->read($_SESSION['user_id']);
    if  ($skill) {
        foreach  ($skill as $skills) {
            require './card.php';
        }
    }
    ?>
</div>
</div>