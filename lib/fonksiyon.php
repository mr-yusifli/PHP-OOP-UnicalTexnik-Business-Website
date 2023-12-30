<?php 
include 'seo.php';
 try {
	$baglanti=new PDO("mysql:host=localhost;dbname=nunica209_kurumsal;charset=utf8","nunica209_kurumsal","Kurumsal2023.");
            $baglanti->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
            }catch(PDOException $e){
                die($e->getMessage());
            }
 
class kurumsal {
    public $normaltitle, $metatitle, $metadesc, $metakey, $metaaut, $metaown, $metacopy, $logoyazi, $face, $twit, $ints, 
    $telno,$whatsapp, $mailadres, $normaladres, $slogan, $referansbaslik, $galeribaslik, $yorumbaslik, $iletisimbaslik, 
    $hizmetlerbaslik, $haritabilgi, $footer ;
    function __construct() {
        try {
   	$baglanti=new PDO("mysql:host=localhost;dbname=nunica209_kurumsal;charset=utf8","nunica209_kurumsal","Kurumsal2023.");
            $baglanti->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
            }catch(PDOException $e){
                die($e->getMessage());
            }

            $ayarcek = $baglanti->prepare('SELECT * from ayarlar');
            $ayarcek->execute();
            $sorguson = $ayarcek->fetch();
    
            $this->normaltitle = $sorguson['title'];
            $this->metatitle = $sorguson['metatitle'];
            $this->metadesc = $sorguson['metadesc'];
            $this->metakey = $sorguson['metakey'];
            $this->metaaut = $sorguson['metaauthor'];
            $this->metaown = $sorguson['metaowner'];
            $this->metacopy = $sorguson['metacopy'];
            $this->logoyazi = $sorguson['logoyazisi'];
            $this->twit = $sorguson['twit'];
            $this->face = $sorguson['face'];
            
            $this->ints = $sorguson['ints'];
            $this->telno = $sorguson['telefonno'];
            $this->whatsapp = $sorguson['whatsapp'];
            $this->mailadres = $sorguson['mailadres'];
            $this->normaladres = $sorguson['adres'];
            $this->haritabilgi = $sorguson['haritabilgi'];
            $this->footer= $sorguson['footer'];

           if($_SESSION['dil']=="az"):

               $this->normaltitle = $sorguson['title'];
               $this->metatitle = $sorguson['metatitle'];
               $this->metadesc = $sorguson['metadesc'];
               $this->metakey = $sorguson['metakey'];


               $this->slogan = $sorguson['slogan_az']; 
               $this->referansbaslik = $sorguson['referansbaslik_az']; 
               $this->galeribaslik = $sorguson['galeribaslik_az'];
               $this->yorumbaslik = $sorguson['yorumbaslik_az'];
               $this->iletisimbaslik = $sorguson['iletisimbaslik_az'];
               $this->hizmetlerbaslik = $sorguson['hizmetlerbaslik_az'];
               $this->ortaklar = $sorguson['ortaklar_az'];
               elseif($_SESSION['dil']=="ru"):

                   $this->normaltitle = $sorguson['title_ru'];
                   $this->metatitle = $sorguson['metatitle_ru'];
                   $this->metadesc = $sorguson['metadesc_ru'];
                   $this->metakey = $sorguson['metakey_ru'];


                 $this->slogan = $sorguson['slogan_ru'];
                 $this->referansbaslik = $sorguson['referansbaslik_ru'];
                 $this->galeribaslik = $sorguson['galeribaslik_ru'];
                 $this->yorumbaslik = $sorguson['yorumbaslik_ru'];
                 $this->iletisimbaslik = $sorguson['iletisimbaslik_ru'];
                 $this->hizmetlerbaslik = $sorguson['hizmetlerbaslik_ru'];
                  $this->ortaklar = $sorguson['ortaklar_ru'];
                 elseif($_SESSION['dil']=="en"):

                     $this->normaltitle = $sorguson['title_en'];
                     $this->metatitle = $sorguson['metatitle_en'];
                     $this->metadesc = $sorguson['metadesc_en'];
                     $this->metakey = $sorguson['metakey_en'];

                 $this->slogan = $sorguson['slogan_en'];
                 $this->referansbaslik = $sorguson['referansbaslik_en'];
                 $this->galeribaslik = $sorguson['galeribaslik_en'];
                 $this->yorumbaslik = $sorguson['yorumbaslik_en'];
                 $this->iletisimbaslik = $sorguson['iletisimbaslik_en'];
                 $this->hizmetlerbaslik = $sorguson['hizmetlerbaslik_en'];
                  $this->ortaklar = $sorguson['ortaklar_en'];
                 elseif($_SESSION['dil']=="tr"):

                     $this->normaltitle = $sorguson['title_tr'];
                     $this->metatitle = $sorguson['metatitle_tr'];
                     $this->metadesc = $sorguson['metadesc_tr'];
                     $this->metakey = $sorguson['metakey_tr'];

                 $this->slogan = $sorguson['slogan_tr'];
                 $this->referansbaslik = $sorguson['referansbaslik_tr'];
                 $this->galeribaslik = $sorguson['galeribaslik_tr'];
                 $this->yorumbaslik = $sorguson['yorumbaslik_tr'];
                 $this->iletisimbaslik = $sorguson['iletisimbaslik_tr'];
                 $this->hizmetlerbaslik = $sorguson['hizmetlerbaslik_tr'];
                  $this->ortaklar = $sorguson['ortaklar_tr'];
            endif;
           
           
        }

        

