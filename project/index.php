<?php
require_once '../shared/header.php';
require_once '../shared/db.php';
require_once '../shared/guard.php';
 ?>

<div class="container">

<div class="container">
    <h1>Project</h1>
    <a class="button is-success" href="/project/create.php">New project</a>
</div>
<div class="columns is-multiline">
    <?php
     $project = $project_model->read($_SESSION['user_id']);
    if  ($project) {
        foreach  ($project as $projects) {
            require './card.php';
        }
    }
    ?>
</div>
</div>