<?php 
include_once("assets/fonksiyon.php");
$yonetim = new yonetim;
$yonetim->konrolet("cot");
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
                      <h2 class="text-center text-success mt-3 mb-3">Çoklu resim yükleme işlemleri</h2><hr>

                      <div align="right" class="col-md-9 mb-2 text-right" style="float: right;">
                     
                        <a class="btn btn-success" href="urun-galeri.php?urun_id=<?php echo $_GET['urun_id'];?>"><i class="fa fa-plus" aria-hidden="true"></i> Yüklenen Resimleri Gör</a>
                      </div>
                      <div class="clearfix"></div>
                    </div><br><hr>
                    <div class="x_content">
                      <p class="text-danger text-center mb-2">Yüklenecek resimlerin bulunduğu klasöre giderek tamamını tek seferde seçerek yükleyebilirsiniz.</p>
                      
                      <form action="urungaleri.php" class="dropzone" id="my-awesome-dropzone" >

                        <input type="hidden" name="urun_id" value="<?php echo $_GET['urun_id'];  ?>">
                        
                      </form>

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
   

</body>

</html>
