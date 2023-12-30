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

$altkategorisor=$baglanti->prepare("SELECT * FROM altkategori WHERE id = :kategorii_id");
$altkategorisor->execute(array(
        'kategorii_id' => $kategori_id
    ));
$altkategoricek=$altkategorisor->fetch(PDO::FETCH_ASSOC);

if (isset($_GET['sef'])) {
    $seourl = $_GET['sef'];
    $kategori_id = $kategoricek['id'];
    $kategorisor = $baglanti->prepare("SELECT * FROM altkategori WHERE kategori_seourl_{$_SESSION['dil']} = :seourl");
    $kategorisor->execute(array(
        'seourl' => $seourl
    ));
    $kategoricek = $kategorisor->fetch(PDO::FETCH_ASSOC);
    if ($kategoricek) {
        $kategori_id = $kategoricek['id'];
        $urunsor = $baglanti->prepare("SELECT * FROM products WHERE kategori_id=:kategori_id and urun_durum=:durum");
        $urunsor->execute(array(
            'kategori_id' => $kategori_id,
            'durum' => 1
        ));
        $say = $urunsor->rowCount();
        // echo "kategori_id: " . $kategori_id . "<br>";
        // echo "say: " . $say . "<br>";
    } 
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
    <meta name="google-site-verification" content="FSotDmkT58valPYMVe60H9J6KRvTpN6Hyff9OhtL9FI" />
    <!-- Favicons -->
    <link rel="shortcut icon" type="image/webp" href="assets/img/favicon.webp">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Muli:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
    <!-- fontawesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/fontawesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
    <!-- Template Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.8.2/css/lightbox.min.css">
    <style>
    .c_img{
        max-width: 366px;
        max-height: 224px;
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

 <title><?php echo $kategoricek['kategori_ad_'.$_SESSION["dil"]] ?> | UnicalTexnik</title>
</head>
<body>
  <?php require_once "topbar.php";?>
  <?php require_once "header.php";?>
  <main id="main">
<?php 
$kategori_id = $_GET['kategori_id'];
$altkategorisor=$baglanti->prepare("SELECT * FROM altkategori WHERE id = :kategorii_id");
$altkategorisor->execute(array(
        'kategorii_id' => $kategori_id
    ));
$altkategoricek=$altkategorisor->fetch(PDO::FETCH_ASSOC);

 ?>
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">
        <div class="d-flex justify-content-between align-items-center">         
      <ol class="breadcrumb">
  <?php $sinif->linkesas($baglanti);  ?>
<li class="breadcrumb-item">
<?php echo $altkategoricek['kategori_ad_'.$_SESSION["dil"]] ?> 
</li>

</ol>
</div>
      </div>
    </section>
    <section id="portfolio" class="portfolio">
      <div class="container">
        <div class="row portfolio-container" data-aos="fade-up">
          <?php 
         
          if ($say == 0) {

            $kelimesor = $baglanti->prepare("SELECT * FROM kelimeler WHERE id=1");
            $kelimesor->execute();
            $kelimecek = $kelimesor->fetch(PDO::FETCH_ASSOC);
           echo  '<div class="col-lg-12 col-md-6 portfolio-item filter-app">
            <div class="alert alert-danger mb-3" role="alert"  style="width:800px margin: 0 auto;">
            <i class="fa-solid fa-face-frown"></i><strong>';
             echo $kelimecek['kelime_'.$_SESSION["dil"]];
               echo'</div></div><br><br>';
          } else {
     
            while ($uruncek = $urunsor->fetch(PDO::FETCH_ASSOC)) { 
              $urun_id = $uruncek['id'];
              $urunfotosor = $baglanti->prepare("SELECT * FROM urunfoto where urun_id=:urun_id  limit 1 ");
              $urunfotosor->execute(array(
                'urun_id' => $urun_id
              ));
              $urunfotocek = $urunfotosor->fetch(PDO::FETCH_ASSOC);
          ?>
          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
    <img src="<?php echo $urunfotocek['urunfoto_resimyol'] ?>" class="img-fluid c_img" alt="<?php echo $uruncek['p_name_'.$_SESSION["dil"]] ?>" title="<?php echo $uruncek['p_name_'.$_SESSION["dil"]] ?>" onclick="submitProductDetailsForm()">
    <div class="portfolio-info">
        <h4><?php echo $uruncek['p_name_'.$_SESSION["dil"]] ?></h4>
        <p><?php echo $uruncek['p_kod'] ?></p>
        <a href="<?php echo $urunfotocek['urunfoto_resimyol'] ?>" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="<?php echo $uruncek['p_name_'.$_SESSION["dil"]] ?>"><i class="bx bx-plus"></i></a>
        <!-- <a href="#" class="details-link" title="<?php echo $uruncek['p_name_'.$_SESSION["dil"]] ?>" onclick="submitProductDetailsForm()"> -->
            <a href="product-<?=sefLink($uruncek['p_name_'.$_SESSION["dil"]]).'-'.$uruncek["id"] ?>?katsef=<?= sefLink($altkategoricek['kategori_seourl_'.$_SESSION["dil"]]) ?>&katid=<?= sefLink($altkategoricek['kategori_seourl_'.$_SESSION["dil"]]) ?>&kategori_ad=<?= urlencode($altkategoricek['kategori_ad_'.$_SESSION["dil"]]) ?>&category_name=<?= sefLink($altkategoricek['kategori_seourl_'.$_SESSION["dil"]]) ?>&kategoriad=<?= urlencode($altkategoricek['kategori_ad_'.$_SESSION["dil"]]) ?>&Catname=<?= urlencode($altkategoricek['kategori_ad_'.$_SESSION["dil"]]) ?>" onclick="submitProductDetailsForm()" class="details-link">


            <i class="bx bx-link"></i>
            <form id="product-details-form" action="product-<?=sefLink($uruncek['p_name_'.$_SESSION["dil"]]).'-'.$uruncek["id"]?>" method="GET">
                <input type="hidden" name="katsef" value="categories-<?=sefLink($altkategoricek['kategori_seourl_'.$_SESSION["dil"]])?>?kategori_id=<?= $altkategoricek['id'] ?>">
                <input type="hidden" name="katid" value="alt-kategori-<?=sefLink($altkategoricek['kategori_seourl_'.$_SESSION["dil"]])?>">
                <input type="hidden" name="kategori_ad" value="<?= $altkategoricek['kategori_ad_'.$_SESSION["dil"]] ?>">
                <input type="hidden" name="category_name" id="category-name-input">
                <input type="hidden" name="kategoriad" value="<?php echo $altkategoricek['kategori_ad_'.$_SESSION['dil']]; ?>">
                <input type="hidden" name="Catname" id="Catname">
            </form>
        </a>
    </div>
</div>
<script>
    function submitProductDetailsForm() {
        var Catname = '<?php echo $altkategoricek['kategori_ad_'.$_SESSION["dil"]] ?>';
        var categoryName = '<?php echo $altkategoricek['kategori_seourl_'.$_SESSION["dil"]] ?>';
        var input = document.getElementById('category-name-input');
        var input2 = document.getElementById('Catname');
        input.value = categoryName;
        input2.value = Catname;
        document.getElementById('product-details-form').submit();
    }
</script>

          <?php } } ?> 
        </div>
      </div>
    </section>
    <div class="blog-pagination">
      <ul class="justify-content-center">
      </ul>
    </div>
  </main>
  <?php require_once "footer.php";?>
</body>
</html>