     function introbak($baglanti){
    $introal = $baglanti->prepare('SELECT * from intro');
    $introal->execute();
    
    $active = "active"; // İlk resim için active class'ı
    
    echo '<div class="desktop-slider">';
    
    while ($sonucum = $introal->fetch(PDO::FETCH_ASSOC)):
        echo '<div class="carousel-item d-block w-100 '.$active.' img-fluid" style="background-image:url('.$sonucum["resimyol"].');"></div>';
        $active = ""; // Sıradaki resimler için active class'ı kaldır
    endwhile;

    echo '</div>';
}

        function hakkimizda($baglanti){
            $introal = $baglanti->prepare('SELECT * from hakkimizda');
            $introal->execute();
            $sonucum = $introal->fetch();
             echo '<p>'.$sonucum["icerik_".$_SESSION['dil']].'</p>' ;
             }

      function hakkimizdakatalog($baglanti){
            $introal = $baglanti->prepare('SELECT * from hakkimizda');
            $introal->execute();
            $sonucum = $introal->fetch();
             echo '<a class="cta-btn align-middle" href="catalogue/catalogue.php" target="_blank">'.$sonucum["catalogue_".$_SESSION['dil']].'</a>' ;
             }

         
      function sloganlar($baglanti){
            $introal = $baglanti->prepare('SELECT * from ayarlar');
            $introal->execute();
            $sonucum = $introal->fetch();
             echo '<h3><span>Unical Texnik</span>&nbsp; '.$sonucum["slogan_".$_SESSION['dil']].'</h3>' ;
             }

    function titleler($baglanti){
        $introal = $baglanti->prepare('SELECT * from ayarlar');
        $introal->execute();
        $sonucum = $introal->fetch();
        echo $sonucum["title_".$_SESSION['dil']];
    }
//    Meta Title
    function metatitleler($baglanti){
        $introal = $baglanti->prepare('SELECT * from ayarlar');
        $introal->execute();
        $sonucum = $introal->fetch();
        echo $sonucum["metatitle_".$_SESSION['dil']];
    }
    function normalmetatitleler($baglanti){
        $introal = $baglanti->prepare('SELECT * from ayarlar');
        $introal->execute();
        $sonucum = $introal->fetch();
        echo $sonucum["metatitle"];
    }
//Meta Desc
    function metadescler($baglanti){
        $introal = $baglanti->prepare('SELECT * from ayarlar');
        $introal->execute();
        $sonucum = $introal->fetch();
        echo $sonucum["metadesc_".$_SESSION['dil']];
    }
    function normalmetadescler($baglanti){
        $introal = $baglanti->prepare('SELECT * from ayarlar');
        $introal->execute();
        $sonucum = $introal->fetch();
        echo $sonucum["metadesc"];
    }
//    Meta Keyler
    function metakeyler($baglanti){
        $introal = $baglanti->prepare('SELECT * from ayarlar');
        $introal->execute();
        $sonucum = $introal->fetch();
        echo $sonucum["metakey_".$_SESSION['dil']];
    }
    function normalmetakeyler($baglanti){
        $introal = $baglanti->prepare('SELECT * from ayarlar');
        $introal->execute();
        $sonucum = $introal->fetch();
        echo $sonucum["metakey"];
    }

//    Title


