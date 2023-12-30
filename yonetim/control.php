<?php 
include_once("assets/fonksiyon.php");
include_once("db.php");
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
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/admin-lte/3.0.5/css/adminlte.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/bootstrap.tagsinput/0.8.0/bootstrap-tagsinput.css">
   <script src="https://cdn.ckeditor.com/4.13.0/standard/ckeditor.js"></script>
    <style>
      
        .logo i{
            font:24px bold;
            color:white;
        }
  
         .inp{
            height:46px;
         }
         .sel{
            height: 46px !important;;
            border-radius: 5px;
         }
         .kyd{
            top:10px;
            float:right;
            left:50px;
            height: 40px;
         }

         .fyd{
            height:40px;
            margin-left:10px;
         }
        .bg-white{
            background-color:#efefef !important;
        }
.flag-addon img {
    width: 40px;
    height: 40px;
    margin-top: 7px;
    margin-right: 3px;
}
}

.flag-addon {
    padding: 2px;
}

.slg{
    margin-top:20px;
}
/*.custom-mt{
     margin-top: 80px;
     margin-bottom:80px;
}*/
 .bootstrap-tagsinput .tag {
    width:100%;
      margin-top:10px;
      margin-right: 10px;
      color: white !important;
      background-color: #0d6efd;
      padding: 0.4rem;
    }
