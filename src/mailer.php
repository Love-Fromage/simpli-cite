<?php
//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;


function redirect($redirect, $success)
{
    $success = var_export($success, true);
    header("Location: {$redirect}&success={$success}");
    exit;
}
$base_url = 'https://mathieuguerin.ca/simpli/';

$form = filter_var($_GET['form'] ?? '', FILTER_SANITIZE_STRING);
$lang = filter_var($_GET['lang'] ?? '', FILTER_SANITIZE_STRING);

$redirect  = $base_url . ($form === 'career' ? 'career.php' : '');
$redirect .= "?lang={$lang}";



$translations = [
    'name'                  => $lang === 'fr' ? 'Prénom'              : 'First Name',
    'last_name'             => $lang === 'fr' ? 'Nom de famille'      : 'Last Name',
    'email'                 => $lang === 'fr' ? 'Courriel'            : 'Email',
    'phone'                 => $lang === 'fr' ? 'Téléphone'           : 'Phone',
    'file-upload-cv'        => $lang === 'fr' ? 'CV'                  : 'CV',
    'file-upload-portfolio' => $lang === 'fr' ? 'Portfolio'           : 'Portfolio',
    'message'               => $lang === 'fr' ? 'Mot d\'introduction' : 'Introductory Word',
    'company'               => $lang === 'fr' ? 'Nom de la compagnie' : 'Company Name',
    'budget'                => $lang === 'fr' ? 'Votre budget'        : 'Your budget',
    'project'               => $lang === 'fr' ? 'Votre projet'        : 'Your project',
];

$options = $form === 'career'
    ? [
        'name'      => FILTER_SANITIZE_STRING,
        'last_name' => FILTER_SANITIZE_STRING,
        'email'     => FILTER_VALIDATE_EMAIL,
        'phone'     => FILTER_SANITIZE_STRING,
        'message'   => FILTER_SANITIZE_STRING,
    ]
    : [
        'name'      => FILTER_SANITIZE_STRING,
        'last_name' => FILTER_SANITIZE_STRING,
        'email'     => FILTER_VALIDATE_EMAIL,
        'phone'     => FILTER_SANITIZE_STRING,
        'company'   => FILTER_SANITIZE_STRING,
        'budget'    => FILTER_SANITIZE_STRING,
        'project'   => FILTER_SANITIZE_STRING,
    ];

$required = $form === 'contact' ? [
    'name',
    'last_name',
    'email',
    'phone',
    'company',
    'budget',
    'project',
] : [];