    function normaltitle($baglanti){
        $introal = $baglanti->prepare('SELECT * from ayarlar');
        $introal->execute();
        $sonucum = $introal->fetch();
        echo $sonucum["title"];
    }

    function hakkimizda_long($baglanti){
            $introal = $baglanti->prepare('SELECT * from hakkimizda');
            $introal->execute();
        
           $sonucum = $introal->fetch();
             echo '<div class="col-xl-5 d-flex align-items-stretch justify-content-center justify-content-lg-start" data-aos="fade-right">
            <img src="'.$sonucum["resim"].'" alt="unical texnik haqqinda" class="img-fluid aboutimg">
          </div>';
             
             echo'<div class="col-xl-7 ps-0 ps-lg-5 pe-lg-1 d-flex align-items-stretch">
            <div class="content d-flex flex-column justify-content-center">
              <h3 data-aos="fade-up">'.$sonucum["baslik"].'</h3>
              <p data-aos="fade-up">
              '.$sonucum["icerik_".$_SESSION['dil']].'
              </p>
           
               <div class="row">
                <div class="col-md-6 icon-box" data-aos="fade-up">
                  <i class="bx bx-receipt"></i>
                  <h4>'.$sonucum["misyonBaslik_".$_SESSION['dil']].'</h4>
                  <p>'.$sonucum["misyon_".$_SESSION['dil']].'</p>
                </div>
                <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="100">
                  <i class="bx bx-cube-alt"></i>
                  <h4>'.$sonucum["vizyonBaslik_".$_SESSION['dil']].'</h4>
                  <p>'.$sonucum["vizyon_".$_SESSION['dil']].'</p>
                </div>
               
              </div>
            ' ;

           
    }

//Menu islemleri 
  function linkler($baglanti){
    $linkal=$baglanti->prepare("select * from linkler where id between 5 and 6");
    $linkal->execute();
    while($linkson=$linkal->fetch(PDO::FETCH_ASSOC)): 
        echo'<li><a href="#'.$linkson["etiket"].'">'.$linkson["ad_".$_SESSION["dil"]].'</a></li>'; 
    endwhile;
  }

  function linklerhakkimizda($baglanti){
    $linkal=$baglanti->prepare("select * from linkler where id=9");
    $linkal->execute();
    while($linkson=$linkal->fetch(PDO::FETCH_ASSOC)): 
        echo'<li>'.$linkson["ad_".$_SESSION["dil"]].'</li>'; 
    endwhile;
  }