input[type="text"].bootstrap-tagsinput input[type="text"] {
  margin-top: 10px;
  margin-right: 10px;
      color: white !important;
      background-color: #0d6efd;
      padding: 0.4rem;
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
             <a href="control.php?sayfa=anasayfa">
                <img src="assets/images/logo/logo.png" alt="UnikalTexnik" class="img-fluid">
                </a>
                </div>
            </div>
            <div class="main-menu">
                <div class="menu-inner">
                    <nav>
            <ul class="metismenu" id="menu">
               
                <li><a href="control.php?sayfa=introayar"><i class="ti-image"></i> <span>Slider Ayarları</span></a></li>
                <li><a href="control.php?sayfa=aboneler"><i class="ti-share-alt"></i> <span>Site Aboneleri</span></a></li>
                <li><a href="control.php?sayfa=hakkimiz"><i class="ti-flag"></i> <span>Hakkımızda Ayarları</span></a></li>
                <li><a href="control.php?sayfa=hizmetler"><i class="ti-medall"></i> <span>Hizmetlerimiz Ayarları</span></a></li>
                <li><a href="control.php?sayfa=ref"><i class="ti-eye"></i> <span>Sertifikalar Ayarları</span></a></li>
                <li><a href="control.php?sayfa=galeriayar"><i class="ti-car"></i> <span>Galeri</span></a></li>
                <li><a href="control.php?sayfa=partnyorayar"><i class="ti-marker"></i> <span>Şirketler Ayarları</span></a></li>
             <li><a href="control.php?sayfa=yorumlar"><i class="ti-comment-alt"></i> <span>Müşteri Yorumları</span></a></li>
      <li><a href="control.php?sayfa=hizmetsartlari"><i class="ti-book"></i> <span>Site Hizmet Şartları</span></a></li>

                <li><a href="javascript:void(0)" aria-expanded="true">
                <i class="ti-harddrives"></i> <span>Ürün yönetimi</span></a>
                <ul class="collapse">
                <li><a href="control.php?sayfa=category"><i class="ti-book"></i> <span>Kategori yönetimi</span></a></li>
                <li><a href="control.php?sayfa=alt_kategoriler"><i class="ti-files"></i> <span> Alt Kategoriler</span></a></li>
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
            <!-- header area start -->
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
                <!-- sales report area start -->
               <div class="row">
                    <div class="col-lg-12 mt-2 bg-white text-center" style="min-height:500px;">
                   
                   
                    <?php 
                     @$sayfa = $_GET["sayfa"];
                     switch($sayfa) :
                     case "siteayar":
                     $yonetim->siteayar($baglanti); 
                     break;
                     case "anasayfa":
                     $yonetim->anasayfa($baglanti); 
                     break;
                     case "aboneler":
                     $yonetim->aboneler($baglanti); 
                     break;
                     case "cikis":
                     $yonetim->cikis($baglanti); 
                     break;
                     case "introayar":
                     $yonetim->introayar($baglanti); 
                     break;
                     case "introresimguncelle":
                     $yonetim->introresimguncelleme($baglanti); 
                     break;
                     case "introresimsil":
                     $yonetim->introsil($baglanti); 
                     break;
                     case "introresimekle":
                     $yonetim->introresimekleme($baglanti); 
                     break;
                     
                     case "galeriayar":
                     $yonetim->galeriayar($baglanti); 
                     break;
                    
                     case "galeriresimguncelle":
                     $yonetim->galeriresimguncelleme($baglanti); 
                     break;
                     case "galeriresimsil":
                     $yonetim->galerisil($baglanti); 
                     break;
                     case "galeriresimekle":
                     $yonetim->galeriresimekleme($baglanti); 
                     break;
                      case "partnyorayar":
                     $yonetim->partnyorayar($baglanti); 
                     break;
                      case "partnyorayaricerik":
                     $yonetim->partnyorayaricerik($baglanti); 
                     break;
                     case "partnyorresimguncelle":
                     $yonetim->partnyorresimguncelleme($baglanti); 
                     break;
                     case "partnyorresimsil":
                     $yonetim->partnyorsil($baglanti); 
                     break;
                     case "partnyorresimekle":
                     $yonetim->partnyorresimekleme($baglanti); 
                     break;
                     case "hakkimiz":
                     $yonetim->hakkimizda($baglanti); 
                     break;
                     //====Urunler ====//
                     //----category-----// 
                     case "category":
                     $yonetim->category($baglanti); 
                     break;
                     case "secimet":
                        $yonetim->secimet($baglanti); 
                    break;
                    case "kategoriguncelleimg":
                        $yonetim->kategoriguncelleimg($baglanti); 
                    break;
                     case "kategoriekle":
                     $yonetim->kategoriekle($baglanti); 
                     break;
                     case "kategoriguncelle":
                     $yonetim->kategoriguncelle($baglanti); 
                     break;
                     case "kategorisil":
                        $yonetim->kategorisil($baglanti); 
                     break;
                     //----category son-----//

                    //--Alt kategoriler --//

                     case "alt_kategoriler":
                        $yonetim->alt_kategoriler($baglanti); 
                     break;
                     case "secimetaltkategori":
                        $yonetim->secimetaltkategori($baglanti); 
                     break;
                     case "altkategoriguncelleimg":
                        $yonetim->altkategoriguncelleimg($baglanti); 
                     break;
                     case "alt_kategoriekle":
                        $yonetim->alt_kategoriekle($baglanti); 
                     break;
                     case "altkategoriguncelle":
                        $yonetim->altkategoriguncelle($baglanti); 
                     break;
                     case "altkategorisil":
                        $yonetim->altkategorisil($baglanti); 
                     break;

                    //--Alt kategoriler Son --//

                     //urunler 
                     case "products":
                        $yonetim->products($baglanti); 
                     break;
                        case "secimett":
                           $yonetim->secimett($baglanti); 
                       break;
                       case "urungaleri":
                           $yonetim->urungaleri($baglanti); 
                       break;
                       case "urunfotoyukle":
                           $yonetim->urunfotoyukle($baglanti); 
                       break;
                        case "urunekle":
                        $yonetim->urunekle($baglanti); 
                        break;
                        case "urunguncelle":
                        $yonetim->urunguncelle($baglanti); 
                        break;
                       case "urunsil":
                           $yonetim->urunsil($baglanti); 
                       break;
                     //==urunler kismi son ===/
                     case "hizmetler":
                     $yonetim->hizmetlerhepsi($baglanti); 
                     break;
                     case "hizmetguncelle":
                     $yonetim->hizmetguncelleme($baglanti); 
                     break;
                     case "hizmetsil":
                     $yonetim->hizmetsil($baglanti); 
                     break;
                     case "hizmetekle":
                     $yonetim->hizmetekleme($baglanti); 
                     break;
                     case "ref":
                     $yonetim->referanslarhepsi($baglanti); 
                     break;
                     case "refsil":
                     $yonetim->refsil($baglanti); 
                     break;
                     case "refekle":
                     $yonetim->refekleme($baglanti); 
                     break;
                     case "yorumlar":
                     $yonetim->yorumlarhepsi($baglanti); 
                     break;
                     case "yorumlarguncelle":
                     $yonetim->yorumlarguncelleme($baglanti); 
                     break;
                     case "yorumlarsil":
                     $yonetim->yorumlarsil($baglanti); 
                     break;
                     case "yorumlarekle":
                     $yonetim->yorumlarekleme($baglanti); 
                     break;
                     case "gelenmesaj":
                     $yonetim->gelenmesajlar($baglanti); 
                     break;
                     case "mesajoku":
                     $yonetim->mesajdetay($baglanti,$_GET["id"]); 
                     break;
                     case "mesajarsivle":
                     $yonetim->mesajarsivle($baglanti,$_GET["id"]); 
                     break;
                     case "mesajsil":
                     $yonetim->mesajsil($baglanti,$_GET["id"]); 
                     break;
                     case "mailayar":
                     $yonetim->mailayar($baglanti); 
                     break;
                     case "ayarlar":
                     $yonetim->ayarlar($baglanti); 
                     break;
                     case "kulayar":
                     $yonetim->kullistele($baglanti); 
                     break;
                     case "yonsil":
                     $yonetim->yonsil($baglanti,$_GET["id"]); 
                     break;
                     case "yonekle":
                     $yonetim->yonekle($baglanti); 
                     break;
                     case "hizmetsartlari":
                     $yonetim->hizmetsartlari($baglanti); 
                     break;
                     case "hizmetsartiekle":
                     $yonetim->hizmetsartiekle($baglanti); 
                     break;
                      case "hizmetsartiguncelle":
                     $yonetim->hizmetsartiguncelle($baglanti); 
                     break;
                     case "hizmetsartisil":
                     $yonetim->hizmetsartisil($baglanti); 
                     break;
                     default:
                     $yonetim->siteayar($baglanti);
                     endswitch;
                     ?>
                </div>
            </div>
            </div>
        </div>
        <!-- main content area end -->
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
    <script src="assets/js/dropzone.js"></script>
    <script src="assets/summernote/summernote-tr-TR.min.js"></script>
    <script src="assets/summernote/summernote-bs4.min.js"></script>
   <script>
         $('#summernote').summernote({
          lang: 'tr-TR',
          height: 150,
          placeholder: 'Ürün detaylı açıklaması giriniz......'
        });

          $('#summernote2').summernote({
          lang: 'tr-TR',
          height: 150
        });
           $('#summernote3').summernote({
          lang: 'tr-TR',
          height: 150
        });
            $('#summernote4').summernote({
          lang: 'tr-TR',
          height: 150
         
        });
   
   </script>

 <link rel="stylesheet" type="text/css" href="assets/datatables/datatables-buttons/css/buttons.bootstrap4.min.css"> 
   <script type="text/javascript" src="https://cdn.datatables.net/v/bs-3.3.7/jq-2.2.4/jszip-3.1.3/pdfmake-0.1.27/dt-1.10.15/b-1.3.1/b-html5-1.3.1/b-print-1.3.1/r-2.1.1/rg-1.0.0/datatables.min.js"></script>
<script>
        $('#myTable').DataTable({
             "pageLength": 20, 
            language: {
                info: "_TOTAL_ kayıttan _START_ - _END_ kayıt gösteriliyor.",
                infoEmpty:      "Gösterilecek hiç kayıt yok.",
                loadingRecords: "Kayıtlar yükleniyor.",
                zeroRecords: "Tablo boş",
                search: "Arama:",
                infoFiltered:   "(toplam _MAX_ kayıttan filtrelenenler)",
                buttons: {
                    copyTitle: "Panoya kopyalandı.",
                    copySuccess:"Panoya %d satır kopyalandı",
                    copy: "Kopyala",
                    print: "Yazdır",
                },

                paginate: {
                    first: "İlk",
                    previous: "Önceki",
                    next: "Sonraki",
                    last: "Son"
                },
            },
            dom: 'Bfrtip',
            buttons: [
                'copy', 'excel', 'pdf', 'print'
            ],
            responsive: true
        });
</script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.9.3/dropzone.min.css" integrity="sha512-jU/7UFiaW5UBGODEopEqnbIAHOI8fO6T99m7Tsmqs2gkdujByJfkCbbfPSN4Wlqlb9TGnsuC0YgUgWkRBK7B9A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

<script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.7.2/dropzone.js"></script>
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

 <script type="text/javascript">
                           CKEDITOR.replace( 'editor1',
                 {
                  filebrowserBrowseUrl : 'ckfinder/ckfinder.html',
                  filebrowserImageBrowseUrl : 'ckfinder/ckfinder.html?type=Images',
                  filebrowserFlashBrowseUrl : 'ckfinder/ckfinder.html?type=Flash',
                  filebrowserUploadUrl : 'ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files',
                  filebrowserImageUploadUrl : 'ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images',
                  filebrowserFlashUploadUrl : 'ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash',
                  forcePasteAsPlainText: true
                } 

                );
              </script>
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/css/bootstrap.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/js/bootstrap.min.js"></script>
<!-- Bootstrap Tags Input dosyaları -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-tagsinput/0.8.0/bootstrap-tagsinput.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-tagsinput/0.8.0/bootstrap-tagsinput.min.js"></script>
 <script>
    $(function () {
      $('input')
        .on('change', function (event) {
          var $element = $(event.target);
          var $container = $element.closest('.example');

          if (!$element.data('tagsinput')) return;

          var val = $element.val();
          if (val === null) val = 'null';
          var items = $element.tagsinput('items');

          $('code', $('pre.val', $container)).html(
            $.isArray(val)
              ? JSON.stringify(val)
              : '"' + val.replace('"', '\\"') + '"'
          );
          $('code', $('pre.items', $container)).html(
            JSON.stringify($element.tagsinput('items'))
          );
        })
        .trigger('change');
    });
  </script>


</body>

</html>
