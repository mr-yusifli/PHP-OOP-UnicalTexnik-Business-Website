<?php 
ob_start();
session_start();
include_once("lib/fonksiyon.php");
$sinif = new kurumsal;
// error_reporting(0);
if(isset($_GET['dil'])) {
    $dil = $_GET['dil'];
    $_SESSION['dil'] = $dil;
} elseif(isset($_SESSION['dil'])) {
    $dil = $_SESSION['dil'];
} else {
    $user_language = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);
    if ($user_language=='ru') {
        $dil="ru";
    } elseif($user_language=='en') {
        $dil="en";
    } elseif($user_language=='tr') {
        $dil="tr";
    } elseif($user_language=='az') {
        $dil="az";     
    }
   
    $_SESSION['dil'] = $dil;
}

?>
<!DOCTYPE html>
<html lang="az">
<head>
     
    <meta charset="utf-8">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta name="title" content="<?php echo $sinif->metatitle; ?>"/>
    <meta content="<?php echo $sinif->metadesc; ?>" name="description">
    <meta content="<?php echo $sinif->metakey; ?>" name="keywords">
    <meta name="author" content="<?php echo $sinif->metaaut; ?>"/>
    <meta name="owner" content="<?php echo $sinif->metaown; ?>"/>
    <meta name="copyright" content="<?php echo $sinif->metacopy; ?>"/>
    <meta property="og:title" content="<?php echo $sinif->metatitle; ?>">
    <meta property="og:description" content="<?php echo $sinif->metadesc; ?>">
    <meta property="og:image" content="https://www.unicaltexnik.com/unicaltexnikseo.jpg">
    <meta property="og:url" content="https://www.unicaltexnik.com">
    <meta name="google-site-verification" content="FSotDmkT58valPYMVe60H9J6KRvTpN6Hyff9OhtL9FI" />
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






   <?php
   if (isset($_GET['sef'])){

    $kategorisor=$baglanti->prepare("SELECT * FROM category where kategori_seourl_{$_SESSION['dil']}=:kategori_id or kategori_seourl_ru=:kategori_id");
    $kategorisor->execute(array(
    'kategori_id' => $_GET['sef']

));
$kategoricek=$kategorisor->fetch(PDO::FETCH_ASSOC);
if ($kategoricek) {
 $kategori_id=$kategoricek['id'];
       $altkategorisor=$baglanti->prepare("SELECT * FROM altkategori where kategori_id=:kategori_id order by id DESC");
       $altkategorisor->execute(array(
           'kategori_id' => $kategori_id
       ));
       $say=$altkategorisor->rowCount();
   } else {
   }
}
else{
  $altkategorisor=$baglanti->prepare("SELECT * FROM altkategori order by id DESC");
  $altkategorisor->execute();
}
?>
 <head>
     <title><?php echo $kategoricek['kategori_ad_'.$_SESSION["dil"]] ?> | UnicalTexnik</title>

 </head> 
 <main id="main">

<section id="breadcrumbs" class="breadcrumbs">
      <div class="container">
        <div class="d-flex justify-content-between align-items-center">         
        <ol class="breadcrumb">
             <?php $sinif->linkesas($baglanti); ?>&nbsp; 
             <span> / </span>&nbsp;
        <li class="breadcrumb-item">
             <?php echo $kategoricek['kategori_ad_'.$_SESSION["dil"]] ?>
        </li>
      </ol>
  </div>
</div>
</section>
<section class="servicess mb-3">
    <div class="container">

        <hr class="mt-1 mb-5">
        <div class="content">
     <?php 
     
       while($altkategoricek=$altkategorisor->fetch(PDO::FETCH_ASSOC)) {
        
        ?>
       
    <a href="categories-<?=sefLink($altkategoricek['kategori_seourl_'.$_SESSION["dil"]])?>?kategori_id=<?= $altkategoricek['id'] ?>&dil=<?= $_SESSION['dil'] ?>" class="box">

        
                <div class="inner">
                    <div class="icon">
            <img class="img-fluid catt" src="<?php echo $altkategoricek['resimyol'] ?>" alt="Generator,generator satisi,kompressor,unicaltexnik">
                    </div>
                    <h3><?php echo $altkategoricek['kategori_ad_'.$_SESSION["dil"]] ?> </h3>
                  <input type="hidden" value="categories-<?=sefLink($kategoricek['kategori_seourl_'.$_SESSION["dil"]])?>?kategori_id=<?= $altkategoricek['id'] ?>" name="sef">
                  <form action="">
                  <input type="hidden" value="categories=?sayfa">
                  <input type="hidden" value="<?= $altkategoricek['id'] ?>" name="kategori_id">
                  <input type="hidden" name="altkategoriad" value="<?php echo $altkategoricek['kategori_ad_'.$_SESSION['dil']]; ?>">
                  <input type="hidden" name="altkategorisef" value="alt-kategori-<?=sefLink($altkategoricek['kategori_seourl_'.$_SESSION["dil"]])?>">
                  </form>
                </div>
            </a> 
           <?php } ?>
            
          
        </div>
    </div>
</section>
 </main>

<?php require_once "footer.php";?>