$post = filter_var_array($_POST, $options);
if (!empty($post)) {
    // file-upload-cv
    // file-upload-portfolio


    $html = $plain = '';
    foreach ($post as $key => $value) {
        if (in_array($key, $required) && strlen($value) < 1) {
            redirect($redirect, false);
        }
        $label = $translations[$key];
        $html .= <<<HTML

<tr>
  <td width='42%' align='left' valign='middle' style='padding-left:5px; font-family:Verdana, Arial, Helvetica, sans-serif; font-size:11px;'>{$label}</td>
  <td width='1%' align='center' valign='middle'>:</td>
  <td width='57%' align='left' valign='middle' style='padding-left:5px; font-family:Verdana, Arial, Helvetica, sans-serif; font-size:11px;'>{$value}</td>
</tr>

HTML;
        $plain .= "{$label}: {$value}" . PHP_EOL;
    }

    if (empty($html)) {
        redirect($redirect, false);
    }

    //Load required files only
    require './PHPMailer/src/PHPMailer.php';
    require './PHPMailer/src/Exception.php';
    require './PHPMailer/src/SMTP.php';

    //Instantiation and passing `true` enables exceptions
    $mail = new PHPMailer(true);

    try {
        // Server settings
        // 		$mail->SMTPDebug = SMTP::DEBUG_OFF; // Enable verbose debug output
        // 		$mail->isSMTP(); // Send using SMTP
        // 		$mail->Host       = 'mail.mathieuguerin.ca'; // Set the SMTP server to send through
        // 		$mail->SMTPAuth   = true; // Enable SMTP authentication
        // 		$mail->Username   = 'info@blackduckagency.com'; // SMTP username
        // 		$mail->Password   = 'BDAmazurette2017'; // SMTP password
        // 		$mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS; // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
        // 		$mail->Port       = 465; // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above
        $mail->SMTPDebug = 2;                                       // Enable verbose debug output
        $mail->isSMTP();                                            // Set mailer to use SMTP
        $mail->Host       = 'mail.mathieuguerin.ca';  // Specify main and backup SMTP servers
        $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
        $mail->Username   = 'testform@mathieuguerin.ca';                     // SMTP username
        $mail->Password   = '!Banane22';                               // SMTP password
        $mail->SMTPSecure = 'ssl';                                  // Enable TLS encryption, [ICODE]ssl[/ICODE] also accepted
        $mail->Port       = 465;                                    // TCP port to connect to

        //Recipients
        $mail->setFrom('testform@mathieuguerin.ca', 'matheo');
        $mail->addAddress('mathecool22@gmail.com', 'matheo');

        //Content
        $mail->isHTML(true);
        $mail->Subject = 'matheo - ' . ucfirst($form);
        $mail->Body    = <<<HTML

<table width='100%' border='0' cellspacing='0' cellpadding='0'>
  <tr>
    <td height='25' colspan='3' bgcolor='#E39924' style='padding-left:5px; font-weight:bold; font-family:Verdana, Arial, Helvetica, sans-serif; font-size:11px;'>{$mail->Subject}</td>
  </tr>
  <tr>
    <td height='25' colspan='3' align='left' valign='middle' style='padding-left:5px; font-family:Verdana, Arial, Helvetica, sans-serif; font-size:11px;'>&nbsp;</td>
  </tr>
  {$html}
  <tr>
    <td height='25' colspan='3' align='left' valign='middle' style='padding-left:5px; font-family:Verdana, Arial, Helvetica, sans-serif; font-size:11px;'>&nbsp;</td>
  </tr>
</table>

HTML;
        $mail->AltBody = $plain;

        $mail->send();
        redirect($redirect, true);
    } catch (\Exception $e) {
        error_log("Message could not be sent. Mailer Error: {$mail->ErrorInfo}" . PHP_EOL);
        redirect($redirect, false);
    }
}
redirect($redirect, false);


// <?php
// use PHPMailer\PHPMailer\PHPMailer;
// use PHPMailer\PHPMailer\Exception;
// // ini_set('display_errors', 1);
// require '/home/aelqvm33/public_html/simpli/PHPMailer/src/Exception.php';
// require '/home/aelqvm33/public_html/simpli/PHPMailer/src/PHPMailer.php';
// require '/home/aelqvm33/public_html/simpli/PHPMailer/src/SMTP.php';

// // Instantiation and passing [ICODE]true[/ICODE] enables exceptions
// $mail = new PHPMailer(true);


// try {
//     //Server settings
//     $mail->SMTPDebug = 2;                                       // Enable verbose debug output
//     $mail->isSMTP();                                            // Set mailer to use SMTP
//     $mail->Host       = 'mail.mathieuguerin.ca';  // Specify main and backup SMTP servers
//     $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
//     $mail->Username   = 'testform@mathieuguerin.ca';                     // SMTP username
//     $mail->Password   = '!Banane22';                               // SMTP password
//     $mail->SMTPSecure = 'ssl';                                  // Enable TLS encryption, [ICODE]ssl[/ICODE] also accepted
//     $mail->Port       = 465;                                    // TCP port to connect to

//     //Recipients
//     $mail->setFrom('tesform@mathieuguerin.ca', $name );
//     $mail->addAddress('mathecool22@gmail.com');     // Add a recipient
//     // $mail->addAddress('recipient2@example.com');               // Name is optional
//     // $mail->addReplyTo('info@example.com', 'Information');
//     // $mail->addCC('cc@example.com');
//     // $mail->addBCC('bcc@example.com');

//     // Attachments
//     // $mail->addAttachment('/home/cpanelusername/attachment.txt');         // Add attachments
//     // $mail->addAttachment('/home/cpanelusername/image.jpg', 'new.jpg');    // Optional name

//     // Content
//     $mail->isHTML(true);                                  // Set email format to HTML
//     $mail->Subject = 'email from ' + $name;
//     $mail->Body    = $message;
//     // $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

//     $mail->send();
//     echo 'Message has been sent';

// } catch (Exception $e) {
//     echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
// }