<?php
require_once './shared/header.php';
require_once './shared/db.php';
require_once './shared/validarfoto.php';
?>
<section class="section">
    <div class="container">
        <h1 class="title">
            Sign Up
        </h1>

<?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $p_name = $_POST['p_nombre'] ?? '';
        $s_name = $_POST['s_nombre'] ?? ''; 
        $f_lastname = $_POST['p_apellido'] ?? '';
        $s_lastname = $_POST['s_apellido'] ?? '';
        $email = $_POST['mail'] ?? '';
        $repassword = $_POST['s_contra'] ?? '';
        $password = $_POST['p_contra'] ?? '';
        $birthday = $_POST['birthday'] ?? ''; 
        $img = $_POST['image'] ?? '';
        $about = $_POST['about'] ?? '';
        $position = $_POST['position'] ?? '';
        $location = $_POST['location'] ?? '';
        $errors = '';
        if( $password == $repassword){
        $results = $user_model->create($p_name,$s_name, $f_lastname, $s_lastname, $email,$password, $birthday, $img, $about, $position,$location);
        header('Location: /page_1.php');
        exit();
    }
    else{

        $errors = 'No concuerdan las contraseñas';
    }
}
 ?>
        <form method="POST" enctype="multipart/form-data">

            <div class="field">
              <label class="label">Name</label>
              <div class="control has-icons-left has-icons-right">
                <input class="input" name= "p_nombre" type="text" required placeholder="Text input" value="">
                <span class="icon is-small is-left">
                  <i class="fas fa-user"></i>
                </span>
                <span class="icon is-small is-right">
                  <i class="fas fa-check"></i>
                </span>
             
            <div class="field">
              <label class="label">Middlename</label>
              <div class="control has-icons-left has-icons-right">
                <input class="input" type="text" placeholder="Text input" value="" name = "s_nombre">
                <span class="icon is-small is-left">
                  <i class="fas fa-user"></i>
                </span>
                <span class="icon is-small is-right">
                  <i class="fas fa-check"></i>
                </span>
              
            <div class="field">
              <label class="label">First lastname</label>
              <div class="control has-icons-left has-icons-right">
                <input class="input" type="text" required placeholder="Text input" value="" name = "p_apellido">
                <span class="icon is-small is-left">
                  <i class="fas fa-user"></i>
                </span>
                <span class="icon is-small is-right">
                  <i class="fas fa-check"></i>
                </span>

            <div class="field">
              <label class="label">Second lastname</label>
              <div class="control has-icons-left has-icons-right">
                <input class="input" type="text" placeholder="Text input" value="" name = "s_apellido">
                <span class="icon is-small is-left">
                  <i class="fas fa-user"></i>
                </span>
                <span class="icon is-small is-right">
                  <i class="fas fa-check"></i>
                </span>   
            <div class="field">
              <label class="label">Email</label>
              <div class="control has-icons-left has-icons-right">
                <input class="input" type="email" required placeholder="Email input" value="" name = "mail">
                <span class="icon is-small is-left">
                  <i class="fas fa-envelope"></i>
                </span>
                <span class="icon is-small is-right">
                  <i class="fas fa-exclamation-triangle"></i>
                </span>
                <div class="field">
              <label class="label">Position</label>
              <div class="control has-icons-left has-icons-right">
                <input class="input" type="text" required placeholder="Text input" value="" name = "position">
                <span class="icon is-small is-left">
                  <i class="fas fa-user"></i>
                </span>
                <span class="icon is-small is-right">
                  <i class="fas fa-check"></i>
                </span>  
                <div class="field">
              <label class="label">Location</label>
              <div class="control has-icons-left has-icons-right">
                <input class="input" name= "location" type="text" required placeholder="Text input" value="">
                <span class="icon is-small is-left">
                  <i class="fas fa-user"></i>
                </span>
                <span class="icon is-small is-right">
                  <i class="fas fa-check"></i>
                </span>
                <div class="field">
              <label class="label">Birthday</label>
              <div class="control has-icons-left has-icons-right">
                <input class="input" type="date" required value=""
                name = "birthday">
                <span class="icon is-small is-left">
                  <i class="fas fa-user"></i>
                </span>
                <span class="icon is-small is-right">
                  <i class="fas fa-check"></i>
                </span>   
                <div class="control">
                  <textarea class="textarea has-fixed-size" name = "about"placeholder="About me"></textarea>
                </div>
           <div class="field">
                <label class="label">Password</label>
                <div class="control has-icons-left has-icons-right">
                    <input class="input" required type="password" placeholder="Email input" value="" name = "p_contra">
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
                    <input class="input" required type="password" placeholder="Email input" value="" name = "s_contra">
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
                    <input class="file-input" required type="file" name="image" accept="image/png, .jpeg, .jpg " autofocus >
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
            <p class="help is-danger"><?= $errors ?? '' ?></p>
           <?php 
           if ($_POST) {
               extract($_POST, EXTR_OVERWRITE);
               if (!file_exists("fotos")) {
                   mkdir("fotos",07777 );
               }
                $p_name = strtolower($p_name);
                if (validarfoto($p_name)) {
                   echo "<img src = '$rutaSubida'>";
                }
           }
            ?>
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