   function linkavad($baglanti){
    $linkal=$baglanti->prepare("select * from linkler where id=8");
    $linkal->execute();
   $linkson=$linkal->fetch(PDO::FETCH_ASSOC);
       
        echo'<a href="'.$linkson["etiket"].'"><span>'.$linkson["ad_".$_SESSION["dil"]].'</span><i class="bi bi-chevron-down"></i></a>';
        
  }

function linkavadd($baglanti){
    $linkal=$baglanti->prepare("select * from linkler where id=8");
    $linkal->execute();
   $linkson=$linkal->fetch(PDO::FETCH_ASSOC);
       
        echo'<h2 class="fw-light text-center text-lg-start mt-4 mb-0 letter">'.$linkson["ad_".$_SESSION["dil"]].'</h2>';
        
  }
function linkavaddd($baglanti){
    $linkal=$baglanti->prepare("select * from linkler where id=8");
    $linkal->execute();
   $linkson=$linkal->fetch(PDO::FETCH_ASSOC);
       
        echo'<h4>'.$linkson["ad_".$_SESSION["dil"]].'</h4>';
        
  }

function kelimesiteharitasi($baglanti){
    $linkal=$baglanti->prepare("select * from kelimeler where id=5");
    $linkal->execute();
   $linkson=$linkal->fetch(PDO::FETCH_ASSOC);
       
        echo'<h4>'.$linkson["kelime_".$_SESSION["dil"]].'</h4>';
        
  }

function kelimehizmetsartlari($baglanti){
    $linkal=$baglanti->prepare("select * from linklerdiger where id=6");
    $linkal->execute();
   $linkson=$linkal->fetch(PDO::FETCH_ASSOC);
       
       echo'<li><i class="bx bx-chevron-right"></i> <a href="'.$linkson["etiket"].'">'.$linkson["ad_".$_SESSION["dil"]].'</a></li>';
        
  }

function kelimehizmetsartlarii($baglanti){
   $hizmetsartial=$baglanti->prepare("select * from hizmetsartlari");
   $hizmetsartial->execute();
   $hizmetsartison=$hizmetsartial->fetch(PDO::FETCH_ASSOC);
       echo '<h2>'.$hizmetsartison["baslik_".$_SESSION["dil"]].'</h2>';
      
        
  }

function sitehizmetsartlari($baglanti) {
  $hizmetsartial = $baglanti->prepare("SELECT * FROM hizmetsartlari");
  $hizmetsartial->execute();

  while ($hizmetsart = $hizmetsartial->fetch(PDO::FETCH_ASSOC)) {
    echo '<div class="container mt-4">';
    echo '<div class="row">';
    echo '<div class="col-md-12">';
    echo '<h4>.'. $hizmetsart["baslik_".$_SESSION["dil"]] . '</h4><hr>';
    echo '<p>' . $hizmetsart["icerik_".$_SESSION["dil"]] . '</p><hr>';
    echo '</div>';
    echo '</div>';
    echo '</div>';
  }
}





function kelimeunvan($baglanti){
    $linkal=$baglanti->prepare("select * from kelimeler where id=6");
    $linkal->execute();
   $linkson=$linkal->fetch(PDO::FETCH_ASSOC);
       
        echo'<h3>'.$linkson["kelime_".$_SESSION["dil"]].'</h3>';
        
  }

function kelimehizmetsartlarivepolitika($baglanti){
    $linkal=$baglanti->prepare("select * from kelimeler where id=19");
    $linkal->execute();
   $linkson=$linkal->fetch(PDO::FETCH_ASSOC);
       
        echo'<h1>'.$linkson["kelime_".$_SESSION["dil"]].'</h1>';
        
  }


  function kelimeunvann($baglanti){
    $linkal=$baglanti->prepare("select * from kelimeler where id=6");
    $linkal->execute();
   $linkson=$linkal->fetch(PDO::FETCH_ASSOC);
       
        echo'<h4>'.$linkson["kelime_".$_SESSION["dil"]].'</h4>';
        
  }

function buletenbaslik($baglanti){
    $linkal=$baglanti->prepare("select * from kelimeler where id=8");
    $linkal->execute();
   $linkson=$linkal->fetch(PDO::FETCH_ASSOC);
       
        echo'<h4>'.$linkson["kelime_".$_SESSION["dil"]].'</h4>';
        
  }

  function buletenicerik($baglanti){
    $linkal=$baglanti->prepare("select * from kelimeler where id=7");
    $linkal->execute();
   $linkson=$linkal->fetch(PDO::FETCH_ASSOC);
       
        echo'<p>'.$linkson["kelime_".$_SESSION["dil"]].'</p>';
        
  }

    function buletenbuton($baglanti){
    $linkal=$baglanti->prepare("select * from kelimeler where id=9");
    $linkal->execute();
   $linkson=$linkal->fetch(PDO::FETCH_ASSOC);
       
        echo $linkson["kelime_".$_SESSION["dil"]];
        
  }

    function iletisimbuton($baglanti){
    $linkal=$baglanti->prepare("select * from kelimeler where id=10");
    $linkal->execute();
   $linkson=$linkal->fetch(PDO::FETCH_ASSOC);
       
        echo $linkson["kelime_".$_SESSION["dil"]];
        
  }

