<?php 
ob_start();
session_start();
include_once("lib/fonksiyon.php");
$sinif = new kurumsal;
error_reporting(0);
?>
<!DOCTYPE html>
<html lang="az">
<head>
     <title>404 Səhfə tapılmadı / UnicalTexnik </title>
    <meta charset="utf-8">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta name="title" content="<?php echo $sinif->metatitle; ?>"/>
    <meta name="description" content="<?php echo $sinif->metadesc; ?>">
    <meta name="keywords" content="<?php echo $sinif->metakey; ?>">
    <meta name="author" content="<?php echo $sinif->metaaut; ?>"/>
    <meta name="owner" content="<?php echo $sinif->metaown; ?>"/>
    <meta name="copyright" content="<?php echo $sinif->metacopy; ?>"/>
    <meta property="og:title" content="<?php echo $sinif->metatitle; ?>">
    <meta property="og:description" content="<?php echo $sinif->metadesc; ?>">
    <meta property="og:image" content="https://www.unicaltexnik.com/unicaltexnikseo.jpg">
    <meta property="og:url" content="https://www.unicaltexnik.com">
    <meta name="robots" content="noindex, follow" />
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
    
    <style>

.mainlogo {
    width: 300px;
   
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


</head>
<body>
  <!-- ======= Top Bar ======= -->
 <?php require_once "topbar.php";?>
  <!-- ======= Header ======= -->
  <?php require_once "header.php";?>
  <!-- End Header -->

    <body>
        <div class="d-flex align-items-center justify-content-center vh-100">
            <div class="text-center">
                <h1 class="display-1 fw-bold">404</h1>
                <p class="fs-3"> <span class="text-danger">Opps!</span> Page not found.</p>
                <p class="lead">
                    Axtardığınız səhifə mövcud deyil.
                  </p>
                <a href="https://www.unicaltexnik.com" class="btn btn-primary"><i class="fa fa-arrow-left"></i>   Başa dön</a>
            </div>
        </div>
    </body>

  <!-- ======= Footer ======= -->
<?php require_once "footer.php";?>