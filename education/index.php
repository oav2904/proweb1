<?php
require_once '../shared/header.php';
require_once '../shared/db.php';
 ?>

<div class="container">

<div class="container">
    <h1>Animals</h1>
    <a class="button is-success" href="/animals/create.php">New Animal</a>
</div>
<div class="columns is-multiline">
    <?php
    $animals = $animal_model->read();
    if ($animals) {
        foreach ($animals as $animal) {
            require './card.php';
        }
    }
    ?>
</div>
</div>