    function iletisimname($baglanti){
    $linkal=$baglanti->prepare("select * from kelimeler where id=11");
    $linkal->execute();
   $linkson=$linkal->fetch(PDO::FETCH_ASSOC);
       
        echo $linkson["kelime_".$_SESSION["dil"]];
        
  }
   function iletisimemail($baglanti){
    $linkal=$baglanti->prepare("select * from kelimeler where id=12");
    $linkal->execute();
   $linkson=$linkal->fetch(PDO::FETCH_ASSOC);
       
        echo $linkson["kelime_".$_SESSION["dil"]];
        
  }
  function iletisimkonu($baglanti){
    $linkal=$baglanti->prepare("select * from kelimeler where id=13");
    $linkal->execute();
   $linkson=$linkal->fetch(PDO::FETCH_ASSOC);
       
        echo $linkson["kelime_".$_SESSION["dil"]];
        
  }
  function iletisimmesaj($baglanti){
    $linkal=$baglanti->prepare("select * from kelimeler where id=14");
    $linkal->execute();
   $linkson=$linkal->fetch(PDO::FETCH_ASSOC);
       
        echo $linkson["kelime_".$_SESSION["dil"]];
        
  }
    function linkelaqe($baglanti){
    $linkal=$baglanti->prepare("select * from linklerdiger where id=5");
    $linkal->execute();
   $linkson=$linkal->fetch(PDO::FETCH_ASSOC);
       
        echo'<li><a href="'.$linkson["etiket"].'"><span>'.$linkson["ad_".$_SESSION["dil"]].'</a></li>';
  }

    function linkelaqee($baglanti){
    $linkal=$baglanti->prepare("select * from linklerdiger where id=5");
    $linkal->execute();
   $linkson=$linkal->fetch(PDO::FETCH_ASSOC);
       
        echo'<li>'.$linkson["ad_".$_SESSION["dil"]].'</li>';
  }

    function linkesas($baglanti){
    $linkal=$baglanti->prepare("select * from linkler where id=10");
    $linkal->execute();
   $linkson=$linkal->fetch(PDO::FETCH_ASSOC);
       
        echo'<li><a class="active" href="'.$linkson["etiket"].'">'.$linkson["ad_".$_SESSION["dil"]].'</a></li>';
  }
   function linkesass($baglanti){
    $linkal=$baglanti->prepare("select * from linkler where id=10");
    $linkal->execute();
   $linkson=$linkal->fetch(PDO::FETCH_ASSOC);
       
        echo'<li><i class="bx bx-chevron-right"></i> <a href="'.$linkson["etiket"].'">'.$linkson["ad_".$_SESSION["dil"]].'</a></li>';
  }
function linkhak($baglanti){
    $linkal=$baglanti->prepare("select * from linklerdiger");
    $linkal->execute();
   $linkson=$linkal->fetch(PDO::FETCH_ASSOC);
       
        echo'<a href="'.$linkson["etiket"].'"><span>'.$linkson["ad_".$_SESSION["dil"]].'</span><i class="bi bi-chevron-down"></i></a>';
        
  }

function linkhakk($baglanti){
    $linkal=$baglanti->prepare("select * from linklerdiger where id between 2 and 4");
    $linkal->execute();
   while($linkson=$linkal->fetch(PDO::FETCH_ASSOC)):
      echo'<li><a href="'.$linkson["etiket"].'">'.$linkson["ad_".$_SESSION["dil"]].'</a></li>';
   endwhile;     
  }
function linkhakkk($baglanti){
    $linkal=$baglanti->prepare("select * from linklerdiger where id between 2 and 4");
    $linkal->execute();
   while($linkson=$linkal->fetch(PDO::FETCH_ASSOC)):
      echo'<li><i class="bx bx-chevron-right"></i><a href="'.$linkson["etiket"].'">'.$linkson["ad_".$_SESSION["dil"]].'</a></li>';
   endwhile;     
  }


