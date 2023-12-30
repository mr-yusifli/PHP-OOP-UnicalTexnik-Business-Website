<?php require_once "head.php"; ?>

<body>
   
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "Organization",
  "name": "Unicaltexnik",
  "url": "https://www.unicaltexnik.com",
  "logo": {
    "@type": "ImageObject",
    "url": "https://www.unicaltexnik.com/UnicalTexnikLogo.svg",
    "format": "image/svg+xml"
  }
}
</script>

      
  <!-- ======= Top Bar ======= -->
 <?php require_once "topbar.php";?>
  <!-- ======= Header ======= -->
  <?php require_once "header.php";?>

  <!-- End Header -->
  <!-- ======= slider Section ======= -->
  <?php require_once "slider.php";?>

  <!-- End Hero -->
<!-- main start -->
  <main id="main">
<!-- ======= short about Section ======= -->
      <?php require_once "short_about.php";?>
<!-- End short about Section -->
   <!-- cat -->
      <?php require_once "category.php";?>
   <!-- end cat -->
      <!-- galery Content -->
      <?php require_once "photo_gallery.php";?>
      <!-- end galery -->
      <!-- video Content -->
      <?php require_once "video.php";?>
      <!-- end video -->
     <!-- sertificate -->
      <?php require_once "sertificate.php";?>
      <!-- end sertificate -->
    <!-- ======= Our Clients Section ======= -->
      <?php require_once "clients.php";?>
    <!-- End Our Clients Section -->
  </main><!-- End #main -->
  <!-- ======= Footer ======= -->
   
<?php require_once "footer.php";?>

