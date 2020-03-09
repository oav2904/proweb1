<div class="card column is-one-quarter">
  <div class="card-content">
    <div class="media">
      <div class="media-content">
        <p class="title is-4"><?= $hobbie['name'] ?></p>
      </div>
    </div>

    <div class="content">
        <a class="button is-link" href="/hobbie/update.php?id=<?=$hobbie['id']?>">Edit</a>
        <a class="button is-danger" href="/hobbie/delete.php?id=<?=$hobbie['id']?>">Delete</a>
    </div>
  </div>
</div>