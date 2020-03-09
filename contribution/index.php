<?php
require_once '../shared/header.php';
require_once '../shared/db.php';
require_once '../shared/guard.php';
 ?>

<div class="container">

<div class="container">
    <h1>Contributions</h1>
    <a class="button is-success" href="/contribution/create.php">New Contribution</a>
</div>
<div class="columns is-multiline">
    <?php
     $contribution = $contribution_model->read($_SESSION['user_id']);
    if  ($contribution) {
        foreach  ($contribution as $contributions) {
            require './card.php';
        }
    }
    ?>
</div>
</div>