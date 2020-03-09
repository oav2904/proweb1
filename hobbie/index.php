<?php
require_once '../shared/header.php';
require_once '../shared/db.php';
require_once '../shared/guard.php';
 ?>

<div class="container">

<div class="container">
    <h1>Hobbies</h1>
    <a class="button is-success" href="/hobbie/create.php">New hobbie</a>
</div>
<div class="columns is-multiline">
    <?php
     $hobbie = $hobbie_model->read($_SESSION['user_id']);
    if  ($hobbie) {
        foreach  ($hobbie as $hobbies) {
            require './card.php';
        }
    }
    ?>
</div>
</div>