<?php 
include_once("assets/fonksiyon.php");
$yonetim = new yonetim;
$yonetim->konrolet("cot");
error_reporting(0);
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="tr">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <meta charset="utf-8">
   
    <title>Site-Yönetim Paneli</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/png" href="assets/images/favicon.png">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/themify-icons.css">
    <link rel="stylesheet" href="assets/css/metisMenu.css">
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/css/slicknav.min.css">    
    <link rel="stylesheet" href="assets/css/typography.css">
    <link rel="stylesheet" href="assets/css/default-css.css">
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="assets/css/responsive.css">
    <link href="assets/css/dropzone.css" rel="stylesheet">   
    <link rel="stylesheet" href="assets/summernote/summernote-bs4.min.css">   
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"> 
    <script src="assets/js/vendor/modernizr-2.8.3.min.js"></script>
    <!-- datatables files -->
  <link rel="stylesheet" type="text/css" href="assets/datatables/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" type="text/css" href="assets/datatables/dataTables.min.css">
    <style>
        .logo i{
            font:24px bold;
            color:white;
        }

 .col-55{
    position: relative;
    min-height: 1px;
    float: left;
    padding-right: 10px;
    padding-left: 10px;

        }

         .x_panel {
              padding: 10px;
              background-color: #fff;
              border: 1px solid #d2d6de;
              box-shadow: 0 1px 1px rgba(0,0,0,0.05);
              margin-bottom: 20px;
           }
          .x_title {
              padding: 10px;
            margin-bottom: 10px;
             background-color: #f7f7f7;
            border-bottom: 1px solid #d2d6de;
            font-size: 18px;
            font-weight: bold;
             }

.view {
     overflow: hidden;
    position: relative;
    text-align: center;
    box-shadow: 1px 1px 2px #e6e6e6;
    cursor: default;
}

.view-first {
   margin-top:40px;
  transform: scale(1.1);
  box-shadow: 0px 0px 20px rgba(0, 40, 40, 0.9);
}

img {
  padding:10px;
  margin:10px;
  width: 300px;
  height: 200px;
  display: block;
  float:left;
  top:20px;
}
.mask {
  width:250px;
  position: absolute;
  top: 0;
  bottom: 0;
  left: 0;
  right: 0;
  background: rgba(0, 0, 0, 0.7);
  transition: all 0.3s ease-in-out;
  opacity: 0;
}

.tools {
  position: absolute;
  bottom: 0;
  right: 0;
  padding: 10px;
}

.view:hover .mask {
  opacity: 1;
  color:#ff0808;
}

.pagination {
  display: inline-block;
}

.pagination a {
  color: black;
  float: left;
  padding: 8px 16px;
  text-decoration: none;
}

.pagination a.active {
  background-color: #4CAF50;
  color: white;
}

