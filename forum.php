<?php
require "vendor/autoload.php";
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;

if (isset($_POST['skicka']))
{
$first_name = $_POST["Förnamn"];
$last_name = $_POST["Efternamn"];
$email = $_POST["Email"];
$comments = $_POST["Kommentarer"];

$mail = new PHPMailer(true);

$mail->isSMTP();
$mail->SMTPAuth = true;
$mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
$mail->Port = 587;


$mail->Host = 'smtp.gmail.com';

$mail->Username = '04pontho@skola.boras.se';

$mail->Password = 'ihkh vvoi xawe wfws';

$mail->setFrom($email, $first_name, $last_name);
$mail->addAddress('04pontho@skola.boras.se');

$mail->Body = $comments;

$mail->send();









}

?>




<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <link rel="stylesheet" href="styles.css">

</head>
<body>
  <h1></h1>
  <div class="container">
    <form action="forum.php" method="post">
      <div class="form-group">
        

        <div class="form-floating mb-3">
          <input type="text" class="form-control" id="floatingInput" name="Förnamn" placeholder="Förnamn">
          <label for="floatingInput">Förnamn</label>
        </div>

        <div class="form-floating mb-3">
          <input type="text" class="form-control" id="floatingInput" name="Efternamn" placeholder="Efternamn">
          <label for="floatingInput">Efternamn</label>
        </div>
        <div class="form-floating mb-3">
          <input type="email" class="form-control" id="floatingInput" name="Email" placeholder="Email">
          <label for="floatingInput">Email</label>
        </div>
        <div class="form-floating mb-3">
          <textarea name="Kommentarer" id="floatingInput" class="form-control"></textarea>
          <label for="floatingInput">Kommentarer</label>
        </div>
        <div>
          <input type="submit" class="btn btn-primary" name="skicka" placeholder="skicka">
        </div>
        <a href="index.php">tillbaka</a>
        
      </div>
    </form>
  </div>
</body>
</html>
