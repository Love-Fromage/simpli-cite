<?php
//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;



ob_start();
function redirect($redirect, $success)
{
    $success = var_export($success, true);
    header("Location: {$redirect}&success={$success}");
    exit;
}
$base_url = 'https://blackduckagency.com/simpli/';

$form = filter_var($_GET['form'] ?? '', FILTER_SANITIZE_STRING);
$lang = filter_var($_GET['lang'] ?? '', FILTER_SANITIZE_STRING);

$redirect  = $base_url . ($form === 'remarketing' ? 'remarketing.php' : '');
$redirect .= "?lang={$lang}";

$name = $message = $phone = $visitor_email = $transmission =
    $year = $marque = $modele = $km = $numId = $process = '';

if (!empty($_POST['nom'])) {
    $name = $_POST['nom'];
}
if (!empty($_POST['phone'])) {
    $phone = $_POST['phone'];
}
if (!empty($_POST['email'])) {
    $visitor_email = $_POST['email'];
}
if (!empty($_POST['check_list'])) {
    foreach ($_POST['check_list'] as $value) {

        $transmission = strval($value);
    }
}
if (!empty($_POST['year'])) {
    $year = $_POST['year'];
}
if (!empty($_POST['marque'])) {
    $marque = $_POST['marque'];
}
if (!empty($_POST['modele'])) {
    $modele = $_POST['modele'];
}
if (!empty($_POST['km'])) {
    $km = $_POST['km'];
}
if (!empty($_POST['num-id'])) {
    $numId = $_POST['num-id'];
}
if (!empty($_POST['process'])) {
    $process = $_POST['process'];
}

require './PHPMailer/src/PHPMailer.php';
require './PHPMailer/src/Exception.php';
require './PHPMailer/src/SMTP.php';

$mail = new PHPMailer(true);

//Enable SMTP debugging.
$mail->SMTPDebug = 2;
//Set PHPMailer to use SMTP.
$mail->isSMTP();
//Set SMTP host name                          
$mail->Host = "mail.blackduckagency.com";
//Set this to true if SMTP host requires authentication to send email
$mail->SMTPAuth = true;
//Provide username and password     
$mail->Username = "testdev@blackduckagency.com";
$mail->Password = "";
//If SMTP requires TLS encryption then set it
$mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
//Set TCP port to connect to
$mail->Port = 465;

$mail->From = "testdev@blackduckagency.com";
$mail->FromName = $name;

$mail->addAddress("mathecool22@gmail.com", $name);

$mail->isHTML(true);


$mail->Subject = "Formulaire de Remarketing";
$mail->Body .= <<<HTML

<tr>
  <td width='42%' align='left' valign='middle' style='padding-left:5px; font-family:Verdana, Arial, Helvetica, sans-serif; font-size:11px;'>Nom</td>
  <td width='1%' align='center' valign='middle'>:</td>
  <td width='57%' align='left' valign='middle' style='padding-left:5px; font-family:Verdana, Arial, Helvetica, sans-serif; font-size:11px;'>$name</td>
</tr>

HTML;


$mail->AltBody = "Nom : $name\n" .
    "Courriel : $visitor_email.\n" .
    "Téléphone: $phone.\n" .
    "Année de la voiture: $year.\n" .
    "Marque de la voiture: $marque.\n" .
    "Modele de la voiture: $modele.\n" .
    "Kilométrage de la voiture: $km.\n" .
    "Kilométrage de la voiture: $transmission.\n" .
    "Kilométrage de la voiture: $numId.\n" .
    "Kilométrage de la voiture: $process.\n";
// $plain .= "{$label}: {$value}" . PHP_EOL;

try {


    $mail->send();
    // redirect($redirect, true);
} catch (\Exception $e) {
    error_log("Message could not be sent. Mailer Error: {$mail->ErrorInfo}" . PHP_EOL);
    // redirect($redirect, false);
}

// redirect($redirect, false);
