<?php 
ob_start();
session_start();
include_once("lib/fonksiyon.php");
$sinif = new kurumsal;
//error_reporting(0);
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
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
        .p_img {
  max-width: 600px;
  max-height: 600px;
}
hr.dashed {
  border-top: 1px dashed #999;
}
.esasmetin{
    text-align:center !important;
    font-size:18px;
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
<?php 
$kategorisor=$baglanti->prepare("SELECT * FROM altkategori");
$kategorisor->execute();
$kategoricek=$kategorisor->fetch(PDO::FETCH_ASSOC);
$urunsor=$baglanti->prepare("SELECT * FROM products where id=:id");
$urunsor->execute(array(
  'id' => $_GET['id']
  ));
$uruncek=$urunsor->fetch(PDO::FETCH_ASSOC);
echo$say=$urunsor->rowCount();
if ($say==0) {
  header("Location:index.php?durum=oynasma");
  exit;
}
?>

 
  
  <main id="main">
    <?php 
    if (isset($_GET['sef'])) {
    $seourl = $_GET['sef'];
    $altkategorisor = $baglanti->prepare("SELECT * FROM altkategori WHERE kategori_seourl_{$_SESSION['dil']} = :seourl");
    $altkategorisor->execute(array(
        'seourl' => $seourl
    ));
    $altkategoricek = $altkategorisor->fetch(PDO::FETCH_ASSOC);
     $catName= $altkategoricek['kategori_ad_'.$_SESSION["dil"]];
    if ($kategoricek) {
        $kategori_id = $altkategoricek['id'];
        $urunsor = $baglanti->prepare("SELECT * FROM products where kategori_id=:kategori_id order by id DESC");
        $urunsor->execute(array(
            'kategori_id' => $kategori_id
        ));
        $say = $urunsor->rowCount();
    } else {
    }
} else {
    $urunsor = $baglanti->prepare("SELECT * FROM products order by id DESC");
    $urunsor->execute();

}
?>
<head>
     <title><?php echo $uruncek['p_name_'.$_SESSION["dil"]]; ?> | UnicalTexnik</title>
 </head>

    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center" id="breadcrumb">
         <ol>
          
            <?php
          $url = urldecode($_SERVER['REQUEST_URI']);
          $kategori_ad = $_GET['kategori_ad'];
          $kategoriAdi = '';
if (preg_match('/category_name=([^&]+)/', $url, $matches)) {
  $kategoriAdi = $matches[1];
}

$breadcrumb = '<ol><li>'.$sinif->linkesas($baglanti).'</li>
 <li><a href="https://www.unicaltexnik.com/categories-'.$kategoriAdi.'?kategori_id='.$_GET['id'].'">
 '.$kategori_ad.'</a></li> 
 <li>'.$uruncek['p_name_'.$_SESSION["dil"]];
echo $breadcrumb;
?>

          </ol>
        </div>
      </div>
    </section>
       <?php
          $urun_id=$uruncek['id'];
          $urunfotosor=$baglanti->prepare("SELECT * FROM urunfoto where urun_id=:urun_id");
          $urunfotosor->execute(array(
            'urun_id' => $urun_id
          ));
 ?>
   <section id="portfolio-details" class="portfolio-details">
  <div itemscope itemtype="http://schema.org/Product">
    <div class="container">
      <div class="row gy-4">
        <div class="col-lg-8">
          <div class="portfolio-details-slider swiper">
            <div class="swiper-wrapper align-items-center">
              <?php 
              while ($urunfotocek = $urunfotosor->fetch(PDO::FETCH_ASSOC)) {
              ?>
                <div class="swiper-slide">
                  <div itemprop="image" itemscope itemtype="http://schema.org/ImageObject">
                    <img src="<?php echo $urunfotocek['urunfoto_resimyol']; ?>" class="img-fluid p_img" alt="<?php echo $uruncek['p_name'] ?>">
                  </div>
                </div>
              <?php } ?>
            </div>
            <div class="swiper-pagination"></div><br>
            <div class="portfolio-description">
              <?php 
              $kelimesor = $baglanti->prepare("SELECT * FROM kelimeler WHERE id != 1");
              $kelimesor->execute();
              $kelimecek = $kelimesor->fetch(PDO::FETCH_ASSOC);

              $kelimesorr = $baglanti->prepare("SELECT * FROM kelimeler WHERE id = 3");
              $kelimesorr->execute();
              $kelimecekk = $kelimesorr->fetch(PDO::FETCH_ASSOC);

              $kelimesorrr = $baglanti->prepare("SELECT * FROM kelimeler WHERE id = 15");
              $kelimesorrr->execute();
              $kelimecekkk = $kelimesorrr->fetch(PDO::FETCH_ASSOC);

              $kelimesorrrc = $baglanti->prepare("SELECT * FROM kelimeler WHERE id = 16");
              $kelimesorrrc->execute();
              $kelimecekkkc = $kelimesorrrc->fetch(PDO::FETCH_ASSOC);

              $kelimesormelumat = $baglanti->prepare("SELECT * FROM kelimeler WHERE id = 17");
              $kelimesormelumat->execute();
              $kelimecekmelumat = $kelimesormelumat->fetch(PDO::FETCH_ASSOC);

              $kelimesorsiparis = $baglanti->prepare("SELECT * FROM kelimeler WHERE id = 18");
              $kelimesorsiparis->execute();
              $kelimeceksiparis = $kelimesorsiparis->fetch(PDO::FETCH_ASSOC);
              ?>

              <h2><?php echo $kelimecek['kelime_'.$_SESSION["dil"]]; ?>: <?php echo $uruncek['model'] ?></h2>
              <div class="card">
                <div class="card-body">
                  <h5 class="card-title"><?php echo $uruncek['p_name_'.$_SESSION["dil"]] ?></h5>
                  <h6 class="card-subtitle mb-2 text-muted"><?php echo $uruncek['model'] ?></h6><hr class="dashed">
                  <div class="esasmetin">
                    <strong><?php echo $kelimecekmelumat['kelime_'.$_SESSION["dil"]]; ?></strong>
                  </div>
                  <hr class="dashed">

                  <p class="card-text" id="my-div">
                    <?php 
                    $icerik = $uruncek['icerik_'.$_SESSION["dil"]];
                    $temiztext = htmlspecialchars(strip_tags($icerik), ENT_QUOTES);
                    echo $temiztext;
                    ?>
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="portfolio-info">
            <h3><?php echo $uruncek['p_name_'.$_SESSION["dil"]] ?></h3>
            <ul>
              <li><strong><?php echo $kelimecekkk['kelime_'.$_SESSION["dil"]]; ?></strong>: <?php echo $uruncek['marka'] ?></li>
              <li><strong><?php echo $kelimecek['kelime_'.$_SESSION["dil"]]; ?></strong>: <?php echo $uruncek['model'] ?></li>
              <li><strong><?php echo $kelimecekkkc['kelime_'.$_SESSION["dil"]]; ?></strong>: <?php echo $uruncek['agirlik'] ?></li>
              <li><strong><?php echo $kelimecekk['kelime_'.$_SESSION["dil"]]; ?></strong>: <?php echo $uruncek['makine_boyutlari'] ?></li>
            </ul>
            <br><br><hr><br>
            <div class="a2a_kit a2a_kit_size_32 a2a_default_style">
              <a class="a2a_button_facebook"></a>
              <a class="a2a_button_twitter"></a>
              <a class="a2a_button_email"></a>
              <a class="a2a_button_whatsapp"></a>
              <a class="a2a_button_telegram"></a>
              <a class="a2a_button_linkedin"></a>
              <a class="a2a_button_print"></a>
              <a class="a2a_button_wechat"></a>
            </div>
            <script async src="https://static.addtoany.com/menu/page.js"></script>
            <br><br><hr><br>
            <a href="mailto:info@unicaltexnik.az,sales@unicaltexnik.az?subject=Mal Sifarişi&body=Sifariş Detalları %0D%0AMalın adı: <?php echo $uruncek['p_name_'.$_SESSION["dil"]] ?>%0D%0AModeli: <?php echo $uruncek['model'] ?>%0D%0AMarkası: <?php echo $uruncek['marka'] ?>%0D%0ALink:  https://unicaltexnik.com/product-<?= sefLink($uruncek['p_name_'.$_SESSION["dil"]]).'-'.$uruncek["id"] ?>?katsef=<?= sefLink($altkategoricek['kategori_seourl_'.$_SESSION["dil"]]) ?>&katid=<?= sefLink($altkategoricek['kategori_seourl_'.$_SESSION["dil"]]) ?>&kategori_ad=<?= urlencode($altkategoricek['kategori_ad_'.$_SESSION["dil"]]) ?>&category_name=<?= sefLink($altkategoricek['kategori_seourl_'.$_SESSION["dil"]]) ?>&kategoriad=<?= urlencode($altkategoricek['kategori_ad_'.$_SESSION["dil"]]) ?>&Catname=<?= urlencode($altkategoricek['kategori_ad_'.$_SESSION["dil"]]) ?>%0D%0AƏdet: 'Bura neçə ədəd istədiynizi yazın ...'  " class="btn btn-success" type="submit" target="_blank" style="margin-left:18px; width:270px; font-weight: bold;"><?php echo $kelimeceksiparis['kelime_'.$_SESSION["dil"]]; ?></a>
            <hr>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

  </main>
<?php require_once "footer.php";?>
