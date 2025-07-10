<?php
    session_start();

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require '../vendor/autoload.php';

if(isset($_POST['send'])) {
    $mail = new PHPMailer(true);
$full = $_POST['namapenuh'];    
$email = $_POST['email'];
$message = $_POST['message'];

try {
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'musclewarriorofficial@gmail.com';
    $mail->Password = 'xkossqokfwngnkhz';
    $mail->Port = 587;
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;

    // Atur pengirim email
    $mail->setFrom('musclewarriorofficial@gmail.com','Bot message');
    // Atur penerima email
    $mail->addAddress('musclewarriorofficial@gmail.com','MuscleWarrior IT Team');
    $mail->addReplyTo($email, 'Customer');


    // Isi email
    $mail->isHTML();
    // Atur subjek
    $mail->Subject = 'Customer message';
    // Atur body    
    $mail->Body = '<h1>You just got message !!!</h1>
    <h4>Full name   : '.$full.'</h4>
    <h4>Email       : '.$email.'</h4>
    <h4>Message     : '.$message.'</h4>';
    // Atur versi text untuk email

    // Kirim email kita
    if($mail->send()) {
        $_SESSION['pesan'] = "Thanks for your message 😁🙏";
        header("Location : {$_SERVER["HTTP_REFERER"]}");
        exit();
    }
    else {
        $_SESSION['pesan'] = "Message Error: {$mail->ErrorInfo}";
        header('Location : ../index.php');
        exit();
    }
    

} catch (Exception $th) {
    echo "PHPMailer Error: {$mail->ErrorInfo}";
}

}
else {
    header('Location : ../index.php');
    exit();
}



?>