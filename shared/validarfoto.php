<?php 

function validarFoto($nombre){
	global $dirSubida;
	global $rutaSubida;

	$dirSubida = "fotos/$nombre/";
    if (!file_exists($dirSubida)) {
        mkdir($dirSubida, 07777);
    }
    $foto = $_FILES['image'];
    var_dump($foto);
    $nomFoto = $foto['name'];
    $nomTemp = $foto['tmp_name'];
    $rutaSubida = "[$dirSubida]profile.jpg";
    $extArchivo = preg_replace('/image\//', '', $foto['type']);

    if ($extArchivo == 'jpeg' || $extArchivo == 'png' || $extArchivo == 'jpg' ) {
        if (move_uploaded_file($nomTemp, $rutaSubida)) {
         return true;               
        }
    	else {

    		return false;
    	}
    }
    else{	

    	trigger_error("Formato de imagen inválido, favor solo usar archivos jpeg, png o jpg. Gracias", E_USER_WARNING);
    }






}




 ?>