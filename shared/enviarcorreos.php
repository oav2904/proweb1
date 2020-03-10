<?php 

  use PHPMailer\PHPMailer\PHPMailer;
  require '../vendor/autoload.php';
  require_once '/shared/db.php';

  $id = $_GET['id'] ?? 0;
  $pdf = $pdf_model ->find($id);
  $user = $user_model ->find($id);

  $mail = new PHPMailer;
  $mail->isSMTP();
  $mail->SMTPDebug = 2;
  $mail->Host = 'smtp.gmail.com';
  $mail->Port = 587;
  $mail->SMTPSecure = 'tls';
  $mail->SMTPAuth = true;
  $mail->Username = 'oscariasv@gmail.com';
  $mail->Password = '29041999ariasv';
  $mail->SetFrom('oariasv@est.utn.ac.cr');
  $mail->addAddress($user['mail'], $user['name']);
  $mail->Subject = 'CV';
  $mail->Body = 'This is the CV of '. $user['name'];
  $mail->addAttachment('');

  if(!$mail->send()){
    echo "Error"

  }
  else{
    echo "Send"
  }
  function save_mail($mail){
    $path = "{imap.gmail.com:993/imap/ssl}[Gmail]/Sent Mail";
    $imapStream = imap_open($path, $mail->Username, $mail->Password);
    $result = imap_append($imap_stream, $path, $mail->getSentMIMEMessage());
    imap_close($imap_stream);
    return $result;
  }
 ?>