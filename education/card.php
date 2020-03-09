<div class="card column is-one-quarter">
  <div class="card-content">
    <div class="media">
      <div class="media-content">
        <p class="title is-4"><?= $education['degree'] ?></p>
        <p class="title is-4"><?= $education['timeperiod'] ?></p>
        <p class="title is-4"><?= $education['description'] ?></p>
        <p class="title is-4"><?= $education['website'] ?></p>

      </div>
    </div>

    <div class="content">
        <a class="button is-link" href="/education/update.php?id=<?=$education['id']?>">Edit</a>
        <a class="button is-danger" href="/education/delete.php?id=<?=$education['id']?>">Delete</a>
    </div>
  </div>
</div>