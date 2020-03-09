<div class="card column is-one-quarter">
  <div class="card-content">
    <div class="media">
      <div class="media-content">
        <p class="title is-4"><?= $skill['name'] ?></p>
        <br>
        <p class="title is-4"><?= $skill['value'] ?></p>

      </div>
    </div>

    <div class="content">
        <a class="button is-link" href="/skill/update.php?id=<?=$skill['id']?>">Edit</a>
        <a class="button is-danger" href="/skill/delete.php?id=<?=$skill['id']?>">Delete</a>
    </div>
  </div>
</div>