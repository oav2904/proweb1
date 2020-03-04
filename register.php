<?php
require_once './shared/header.php';
require_once './shared/db.php';
?>
<section class="section">
    <div class="container">
        <h1 class="title">
            Sign Up
        </h1>

<?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $email = $_POST['email'] ?? '';
        $password = $_POST['password'] ?? '';
        $errors = '';

        $sql = "INSERT INTO users(email, password) VALUES ($1, md5($2))";
        $con->runStatement($sql, [$email, $password]);
        header('Location: /page_1.php');
        exit();
    }
 ?>
        <form method="POST" enctype="multipart/form-data">

            <div class="field">
              <label class="label">Name</label>
              <div class="control has-icons-left has-icons-right">
                <input class="input" type="text" placeholder="Text input" value="">
                <span class="icon is-small is-left">
                  <i class="fas fa-user"></i>
                </span>
                <span class="icon is-small is-right">
                  <i class="fas fa-check"></i>
                </span>
             
            <div class="field">
              <label class="label">Middlename</label>
              <div class="control has-icons-left has-icons-right">
                <input class="input" type="text" placeholder="Text input" value="">
                <span class="icon is-small is-left">
                  <i class="fas fa-user"></i>
                </span>
                <span class="icon is-small is-right">
                  <i class="fas fa-check"></i>
                </span>
              
            <div class="field">
              <label class="label">First lastname</label>
              <div class="control has-icons-left has-icons-right">
                <input class="input" type="text" required placeholder="Text input" value="">
                <span class="icon is-small is-left">
                  <i class="fas fa-user"></i>
                </span>
                <span class="icon is-small is-right">
                  <i class="fas fa-check"></i>
                </span>

            <div class="field">
              <label class="label">Second lastname</label>
              <div class="control has-icons-left has-icons-right">
                <input class="input" type="text" placeholder="Text input" value="">
                <span class="icon is-small is-left">
                  <i class="fas fa-user"></i>
                </span>
                <span class="icon is-small is-right">
                  <i class="fas fa-check"></i>
                </span>   

            <div class="field">
              <label class="label">Position</label>
              <div class="control has-icons-left has-icons-right">
                <input class="input" type="text" placeholder="Text input" value="">
                <span class="icon is-small is-left">
                  <i class="fas fa-user"></i>
                </span>
                <span class="icon is-small is-right">
                  <i class="fas fa-check"></i>
                </span>  
                <div class="field">
              <label class="label">Birthday</label>
              <div class="control has-icons-left has-icons-right">
                <input class="input" type="date"  value=""
                >
                <span class="icon is-small is-left">
                  <i class="fas fa-user"></i>
                </span>
                <span class="icon is-small is-right">
                  <i class="fas fa-check"></i>
                </span>    

            <div class="field">
              <label class="label">Email</label>
              <div class="control has-icons-left has-icons-right">
                <input class="input" type="email" placeholder="Email input" value="">
                <span class="icon is-small is-left">
                  <i class="fas fa-envelope"></i>
                </span>
                <span class="icon is-small is-right">
                  <i class="fas fa-exclamation-triangle"></i>
                </span>
           <div class="field">
                <label class="label">Password</label>
                <div class="control has-icons-left has-icons-right">
                    <input class="input" name="password" type="password" placeholder="Email input" value="">
                    <span class="icon is-small is-left">
                        <i class="fas fa-lock"></i>
                    </span>
                    <span class="icon is-small is-right">
                        <i class="fas fa-exclamation-triangle"></i>
                    </span>
                </div>
            </div>
            <div class="field">
                <label class="label">Re~Password</label>
                <div class="control has-icons-left has-icons-right">
                    <input class="input" name="repassword" type="password" placeholder="Email input" value="">
                    <span class="icon is-small is-left">
                        <i class="fas fa-lock"></i>
                    </span>
                    <span class="icon is-small is-right">
                        <i class="fas fa-exclamation-triangle"></i>
                    </span>
                </div>
            </div>

            <div id="file-js-example" class="file has-name">
                <label class="file-label">
                    <input class="file-input" type="file" name="resume" accept="image/png, .jpeg, .jpg " autofocus >
                <span class="file-cta">
                <span class="file-icon">
                    <i class="fas fa-upload"></i>
                </span>
                <span class="file-label">
                    Choose a image
                </span>
                </span>
                <span class="file-name">
                  No file uploaded
                </span>
              </label>
            </div>
            <div class="field is-grouped">
              <div class="control">
                <button class="button is-link">Submit</button>
              </div>
              <div class="control">
                <button class="button is-link is-light">Cancel</button>
              </div>
            </div>
           
            <script>
              const fileInput = document.querySelector('#file-js-example input[type=file]');
              fileInput.onchange = () => {
                if (fileInput.files.length > 0) {
                  const fileName = document.querySelector('#file-js-example .file-name');
                  fileName.textContent = fileInput.files[0].name;
                }
              }
            </script>
        </form>
    </div>
</section>
<?php require_once './shared/footer.php' ?>

