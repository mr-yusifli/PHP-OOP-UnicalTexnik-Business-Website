 <?php require_once "head.php"; 
   //include 'breadcrumb.php';
 error_reporting(0);
?>

<body>
  <!-- ======= Top Bar ======= -->
 <?php require_once "topbar.php";?>
  <!-- ======= Header ======= -->
  <?php require_once "header.php";?>
  <!-- End Header -->


<hr><br>
 <main id="main">
     <div class="container">
        <div class="kontainer">
          <?php $sinif->kelimehizmetsartlarivepolitika($baglanti); ?><hr>
         <div class="row">
             <div class="col-md-12 mx-auto">
                 <div class="row card-bordered p-1 m-1 bg-light">
                     <?php $sinif->sitehizmetsartlari($baglanti); ?>
                 </div>
             </div>
         </div> 
        </div>
        
     </div>


 </main>




 <!-- ======= Footer ======= -->
<?php require_once "footer.php";?>