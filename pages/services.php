<?php require_once "head.php"; ?>
<head>
  <title><?php $sinif->linksrvicespages($baglanti); ?> | UnicalTexnik</title>
</head>
<body>
  <!-- ======= Top Bar ======= -->
 <?php require_once "topbar.php";?>
  <!-- ======= Header ======= -->
  <?php require_once "header.php";?>
  <!-- End Header -->
  
  <!-- <main id="main"> -->
<section id="clients" class="clients">
    <div class="container">
        <h1 class="fw-light text-center text-lg-start mt-4 mb-0 letter"><?php echo $sinif->hizmetlerbaslik; ?></h1>
        <hr class="mt-2 mb-5">
        <div class="row no-gutters clients-wrap clearfix">
         
          <?php $sinif->servicess($baglanti); ?>
        </div>

    </div>
</section>
 <!-- </main> -->
  <!-- ======= Footer ======= -->
<?php require_once "footer.php";?> 