<div class="card column is-one-quarter">
  <div class="card-content">
    <div class="media">
      <div class="media-content">
        <p class="title is-4"><?= $experience['company'] ?></p>
        <p class="title is-4"><?= $experience['position'] ?></p>
        <p class="title is-4"><?= $experience['description'] ?></p>
        <p class="title is-4"><?= $experience['timeperiod'] ?></p>

      </div>
    </div>

    <div class="content">
        <a class="button is-link" href="/experience/update.php?id=<?=$experience['id']?>">Edit</a>
        <a class="button is-danger" href="/experience/delete.php?id=<?=$experience['id']?>">Delete</a>
    </div>
  </div>
</div>