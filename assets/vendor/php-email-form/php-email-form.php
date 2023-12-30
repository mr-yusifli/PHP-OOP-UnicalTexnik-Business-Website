<?php

if (isset($_POST['submit'])) {

    // alıcı e-posta adresi
    $to = "info@unicaltexnik.com";

    // konu
    $subject = "Form gönderimi";

    // gönderen adı ve e-posta adresi
    $name = $_POST['name'];
    $email = $_POST['email'];

    // mesaj
    $message = $_POST['message'];

    // e-posta başlığı
    $email_headers = "From: $name <$email>";

    // e-postayı gönder
    if (mail($to, $subject, $message, $email_headers)) {
        echo "E-posta başarıyla gönderildi.";
    } else {
        echo "E-posta gönderilirken bir hata oluştu.";
    }

}

?>
