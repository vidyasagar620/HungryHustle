<?php

include 'config.php';

session_start();

$user_id = $_SESSION['user_id'];

if(!isset($user_id)){
   header('location:login.php');
}

if(isset($_POST['send'])){

   $name = mysqli_real_escape_string($conn, $_POST['name']);
   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $ph = $_POST['ph'];
   $subject = mysqli_real_escape_string($conn, $_POST['Subject']);

   $message = mysqli_real_escape_string($conn, $_POST['message']);

   $select_message = mysqli_query($conn, "SELECT * FROM `message` WHERE name = '$name' AND email = '$email' AND phone = '$ph' AND message = '$message'") or die('query failed');

   if(mysqli_num_rows($select_message) > 0){
      $message = 'message sent already!';
   }else{
      mysqli_query($conn, "INSERT INTO `message`(user_id, name, email, phone,Subject, message) VALUES('$user_id', '$name', '$email','Subject', '$ph', '$message')") or die('query failed');
      $message = 'message sent successfully!';
   }

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>contact</title>
    <link rel="shortcut icon" href="https://cdn-icons-png.flaticon.com/128/499/499552.png" type="image/png">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="css/contactstyle.css">




</head>
<body>
<?php
include_once('user_navbar.php');
?>
<br>
<br>
       <section class="contact">
        <h2>Contact me!</h2>

        <form action="user-contact.php" method="POST" enctype="multipart/form-data">
            <div class="input-box">
                <div class="input-field field">
                    <input type="text" placeholder="Full Name" name="name" class="item"  required>
                    <div class="error-txt">Full Name can't be blank</div>
                </div>
                <div class="input-field field">
                    <input type="email" placeholder="Email Address" id="email" name="email" class="item"  required>
                    <div class="error-txt">Email Address can't be blank</div>

                </div>
            </div>
            <div class="input-box">
                <div class="input-field field">
                    <input type="text" placeholder="Subject" id="Subject" name="Subject" class="item"  required>
                    <div class="error-txt">Subject can't be blank</div>

                </div>
                <div class="input-field field">
                    <input type="number" placeholder="Phone Number" id="ph" name="ph" class="item"  required>
                    <div class="error-txt">Phone No: can't be blank</div>

                </div>
            </div>
                <div class="textarea-field field">
                    <textarea placeholder="Message" id="message" name="message" class="item" cols="30" rows="10"></textarea>
    
            </div>

            <button type="submit" name="send" id="send">Send Message</button>
        </form>
    </section>
<br>
<br>
<br>
<br>
<br>
<?php
 include_once('footer.php');
?>
</body>
</html>

<script src="javascript/script.js"></script> 

<?php
//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;


if (isset($_POST['send']))
{

 $name = $_POST['name'];
    
 $email = $_POST['email'];
    
$Subject = $_POST['Subject'];

$ph = $_POST['ph'];

$message = $_POST['message'];



//Load Composer's autoloader
require 'PHPMailer/Exception.php';

require 'PHPMailer/PHPMailer.php';

require 'PHPMailer/SMTP.php';


$mail = new PHPMailer(true);
//Create an instance; passing `true` enables exceptions

try {
    //Server settings
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'vs1262537vidya@gmail.com';                     //SMTP username
    $mail->Password   = 'xwgo bqiv ofke thbo';                               //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
    $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
    
    //Recipients
    $mail->setFrom('vs1262537vidya@gmail.com', 'Hungryhustle');
    $mail->addAddress('hungryhustlerku@gmail.com', 'Joe User');     //Add a recipient
    
    
    
    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'Here is the subject';
    $mail->Body    = "name - $name <br> gmail - $email <br> subject - $Subject <br> phone:- $ph <br> massage - $message"; 
    
    $mail->send();
    echo "<script>
    alert('Message sent');
    </script>";
} catch (Exception $e) {
    echo "<script>
    alert(' Message could not be sent. Mailer Error: {$mail->ErrorInfo}');
    </script>";
}
}