<?php
ob_start();
session_start();
date_default_timezone_set('Europe/Istanbul');
 if (isset($_POST['sifaris'])) {
    echo'gelir';
 require_once 'mail/class.phpmailer.php';
 require_once 'mail/class.smtp.php';
// Sipariş formundan gelen verileri alın
$email = $_POST['emailInput'];
$quantity = $_POST['quantityInput'];
$productName = $_POST['productName'];
$productModel = $_POST['productModel'];
$productBrand = $_POST['productBrand'];

// E-posta göndermek için gerekli bilgileri ayarlayın
//$to = "website@unicaltexnik.com";
$subject = "Yeni bir sipariş var!";
$message = "Sipariş bilgileri:\n\n";
$message .= "E-posta: " . $email . "\n";
$message .= "Ürün adı: " . $productName . "\n";
$message .= "Ürün modeli: " . $productModel . "\n";
$message .= "Ürün markası: " . $productBrand . "\n";
$message .= "Adet: " . $quantity . "\n";

$from = "website@unicaltexnik.com";
$host = "mail.unicaltexnik.com";
$pass = "Royal2023.";

$mailKonu = "unicaltexnik.com | Mal Sifarisi";
$gonderici = "UnicalTexnik WEB";
$mail = new PHPMailer();
$mail->IsSMTP();
$mail->From = $from;
$mail->Sender = $from;
$mail->Host = $host;
$mail->Port = 587;
$mail->SMTPAuth = true;
$mail->Username = $from;
$mail->Password = $pass;
$mail->AddAddress($email);
$mail->FromName = "Veb dən gələn Sifariş";
$mail->CharSet = 'UTF-8';
$mail->Subject = $subject;
$mail->Body = $message;

if (!$mail->send()) {
    echo "Mailer Error: " . $mail->ErrorInfo;
} else {
    echo "Message sent!";
}
}
?>