.pagination a:hover:not(.active) {background-color: #ddd;}
.text-white {
  color: #fff !important;
}



</style>
    </style>
</head>

<body>


    <!-- page container area start -->
    <div class="page-container">
        <!-- sidebar menu area start -->
        <div class="sidebar-menu">
            <div class="sidebar-header">
                <div class="logo">
             <a href="control.php">
                <img src="assets/images/logo/logo.png" alt="UnikalTexnik" class="img-fluid">
                </a>
                </div>
            </div>
            <div class="main-menu">
                <div class="menu-inner">
                    <nav>
            <ul class="metismenu" id="menu">
        
                <li><a href="control.php?sayfa=introayar"><i class="ti-image"></i> <span>Slider Ayarları</span></a></li>
                <li><a href="control.php?sayfa=hakkimiz"><i class="ti-flag"></i> <span>Hakkımızda Ayarları</span></a></li>
                <li><a href="control.php?sayfa=hizmetler"><i class="ti-medall"></i> <span>Hizmetlerimiz Ayarları</span></a></li>
                <li><a href="control.php?sayfa=ref"><i class="ti-eye"></i> <span>Sertifikalar Ayarları</span></a></li>
                <li><a href="control.php?sayfa=galeriayar"><i class="ti-car"></i> <span>Galeri</span></a></li>
                <li><a href="control.php?sayfa=partnyorayar"><i class="ti-marker"></i> <span>Şirketler Ayarları</span></a></li>
                <li><a href="control.php?sayfa=yorumlar"><i class="ti-comment-alt"></i> <span>Müşteri Yorumları</span></a></li>

                <li><a href="javascript:void(0)" aria-expanded="true">
                <i class="ti-harddrives"></i> <span>Ürün yönetimi</span></a>
                <ul class="collapse">
                <li><a href="control.php?sayfa=category"><i class="ti-book"></i> <span>Kategori yönetimi</span></a></li>
                <li><a href="control.php?sayfa=products"><i class="ti-package"></i> <span>Ürün yönetimi</span></a></li>
                </ul>
                </li>

                <li><a href="control.php?sayfa=gelenmesaj"><i class="fa fa-envelope"></i> <span>Gelen Mesajlar</span></a></li>
                <li><a href="javascript:void(0)" aria-expanded="true">
                <i class="fa fa-cog"></i> <span>Ayarlar</span></a>
                <ul class="collapse">
                <li><a href="control.php?sayfa=siteayar"><i class="ti-pencil"></i> <span>Site Ayarları</span></a></li>
                <li><a href="control.php?sayfa=mailayar"><i class="fa fa-cog"></i> <span>Mail Ayarları</span></a></li>
                </ul>
                </li>
                </ul>
                    </nav>
                </div>
            </div>
            </div>  
        <!-- sidebar menu area end -->
        <!-- main content area start -->
        <div class="main-content">
       <div class="header-area">
                <div class="row align-items-center">
                    <!-- nav and search button -->
                    <div class="col-md-6 col-sm-8 clearfix">
                        <div class="nav-btn pull-left">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                       
                    </div>
                    <!-- profil ayarlar çıkıs -->
                     <div class="col-sm-6 clearfix">
                        <div class="user-profile pull-right "style="max-height:40px;" >
                            
                            <h4 class="user-name dropdown-toggle" data-toggle="dropdown">
                            <i class="fa fa-user mr-2"></i>
                            <?php echo $yonetim->kuladial($baglanti); ?>
                            <i class="fa fa-angle-down"></i></h4>
                            <div class="dropdown-menu">
                            <a class="dropdown-item" href="control.php?sayfa=ayarlar" disabled="disabled">Ayarlar</a>
                            <a class="dropdown-item" href="control.php?sayfa=kulayar" disabled="disabled">Kullanıcı Ayarları</a>
                            <a class="dropdown-item" href="control.php?sayfa=cikis">Çıkış</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
   <div class="main-content-inner">
       <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12 bg-white text-center" style="min-height:500px;">
          <div class="x_panel">
            <div class="x_title">
             <div align="left" class="col-md-6">
              <h2 >Resim Ürün Fotoğraf İşlemleri <small>
                <?php
                //echo @$say." kayıt listelendi.";
                if (@$_GET['durum']=='ok') {?> 
                
                <b style="color:green;">İşlem başarılı...</b>

                <?php } elseif (@$_GET['durum']=='no')  {?>

                <b style="color:red;">İşlem Başarısız...</b>

                <?php } ?></small></h2><br>
              </div>
              
              <form  action="urungaleri.php" method="POST" enctype="multipart/form-data">
              <input type="hidden" name="urun_id" value="<?php echo $_GET['urun_id']; ?>">
                <div align="left" class="col-md-2"> 
                </div>
                <div align="right" class="col-md-6">
                  <a href="control.php?sayfa=products" class="btn btn-primary" > <i class="fa fa-arrow-left" aria-hidden="true"></i> Geri Dön </a>
                  <button type="submit" name="urunfotosil"  class="btn btn-danger "><i class="fa fa-trash" aria-hidden="true"></i> Seçilenleri Sil</button>
                  <a class="btn btn-success" href="urun-foto-yukle.php?urun_id=<?php echo $_GET['urun_id'];?>"><i class="fa fa-plus" aria-hidden="true"></i> Ürün Fotoğraf Yükle</a>
                </div>
                <div class="clearfix"></div>
              </div>
              <div class="x_content">
                <?php
                $sayfada = 25; // sayfada gösterilecek içerik miktarını belirtiyoruz.
                $sorgu=$baglanti->prepare("select * from urunfoto");
                $sorgu->execute();
                $toplam_urunfoto=$sorgu->rowCount();
                $toplam_sayfa = ceil($toplam_urunfoto / $sayfada);
                $sayfa = isset($_GET['sayfa']) ? (int) $_GET['sayfa'] : 1;
                if($sayfa < 1) $sayfa = 1; 
                if($sayfa > $toplam_sayfa) $sayfa = $toplam_sayfa; 
                $limit = ($sayfa - 1) * $sayfada;
                $urunfotosor=$baglanti->prepare("select * from urunfoto where urun_id=:urun_id order by urunfoto_id DESC limit $limit,$sayfada");
                @$urunfotosor->execute(array(
                  'urun_id' => $_GET['urun_id']
                  ));
                  ?>
                <div class="container">
                   <div class="row">
                  <?php while($urunfotocek=$urunfotosor->fetch(PDO::FETCH_ASSOC)) { ?>
                  <div class="col-sm-12 col-md-4 ml-2">
                    <div class="ml-2 image view view-first">
                      <img class="img-checkbox"   src="../<?php echo $urunfotocek['urunfoto_resimyol']; ?>" alt="<?php echo $urunfotocek['urunfoto_id']; ?>" />
                       <input type="hidden" name="urunfoto_resimyol" value="../<?php echo $urunfotocek['urunfoto_resimyol']; ?>">
                         <div class="text-danger">
                      <div class="mask" style="columns:#ff0808;">
                        <div class="tools tools-bottom text-white">
                           <p> <?php echo $urunfotocek['urunfoto_id']; ?></p>
                        </div><br>
                       
                      </div>
                     </div> 
                 </div>
                    <?php  
                    @array("$urunfotosec"); 
                    ?>
                  <div class="form-check mt-3">
                    <input class="form-check-input img-checkbox" type="checkbox" name="urunfotosec[]"  value="<?php echo $urunfotocek['urunfoto_id']; ?>" id="flexCheckIndeterminate">
                     <input type="hidden" name="urunfoto_resimyol" value="../<?php echo $urunfotocek['urunfoto_resimyol']; ?>">
                   <label class="form-check-label text-danger h6 font-weight-bold" for="flexCheckIndeterminate"> Seç </label>
                  </div>
                </div>
                <?php } ?>
                <br>
              </div>
            </div>

                <div align="right" class="col-md-12">
                  <nav aria-label="...">
                  <ul class="pagination">
                <?php
                    $s=0;
                    while ($s < $toplam_sayfa) {
                      $s++; ?>
                   <?php 
                      if ($s==$sayfa) {?>
                      <li class="page-item active">
                        <a href="urunfoto.php?sayfa=<?php echo $s; ?>"><?php echo $s; ?></a>
                      </li>
                      <?php } else {?>
                      <li class="page-item">
                        <a class="page-link" href="urunfoto.php?sayfa=<?php echo $s; ?>"><?php echo $s; ?></a>
                      </li>
                      <?php   }
                         }
                    ?>
                  </ul>
                   </nav>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
 <!-- jquery latest version -->
    <script src="assets/js/vendor/jquery-2.2.4.min.js"></script> 
     <!-- bootstrap 4 js -->
     <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/owl.carousel.min.js"></script>
    <script src="assets/js/metisMenu.min.js"></script>
    <script src="assets/js/jquery.slimscroll.min.js"></script>
    <script src="assets/js/jquery.slicknav.min.js"></script>  
    <!-- others plugins -->
    <script src="assets/js/plugins.js"></script>
    <script src="assets/js/scripts.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.9.3/dropzone.min.css" integrity="sha512-jU/7UFiaW5UBGODEopEqnbIAHOI8fO6T99m7Tsmqs2gkdujByJfkCbbfPSN4Wlqlb9TGnsuC0YgUgWkRBK7B9A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="assets/js/dropzone.js"></script>
    <script>
    Dropzone.options.myAwesomeDropzone = {
  paramName: "file",
  maxFilesize: 5, // MB
  accept: function(file, done) {
    if (file.name == "justinbieber.jpg") {
      done("Naha, you don't.");
    } else { done(); }
  }
};
</script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

</body>
</html>
