<?php
require_once __DIR__ . '/sessions.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title><?= $title ?? 'Page' ?></title>
	<link rel="stylesheet" type="text/css" href="../css/bulma.min.css">
	<link rel="stylesheet" type="text/css" href="../css/style.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
<nav class="navbar" role="navigation" aria-label="main navigation">
  <div class="navbar-brand">
    <a class="navbar-item" href="/">
      <img src="../imgs/logo.png" >
    </a>

    <a role="button" class="navbar-burger burger" aria-label="menu" aria-expanded="false" data-target="navbarBasicExample">
      <span aria-hidden="true"></span>
      <span aria-hidden="true"></span>
      <span aria-hidden="true"></span>
    </a>
  </div>

  <div id="navbarBasicExample" class="navbar-menu">
    <div class="navbar-start">

<?php
$menu = [
  ['name' => 'Experience', 'url' => './experience/index.php'],
  ['name' => 'Education', 'url' => './education/index.php'],
  ['name' => 'More', 'url' => '', 'sub_menus' => [
    ['name' => 'Skills', 'url' => './skills/index.php'],
    ['name' => 'Projects', 'url' => './project/index.php'],
    ['name' => 'Knowleadge', 'url' => './knowleadge/index.php'],
    ['name' => 'Hobbies', 'url' => './hobbie/index.php'],
    ['name' => 'Contributions', 'url' => './contribution/index.php'],

  ]],
];

if (isset($_SESSION['user_id']) || !empty($_SESSION['user_id'])) {
  foreach ($menu as $link) {
    if (array_key_exists('sub_menus', $link)) {
      ?>
      <div class="navbar-item has-dropdown is-hoverable">
          <a class="navbar-link">
            <?= $link['name'] ?>
          </a>

          <div class="navbar-dropdown">
            <?php
              foreach ($link['sub_menus'] as $sub_menu) {
                echo "<a class='navbar-item' href='" . $sub_menu['url'] . "'>" . $sub_menu['name'] . "</a>";
              }
             ?>
          </div>
        </div>
      <?php
    } else {
      echo "<a class='navbar-item' href='" . $link['url'] . "'>" . $link['name'] . "</a>";
    }
  }
}
?>
    </div>
    <div class="navbar-end">
      <div class="navbar-item">
        <div class="buttons">
          <?php if (isset($_SESSION['user_id'])) { ?>
            <h3><?= $_SESSION['user_email'] ?></h3>
            <a class="button is-danger" href="/logout.php">
              Log out
            </a>
          <?php } else { ?>
            <a class="button is-primary" href="/register.php">
              <strong>Sign up</strong>
            </a>
            <a class="button is-light" href="/">
              Log in
            </a>
          <?php } ?>
        </div>
      </div>
    </div>
  </div>
</nav>