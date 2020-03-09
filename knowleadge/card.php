<div class="card column is-one-quarter">
  <div class="card-content">
    <div class="media">
      <div class="media-content">
        <p class="title is-4"><?= $knownleadge['name'] ?></p>
      </div>
    </div>

    <div class="content">
        <a class="button is-link" href="/knownleadge/update.php?id=<?=$knownleadge['id']?>">Edit</a>
        <a class="button is-danger" href="/knownleadge/delete.php?id=<?=$knownleadge['id']?>">Delete</a>
    </div>
  </div>
</div>