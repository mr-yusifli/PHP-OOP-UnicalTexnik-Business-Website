<?php
ob_start();
session_start();
date_default_timezone_set('Asia/Baku');
include_once("lib/fonksiyon.php");
include_once("convert_images_to_webp.php");
$sinif = new kurumsal;
convert_images_to_webp();

if(isset($_GET['dil'])) {
    $dil = $_GET['dil'];
    $_SESSION['dil'] = $dil;
} elseif(isset($_SESSION['dil'])) {
    $dil = $_SESSION['dil'];
} else {
    $user_language = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);
    if ($user_language == 'ru') {
        $dil = "ru";
    } elseif($user_language == 'en') {
        $dil = "en";
    } elseif($user_language == 'tr') {
        $dil = "tr";
    } elseif($user_language == 'az') {
        $dil = "az";
    }

    $_SESSION['dil'] = $dil;
}

if ($dil == "az") {
    $lang = "az";
} elseif ($dil == "ru") {
    $lang = "ru";
} elseif ($dil == "en") {
    $lang = "en";
} elseif ($dil == "tr") {
    $lang = "tr";
}
?>
<!DOCTYPE html>
<html lang="<?php echo $lang; ?>">
<head>
    <title><?php  if ($_SESSION['dil'] == "az") {echo $sinif->normaltitle($baglanti);  } else { echo $sinif->titleler($baglanti);} ?></title>
    <meta charset="utf-8">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="title" content="<?php if ($_SESSION['dil'] == "az") {echo $sinif->normalmetatitleler($baglanti);  } else {   echo $sinif->metatitleler($baglanti);} ?>"/>
    <meta name="description" content="<?php if ($_SESSION['dil'] == "az") {echo $sinif->normalmetadescler($baglanti);  } else {   echo $sinif->metadescler($baglanti);} ?>">
    <meta name="keywords" content="<?php if ($_SESSION['dil'] == "az") {echo $sinif->normalmetakeyler($baglanti);  } else {   echo $sinif->metakeyler($baglanti);} ?>">

    <meta name="author" content="<?php echo $sinif->metaaut; ?>"/>
    <meta name="owner" content="<?php echo $sinif->metaown; ?>"/>
    <meta name="copyright" content="<?php echo $sinif->metacopy; ?>"/>
    <meta property="og:title" content="<?php if ($_SESSION['dil'] == "az") {echo $sinif->normalmetatitleler($baglanti);  } else {   echo $sinif->metatitleler($baglanti);} ?>">
    <meta property="og:description" content="<?php if ($_SESSION['dil'] == "az") {echo $sinif->normalmetatitleler($baglanti);  } else {   echo $sinif->metatitleler($baglanti);} ?>">
    <meta property="og:image" content="https://www.unicaltexnik.com/unicaltexnikseo.jpg">
    <meta property="og:url" content="https://www.unicaltexnik.com">

    <meta name="robots" content="index, follow" />
    <meta name="google-site-verification" content="FSotDmkT58valPYMVe60H9J6KRvTpN6Hyff9OhtL9FI" />
    <link rel="shortcut icon" type="image/png" href="assets/img/favicon.svg">
    <link rel="canonical" href="https://unicaltexnik.com/">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Muli:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
    <link href="https://www.unicaltexnik.com/assets/vendor/animate.css/animate.min.css" rel="stylesheet">
    <link href="https://www.unicaltexnik.com/assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="https://www.unicaltexnik.com/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://www.unicaltexnik.com/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="https://www.unicaltexnik.com/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="https://www.unicaltexnik.com/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="https://www.unicaltexnik.com/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
    <link href="https://www.unicaltexnik.com/assets/css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.8.2/css/lightbox.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/fontawesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
    <link href="https://vjs.zencdn.net/8.3.0/video-js.css" rel="stylesheet" />

<style>

.mainlogo {
    width: 300px;
}

.kontainer {
      max-width: 800px;
      margin: 40px auto;
      padding: 20px;
      background-color: #fff;
      border-radius: 5px;
      box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
    }

    h1 {
      font-size: 24px;
      margin-bottom: 20px;
      color: black;
      font-weight:bolder;
      text-align:center;
    }

    h4 {
      font-size: 18px;
      font-weight:bolder;
      margin-top: 30px;
      margin-bottom: 10px;
      color:#D11826;
    }

    p {
      font-size: 16px;
      line-height: 1.6;
    }
.video-container {
    display: flex;
    justify-content: center;
    align-items: center;
}

.video-container video {
    max-width: 100%;
    height: auto;
}

</style>
<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-3LE03TP6DC"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());
  gtag('config', 'G-3LE03TP6DC');
</script>
    <!-- Yandex.Metrika counter -->
    <script type="text/javascript" >
        (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
            m[i].l=1*new Date();
            for (var j = 0; j < document.scripts.length; j++) {if (document.scripts[j].src === r) { return; }}
            k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
        (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

        ym(94200735, "init", {
            clickmap:true,
            trackLinks:true,
            accurateTrackBounce:true
        });
    </script>
    <noscript><div><img src="https://mc.yandex.ru/watch/94200735" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
</head>