  //pages klasorundeki sayfalar icin 
  function linklerpages($baglanti){
    $linkal=$baglanti->prepare("select * from linkler where id between 5 and 6");
    $linkal->execute();

    

    while($linkson=$linkal->fetch(PDO::FETCH_ASSOC)):
       
        echo'<li><a href="../#'.$linkson["etiket"].'">'.$linkson["ad_".$_SESSION["dil"]].'</a></li>';
        
    endwhile;
  }

  function linkesaspages($baglanti){
    $linkal=$baglanti->prepare("select * from linkler where id=10");
    $linkal->execute();
   $linkson=$linkal->fetch(PDO::FETCH_ASSOC);
       
        echo'<li><a class="active" href="'.$linkson["etiket"].'">'.$linkson["ad_".$_SESSION["dil"]].'</a></li>';
  }
  function linkhakpages($baglanti){
    $linkal=$baglanti->prepare("select * from linklerdiger");
    $linkal->execute();
   $linkson=$linkal->fetch(PDO::FETCH_ASSOC);
       
        echo'<a href="../'.$linkson["etiket"].'"><span>'.$linkson["ad_".$_SESSION["dil"]].'</span><i class="bi bi-chevron-down"></i></a>';
  }
function linkhakkpages($baglanti){
    $linkal=$baglanti->prepare("select * from linklerdiger where id between 2 and 4");
    $linkal->execute();
   while($linkson=$linkal->fetch(PDO::FETCH_ASSOC)):
      echo'<li><a href="../'.$linkson["etiket"].'">'.$linkson["ad_".$_SESSION["dil"]].'</a></li>';
   endwhile;     
  }
   function linkavadpages($baglanti){
    $linkal=$baglanti->prepare("select * from linkler where id=8");
    $linkal->execute();
   $linkson=$linkal->fetch(PDO::FETCH_ASSOC);
       
        echo'<a href="'.$linkson["etiket"].'"><span>'.$linkson["ad_".$_SESSION["dil"]].'</span><i class="bi bi-chevron-down"></i></a>';
        
  }

 

    function linkelaqepages($baglanti){
    $linkal=$baglanti->prepare("select * from linklerdiger where id=5");
    $linkal->execute();
   $linkson=$linkal->fetch(PDO::FETCH_ASSOC);
       
        echo'<li><a href="../'.$linkson["etiket"].'"><span>'.$linkson["ad_".$_SESSION["dil"]].'</a></li>';
  }
      function linksrvicespages($baglanti){
    $linkal=$baglanti->prepare("select * from linklerdiger where id=3");
    $linkal->execute();
   $linkson=$linkal->fetch(PDO::FETCH_ASSOC);
       
         echo $linkson["ad_".$_SESSION["dil"]];
  }
    function linkourpartnespages($baglanti){
    $linkal=$baglanti->prepare("select * from linklerdiger where id=4");
    $linkal->execute();
   $linkson=$linkal->fetch(PDO::FETCH_ASSOC);
       
         echo $linkson["ad_".$_SESSION["dil"]];
  }
    function linkelaqeepages($baglanti){
    $linkal=$baglanti->prepare("select * from linklerdiger where id=5");
    $linkal->execute();
   $linkson=$linkal->fetch(PDO::FETCH_ASSOC);
       
         echo $linkson["ad_".$_SESSION["dil"]];
  }
      function linkaboutpages($baglanti){
    $linkal=$baglanti->prepare("select * from linklerdiger where id=2");
    $linkal->execute();
   $linkson=$linkal->fetch(PDO::FETCH_ASSOC);
       
         echo $linkson["ad_".$_SESSION["dil"]];
  }
///son


   
//menu islemleri son

        
// '.$sonucum["baslik"].'
// '.$sonucum["icerik"].'

    function servicess($baglanti){
        $introal = $baglanti->prepare('SELECT * from hizmetler');
        $introal->execute();
   
       
         echo '<div class="row">';
         while($sonucum = $introal->fetch(PDO::FETCH_ASSOC)):
            echo '<div class="col-lg-12">
            <div class="box wow fadeInTop">
            
            <p class="description">'.$sonucum["icerik_".$_SESSION['dil']].'</p>
            </div>
            </div>';
         endwhile;

         echo'</div>';
        }



