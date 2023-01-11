<?php
  /**
  * Requires the "PHP Email Form" library
  * The "PHP Email Form" library is available only in the pro version of the template
  * The library should be uploaded to: vendor/php-email-form/php-email-form.php
  * For more info and help: https://bootstrapmade.com/php-email-form/
  */

  // Replace contact@example.com with your real receiving email address
  // $receiving_email_address = 'vimitimphal@gmail.com';

  // if( file_exists($php_email_form = '../assets/vendor/php-email-form/php-email-form.php' )) {
  //   include( $php_email_form );
  // } else {
  //   die( 'Comming Soon!');
  // }

  // $contact = new PHP_Email_Form;
  // $contact->ajax = true;
  
  // $contact->to = $receiving_email_address;
  // $contact->from_name = $_POST['name'];
  // $contact->from_email = $_POST['email'];
  // $contact->subject = $_POST['subject'];

  // Uncomment below code if you want to use SMTP to send emails. You need to enter your correct SMTP credentials
  
  // $contact->smtp = array(
  //   'host' => 'localhost',
  //   'username' => 'root',
  //   'password' => '',
  //   'port' => '3306'
  // );

  // $contact->add_message( $_POST['name'], 'From');
  // $contact->add_message( $_POST['email'], 'Email');
  // $contact->add_message( $_POST['message'], 'Message', 10);

  // echo $contact->send();



  use PHPMailer\PHPMailer\PHPMailer;
  
  require __DIR__."../../phpmailer/PHPMailer.php";
  require __DIR__.'../../phpmailer/Exception.php';
  require __DIR__.'../../phpmailer/SMTP.php';
  
  // use PHPMailer\PHPMailer\Exception;
  // use PHPMailer\PHPMailer\SMTP;

  $mail = new PHPMailer(true);

  $alert = '';

  if(isset($_POST['send-message'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    try{
      $mail->isSMTP();
      $mail->Host = 'smtp.gmail.com';
      $mail->SMTPAuth = true;
      $mail->Username = $email; //Gmail address which you want to use as SMTP server
      $mail->Password = $subject; //Gmail password
      $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
      $mail->Port = '587';

      $mail->setFrom($email); //Gmail address which you used as SMTP server
      $mail->addAddress($email); //Email address where you want to receive emails

      $mail->isHTML(true);
      $mail->Subject = 'Message Received';
      $mail->Body = '<h3>Name: $name <br> Email: $email <br> Message: $message</h3>';

      $mail->send();
      $alert = '<div class="sent-message">Your message has been sent. Thank you!</div>';    
    } catch (Exception $e) {
      $alert = '<div class="error-message">'.$e->getMessage().'</div>';
    }

    header("Location: /index.php");
  }






?>
