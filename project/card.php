<div class="card column is-one-quarter">
  <div class="card-content">
    <div class="media">
      <div class="media-content">
        <p class="title is-4"><?= $project['name'] ?></p>
        <br>
        <p class="title is-4"><?= $project['platform'] ?></p>
        <br>
        <p class="title is-4"><?= $project['description'] ?></p>
        <br>
        <p class="title is-4"><?= $project['url'] ?></p>

      </div>
    </div>

    <div class="content">
        <a class="button is-link" href="/project/update.php?id=<?=$project['id']?>">Edit</a>
        <a class="button is-danger" href="/project/delete.php?id=<?=$project['id']?>">Delete</a>
    </div>
  </div>
</div>