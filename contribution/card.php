<div class="card column is-one-quarter">
  <div class="card-content">
    <div class="media">
      <div class="media-content">
        <p class="title is-4"><?= $contribution['name'] ?></p>
        <p class="title is-4"><?= $experience['description'] ?></p>
        <p class="title is-4"><?= $experience['url'] ?></p>
      </div>
    </div>

    <div class="content">
        <a class="button is-link" href="/contribution/update.php?id=<?=$contribution['id']?>">Edit</a>
        <a class="button is-danger" href="/contribution/delete.php?id=<?=$contribution['id']?>">Delete</a>
    </div>
  </div>
</div>