         function referans($baglanti){
            $introal = $baglanti->prepare('SELECT * from referanslar');
            $introal->execute();
           
            while ($sonucum = $introal->fetch(PDO::FETCH_ASSOC)):
              echo ' 
               <div class="col-sm-6 col-md-4 col-lg-3 item">
                 <a href="'.$sonucum["resimyol"].'" data-lightbox="photos">
                    <img class="img-fluid certificate" src="'.$sonucum["resimyol"].'" alt="referans-'.$sonucum["id"].'"/>
                </a></div>
             ';  
              endwhile;
            
            }

            function galeri($baglanti){
                $introal = $baglanti->prepare('SELECT * from galeri');
                $introal->execute();
               
 
                while ($sonucum = $introal->fetch(PDO::FETCH_ASSOC)):
                   echo  '<div class="col-sm-6 col-md-4 col-lg-3 item">
                <a href="'.$sonucum["resimyol"].'" data-lightbox="photos">
                    <img class="img-fluid" src="'.$sonucum["resimyol"].'" alt="unicaltexnik,generator,generator satisi,marsol,kompressor">
                </a>
            </div>';

                  endwhile;
    //'.$sonucum["resimyol"].'
           
                echo '</div>';
                }



    function clients($baglanti){
                $introal = $baglanti->prepare('SELECT * from partnyor');
                $introal->execute();
               
 
                while ($sonucum = $introal->fetch(PDO::FETCH_ASSOC)):
                   echo  '<div class="col-lg-3 col-md-4 col-xs-6">
                <div class="client-logo">
                  <a href="'.$sonucum["icerik"].'" target="_blank">
                    <img src="'.$sonucum["resimyol"].'" class="img-fluid" alt="Generator,generator satisi,kompressor,unicaltexnik">
                    </a>
                </div>
            </div>';

                  endwhile;
    //'.$sonucum["resimyol"].'
           
                echo '</div>';
                }

     function clientss($baglanti){
                $introal = $baglanti->prepare('SELECT * from partnyor');
                $introal->execute();
               
 
                while ($sonucum = $introal->fetch(PDO::FETCH_ASSOC)):
                   echo  '<div class="col-lg-3 col-md-4 col-xs-6">
                <div class="client-logo">
                    <img src="../'.$sonucum["resimyol"].'" class="img-fluid" alt="unicaltexnik">
                </div>
            </div>';

                  endwhile;
              }



                function yorumlar($baglanti){
                    $introal = $baglanti->prepare('SELECT * from yorumlar');
                    $introal->execute();
                    echo '<div class="section-header">
                    <h2>Müşteri Yorumları</h2>
                    <p>'; echo $this->yorumbaslik; echo '</p>
                    </div>
                    <div class="owl-carousel testimonials-carousel">';
                    while ($sonucum = $introal->fetch(PDO::FETCH_ASSOC)):
                    echo '<div class="testimonial-item">
                                 <p>
                                <img src="img/sol.png" class="quote-sign-left" />
                                '.$sonucum["icerik"].' 
                                <img src="img/sag.png" class="quote-sign-right" />
                                </p>
                                <img src="img/yorum.jpg" class="testimonial-img" alt="" />
                                <h3>'.$sonucum["isim"].'</h3>
                                </div>';
                            endwhile;
                    }
                
                  
        
    function categories($baglanti){
                $introal = $baglanti->prepare('SELECT * from category');
                $introal->execute();
               
 
                while ($sonucum = $introal->fetch(PDO::FETCH_ASSOC)):
                    $kisalt = $sonucum["icerik"];

                   echo  '<a class="box" href="category.php?kategori='.sefLink($sonucum["kategori_ad"]).'">
                <div class="inner">
                    <div class="icon">
                        <img class="img-fluid cat" src="'.$sonucum["resimyol"].'" alt="'.$sonucum["kategori_ad"].'"></div>
                    <h3>'.substr($kisalt ,'0','50')."..".'</h3>
                    <p></p>
                </div>
            </a>';

                  endwhile;
    //'.$sonucum["resimyol"].'
           
                echo '</div>';
                }
       
}

  


?>



