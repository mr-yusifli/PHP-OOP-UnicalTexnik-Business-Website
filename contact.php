<?php 
ob_start();
session_start();
date_default_timezone_set('Asia/Baku');
include_once("lib/fonksiyon.php");
$sinif = new kurumsal;

?>
<!DOCTYPE html>
<html lang="az">
<head>
     <title><?php $sinif->linkelaqeepages($baglanti); ?> | <?php echo $sinif->normaltitle; ?></title>
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
 <?php require_once "topbar.php";?>
  <?php require_once "header.php";?>
  <main id="main">
   <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">
        <div class="d-flex justify-content-between align-items-center">
          <ol>
           <?php $sinif->linkesas($baglanti); ?>
            <?php $sinif->linkelaqee($baglanti); ?>
          </ol>
        </div>
      </div>
    </section>
    <div class="map-section">
      <iframe style="border:0; width: 100%; height: 350px;" src="<?php echo $sinif->haritabilgi; ?>" frameborder="0" allowfullscreen></iframe>
    </div>
 <section id="contact" class="contact">
      <div class="container">
         <div class="row justify-content-center mb-4" data-aos="fade-up">
          <div class="col-lg-10">
            <div class="info-wrap">
              <div class="row">
                <div class="col-lg-4 info">
                  <i class="bi bi-geo-alt"></i>
                   <?php $sinif->kelimeunvann($baglanti); ?>
                  <p><?php echo $sinif->normaladres; ?></p>
                </div>
                <div class="col-lg-4 info mt-4 mt-lg-0">
                  <i class="bi bi-envelope"></i>
                  <h4>Email:</h4>
                  <p><?php echo $sinif->mailadres; ?></p>
                </div>
                <div class="col-lg-4 info mt-4 mt-lg-0">
                  <i class="bi bi-phone"></i>
                  <h4>Tel:</h4>
                  <p><?php echo $sinif->telno; ?></p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="row mt-5 justify-content-center">
          <div class="col-lg-10">
           <div id="mesajsonuc"></div>
              <div id="formtutucu">
            <form  id="mailform">
              <div class="row">
                <div class="col-md-6 form-group">
                  <input type="text" name="isim" class="form-control" id="name" placeholder="<?php $sinif->iletisimname($baglanti); ?>" required>
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <input type="email" class="form-control" name="mail" id="email" placeholder="<?php $sinif->iletisimemail($baglanti); ?>" required>
                </div>
              </div>
              <div class="form-group mt-3">
<input type="text" class="form-control" name="konu" id="subject" placeholder="<?php $sinif->iletisimkonu($baglanti); ?>" required>
              </div>
              <div class="form-group mt-3">
<textarea class="form-control" name="mesaj" rows="5" placeholder="<?php $sinif->iletisimmesaj($baglanti); ?>" required></textarea> </div>
              </div><br>
    <div class="text-center">
      <button type="button" id="gonderbtn" class="btn btn-danger"><?php $sinif->iletisimbuton($baglanti); ?></button></div>
            </form>
          </div>
          </div>

        </div>
      </div>
    </section>

  </main>
<?php require_once "footer.php";?>

