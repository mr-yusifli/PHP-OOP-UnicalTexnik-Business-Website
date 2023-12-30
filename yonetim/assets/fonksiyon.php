<?php 
ob_start();

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
//error_reporting(0);

include 'seo.php';
include 'fligran.php';
 try {
 $baglanti=new PDO("mysql:host=localhost;dbname=nunica209_kurumsal;charset=utf8","nunica209_kurumsal","Kurumsal2023.");
            $baglanti->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
            
            }catch(PDOException $e){
                die($e->getMessage());
            }
 //error_reporting(0);
class yonetim 
{
   
    private $veriler=array();

    function sorgum($vt,$sorgu,$tercih=0){
        $al = $vt->prepare($sorgu);
        $al->execute();
        if($tercih==1):
            return $al->fetch();
            elseif($tercih==2):
            return $al;
        endif;
    

    }//genel sorgu

  
  function siteayar($vt) {
        $sonuc=self::sorgum($vt,"SELECT * FROM ayarlar",1 );
       if(!$_POST):
     echo'<form action="" method="POST">
        <div class="row">
        <div class="col-lg-8 mx-auto mt-2">
        <h3 class="text-info">Site Ayarları
     
        </h3>
        </div>
        <div class="col-lg-8 mx-auto border">
        <div class="row">
     <div class="col-lg-3 border-right pt-3 text-center">
            <span id="siteayarfont" class="text-center font-weight-bold my-4 slg">Title</span>
        </div>
        <div class="col-lg-9 p-1">
            <div class="input-group align-items-center">
                <span class="input-group-addon flag-addon"><img src="assets/images/flags/azerbaijan.png" alt="Azerbaijan Flag"></span>
                <input type="text" name="title" class="form-control mt-2" value="'.$sonuc["title"].'"/>
            </div>
            <div class="input-group align-items-center">
                <span class="input-group-addon flag-addon"><img src="assets/images/flags/turkey.png" alt="Turkey Flag"></span>
                <input type="text" name="title_tr" class="form-control mt-2" value="'.$sonuc["title_tr"].'"/>
            </div>
            <div class="input-group align-items-center">
                <span class="input-group-addon flag-addon"><img src="assets/images/flags/england.png" alt="United Kingdom Flag"></span>
                <input type="text" name="title_en" class="form-control mt-2" value="'.$sonuc["title_en"].'"/>
            </div>
            <div class="input-group align-items-center">
                <span class="input-group-addon flag-addon"><img src="assets/images/flags/russian.png" alt="Russia Flag" style="height:50px;"></span>
                <input type="text" name="title_ru" class="form-control mt-2" value="'.$sonuc["title_ru"].'"/>
            </div>
        </div>
        </div>
        </div>
        </div>
        <!--ara-->
        <div class="col-lg-8 mx-auto border">
        <div class="row">
        <div class="col-lg-3 border-right pt-3 text-center">
            <span id="siteayarfont" class="text-center font-weight-bold my-4 slg">Meta Title</span>
        </div>
        <div class="col-lg-9 p-1">
            <div class="input-group align-items-center">
                <span class="input-group-addon flag-addon"><img src="assets/images/flags/azerbaijan.png" alt="Azerbaijan Flag"></span>
               <textarea name="metatitle" id="myTextArea" style="width:532px; height: 150px; border: 1px solid #ccc; padding: 5px;">'.$sonuc['metatitle'].'</textarea>
            </div>
            <div class="input-group align-items-center">
                <span class="input-group-addon flag-addon"><img src="assets/images/flags/turkey.png" alt="Turkey Flag"></span>
                <textarea name="metatitle_tr" id="myTextArea" style="width:532px; height: 150px; border: 1px solid #ccc; padding: 5px; margin-top:5px;">'.$sonuc['metatitle_tr'].'</textarea>
            </div>
            <div class="input-group align-items-center">
                <span class="input-group-addon flag-addon"><img src="assets/images/flags/england.png" alt="United Kingdom Flag"></span>
               <textarea name="metatitle_en" id="myTextArea" style="width:532px; height: 150px; border: 1px solid #ccc; padding: 5px;margin-top:5px;">'.$sonuc['metatitle_en'].'</textarea>
            </div>
            <div class="input-group align-items-center">
                <span class="input-group-addon flag-addon"><img src="assets/images/flags/russian.png" alt="Russia Flag" style="height:50px;"></span>
               <textarea name="metatitle_ru" id="myTextArea" style="width:532px; height: 150px; border: 1px solid #ccc; padding: 5px;margin-top:5px;">'.$sonuc['metatitle_ru'].'</textarea>
            </div>
        </div>
        </div>
        </div>
        <!--ara-->
        <div class="col-lg-8 mx-auto border">
        <div class="row">
        <div class="col-lg-3 border-right pt-3 text-left">
        <span id="siteayarfont">Sayfa Acıklama</span>
        </div>
        <div class="col-lg-9 p-1">
            <div class="input-group align-items-center">
                <span class="input-group-addon flag-addon"><img src="assets/images/flags/azerbaijan.png" alt="Azerbaijan Flag"></span>
               <textarea name="metadesc" id="myTextArea" style="width:532px; height: 150px; border: 1px solid #ccc; padding: 5px;">'.$sonuc['metadesc'].'</textarea>
            </div>
            <div class="input-group align-items-center">
                <span class="input-group-addon flag-addon"><img src="assets/images/flags/turkey.png" alt="Turkey Flag"></span>
                <textarea name="metadesc_tr" id="myTextArea" style="width:532px; height: 150px; border: 1px solid #ccc; padding: 5px; margin-top:5px;">'.$sonuc['metadesc_tr'].'</textarea>
            </div>
            <div class="input-group align-items-center">
                <span class="input-group-addon flag-addon"><img src="assets/images/flags/england.png" alt="United Kingdom Flag"></span>
               <textarea name="metadesc_en" id="myTextArea" style="width:532px; height: 150px; border: 1px solid #ccc; padding: 5px;margin-top:5px;">'.$sonuc['metadesc_en'].'</textarea>
            </div>
            <div class="input-group align-items-center">
                <span class="input-group-addon flag-addon"><img src="assets/images/flags/russian.png" alt="Russia Flag" style="height:50px;"></span>
               <textarea name="metadesc_ru" id="myTextArea" style="width:532px; height: 150px; border: 1px solid #ccc; padding: 5px;margin-top:5px;">'.$sonuc['metadesc_ru'].'</textarea>
            </div>
        </div>
        </div>
        </div>
        <!--ara-->
        <div class="col-lg-8 mx-auto border">
        <div class="row">
        <div class="col-lg-2 border-right pt-3 text-left">
        <span id="siteayarfont">Anahtar Kelimeler</span>
        </div>
        <div class="col-lg-10 p-2">
        <input type="text" name="metakey" class="form-control text-primary mt-2" data-role="tagsinput" value="'.$sonuc["metakey"].'"  />
        </div>
        </div>
        </div>
        <!--ara-->
        <div class="col-lg-8 mx-auto border">
        <div class="row">
        <div class="col-lg-3 border-right pt-3 text-left">
        <span id="siteayarfont">Yapımcı</span>
        </div>
        <div class="col-lg-9 p-1">
        <input type="text" name="metaauthor" class="form-control" value="'.$sonuc["metaauthor"].'" />
        </div>
        </div>
        </div>
         <!--ara-->
         <div class="col-lg-8 mx-auto border">
        <div class="row">
        <div class="col-lg-3 border-right pt-3 text-left">
        <span id="siteayarfont">Firma</span>
        </div>
        <div class="col-lg-9 p-1">
        <input type="text" name="metaowner" class="form-control" value="'.$sonuc["metaowner"].'" />
        </div>
        </div>
        </div>
        <!--ara-->
        <div class="col-lg-8 mx-auto border">
        <div class="row">
        <div class="col-lg-3 border-right pt-3 text-left">
        <span id="siteayarfont">Copyright</span>
        </div>
        <div class="col-lg-9 p-1">
        <input type="text" name="metacopy" class="form-control" value="'.$sonuc["metacopy"].'"  />
        </div>
        </div>
        </div>
        <!--ara-->
        <div class="col-lg-8 mx-auto border">
        <div class="row">
        <div class="col-lg-3 border-right pt-3 text-left">
        <span id="siteayarfont">Logo Yazisi</span>
        </div>
        <div class="col-lg-9 p-1">
        <input type="text" name="logoyazisi" class="form-control" value="'.$sonuc["logoyazisi"].'"   />
        </div>
        </div>
        </div>
        <!--ara-->
        <div class="col-lg-8 mx-auto border">
        <div class="row">
        <div class="col-lg-3 border-right pt-3 text-left">
        <span id="siteayarfont">Linkedin</span>
        </div>
        <div class="col-lg-9 p-1">
        <input type="text" name="twit" class="form-control" value="'.$sonuc["twit"].'"   />
        </div>
        </div>
        </div>
        <!--ara-->
        <div class="col-lg-8 mx-auto border">
        <div class="row">
        <div class="col-lg-3 border-right pt-3 text-left">
        <span id="siteayarfont">Facebook</span>
        </div>
        <div class="col-lg-9 p-1">
        <input type="text" name="face" class="form-control" value="'.$sonuc["face"].'"   />
        </div>
        </div>
        </div>
        <!--ara--> 
        <div class="col-lg-8 mx-auto border">
        <div class="row">
        <div class="col-lg-3 border-right pt-3 text-left">
        <span id="siteayarfont">Instagram</span>
        </div>
        <div class="col-lg-9 p-1">
        <input type="text" name="ints" class="form-control" value="'.$sonuc["ints"].'"   />
        </div>
        </div>
        </div>
        <!--ara--> 
        <div class="col-lg-8 mx-auto border">
        <div class="row">
        <div class="col-lg-3 border-right pt-3 text-left">
        <span id="siteayarfont">Telefon Numarası</span>
        </div>
        <div class="col-lg-9 p-1">
        <input type="text" name="telefonno" class="form-control" value="'.$sonuc["telefonno"].'"   />
        </div>
        </div>
        </div>
          <div class="col-lg-8 mx-auto border">
        <div class="row">
        <div class="col-lg-3 border-right pt-3 text-left">
        <span id="siteayarfont">Whatsap Bağlantı linki</span>
        </div>
        <div class="col-lg-9 p-1">
        <input type="text" name="whatsapp" class="form-control" value="'.$sonuc["whatsapp"].'"   />
        </div>
        </div>
        </div>
        <!--ara--> 
        <div class="col-lg-8 mx-auto border">
        <div class="row">
        <div class="col-lg-3 border-right pt-3 text-left">
        <span id="siteayarfont">Adres</span>
        </div>
        <div class="col-lg-9 p-1">
        <input type="text" name="adres" class="form-control" value="'.$sonuc["adres"].'"  />
        </div>
        </div>
        </div>
        <!--ara--> 
        <div class="col-lg-8 mx-auto border">
        <div class="row">
        <div class="col-lg-3 border-right pt-3 text-left">
        <span id="siteayarfont">Mail adresi</span>
        </div>
        <div class="col-lg-9 p-1">
        <input type="text" name="mailadres" class="form-control" value="'.$sonuc["mailadres"].'"   />
        </div>
        </div>
        </div>
        <!--ara--> 
        <!--slogan--> 
  <div class="col-lg-8 mx-auto border">
    <div class="row">
        <div class="col-lg-3 border-right pt-3 text-center">
            <span id="siteayarfont" class="text-center font-weight-bold my-4 slg">Slogan</span>
        </div>
        <div class="col-lg-9 p-1">
            <div class="input-group align-items-center">
                <span class="input-group-addon flag-addon"><img src="assets/images/flags/azerbaijan.png" alt="Azerbaijan Flag"></span>
                <input type="text" name="slogan_az" class="form-control mt-2" value="'.$sonuc["slogan_az"].'"/>
            </div>
            <div class="input-group align-items-center">
                <span class="input-group-addon flag-addon"><img src="assets/images/flags/turkey.png" alt="Turkey Flag"></span>
                <input type="text" name="slogan_tr" class="form-control mt-2" value="'.$sonuc["slogan_tr"].'"/>
            </div>
            <div class="input-group align-items-center">
                <span class="input-group-addon flag-addon"><img src="assets/images/flags/england.png" alt="United Kingdom Flag"></span>
                <input type="text" name="slogan_en" class="form-control mt-2" value="'.$sonuc["slogan_en"].'"/>
            </div>
            <div class="input-group align-items-center">
                <span class="input-group-addon flag-addon"><img src="assets/images/flags/russian.png" alt="Russia Flag" style="height:50px;"></span>
                <input type="text" name="slogan_ru" class="form-control mt-2" value="'.$sonuc["slogan_ru"].'"/>
            </div>
        </div>
    </div>
</div>
<!--son--> 
        <!--ara--> 
      <div class="col-lg-8 mx-auto border">
    <div class="row">
        <div class="col-lg-3 border-right pt-3 text-center">
            <span id="siteayarfont" class="text-center font-weight-bold my-4 ref">Referans Başlık</span>
        </div>
        <div class="col-lg-9 p-1">
            <div class="input-group align-items-center">
                <span class="input-group-addon flag-addon"><img src="assets/images/flags/azerbaijan.png" alt="Azerbaijan Flag" style="height: 50px;"></span>
                <input type="text" name="referansbaslik_az" class="form-control mt-2" value="'.$sonuc["referansbaslik_az"].'"/>
            </div>
            <div class="input-group align-items-center">
                <span class="input-group-addon flag-addon"><img src="assets/images/flags/turkey.png" alt="Turkey Flag" style="height: 50px;"></span>
                <input type="text" name="referansbaslik_tr" class="form-control mt-2" value="'.$sonuc["referansbaslik_tr"].'"/>
            </div>
            <div class="input-group align-items-center">
                <span class="input-group-addon flag-addon"><img src="assets/images/flags/england.png" alt="United Kingdom Flag" style="height: 50px;"></span>
                <input type="text" name="referansbaslik_en" class="form-control mt-2" value="'.$sonuc["referansbaslik_en"].'"/>
            </div>
            <div class="input-group align-items-center">
                <span class="input-group-addon flag-addon"><img src="assets/images/flags/russian.png" alt="Russia Flag" style="height: 50px;"></span>
                <input type="text" name="referansbaslik_ru" class="form-control mt-2" value="'.$sonuc["referansbaslik_ru"].'"/>
            </div>
        </div>
    </div>
</div>
        <!--ara--> 
        <div class="col-lg-8 mx-auto border">
    <div class="row">
        <div class="col-lg-3 border-right pt-3 text-center">
            <span id="siteayarfont" class="text-center font-weight-bold my-4 ref">Galeri Başlık</span>
        </div>
        <div class="col-lg-9 p-1">
            <div class="input-group align-items-center">
                <span class="input-group-addon flag-addon"><img src="assets/images/flags/azerbaijan.png" alt="Azerbaijan Flag" style="height: 50px;"></span>
                <input type="text" name="galeribaslik_az" class="form-control mt-2" value="'.$sonuc["galeribaslik_az"].'"/>
            </div>
            <div class="input-group align-items-center">
                <span class="input-group-addon flag-addon"><img src="assets/images/flags/turkey.png" alt="Turkey Flag" style="height: 50px;"></span>
                <input type="text" name="galeribaslik_tr" class="form-control mt-2" value="'.$sonuc["galeribaslik_tr"].'"/>
            </div>
            <div class="input-group align-items-center">
                <span class="input-group-addon flag-addon"><img src="assets/images/flags/england.png" alt="United Kingdom Flag" style="height: 50px;"></span>
                <input type="text" name="galeribaslik_en" class="form-control mt-2" value="'.$sonuc["galeribaslik_en"].'"/>
            </div>
            <div class="input-group align-items-center">
                <span class="input-group-addon flag-addon"><img src="assets/images/flags/russian.png" alt="Russia Flag" style="height: 50px;"></span>
                <input type="text" name="galeribaslik_ru" class="form-control mt-2" value="'.$sonuc["galeribaslik_ru"].'"/>
            </div>
        </div>
    </div>
</div>
        <!--ara--> 
              <div class="col-lg-8 mx-auto border">
    <div class="row">
        <div class="col-lg-3 border-right pt-3 text-center">
            <span id="siteayarfont" class="text-center font-weight-bold my-4 ref">Yorumlar Sayfa Başlık</span>
        </div>
        <div class="col-lg-9 p-1">
            <div class="input-group align-items-center">
                <span class="input-group-addon flag-addon"><img src="assets/images/flags/azerbaijan.png" alt="Azerbaijan Flag" style="height: 50px;"></span>
                <input type="text" name="yorumbaslik_az" class="form-control mt-2" value="'.$sonuc["yorumbaslik_az"].'"/>
            </div>
            <div class="input-group align-items-center">
                <span class="input-group-addon flag-addon"><img src="assets/images/flags/turkey.png" alt="Turkey Flag" style="height: 50px;"></span>
                <input type="text" name="yorumbaslik_tr" class="form-control mt-2" value="'.$sonuc["yorumbaslik_tr"].'"/>
            </div>
            <div class="input-group align-items-center">
                <span class="input-group-addon flag-addon"><img src="assets/images/flags/england.png" alt="United Kingdom Flag" style="height: 50px;"></span>
                <input type="text" name="yorumbaslik_en" class="form-control mt-2" value="'.$sonuc["yorumbaslik_en"].'"/>
            </div>
            <div class="input-group align-items-center">
                <span class="input-group-addon flag-addon"><img src="assets/images/flags/russian.png" alt="Russia Flag" style="height: 50px;"></span>
                <input type="text" name="yorumbaslik_ru" class="form-control mt-2" value="'.$sonuc["yorumbaslik_ru"].'"/>
            </div>
        </div>
    </div>
</div>
        <!--ara--> 
             <div class="col-lg-8 mx-auto border">
    <div class="row">
        <div class="col-lg-3 border-right pt-3 text-center">
            <span id="siteayarfont" class="text-center font-weight-bold my-4 ref">İletişim Sayfa Başlık</span>
        </div>
        <div class="col-lg-9 p-1">
            <div class="input-group align-items-center">
                <span class="input-group-addon flag-addon"><img src="assets/images/flags/azerbaijan.png" alt="Azerbaijan Flag" style="height: 50px;"></span>
                <input type="text" name="iletisimbaslik_az" class="form-control mt-2" value="'.$sonuc["iletisimbaslik_az"].'"/>
            </div>
            <div class="input-group align-items-center">
                <span class="input-group-addon flag-addon"><img src="assets/images/flags/turkey.png" alt="Turkey Flag" style="height: 50px;"></span>
                <input type="text" name="iletisimbaslik_tr" class="form-control mt-2" value="'.$sonuc["iletisimbaslik_tr"].'"/>
            </div>
            <div class="input-group align-items-center">
                <span class="input-group-addon flag-addon"><img src="assets/images/flags/england.png" alt="United Kingdom Flag" style="height: 50px;"></span>
                <input type="text" name="iletisimbaslik_en" class="form-control mt-2" value="'.$sonuc["iletisimbaslik_en"].'"/>
            </div>
            <div class="input-group align-items-center">
                <span class="input-group-addon flag-addon"><img src="assets/images/flags/russian.png" alt="Russia Flag" style="height: 50px;"></span>
                <input type="text" name="iletisimbaslik_ru" class="form-control mt-2" value="'.$sonuc["iletisimbaslik_ru"].'"/>
            </div>
        </div>
    </div>
</div>
        <!--ara--> 
         <div class="col-lg-8 mx-auto border">
    <div class="row">
        <div class="col-lg-3 border-right pt-3 text-center">
            <span id="siteayarfont" class="text-center font-weight-bold my-4 ref">Hizmetler Sayfa Başlık</span>
        </div>
        <div class="col-lg-9 p-1">
            <div class="input-group align-items-center">
                <span class="input-group-addon flag-addon"><img src="assets/images/flags/azerbaijan.png" alt="Azerbaijan Flag" style="height: 50px;"></span>
                <input type="text" name="hizmetlerbaslik_az" class="form-control mt-2" value="'.$sonuc["hizmetlerbaslik_az"].'"/>
            </div>
            <div class="input-group align-items-center">
                <span class="input-group-addon flag-addon"><img src="assets/images/flags/turkey.png" alt="Turkey Flag" style="height: 50px;"></span>
                <input type="text" name="hizmetlerbaslik_tr" class="form-control mt-2" value="'.$sonuc["hizmetlerbaslik_tr"].'"/>
            </div>
            <div class="input-group align-items-center">
                <span class="input-group-addon flag-addon"><img src="assets/images/flags/england.png" alt="United Kingdom Flag" style="height: 50px;"></span>
                <input type="text" name="hizmetlerbaslik_en" class="form-control mt-2" value="'.$sonuc["hizmetlerbaslik_en"].'"/>
            </div>
            <div class="input-group align-items-center">
                <span class="input-group-addon flag-addon"><img src="assets/images/flags/russian.png" alt="Russia Flag" style="height: 50px;"></span>
                <input type="text" name="hizmetlerbaslik_ru" class="form-control mt-2" value="'.$sonuc["hizmetlerbaslik_ru"].'"/>
            </div>
        </div>
    </div>
</div>
        <!--ara-->
          <div class="col-lg-8 mx-auto border">
    <div class="row">
        <div class="col-lg-3 border-right pt-3 text-center">
            <span id="siteayarfont" class="text-center font-weight-bold my-4 ref">Firmalar(Ortak)Sayfa Başlık</span>
        </div>
        <div class="col-lg-9 p-1">
            <div class="input-group align-items-center">
                <span class="input-group-addon flag-addon"><img src="assets/images/flags/azerbaijan.png" alt="Azerbaijan Flag" style="height: 50px;"></span>
                <input type="text" name="ortaklar_az" class="form-control mt-2" value="'.$sonuc["ortaklar_az"].'"/>
            </div>
            <div class="input-group align-items-center">
                <span class="input-group-addon flag-addon"><img src="assets/images/flags/turkey.png" alt="Turkey Flag" style="height: 50px;"></span>
                <input type="text" name="ortaklar_tr" class="form-control mt-2" value="'.$sonuc["ortaklar_tr"].'"/>
            </div>
            <div class="input-group align-items-center">
                <span class="input-group-addon flag-addon"><img src="assets/images/flags/england.png" alt="United Kingdom Flag" style="height: 50px;"></span>
                <input type="text" name="ortaklar_en" class="form-control mt-2" value="'.$sonuc["ortaklar_en"].'"/>
            </div>
            <div class="input-group align-items-center">
                <span class="input-group-addon flag-addon"><img src="assets/images/flags/russian.png" alt="Russia Flag" style="height: 50px;"></span>
                <input type="text" name="ortaklar_ru" class="form-control mt-2" value="'.$sonuc["ortaklar_ru"].'"/>
            </div>
        </div>
    </div>
</div>
           <!--ara -->

        <div class="col-lg-8 mx-auto border">
        <div class="row">
        <div class="col-lg-3 border-right pt-3 text-left">
        <span id="siteayarfont">Harita Bilgisi</span>
        </div>
        <div class="col-lg-9 p-1">
        <input type="text" name="haritabilgi" class="form-control" value="'.$sonuc["haritabilgi"].'"  />
        </div>
        </div>
        </div>
        <!--ara--> 
        <div class="col-lg-8 mx-auto border">
        <div class="row">
        <div class="col-lg-3 border-right pt-3 text-left">
        <span id="siteayarfont">Footer Bilgisi</span>
        </div>
        <div class="col-lg-9 p-1">
        <input type="text" name="footer" class="form-control" value="'.$sonuc["footer"].'"  />
        </div>
        </div>
        </div>
        <!--ara--> 
        <div class="col-lg-8 mx-auto border">
        <div class="row">
        <div class="col-lg-3 border-right pt-3 text-left">
        <span id="siteayarfont">Mesaj Tercih</span>
        </div>
        <div class="col-lg-9 p-1">
        <div class="row">
        <div class="col-lg-4 pt-1 text-danger border-right">
        Sadece Mail
        <input type="radio" name="mesajtercih" value="1" class="mt-2" 
        '.($sonuc["mesajtercih"]==1 ? "checked='checked'" : "").'  />
        </div>
        <div class="col-lg-4 pt-1 text-danger border-right ">
        Hem Mail Hem Mesaj
        <input type="radio" name="mesajtercih" value="2" class="mt-2"
        '.($sonuc["mesajtercih"]==2 ? "checked='checked'" : "").'  />
        </div>
        <div class="col-lg-4 pt-1 text-danger">
        Sadece Mesaj
        <input type="radio" name="mesajtercih" value="3" class="mt-2"
        '.($sonuc["mesajtercih"]==3 ? "checked='checked'" : "").' />

        </div>
        </div>
        
        </div>
        </div>
        </div>
        <div class="col-lg-8 mx-auto mt-2 border-bottom">
        <br>
        <button type="submit"  class="btn btn-primary col-md-3" name="urunduzenle"><i class="ti-reload "></i> Düzenle</button>
         <br><br>
        </div>
       
        </div>
        </form>';
       else:
            $title=htmlspecialchars($_POST["title"]);
            $title_tr=htmlspecialchars($_POST["title_tr"]);
            $title_en=htmlspecialchars($_POST["title_en"]);
            $title_ru=htmlspecialchars($_POST["title_ru"]);
            $metatitle=htmlspecialchars($_POST["metatitle"]);
            $metatitle_tr=htmlspecialchars($_POST["metatitle_tr"]);
            $metatitle_en=htmlspecialchars($_POST["metatitle_en"]);
            $metatitle_ru=htmlspecialchars($_POST["metatitle_ru"]);
            $metadesc=htmlspecialchars($_POST["metadesc"]);
            $metadesc_tr=htmlspecialchars($_POST["metadesc_tr"]);
            $metadesc_en=htmlspecialchars($_POST["metadesc_en"]);
            $metadesc_ru=htmlspecialchars($_POST["metadesc_ru"]);
            $metakey=htmlspecialchars($_POST["metakey"]);
            $metaauthor=htmlspecialchars($_POST["metaauthor"]);
            $metaowner=htmlspecialchars($_POST["metaowner"]);
            $metacopy=htmlspecialchars($_POST["metacopy"]);
            $logoyazisi=htmlspecialchars($_POST["logoyazisi"]);
            $twit=htmlspecialchars($_POST["twit"]);
            $face=htmlspecialchars($_POST["face"]);
            $ints=htmlspecialchars($_POST["ints"]);
            $telefonno=htmlspecialchars($_POST["telefonno"]);
            $whatsapp=htmlspecialchars($_POST["whatsapp"]);
            $adres=htmlspecialchars($_POST["adres"]);
            $mailadres=htmlspecialchars($_POST["mailadres"]);
            $slogan_az=htmlspecialchars($_POST["slogan_az"]);
            $slogan_tr=htmlspecialchars($_POST["slogan_tr"]);
            $slogan_ru=htmlspecialchars($_POST["slogan_ru"]);
            $slogan_en=htmlspecialchars($_POST["slogan_en"]);
            $referansbaslik_az=htmlspecialchars($_POST["referansbaslik_az"]);
            $referansbaslik_tr=htmlspecialchars($_POST["referansbaslik_tr"]);
            $referansbaslik_en=htmlspecialchars($_POST["referansbaslik_en"]);
            $referansbaslik_ru=htmlspecialchars($_POST["referansbaslik_ru"]);
            $galeribaslik_az=htmlspecialchars($_POST["galeribaslik_az"]);
            $galeribaslik_tr=htmlspecialchars($_POST["galeribaslik_tr"]);
            $galeribaslik_en=htmlspecialchars($_POST["galeribaslik_en"]);
            $galeribaslik_ru=htmlspecialchars($_POST["galeribaslik_ru"]);
            $yorumbaslik_az=htmlspecialchars($_POST["yorumbaslik_az"]);
            $yorumbaslik_tr=htmlspecialchars($_POST["yorumbaslik_tr"]);
            $yorumbaslik_en=htmlspecialchars($_POST["yorumbaslik_en"]);
            $yorumbaslik_ru=htmlspecialchars($_POST["yorumbaslik_ru"]);
            $iletisimbaslik_az=htmlspecialchars($_POST["iletisimbaslik_az"]);
            $iletisimbaslik_ru=htmlspecialchars($_POST["iletisimbaslik_ru"]);
            $iletisimbaslik_tr=htmlspecialchars($_POST["iletisimbaslik_tr"]);
            $iletisimbaslik_en=htmlspecialchars($_POST["iletisimbaslik_en"]);
            $hizmetlerbaslik_az=htmlspecialchars($_POST["hizmetlerbaslik_az"]);
            $hizmetlerbaslik_tr=htmlspecialchars($_POST["hizmetlerbaslik_tr"]);
            $hizmetlerbaslik_ru=htmlspecialchars($_POST["hizmetlerbaslik_ru"]);
            $hizmetlerbaslik_en=htmlspecialchars($_POST["hizmetlerbaslik_en"]);
            $ortaklar_az=htmlspecialchars($_POST["ortaklar_az"]);
            $ortaklar_tr=htmlspecialchars($_POST["ortaklar_tr"]);
            $ortaklar_ru=htmlspecialchars($_POST["ortaklar_ru"]);
            $ortaklar_en=htmlspecialchars($_POST["ortaklar_en"]);
            $mesajtercih=htmlspecialchars($_POST["mesajtercih"]);
            $haritabilgi=htmlspecialchars($_POST["haritabilgi"]);
            $footer=htmlspecialchars($_POST["footer"]); 
            self::sorgum($vt,"UPDATE ayarlar SET 
            title='$title',title_tr='$title_tr',title_en='$title_en',title_ru='$title_ru',metatitle='$metatitle',metatitle_tr='$metatitle_tr',metatitle_en='$metatitle_en',metatitle_ru='$metatitle_ru',metadesc='$metadesc',metadesc_tr='$metadesc_tr',metadesc_en='$metadesc_en',metadesc_ru='$metadesc_ru',metakey='$metakey',metakey_tr='$metakey_tr',metakey_en='$metakey_en',metakey_ru='$metakey_ru',metaauthor='$metaauthor',metaowner='$metaowner',metacopy='$metacopy',logoyazisi='$logoyazisi',twit='$twit',face='$face',ints='$ints',telefonno='$telefonno',whatsapp='$whatsapp',adres='$adres',mailadres='$mailadres',slogan_az='$slogan_az',slogan_tr='$slogan_tr',slogan_ru='$slogan_ru',slogan_en='$slogan_en',referansbaslik_az='$referansbaslik_az',referansbaslik_tr='$referansbaslik_tr',referansbaslik_en='$referansbaslik_en',referansbaslik_ru='$referansbaslik_ru',galeribaslik_az='$galeribaslik_az',galeribaslik_tr='$galeribaslik_tr',galeribaslik_en='$galeribaslik_en',galeribaslik_ru='$galeribaslik_ru',yorumbaslik_az='$yorumbaslik_az',yorumbaslik_tr='$yorumbaslik_tr',yorumbaslik_en='$yorumbaslik_en',yorumbaslik_ru='$yorumbaslik_ru',iletisimbaslik_az='$iletisimbaslik_az',iletisimbaslik_ru='$iletisimbaslik_ru',iletisimbaslik_tr='$iletisimbaslik_tr',iletisimbaslik_en='$iletisimbaslik_en',hizmetlerbaslik_az='$hizmetlerbaslik_az',hizmetlerbaslik_tr='$hizmetlerbaslik_tr',hizmetlerbaslik_ru='$hizmetlerbaslik_ru',hizmetlerbaslik_en='$hizmetlerbaslik_en',ortaklar_az='$ortaklar_az',ortaklar_en='$ortaklar_en',ortaklar_ru='$ortaklar_ru',ortaklar_tr='$ortaklar_tr',mesajtercih='$mesajtercih',haritabilgi='$haritabilgi',footer='$footer'",0);
           
            echo '<div class="alert alert-success mt-5" role="alert">
            <strong>Site ayarları</strong> başarıyla güncellendi.
            </div>';
            header("refresh:2,url=control.php?sayfa=siteayar");
      endif;
      
    }

function anasayfa($vt) {
    echo '<div class="row text-center">
        <div class="col-lg-12">
        <h4 class="float-left mt-3 text-info mb-2">Unical Texnik Yönetim paneli</h4>
        </div>';

   
    $query = "SELECT COUNT(*) as product_count FROM products";
    $result = $vt->query($query);
    
    if ($result) {
        $row = $result->fetch(PDO::FETCH_ASSOC);
        $productCount = $row['product_count'];

        echo '<div class="col-lg-3">
                <div class="card bg-primary">
                    <div class="card-body">
                        <h5 class="card-title">Ürün sayısı</h5>
                        <p class="card-text text-white text-xl-center" style="font-weight: bold;font-size:19px;">' . $productCount .'</p> <b class="text-dark">Adet ürün bulunmaktadır</b>
                    </div>
                </div>
            </div>';
    } else {
        echo "Sorgu hatası: " . $vt->errorInfo()[2];
    }
    $queryy = "SELECT COUNT(*) as cat_count FROM category";
    $resulttt = $vt->query($queryy);
    
    if ($resulttt) {
        $row = $resulttt->fetch(PDO::FETCH_ASSOC);
        $cat_count = $row['cat_count'];

        echo '<div class="col-lg-3">
                <div class="card bg-success">
                    <div class="card-body">
                        <h5 class="card-title">Ana Kategori sayısı</h5>
                        <p class="card-text text-white text-xl-center" style="font-weight: bold;font-size:19px;">' . $cat_count .'</p> <b class="text-dark">Adet kategori bulunmaktadır</b>
                    </div>
                </div>
            </div>';
    } else {
        echo "Sorgu hatası: " . $vt->errorInfo()[2];
    }

    $sorgu = "SELECT COUNT(*) as altcat_count FROM altkategori";
    $sonuc = $vt->query($sorgu);
    
    if ($sonuc) {
        $row = $sonuc->fetch(PDO::FETCH_ASSOC);
        $altcat_count = $row['altcat_count'];

        echo '<div class="col-lg-3">
                <div class="card bg-warning">
                    <div class="card-body">
                        <h5 class="card-title">Alt Kategori sayısı</h5>
                        <p class="card-text text-white text-xl-center" style="font-weight: bold;font-size:19px;">' . $altcat_count .'</p> <b class="text-dark">Alt kategori bulunmaktadır</b>
                    </div>
                </div>
            </div>';
    } else {
        echo "Sorgu hatası: " . $vt->errorInfo()[2];
    }

    $sorguu = "SELECT COUNT(*) as galeri_count FROM galeri";
    $sonucc = $vt->query($sorguu);
    
    if ($sonucc) {
        $row = $sonucc->fetch(PDO::FETCH_ASSOC);
        $galeri_count = $row['galeri_count'];

        echo '<div class="col-lg-3">
                <div class="card bg-info">
                    <div class="card-body">
                        <h5 class="card-title">Galeri Resim sayısı</h5>
                        <p class="card-text text-white text-xl-center" style="font-weight: bold;font-size:19px;">' . $galeri_count .'</p> <b class="text-dark">Adet bulunmaktadır</b>
                    </div>
                </div>
            </div>';
    } else {
        echo "Sorgu hatası: " . $vt->errorInfo()[2];
    }
    
    echo '</div>';
    echo '</div>';
}

function aboneler($vt){
     echo '<div class="row text-center">
        <div class="col-lg-12">
        <h4 class="float-left mt-3 text-info mb-2">
        Site Aboneleri</h4> </div>';
    $introbilgiler=self::sorgum($vt,"select * from aboneler",2);
    while($sonbilgi=$introbilgiler->fetch(PDO::FETCH_ASSOC)):
        echo '<div class="col-lg-6">
        <div class="row card-bordered p-1 m-1 bg-light">
        <div class="col-lg-10 pt-1 pb-1">
        <h5>'.$sonbilgi["email"].'</h5>
        </div>
       
        

        </div>
        </div>';
    endwhile;
    echo '</div>';
}

function hizmetsartlari($vt){
     echo '<div class="row text-center">
        <div class="col-lg-12">
        <h4 class="float-left mt-3 text-info mb-2">
        <a href="control.php?sayfa=hizmetsartiekle" class="ti-plus bg-success p-1 text-white mr-2 mt-3"></a>
        Hizmetler Ayarları</h4> </div>';
    $introbilgiler=self::sorgum($vt,"select * from hizmetsartlari",2);
    while($sonbilgi=$introbilgiler->fetch(PDO::FETCH_ASSOC)):
        echo '<div class="col-lg-6">
        <div class="row card-bordered p-1 m-1 bg-light">
        <div class="col-lg-10 pt-1 pb-1">
        <h5>'.$sonbilgi["baslik_az"].'</h5>
        </div>
        <div class="col-lg-2 text-right">
        <a href="control.php?sayfa=hizmetsartiguncelle&id='.$sonbilgi["id"].'" class="ti-reload  text-success" style="font-size:20px;"></a>
        <a href="control.php?sayfa=hizmetsartisil&id='.$sonbilgi["id"].'" class="ti-trash  text-danger pl-1" style="font-size:20px;"></a>
        </div>
        <div class="col-lg-12 border-top text-secondary">
        '.$sonbilgi["icerik_az"].'
        </div>

        </div>
        </div>';
    endwhile;
    echo '</div>';
}
 function hizmetsartiekle($vt){
     echo '<div class="row text-center">
        <div class="col-lg-12 border-bottom">
        <h3 class=" mt-3 text-info">Site Hizmet Şartı Ekleme Formu<h3>
        </div>';
        if(!$_POST):
        echo ' <div class="col-lg-9 mx-auto">
    <div class="row card-bordered p-1 m-1 bg-light">
      <form action="" method="post">
        <table class="table">
          <tbody>
            <tr>
              <th scope="row" class="th-lg col-lg-6 border-right">Başlık <img src="assets/images/flags/azerbaijan.png" alt="Azerbaijan Flag"></th>
              <td><input type="text" name="baslik_az" class="form-control" style="width:600px;"></td>
            </tr>
            <tr>
              <th scope="row" class="th-lg col-lg-6 border-right">Başlık <img src="assets/images/flags/turkey.png" alt="Turkey Flag"></th>
              <td><input type="text" name="baslik_tr" class="form-control" style="width:600px;"></td>
            </tr>
            <tr>
              <th scope="row" class="th-lg col-lg-6 border-right">Başlık <img src="assets/images/flags/england.png" alt="England Flag"></th>
              <td><input type="text" name="baslik_en" class="form-control" style="width:600px;"></td>
            </tr>
            <tr>
              <th scope="row" class="th-lg col-lg-6 border-right">Başlık <img src="assets/images/flags/russian.png" alt="Russian Flag"></th>
              <td><input type="text" name="baslik_ru" class="form-control" style="width:600px;"></td>
            </tr>
            <tr>
              <th scope="row" class="border-top border-right">İçerik <img src="assets/images/flags/azerbaijan.png" alt="Azerbaijan Flag"></th>
              <td class="border-top"><textarea name="icerik_az" rows="8" class="form-control"></textarea></td>
            </tr>
            <tr>
              <th scope="row" class="border-top border-right">İçerik <img src="assets/images/flags/turkey.png" alt="Turkey Flag"></th>
              <td class="border-top"><textarea name="icerik_tr" rows="8" class="form-control"></textarea></td>
            </tr>
            <tr>
              <th scope="row" class="border-top border-right">İçerik <img src="assets/images/flags/england.png" alt="England Flag"></th>
              <td class="border-top"><textarea name="icerik_en" rows="8" class="form-control"></textarea></td>
            </tr>
            <tr>
              <th scope="row" class="border-top border-right">İçerik <img src="assets/images/flags/russian.png" alt="Russian Flag"></th>
              <td class="border-top col-9"><textarea name="icerik_ru" rows="8" class="form-control"></textarea></td>
            </tr>
          </tbody>
        </table>
        <div class="col-lg-12 border-top p-2">
          <input type="submit" name="buton" value="Hizmet Şartı Ekle" class="btn btn-success">
        </div>
      </form>
    </div>
  </div>
</div>';
        else:
             $baslik_az = htmlspecialchars($_POST["baslik_az"]);
             $baslik_tr = htmlspecialchars($_POST["baslik_tr"]);
             $baslik_ru = htmlspecialchars($_POST["baslik_ru"]);
             $baslik_en = htmlspecialchars($_POST["baslik_en"]);
             $icerik_az = htmlspecialchars($_POST["icerik_az"]);
             $icerik_tr = htmlspecialchars($_POST["icerik_tr"]);
             $icerik_ru = htmlspecialchars($_POST["icerik_ru"]);
             $icerik_en = htmlspecialchars($_POST["icerik_en"]);
          
self::sorgum($vt,"insert into hizmetsartlari (baslik_az,baslik_tr,baslik_ru,baslik_en,icerik_az,icerik_tr,icerik_en,icerik_ru) values('$baslik_az','$baslik_tr','$baslik_ru','$baslik_en','$icerik_az','$icerik_tr','$icerik_en','$icerik_ru')",0);
                echo '<div class="col-lg-6 mx-auto">
                <div class="alert alert-success mt-5">
                Ekleme başarılı.</div></div>';
                header("refresh:2,url=control.php?sayfa=hizmetsartlari");
          
    endif;
    echo '</div>';
 }
function hizmetsartisil($vt){
    $kayitid=$_GET["id"];
    echo '<div class="row text-center">
    <div class="col-lg-12">';

    //vtden sileme
   self::sorgum($vt,"delete  from hizmetsartlari where id=$kayitid",0);
   echo '<div class="alert alert-success mt-5">
    Silme başarılı.</div>';
  echo '</div></div>';
  header("refresh:2,url=control.php?sayfa=hizmetsartlari");
}
 function hizmetsartiguncelle($vt){
        echo '<div class="row text-center">
        <div class="col-lg-12 border-bottom">

        <h3 class=" mt-3 text-info"><a href="control.php?sayfa=hizmetsartlari" class="btn btn-danger float-left"><i class="ti-angle-double-left"></i></a>   Hizmet Şartları Güncelleme Formu<h3>
        </div>';
        $kayitid=$_GET["id"];
        $sonuc=self::sorgum($vt,"select * from hizmetsartlari where id=$kayitid",1);
        if(!$_POST):
             echo ' <div class="col-lg-9 mx-auto">
    <div class="row card-bordered p-1 m-1 bg-light">
      <form action="" method="post">
        <table class="table">
          <tbody>
            <tr>
              <th scope="row" class="th-lg col-lg-6 border-right">Başlık <img src="assets/images/flags/azerbaijan.png" alt="Azerbaijan Flag"></th>
              <td><input type="text" name="baslik_az" class="form-control" style="width:600px;" value="'.$sonuc["baslik_az"].'"></td>
            </tr>
            <tr>
              <th scope="row" class="th-lg col-lg-6 border-right">Başlık <img src="assets/images/flags/turkey.png" alt="Turkey Flag"></th>
              <td><input type="text" name="baslik_tr" class="form-control" style="width:600px;" value="'.$sonuc["baslik_tr"].'"></td>
            </tr>
            <tr>
              <th scope="row" class="th-lg col-lg-6 border-right">Başlık <img src="assets/images/flags/england.png" alt="England Flag"></th>
              <td><input type="text" name="baslik_en" class="form-control" style="width:600px;" value="'.$sonuc["baslik_en"].'"></td>
            </tr>
            <tr>
              <th scope="row" class="th-lg col-lg-6 border-right">Başlık <img src="assets/images/flags/russian.png" alt="Russian Flag"></th>
              <td><input type="text" name="baslik_ru" class="form-control" style="width:600px;" value="'.$sonuc["baslik_ru"].'"></td>
            </tr>
            <tr>
              <th scope="row" class="border-top border-right">İçerik <img src="assets/images/flags/azerbaijan.png" alt="Azerbaijan Flag"></th>
              <td class="border-top"><textarea name="icerik_az" rows="8" class="form-control">'.$sonuc["icerik_az"].'</textarea></td>
            </tr>
            <tr>
              <th scope="row" class="border-top border-right">İçerik <img src="assets/images/flags/turkey.png" alt="Turkey Flag"></th>
              <td class="border-top"><textarea name="icerik_tr" rows="8" class="form-control">'.$sonuc["icerik_tr"].'</textarea></td>
            </tr>
            <tr>
              <th scope="row" class="border-top border-right">İçerik <img src="assets/images/flags/england.png" alt="England Flag"></th>
              <td class="border-top"><textarea name="icerik_en" rows="8" class="form-control">'.$sonuc["icerik_en"].'</textarea></td>
            </tr>
            <tr>
              <th scope="row" class="border-top border-right">İçerik <img src="assets/images/flags/russian.png" alt="Russian Flag"></th>
              <td class="border-top col-9"><textarea name="icerik_ru" rows="8" class="form-control">'.$sonuc["icerik_ru"].'</textarea></td>
            </tr>
          </tbody>
        </table>
        <div class="col-lg-12 border-top p-2">
           <input type="hidden" name="kayitidsi" value="'.$kayitid.'" />
          <input type="submit" name="buton" value="Hizmet Şartı Ekle" class="btn btn-success">
        </div>
      </form>
    </div>
  </div>
</div>';
         else:
             $baslik_az = htmlspecialchars($_POST["baslik_az"]);
             $baslik_tr = htmlspecialchars($_POST["baslik_tr"]);
             $baslik_ru = htmlspecialchars($_POST["baslik_ru"]);
             $baslik_en = htmlspecialchars($_POST["baslik_en"]);
             $icerik_az = htmlspecialchars($_POST["icerik_az"]);
             $icerik_tr = htmlspecialchars($_POST["icerik_tr"]);
             $icerik_ru = htmlspecialchars($_POST["icerik_ru"]);
             $icerik_en = htmlspecialchars($_POST["icerik_en"]);
             $kayitidsi=htmlspecialchars($_POST["kayitidsi"]);
                self::sorgum($vt,"update hizmetsartlari set baslik_az='$baslik_az',baslik_tr='$baslik_tr',baslik_ru='$baslik_ru',baslik_en='$baslik_en',icerik_az='$icerik_az',icerik_tr='$icerik_tr',icerik_en='$icerik_en',icerik_ru='$icerik_ru' where id=$kayitidsi",0);
                echo '<div class="col-lg-6 mx-auto">
                <div class="alert alert-success mt-5">
                Güncelleme başarılı.</div></div>';
                header("refresh:2,url=control.php?sayfa=hizmetsartlari");
            
 endif;
    echo '</div>';
}




     //siteayar kısmı
    function sifrele($veri){
        return base64_encode(gzdeflate(gzcompress(serialize($veri))));
        
    }
    function coz($veri){
        return unserialize(gzuncompress(gzinflate(base64_decode($veri))));
    }
    function kuladial($vt){
        $cookid=$_COOKIE["kulbilgi"];
        $cozduk=self::coz($cookid);
        $sorgusonuc=self::sorgum($vt,"select * from yonetim where id=$cozduk",1);
        return $sorgusonuc["kulad"];
    }//kullanıcı adı ayarla
    function giriskontrol($kulad,$sifre,$vt)  {
        $sifrelihal=md5(sha1(md5($sifre)));
        $sor=$vt->prepare("select * from yonetim where kulad='$kulad' and sifre='$sifrelihal'");
        $sor->execute();
       
        if($sor->rowCount()==0):
            echo '
            <div class="container-fluid bg-white">
            <div class="alert alert-white border border-dark mt-5 col-md-5 mx-auto p-3 text-danger font-14 font-weight-bold">
            Bilgiler hatalı!</div>
            </div>';
     
            header("refresh:2,url=index.php");
        else:
        $gelendeger=$sor->fetch();
        $sor=$vt->prepare("update yonetim set aktif=1 where kulad='$kulad' and sifre='$sifrelihal'");
        $sor->execute();
        echo '
        <div class="container-fluid bg-white">
        <div class="alert alert-white border border-dark mt-5 col-md-5 mx-auto p-3 text-success font-14 font-weight-bold">
        Giriş başarılı!</div>
        </div>';
      
        header("refresh:2,url=control.php");
        //cookie
        $id=self::sifrele($gelendeger["id"]);
        setcookie("kulbilgi",$id, time() + 60*60*24);
        endif;
    }///giris
    function cikis($vt){
        $cookid=$_COOKIE["kulbilgi"];
        $cozduk=self::coz($cookid);
        self::sorgum($vt,"update yonetim set aktif=0 where id=$cozduk",0);
        setcookie("kulbilgi",$cookid, time() - 5);
        echo '<div class="alert alert-info mt-5 col-md-5 mx-auto">Cıkış başarılı!</div>';
        header("refresh:2,url=index.php");
    }//cikis
    function konrolet($sayfa){
        if(isset($_COOKIE["kulbilgi"])):
            if($sayfa=="ind"):
                header("Location:control.php");
            endif;
        
        else:
            if($sayfa=="cot"):
                header("Location:index.php"); 
            endif;
        endif;

    }//cookie
    //intro---------------------
    function introayar($vt){
        echo '<div class="row text-center">
        <div class="col-lg-12">
        <h4 class="float-left mt-3 text-info mb-2">
        <a href="control.php?sayfa=introresimekle" class="ti-plus bg-success p-1 text-white mr-2 mt-3"></a>
        İntro Resimleri</h4> </div>';
    //$introbilgiler=$vt->prepare("select * from intro");
    $introbilgiler=self::sorgum($vt,"select * from intro",2);
    while($sonbilgi=$introbilgiler->fetch(PDO::FETCH_ASSOC)):
        echo '<div class="col-lg-4">
        <div class="row card-bordered  p-1 m-1">
        <div class="col-lg-12">
        <img src="../'.$sonbilgi["resimyol"].'">
        <kbd class="bg-white p-2" style="position:absolute; bottom:10px; right:10px;">
        <a href="control.php?sayfa=introresimguncelle&id='.$sonbilgi["id"].'" class="ti-reload m-2 text-success" style="font-size:20px;"></a>
        <a href="control.php?sayfa=introresimsil&id='.$sonbilgi["id"].'" class="ti-trash m-2 text-danger" style="font-size:20px;"></a>
        </kbd>
        </div> </div>
        </div>';
    endwhile;
    echo '</div>';
    }//vt resimleri geldi
    function introresimekleme($vt){
        echo '<div class="row text-center">
        <div class="col-lg-12">';
        if($_POST):
            
           
            if($_FILES["dosya"]["name"]==""):
                echo '<div class="alert alert-danger mt-5">
                Dosya yüklenmedi, bu alan boş olamaz.</div>';
                header("refresh:2,url=control.php?sayfa=introresimekle");
            else://bos degilese
                if($_FILES["dosya"]["size"]>(1024*1024*5)):
                    echo '<div class="alert alert-danger mt-5">
                    Dosya boyutu çok fazla!</div>';
                    header("refresh:2,url=control.php?sayfa=introresimekle");
                else://boyut uygunsa
                    $izinverilen=array("image/png", "image/jpeg");
                    if(!in_array($_FILES["dosya"]["type"],$izinverilen)):
                        echo '<div class="alert alert-danger mt-5">
                       İzin verilen uzantı değil!</div>';
                       header("refresh:2,url=control.php?sayfa=introresimekle");
                    else://kosullar tamam
                        $dosyaminyolu='../assets/img/carousel/'.$_FILES["dosya"]["name"];
                         $dosyayolu='../assets/img/carousel/'.$_FILES["dosya"]["name"];
                        move_uploaded_file($_FILES["dosya"]["tmp_name"],'../assets/img/carousel/'
                        .$_FILES["dosya"]["name"]);
                        addWatermark($dosyayolu);
                    
                        echo '<div class="alert alert-success mt-5">
                        Yükleme başarılı.</div>';
                        header("refresh:2,url=control.php?sayfa=introayar");
//veritabanına ekleme-----------
                        $dosyaminyolu2=str_replace('../','',$dosyaminyolu);
                        $kayıtekle=self::sorgum($vt,"insert into intro (resimyol) VALUES('$dosyaminyolu2')",0);
                    endif;
                endif; 
        endif;
      
        else:
             ?>
             <div class="col-lg-4 mx-auto mt-2">
             <div class="card card-bordered">
             <div class="card-body">
             <h5 class="title border-bottom">İntro resim yükleme formu</h5>
             <form action="" method="post" enctype="multipart/form-data">
             <p class="card-text">
             <input type="file" name="dosya" /></p>
             <input type="submit" name="buton" value="YÜKLE" class="btn btn-primary mb-1" />
             </form>
             <p class="card-text text-left text-danger border-top">
             * İzin verilen formatlar : jpeg, png<br/>
             * izn verilen max. boyut : 5Mb
             </p>
             </div>
             </div>
             </div>
            <?php 
        endif;
        echo '</div></div>';

    }//intro resime ekleme
    function introsil($vt){
        $introid=$_GET["id"];
        $verial=self::sorgum($vt,"select * from intro where id=$introid",1);
        echo '<div class="row text-center">
        <div class="col-lg-12">';
         //dosyayıdasil
        unlink("../".$verial["resimyol"]);
        //vtden sileme
      
        self::sorgum($vt,"delete  from intro where id=$introid",0);
       
       
        echo '<div class="alert alert-success mt-5">
        Silme başarılı.</div>';
      echo '</div></div>';
      header("refresh:2,url=control.php?sayfa=introayar");
    } 
    function introresimguncelleme($vt){
        $gelenintroid=$_GET["id"];
        echo '<div class="row text-center">
        <div class="col-lg-12">';
        if($_POST):
           
            $formdangelenid=@$_POST["introid"];
            if($_FILES["dosya"]["name"]==""):
                echo '<div class="alert alert-danger mt-5">
                Dosya yüklenmedi, bu alan boş olamaz.</div>';
                header("refresh:2,url=control.php?sayfa=introayar");
            else://bos degilese
                if($_FILES["dosya"]["size"]>(1024*1024*5)):
                    echo '<div class="alert alert-danger mt-5">
                    Dosya boyutu çok fazla!</div>';
                    header("refresh:2,url=control.php?sayfa=introayar");
                else://boyut uygunsa
                    $izinverilen=array("image/png", "image/jpeg");
                    if(!in_array($_FILES["dosya"]["type"],$izinverilen)):
                        echo '<div class="alert alert-danger mt-5">
                       İzin verilen uzantı değil!</div>';
                       header("refresh:2,url=control.php?sayfa=introayar");
                    else://kosullar tamam
                        //olanı sil yeniyi kaydet
                        $resimyolunabak=self::sorgum($vt,"select * from intro where id=$gelenintroid",1);
                        $dbgelenyol='../'.$resimyolunabak["resimyol"];
                        unlink($dbgelenyol);
                        $dosyaminyolu='../assets/img/carousel/'.$_FILES["dosya"]["name"];
                    
                        move_uploaded_file($_FILES["dosya"]["tmp_name"],$dosyaminyolu);
                        $dosyaminyolu2=str_replace('../','',$dosyaminyolu);
                        self::sorgum($vt,"update intro set resimyol='$dosyaminyolu2' where id=$gelenintroid",0);
                        echo '<div class="alert alert-success mt-5">
                        Güncelleme başarılı.</div>';
                        header("refresh:2,url=control.php?sayfa=introayar");
                      
//veritabanına ekleme-----------
 
                    endif;
                endif; 
        endif;
      
        else:
             ?>
             <div class="col-lg-4 mx-auto mt-2">
             <div class="card card-bordered">
             <div class="card-body">
             <h5 class="title border-bottom">İntro resim güncelleme formu</h5>
             <form action="" method="post" enctype="multipart/form-data">
             <p class="card-text">
             <input type="file" name="dosya" /></p>
             <p class="card-text">
             <input type="hidden" name="introId" value="<?php echo $gelenintroid; ?>"/></p>
             <input type="submit" name="buton" value="YÜKLE" class="btn btn-primary mb-1" />
             </form>
             <p class="card-text text-left text-danger border-top">
             * İzin verilen formatlar : jpeg, png<br/>
             * izn verilen max. boyut : 5Mb
             </p>
             </div>
             </div>
             </div>
            <?php 
        endif;
        echo '</div></div>';
    }

    //intro---------------------bitti
    function galeriayar($vt){
        echo '<div class="row text-center">
        <div class="col-lg-12">
        <h4 class="float-left mt-3 text-info mb-2">
        <a href="control.php?sayfa=galeriresimekle" class="ti-plus bg-success p-1 text-white mr-2 mt-3"></a>
        Galeri Resimleri</h4> </div>';
      
       
      
    //$introbilgiler=$vt->prepare("select * from galeri");
    $introbilgiler=self::sorgum($vt,"select * from galeri",2);
    while($sonbilgi=$introbilgiler->fetch(PDO::FETCH_ASSOC)):
        echo '<div class="col-lg-4">
        <div class="row card-bordered  p-1 m-1">
        <div class="col-lg-12">
        <img src="../'.$sonbilgi["resimyol"].'">
        <kbd class="bg-white p-2" style="position:absolute; bottom:10px; right:10px;">
        <a href="control.php?sayfa=galeriresimguncelle&id='.$sonbilgi["id"].'" class="ti-reload m-2 text-success" style="font-size:20px;"></a>
        <a href="control.php?sayfa=galeriresimsil&id='.$sonbilgi["id"].'" class="ti-trash m-2 text-danger" style="font-size:20px;"></a>
        </kbd>
        </div>

        </div>
        </div>';
    endwhile;
    echo '</div>';
    }//vt resimleri geldi
    function galeriresimekleme($vt){
        echo '<div class="row text-center">
        <div class="col-lg-12">';
        if($_POST):
          
            if($_FILES["dosya"]["name"]==""):
                echo '<div class="alert alert-danger mt-5">
                Dosya yüklenmedi, bu alan boş olamaz.</div>';
                header("refresh:2,url=control.php?sayfa=galeriresimekle");
            else://bos degilese
                if($_FILES["dosya"]["size"]>(1024*1024*5)):
                    echo '<div class="alert alert-danger mt-5">
                    Dosya boyutu çok fazla!</div>';
                    header("refresh:2,url=control.php?sayfa=galeriresimekle");
                else://boyut uygunsa
                    $izinverilen=array("image/png", "image/jpeg");
                    if(!in_array($_FILES["dosya"]["type"],$izinverilen)):
                        echo '<div class="alert alert-danger mt-5">
                       İzin verilen uzantı değil!</div>';
                       header("refresh:2,url=control.php?sayfa=galeriresimekle");
                    else://kosullar tamam
                        $dosyaminyolu='../assets/img/filo/'.$_FILES["dosya"]["name"];
                    
                        move_uploaded_file($_FILES["dosya"]["tmp_name"],'../assets/img/filo/'
                        .$_FILES["dosya"]["name"]);
                        echo '<div class="alert alert-success mt-5">
                        Yükleme başarılı.</div>';
                         header("refresh:2,url=control.php?sayfa=galeriayar");
//veritabanına ekleme-----------
                        $dosyaminyolu2=str_replace('../','',$dosyaminyolu);
                        $kayıtekle=self::sorgum($vt,"insert into galeri (resimyol) VALUES('$dosyaminyolu2')",0);
                    endif;
                endif; 
        endif;
      
        else:
             ?>
             <div class="col-lg-4 mx-auto mt-2">
             <div class="card card-bordered">
             <div class="card-body">
             <h5 class="title border-bottom">Galeri resim yükleme formu</h5>
             <form action="" method="post" enctype="multipart/form-data">
             <p class="card-text">
             <input type="file" name="dosya" /></p>
             <input type="submit" name="buton" value="YÜKLE" class="btn btn-primary mb-1" />
             </form>
             <p class="card-text text-left text-danger border-top">
             * İzin verilen formatlar : jpeg, png<br/>
             * izn verilen max. boyut : 5Mb
             </p>
             </div>
             </div>
             </div>
            <?php 
        endif;
        echo '</div></div>';

    }//galeri resime ekleme
    function galerisil($vt){
        $introid=$_GET["id"];
        $verial=self::sorgum($vt,"select * from galeri where id=$introid",1);
        echo '<div class="row text-center">
        <div class="col-lg-12">';
         //dosyayıdasil
        unlink("../".$verial["resimyol"]);
        //vtden sileme
      
        self::sorgum($vt,"delete  from galeri where id=$introid",0);
       
       
        echo '<div class="alert alert-success mt-5">
        Silme başarılı.</div>';
      echo '</div></div>';
      header("refresh:2,url=control.php?sayfa=galeriayar");
    } 
    function galeriresimguncelleme($vt){
        $gelenintroid=$_GET["id"];
        echo '<div class="row text-center">
        <div class="col-lg-12">';
        if($_POST):
            // <?php echo $gelenşntroid;
            //dosya bos mu dolumu
            //boyut uygunmu
            //uzanttı 
            //son
            $formdangelenid=@$_POST["introid"];
            if($_FILES["dosya"]["name"]==""):
                echo '<div class="alert alert-danger mt-5">
                Dosya yüklenmedi, bu alan boş olamaz.</div>';
                header("refresh:2,url=control.php?sayfa=galeriayar");
            else://bos degilese
                if($_FILES["dosya"]["size"]>(1024*1024*5)):
                    echo '<div class="alert alert-danger mt-5">
                    Dosya boyutu çok fazla!</div>';
                    header("refresh:2,url=control.php?sayfa=galeriayar");
                else://boyut uygunsa
                    $izinverilen=array("image/png", "image/jpeg");
                    if(!in_array($_FILES["dosya"]["type"],$izinverilen)):
                        echo '<div class="alert alert-danger mt-5">
                       İzin verilen uzantı değil!</div>';
                       header("refresh:2,url=control.php?sayfa=galeriayar");
                    else://kosullar tamam
                        //olanı sil yeniyi kaydet
                        $resimyolunabak=self::sorgum($vt,"select * from galeri where id=$gelenintroid",1);
                        $dbgelenyol='../'.$resimyolunabak["resimyol"];
                        unlink($dbgelenyol);
                        $dosyaminyolu='../assets/img/filo/'.$_FILES["dosya"]["name"];
                    
                        move_uploaded_file($_FILES["dosya"]["tmp_name"],$dosyaminyolu);
                        $dosyaminyolu2=str_replace('../','',$dosyaminyolu);
                        self::sorgum($vt,"update galeri set resimyol='$dosyaminyolu2' where id=$gelenintroid",0);
                        echo '<div class="alert alert-success mt-5">
                        Güncelleme başarılı.</div>';
                        header("refresh:2,url=control.php?sayfa=galeriayar");
                      
//veritabanına ekleme-----------
 
                    endif;
                endif; 
        endif;
      
        else:
             ?>
             <div class="col-lg-4 mx-auto mt-2">
             <div class="card card-bordered">
             <div class="card-body">
             <h5 class="title border-bottom">Galeri resim güncelleme formu</h5>
             <form action="" method="post" enctype="multipart/form-data">
             <p class="card-text">
             <input type="file" name="dosya" /></p>
             <p class="card-text">
             <input type="hidden" name="introId" value="<?php echo $gelenintroid; ?>"/></p>
             <input type="submit" name="buton" value="YÜKLE" class="btn btn-primary mb-1" />
             </form>
             <p class="card-text text-left text-danger border-top">
             * İzin verilen formatlar : jpeg, png<br/>
             * izn verilen max. boyut : 5Mb
             </p>
             </div>
             </div>
             </div>
            <?php 
        endif;
        echo '</div></div>';
    } //galeri--------------------bitti


//partnyor
        //intro---------------------bitti


 function partnyorayaricerik($vt){
         echo '<div class="row text-center">
        <div class="col-lg-12 border-bottom">
        <h4 class="float-left mt-3 text-info">Şirket içerik</h4>
        </div>';
      
    
    if(!$_POST):
        $kayitid=$_GET["id"];
        $sonbilgi=self::sorgum($vt,"select * from partnyor where id=$kayitid",1);
        
        echo '
        <form action="" method="post">
        
        <div class="col-lg-6 bg-light" id="hakkimizdayazilar">
        Link ID:<span>'.$sonbilgi["id"].'</span>
        </div>
        <div class="col-lg-12">
        <input name="icerik" class="form-control m-2 " value="'.$sonbilgi["icerik"].'" >
         </div>
         
        <div class="col-lg-12 border-top">
        <input type="hidden" name="kayitidsi" value="'.$kayitid.'" />
        <input type="submit" name="buton" class="btn btn-info m-1" value="Guncelle" />
        </form>
         ';
        else:

           $icerik=htmlspecialchars($_POST["icerik"]);
           $kayitidsi=htmlspecialchars($_POST["kayitidsi"]);
    
        if($_POST):
            self::sorgum($vt,"UPDATE partnyor SET icerik='$icerik' WHERE id=$kayitidsi",0);
            echo '<div class="col-lg-6 mx-auto">
            <div class="alert alert-success mt-5">
            Güncelleme basarılı</div></div>';
            header("refresh:2,url=control.php?sayfa=partnyorayar");
       
        endif;
        echo '</div>';
    endif;
  
    }


    function partnyorayar($vt){
        echo '<div class="row text-center">
        <div class="col-lg-12">
        <h4 class="float-left mt-3 text-info mb-2">
        <a href="control.php?sayfa=partnyorresimekle" class="ti-plus bg-success p-1 text-white mr-2 mt-3"></a>
        Şirket Logoları</h4> </div>';
      
    $introbilgiler=self::sorgum($vt,"select * from partnyor",2);
    while($sonbilgi=$introbilgiler->fetch(PDO::FETCH_ASSOC)):
        echo '<div class="col-lg-4">
        <div class="row card-bordered  p-1 m-1">
        <div class="col-lg-12">
        <img src="../'.$sonbilgi["resimyol"].'">
        <kbd class="bg-white p-2" style="position:absolute; bottom:10px; right:10px;">
        <a href="control.php?sayfa=partnyorayaricerik&id='.$sonbilgi["id"].'" class="ti-pencil m-2 text-success" style="font-size:20px;"></a>
        <a href="control.php?sayfa=partnyorresimguncelle&id='.$sonbilgi["id"].'" class="ti-reload m-2 text-success" style="font-size:20px;"></a>
        <a href="control.php?sayfa=partnyorresimsil&id='.$sonbilgi["id"].'" class="ti-trash m-2 text-danger" style="font-size:20px;"></a>
        </kbd>
        </div>

        </div>
        </div>';
    endwhile;
    echo '</div>';
    echo '<br><hr><br>';


    }//vt resimleri geldi
    function partnyorresimekleme($vt){
        echo '<div class="row text-center">
        <div class="col-lg-12">';
        if($_POST):
          
            if($_FILES["dosya"]["name"]==""):
                echo '<div class="alert alert-danger mt-5">
                Dosya yüklenmedi, bu alan boş olamaz.</div>';
                header("refresh:2,url=control.php?sayfa=partnyorresimekle");
            else://bos degilese
                if($_FILES["dosya"]["size"]>(1024*1024*5)):
                    echo '<div class="alert alert-danger mt-5">
                    Dosya boyutu çok fazla!</div>';
                    header("refresh:2,url=control.php?sayfa=partnyorresimekle");
                else://boyut uygunsa
                    $izinverilen=array("image/png", "image/jpeg");
                    if(!in_array($_FILES["dosya"]["type"],$izinverilen)):
                        echo '<div class="alert alert-danger mt-5">
                       İzin verilen uzantı değil!</div>';
                       header("refresh:2,url=control.php?sayfa=partnyorresimekle");
                    else://kosullar tamam
                        $dosyaminyolu='../assets/img/partners/'.$_FILES["dosya"]["name"];
                    
                        move_uploaded_file($_FILES["dosya"]["tmp_name"],'../assets/img/partners/'
                        .$_FILES["dosya"]["name"]);
                        echo '<div class="alert alert-success mt-5">
                        Yükleme başarılı.</div>';
                        header("refresh:2,url=control.php?sayfa=partnyorayar");
//veritabanına ekleme-----------
                        $dosyaminyolu2=str_replace('../','',$dosyaminyolu);
                        $kayıtekle=self::sorgum($vt,"insert into partnyor (resimyol) VALUES('$dosyaminyolu2')",0);
                    endif;
                endif; 
        endif;
      
        else:
             ?>
             <div class="col-lg-4 mx-auto mt-2">
             <div class="card card-bordered">
             <div class="card-body">
             <h5 class="title border-bottom">Şirket resim yükleme formu</h5>
             <form action="" method="post" enctype="multipart/form-data">
             <p class="card-text">
             <input type="file" name="dosya" /></p>
             <input type="submit" name="buton" value="YÜKLE" class="btn btn-primary mb-1" />
             </form>
             <p class="card-text text-left text-danger border-top">
             * İzin verilen formatlar : jpeg, png<br/>
             * izn verilen max. boyut : 5Mb
             </p>
             </div>
             </div>
             </div>
            <?php 
        endif;
        echo '</div></div>';

    }//partnyor resime ekleme
    function partnyorsil($vt){
        $introid=$_GET["id"];
        $verial=self::sorgum($vt,"select * from partnyor where id=$introid",1);
        echo '<div class="row text-center">
        <div class="col-lg-12">';
         //dosyayıdasil
        unlink("../".$verial["resimyol"]);
        //vtden sileme
      
        self::sorgum($vt,"delete  from partnyor where id=$introid",0);
       
       
        echo '<div class="alert alert-success mt-5">
        Silme başarılı.</div>';
      echo '</div></div>';
      header("refresh:2,url=control.php?sayfa=partnyorayar");
    } 
    function partnyorresimguncelleme($vt){
        $gelenintroid=$_GET["id"];
        echo '<div class="row text-center">
        <div class="col-lg-12">';
        if($_POST):
         
            $formdangelenid=@$_POST["introid"];
            if($_FILES["dosya"]["name"]==""):
                echo '<div class="alert alert-danger mt-5">
                Dosya yüklenmedi, bu alan boş olamaz.</div>';
                header("refresh:2,url=control.php?sayfa=partnyorayar");
            else://bos degilese
                if($_FILES["dosya"]["size"]>(1024*1024*5)):
                    echo '<div class="alert alert-danger mt-5">
                    Dosya boyutu çok fazla!</div>';
                    header("refresh:2,url=control.php?sayfa=partnyorayar");
                else://boyut uygunsa
                    $izinverilen=array("image/png", "image/jpeg");
                    if(!in_array($_FILES["dosya"]["type"],$izinverilen)):
                        echo '<div class="alert alert-danger mt-5">
                       İzin verilen uzantı değil!</div>';
                       header("refresh:2,url=control.php?sayfa=partnyorayar");
                    else://kosullar tamam
                        //olanı sil yeniyi kaydet
                        $resimyolunabak=self::sorgum($vt,"select * from partnyor where id=$gelenintroid",1);
                        $dbgelenyol='../'.$resimyolunabak["resimyol"];
                        unlink($dbgelenyol);
                        $dosyaminyolu='../assets/img/partners/'.$_FILES["dosya"]["name"];
                    
                        move_uploaded_file($_FILES["dosya"]["tmp_name"],$dosyaminyolu);
                        $dosyaminyolu2=str_replace('../','',$dosyaminyolu);
                        self::sorgum($vt,"update partnyor set resimyol='$dosyaminyolu2' where id=$gelenintroid",0);
                        echo '<div class="alert alert-success mt-5">
                        Güncelleme başarılı.</div>';
                        header("refresh:2,url=control.php?sayfa=partnyorayar");
                      
//veritabanına ekleme-----------
 
                    endif;
                endif; 
        endif;
      
        else:
             ?>
             <div class="col-lg-4 mx-auto mt-2">
             <div class="card card-bordered">
             <div class="card-body">
             <h5 class="title border-bottom">Şirket resim güncelleme formu</h5>
             <form action="" method="post" enctype="multipart/form-data">
             <p class="card-text">
             <input type="file" name="dosya" /></p>
             <p class="card-text">
             <input type="hidden" name="introId" value="<?php echo $gelenintroid; ?>"/></p>
             <input type="submit" name="buton" value="YÜKLE" class="btn btn-primary mb-1" />
             </form>
             <p class="card-text text-left text-danger border-top">
             * İzin verilen formatlar : jpeg, png<br/>
             * izn verilen max. boyut : 5Mb
             </p>
             </div>
             </div>
             </div>
            <?php 
        endif;
        echo '</div></div>';
    } //partnyor--------------------bitti




    function hakkimizda($vt){
        echo '<div class="row text-center">
        <div class="col-lg-12 border-bottom">
         <div class="row card-bordered p-1 m-1">
        <h4 class="float-left mt-3 text-info">Hakkımızda</h4>';
    if(!$_POST):
        $sonbilgi=self::sorgum($vt,"select * from hakkimizda",1);
        echo '<div class="container my-5">
  <div class="row">
    <div class="col-lg-6 mx-auto">
      <div class="card shadow-sm">
        <div class="card-header bg-primary text-white text-center py-2">
          <h3>Yüklü Resim</h3>
        </div><hr>
        <div class="card-body">
          <img src="../'.$sonbilgi["resim"].'" class="img-fluid mx-auto d-block" style="width:200px; height:200px;">
        </div><hr>
      </div>
    </div>
  </div>

  <div class="row mt-5">
    <div class="col-lg-12 mx-auto">
      <div class="card shadow-sm">
        <div class="card-body">
          <form action="" method="post" enctype="multipart/form-data">
            <div class="form-group">
              <label for="fileInput" class="text-left text-primary">Resim Seçim işlemi</label>
              <input type="file" name="dosya" class="form-control-file" id="fileInput">
            </div> <br><hr>
            <div class="form-group">
              <label for="titleInput" class="text-left text-primary">Başlık</label>
              <input type="text" class="form-control" name="baslik" id="titleInput" value="'.$sonbilgi["baslik"].'">
            </div>

            <div class="form-group">
              <label for="contentInput" class="text-left text-primary">İçerik <img src="assets/images/flags/azerbaijan.png" alt="icerik"></label>
              <textarea class="form-control" id="summernote" name="icerik_az">'.$sonbilgi["icerik_az"].'</textarea>
            </div>
             <div class="form-group">
               <label for="contentInput" class="text-left text-primary">İçerik <img src="assets/images/flags/turkey.png" alt="icerik"></label>
              <textarea class="form-control" id="summernote" name="icerik_tr">'.$sonbilgi["icerik_tr"].'</textarea>
            </div>
             <div class="form-group">
               <label for="contentInput" class="text-left text-primary">İçerik <img src="assets/images/flags/russian.png" alt="icerik"></label>
              <textarea class="form-control" id="summernote" name="icerik_ru">'.$sonbilgi["icerik_ru"].'</textarea>
            </div>
             <div class="form-group">
               <label for="contentInput" class="text-left text-primary">İçerik <img src="assets/images/flags/england.png" alt="icerik"></label>
              <textarea class="form-control" id="summernote" name="icerik_en">'.$sonbilgi["icerik_en"].'</textarea>
            </div>
             <div class="form-group">
             <label for="contentInput" class="text-left text-primary">Misyon Başlık &nbsp; <img src="assets/images/flags/azerbaijan.png" alt="icerik"></label>
              <input type="text" class="form-control"  name="misyonBaslik_az" value="'.$sonbilgi["misyonBaslik_az"].'">
            </div>
             <div class="form-group">
             <label for="contentInput" class="text-left text-primary">Misyon Başlık &nbsp; <img src="assets/images/flags/turkey.png" alt="icerik"></label>
              <input type="text" class="form-control"  name="misyonBaslik_tr" value="'.$sonbilgi["misyonBaslik_tr"].'">
            </div>
             <div class="form-group">
             <label for="contentInput" class="text-left text-primary">Misyon Başlık &nbsp; <img src="assets/images/flags/russian.png" alt="icerik"></label>
              <input type="text" class="form-control"  name="misyonBaslik_ru" value="'.$sonbilgi["misyonBaslik_ru"].'">
            </div>
             <div class="form-group">
             <label for="contentInput" class="text-left text-primary">Misyon Başlık &nbsp; <img src="assets/images/flags/england.png" alt="icerik"></label>
              <input type="text" class="form-control"  name="misyonBaslik_en" value="'.$sonbilgi["misyonBaslik_en"].'">
            </div>

            <div class="form-group">
             <label for="contentInput" class="text-left text-primary">Misyon <img src="assets/images/flags/azerbaijan.png" alt="icerik"></label>
              <textarea class="form-control" id="summernote2" name="misyon_az">'.$sonbilgi["misyon_az"].'</textarea>
            </div>
             <div class="form-group">
             <label for="contentInput" class="text-left text-primary">Misyon <img src="assets/images/flags/turkey.png" alt="icerik"></label>
              <textarea class="form-control" id="summernote2" name="misyon_tr">'.$sonbilgi["misyon_tr"].'</textarea>
            </div>
             <div class="form-group">
             <label for="contentInput" class="text-left text-primary">Misyon <img src="assets/images/flags/russian.png" alt="icerik"></label>
              <textarea class="form-control" id="summernote2" name="misyon_ru">'.$sonbilgi["misyon_ru"].'</textarea>
            </div>
             <div class="form-group">
             <label for="contentInput" class="text-left text-primary">Misyon <img src="assets/images/flags/england.png" alt="icerik"></label>
              <textarea class="form-control" id="summernote2" name="misyon_en">'.$sonbilgi["misyon_en"].'</textarea>
            </div>
                         <div class="form-group">
             <label for="contentInput" class="text-left text-primary">vizyon Başlık &nbsp; <img src="assets/images/flags/azerbaijan.png" alt="icerik"></label>
              <input type="text" class="form-control"  name="vizyonBaslik_az" value="'.$sonbilgi["vizyonBaslik_az"].'">
            </div>
             <div class="form-group">
             <label for="contentInput" class="text-left text-primary">vizyon Başlık &nbsp; <img src="assets/images/flags/turkey.png" alt="icerik"></label>
              <input type="text" class="form-control"  name="vizyonBaslik_tr" value="'.$sonbilgi["vizyonBaslik_tr"].'">
            </div>
             <div class="form-group">
             <label for="contentInput" class="text-left text-primary">vizyon Başlık &nbsp; <img src="assets/images/flags/russian.png" alt="icerik"></label>
              <input type="text" class="form-control"  name="vizyonBaslik_ru" value="'.$sonbilgi["vizyonBaslik_ru"].'">
            </div>
             <div class="form-group">
             <label for="contentInput" class="text-left text-primary">vizyon Başlık &nbsp; <img src="assets/images/flags/england.png" alt="icerik"></label>
              <input type="text" class="form-control"  name="vizyonBaslik_en" value="'.$sonbilgi["vizyonBaslik_en"].'">
            </div>
            <div class="form-group">
               <label for="contentInput" class="text-left text-primary">Vizyon <img src="assets/images/flags/azerbaijan.png" alt="icerik"></label>
              <textarea class="form-control" id="summernote3" name="vizyon_az">'.$sonbilgi["vizyon_az"].'</textarea>
            </div>
             <div class="form-group">
               <label for="contentInput" class="text-left text-primary">Vizyon <img src="assets/images/flags/azerbaijan.png" alt="icerik"></label>
              <textarea class="form-control" id="summernote3" name="vizyon_tr">'.$sonbilgi["vizyon_tr"].'</textarea>
            </div>

             <div class="form-group">
               <label for="contentInput" class="text-left text-primary">Vizyon <img src="assets/images/flags/azerbaijan.png" alt="icerik"></label>
              <textarea class="form-control" id="summernote3" name="vizyon_ru">'.$sonbilgi["vizyon_ru"].'</textarea>
            </div>

            <div class="form-group">
               <label for="contentInput" class="text-left text-primary">Vizyon <img src="assets/images/flags/azerbaijan.png" alt="icerik"></label>
              <textarea class="form-control" id="summernote3" name="vizyon_en">'.$sonbilgi["vizyon_en"].'</textarea>
            </div>


            <button type="submit" name="buton" class="btn btn-primary btn-block">Güncelle</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
';
        else:

           $baslik=htmlspecialchars($_POST["baslik"]);
           $icerik_az =htmlspecialchars($_POST["icerik_az"]);
           $icerik_tr =htmlspecialchars($_POST["icerik_tr"]);
           $icerik_ru =htmlspecialchars($_POST["icerik_ru"]);
           $icerik_en =htmlspecialchars($_POST["icerik_en"]);
           $misyonBaslik_az=htmlspecialchars($_POST["misyonBaslik_az"]);
           $misyonBaslik_tr=htmlspecialchars($_POST["misyonBaslik_tr"]);
           $misyonBaslik_ru=htmlspecialchars($_POST["misyonBaslik_ru"]);
           $misyon_az=htmlspecialchars($_POST["misyon_az"]);
           $misyon_tr=htmlspecialchars($_POST["misyon_tr"]);
           $misyon_ru=htmlspecialchars($_POST["misyon_ru"]);
           $misyon_en=htmlspecialchars($_POST["misyon_en"]);
           $vizyonBaslik_az=htmlspecialchars($_POST["vizyonBaslik_az"]);
           $vizyonBaslik_tr=htmlspecialchars($_POST["vizyonBaslik_tr"]);
           $vizyonBaslik_ru=htmlspecialchars($_POST["vizyonBaslik_ru"]);
           $vizyonBaslik_en=htmlspecialchars($_POST["vizyonBaslik_en"]);
           $vizyon_az=htmlspecialchars($_POST["vizyon_az"]);
           $vizyon_tr=htmlspecialchars($_POST["vizyon_tr"]);
           $vizyon_ru=htmlspecialchars($_POST["vizyon_ru"]);
           $vizyon_en=htmlspecialchars($_POST["vizyon_en"]);
           if(@$_FILES["dosya"]["name"]!==""):

            if(@$_FILES["dosya"]["size"]<(1024*1024*5)):

            $izinverilen=array("image/png", "image/jpeg");
            if(in_array(@$_FILES["dosya"]["type"],$izinverilen)):
                $dosyaminyolu='../assets/img/category/'.$_FILES["dosya"]["name"];
            move_uploaded_file($_FILES["dosya"]["tmp_name"],$dosyaminyolu);
            $veritabaniicin=str_replace('../','',$dosyaminyolu);
             //veritabanına ekleme----------
                endif;
            endif;
        endif;
        if(@$_FILES["dosya"]["name"]!==""):
            self::sorgum($vt,"UPDATE hakkimizda SET baslik='$baslik', icerik_az='$icerik_az', icerik_tr='$icerik_tr', icerik_tr='$icerik_tr', icerik_en='$icerik_en', misyonBaslik_az='$misyonBaslik_az', misyonBaslik_tr='$misyonBaslik_tr', misyonBaslik_ru='$misyonBaslik_ru', misyonBaslik_en='$misyonBaslik_en', misyon_az='$misyon_az', misyon_tr='$misyon_tr', misyon_ru='$misyon_ru', misyon_en='$misyon_en',vizyonBaslik_az='$vizyonBaslik_az', vizyonBaslik_tr='$vizyonBaslik_tr', vizyonBaslik_ru='$vizyonBaslik_ru', vizyonBaslik_en='$vizyonBaslik_en', vizyon_az='$vizyon_az', vizyon_tr='$vizyon_tr', vizyon_ru='$vizyon_ru', vizyon_en='$vizyon_en', resim='$veritabaniicin'",0);
            echo '<div class="col-lg-6 mx-auto">
            <div class="alert alert-success mt-5">
            Güncelleme basarılı</div></div>';
            header("refresh:2,url=control.php?sayfa=hakkimiz");
        else:
            self::sorgum($vt,"UPDATE hakkimizda SET baslik='$baslik', icerik_az='$icerik_az', icerik_tr='$icerik_tr', icerik_tr='$icerik_tr', icerik_en='$icerik_en', misyonBaslik_az='$misyonBaslik_az', misyonBaslik_tr='$misyonBaslik_tr', misyonBaslik_ru='$misyonBaslik_ru', misyonBaslik_en='$misyonBaslik_en', misyon_az='$misyon_az', misyon_tr='$misyon_tr', misyon_ru='$misyon_ru', misyon_en='$misyon_en',vizyonBaslik_az='$vizyonBaslik_az', vizyonBaslik_tr='$vizyonBaslik_tr', vizyonBaslik_ru='$vizyonBaslik_ru', vizyonBaslik_en='$vizyonBaslik_en', vizyon_az='$vizyon_az', vizyon_tr='$vizyon_tr', vizyon_ru='$vizyon_ru', vizyon_en='$vizyon_en'",0);
            echo '<div class="col-lg-6 mx-auto">
            <div class="alert alert-success mt-5">
            Güncelleme basarılı</div></div>';
            header("refresh:2,url=control.php?sayfa=hakkimiz");
        endif;
        echo '</div></div></div>';
    endif;
  
    }
                
   





    function hizmetlerhepsi($vt){
        echo '<div class="row text-center">
        <div class="col-lg-12">
        <h4 class="float-left mt-3 text-info mb-2">
        <a href="control.php?sayfa=hizmetekle" class="ti-plus bg-success p-1 text-white mr-2 mt-3"></a>
        Hizmetler Ayarları</h4> </div>';
    //$introbilgiler=$vt->prepare("select * from galeri");
    $introbilgiler=self::sorgum($vt,"select * from hizmetler",2);
    while($sonbilgi=$introbilgiler->fetch(PDO::FETCH_ASSOC)):
        echo '<div class="col-lg-6">
        <div class="row card-bordered p-1 m-1 bg-light">
        <div class="col-lg-10 pt-1 pb-1">
        <h5>'.$sonbilgi["baslik"].'</h5>
        </div>
        <div class="col-lg-2 text-right">
        <a href="control.php?sayfa=hizmetguncelle&id='.$sonbilgi["id"].'" class="ti-reload  text-success" style="font-size:20px;"></a>
        <a href="control.php?sayfa=hizmetsil&id='.$sonbilgi["id"].'" class="ti-trash  text-danger pl-1" style="font-size:20px;"></a>
        </div>
        <div class="col-lg-12 border-top text-secondary">
        '.$sonbilgi["icerik_az"].'
        </div>

        </div>
        </div>';
    endwhile;
    echo '</div>';
    }//vt resimleri geldi
    function hizmetekleme($vt){
        echo '<div class="row text-center">
        <div class="col-lg-12 border-bottom">
        <h3 class=" mt-3 text-info">Hizmet Ekle<h3>
        </div>';
    //$introbilgiler=$vt->prepare("select * from galeri");
        if(!$_POST):
        
        echo '<div class="col-lg-6 mx-auto">
        <div class="row card-bordered p-1 m-1 bg-light">
        <div class="col-lg-2 pt-3">
        Başlık
        </div>
        <div class="col-lg-10 p-2">
        <form action="" method="post">
        <input type="text" name="baslik" class="form-control" />
        
        </div>

        <div class="col-lg-12 border-top p-2 ">
        İçerik
        </div>
        <div class="col-lg-12 border-top p-2">
        <textarea name="icerik" rows="5" class="form-control"></textarea>
        </div>
        <div class="col-lg-12 border-top p-2">
        <input type="submit" name="buton" value="Hizmet Ekle" class="btn btn-primary"/>
        </form>
        </div>

        </div>
        </div>';
        else:
            $baslik=htmlspecialchars($_POST["baslik"]);
            $icerik=htmlspecialchars($_POST["icerik"]);
            if($baslik=="" && $icerik==""):
                echo '<div class="col-lg-6 mx-auto">
                <div class="alert alert-danger mt-5">
                Veriler boş olamaz.</div></div>';
                header("refresh:2,url=control.php?sayfa=hizmetler");
            else:
                self::sorgum($vt,"insert into hizmetler (baslik,icerik) values('$baslik','$icerik')",0);
                echo '<div class="col-lg-6 mx-auto">
                <div class="alert alert-success mt-5">
                Ekleme başarılı.</div></div>';
                header("refresh:2,url=control.php?sayfa=hizmetler");
            endif;
    endif;
    echo '</div>';
    }//hizmet ekleme bitti
    function hizmetguncelleme($vt){
        echo '<div class="row text-center">
        <div class="col-lg-12 border-bottom">
        <h3 class=" mt-3 text-info">Hizmet Guncelleme Formu<h3>
        </div>';
        
        $kayitid=$_GET["id"];
        $kayitbilgial=self::sorgum($vt,"select * from hizmetler where id=$kayitid",1);
        if(!$_POST):
        
        echo '<div class="col-lg-6 mx-auto">
        <div class="row card-bordered p-1 m-1 bg-light">
        <div class="col-lg-2 pt-3">
        Başlık
        </div>
        <div class="col-lg-10 p-2">
        <form action="" method="post">
        <input type="text" name="baslik" class="form-control" value="'.$kayitbilgial["baslik"].'"/>
        
        </div>

        <div class="col-lg-12 border-top p-2 ">
        İçerik <img src="assets/images/flags/azerbaijan.png" alt="Azerbaijan Flag">
        </div>
        <div class="col-lg-12 border-top p-2">
        <textarea name="icerik_az" rows="5" class="form-control">'.$kayitbilgial["icerik_az"].'</textarea>
        </div>
        <div class="col-lg-12 border-top p-2 ">
        İçerik <img src="assets/images/flags/turkey.png" alt="Azerbaijan Flag">
        </div>
        <div class="col-lg-12 border-top p-2">
        <textarea name="icerik_tr" rows="5" class="form-control">'.$kayitbilgial["icerik_tr"].'</textarea>
        </div>
         <div class="col-lg-12 border-top p-2 ">
        İçerik <img src="assets/images/flags/russian.png" alt="Azerbaijan Flag">
        </div>
        <div class="col-lg-12 border-top p-2">
        <textarea name="icerik_ru" rows="5" class="form-control">'.$kayitbilgial["icerik_ru"].'</textarea>
        </div>
         <div class="col-lg-12 border-top p-2 ">
        İçerik <img src="assets/images/flags/england.png" alt="Azerbaijan Flag">
        </div>
        <div class="col-lg-12 border-top p-2">
        <textarea name="icerik_en" rows="5" class="form-control">'.$kayitbilgial["icerik_en"].'</textarea>
        </div>
        <div class="col-lg-12 border-top p-2">
        <input type="hidden" name="kayitidsi" value="'.$kayitid.'" />
        <input type="submit" name="buton" value="Hizmet Güncelle" class="btn btn-primary"/>
        </form>
        </div>

        </div>
        </div>';
        else:
            $baslik=htmlspecialchars($_POST["baslik"]);
            $icerik=htmlspecialchars($_POST["icerik"]);
            $kayitidsi=htmlspecialchars($_POST["kayitidsi"]);
            if($baslik=="" && $icerik==""):
                echo '<div class="col-lg-6 mx-auto">
                <div class="alert alert-danger mt-5">
                Veriler boş olamaz.</div></div>';
                header("refresh:2,url=control.php?sayfa=hizmetler");
            else:
                self::sorgum($vt,"update hizmetler set baslik='$baslik',icerik='$icerik' where id=$kayitidsi",0);
                echo '<div class="col-lg-6 mx-auto">
                <div class="alert alert-success mt-5">
                Güncelleme başarılı.</div></div>';
                header("refresh:2,url=control.php?sayfa=hizmetler");
            endif;
    endif;
    echo '</div>';
}//hizmet guncelleme bitti
function hizmetsil($vt){
    $kayitid=$_GET["id"];
    echo '<div class="row text-center">
    <div class="col-lg-12">';

    //vtden sileme
   self::sorgum($vt,"delete  from hizmetler where id=$kayitid",0);
   echo '<div class="alert alert-success mt-5">
    Silme başarılı.</div>';
  echo '</div></div>';
  header("refresh:2,url=control.php?sayfa=hizmetler");
}//hizmet sil
//referanslar
function referanslarhepsi($vt){
    echo '<div class="row text-center">
    <div class="col-lg-12">
    <h4 class="float-left mt-3 text-info mb-2">
    <a href="control.php?sayfa=refekle" class="ti-plus bg-success p-1 text-white mr-2 mt-3"></a>
   Referans Ayarları</h4> </div>';
//$introbilgiler=$vt->prepare("select * from referanslar");
$introbilgiler=self::sorgum($vt,"select * from referanslar",2);
while($sonbilgi=$introbilgiler->fetch(PDO::FETCH_ASSOC)):
    echo '<div class="col-lg-2">
    <div class="row card-bordered  p-1 m-1">
    <div class="col-lg-12">
    <img src="../'.$sonbilgi["resimyol"].'">
    </div>
    <a href="control.php?sayfa=refsil&id='.$sonbilgi["id"].'" class="fa fa-trash m-2 text-danger" style="font-size:25px;"></a>
    </div>
    </div>';
endwhile;
echo '</div>';
}//vt resimleri geldi
function refekleme($vt){
    echo '<div class="row text-center">
    <div class="col-lg-12">';
    if($_POST):
        
        //dosya bos mu dolumu
        //boyut uygunmu
        //uzanttı 
        //son
        if($_FILES["dosya"]["name"]==""):
            echo '<div class="alert alert-danger mt-5">
            Dosya yüklenmedi, bu alan boş olamaz.</div>';
            header("refresh:2,url=control.php?sayfa=ref");
        else://bos degilese
            if($_FILES["dosya"]["size"]>(1024*1024*5)):
                echo '<div class="alert alert-danger mt-5">
                Dosya boyutu çok fazla!</div>';
                header("refresh:2,url=control.php?sayfa=ref");
            else://boyut uygunsa
                $izinverilen=array("image/png", "image/jpeg");
                if(!in_array($_FILES["dosya"]["type"],$izinverilen)):
                    echo '<div class="alert alert-danger mt-5">
                   İzin verilen uzantı değil!</div>';
                   header("refresh:2,url=control.php?sayfa=ref");
                else://kosullar tamam
                    $dosyaminyolu='../assets/img/referans/'.$_FILES["dosya"]["name"];
                
                    move_uploaded_file($_FILES["dosya"]["tmp_name"],'../assets/img/referans/'
                    .$_FILES["dosya"]["name"]);
                    echo '<div class="alert alert-success mt-5">
                    Yükleme başarılı.</div>';
                    header("refresh:2,url=control.php?sayfa=ref");
//veritabanına ekleme-----------
                    $dosyaminyolu2=str_replace('../','',$dosyaminyolu);
                    $kayıtekle=self::sorgum($vt,"insert into referanslar (resimyol) VALUES('$dosyaminyolu2')",0);
                endif;
            endif; 
    endif;
  
    else:
         ?>
         <div class="col-lg-4 mx-auto mt-2">
         <div class="card card-bordered">
         <div class="card-body">
         <h5 class="title border-bottom">Galeri resim yükleme formu</h5>
         <form action="" method="post" enctype="multipart/form-data">
         <p class="card-text">
         <input type="file" name="dosya" /></p>
         <input type="submit" name="buton" value="YÜKLE" class="btn btn-primary mb-1" />
         </form>
         <p class="card-text text-left text-danger border-top">
         * İzin verilen formatlar : jpeg, png<br/>
         * izn verilen max. boyut : 5Mb
         </p>
         </div>
         </div>
         </div>
        <?php 
    endif;
    echo '</div></div>';

}//galeri resime ekleme
function refsil($vt){
    $introid=$_GET["id"];
    $verial=self::sorgum($vt,"select * from referanslar where id=$introid",1);
    echo '<div class="row text-center">
    <div class="col-lg-12">';
     //dosyayıdasil
    unlink("../".$verial["resimyol"]);
    //vtden sileme
  
    self::sorgum($vt,"delete  from referanslar where id=$introid",0);
   
   
    echo '<div class="alert alert-success mt-5">
    Silme başarılı.</div>';
  echo '</div></div>';
  header("refresh:2,url=control.php?sayfa=ref");
 

} //referanslar--------------------bitti*/
//musteri yorumları
function yorumlarhepsi($vt){
    echo '<div class="row text-center">
    <div class="col-lg-12">
    <h4 class="float-left mt-3 text-info mb-2">
    <a href="control.php?sayfa=yorumlarekle" class="ti-plus bg-success p-1 text-white mr-2 mt-3"></a>
    Müşteri Yorumları</h4> </div>';
//$introbilgiler=$vt->prepare("select * from galeri");
$introbilgiler=self::sorgum($vt,"select * from yorumlar",2);
while($sonbilgi=$introbilgiler->fetch(PDO::FETCH_ASSOC)):
    echo '<div class="col-lg-4">
    <div class="row card-bordered p-1 m-1 bg-light" style="border-radius:10px;">
    <div class="col-lg-9 pt-1 text-left">
    <h5>İsim:'.$sonbilgi["isim"].'</h5>
    </div>
    <div class="col-lg-3 text-right p-2">
    <a href="control.php?sayfa=yorumlarguncelle&id='.$sonbilgi["id"].'" class="ti-reload  text-success" style="font-size:20px;"></a>
    <a href="control.php?sayfa=yorumlarsil&id='.$sonbilgi["id"].'" class="ti-trash  text-danger pl-1" style="font-size:20px;"></a>
    </div>
    <div class="col-lg-12 border-top text-secondary">
    '.$sonbilgi["icerik"].'
    </div>

    </div>
    </div>';
endwhile;
echo '</div>';
}//yorumlar geldi
function yorumlarekleme($vt){
    echo '<div class="row text-center">
    <div class="col-lg-12 border-bottom">
    <h3 class=" mt-3 text-info">Yorum Ekle<h3>
    </div>';
//$introbilgiler=$vt->prepare("select * from galeri");
    if(!$_POST):
    
    echo '<div class="col-lg-6 mx-auto">
    <div class="row card-bordered p-1 m-1 bg-light">
    <div class="col-lg-2 pt-3">
    İsim
    </div>
    <div class="col-lg-10 p-2">
    <form action="" method="post">
    <input type="text" name="isim" class="form-control" />
    
    </div>

    <div class="col-lg-12 border-top p-2 ">
    Mesaj
    </div>
    <div class="col-lg-12 border-top p-2">
    <textarea name="mesaj" rows="5" class="form-control"></textarea>
    </div>
    <div class="col-lg-12 border-top p-2">
    <input type="submit" name="buton" value="Yorum Ekle" class="btn btn-primary"/>
    </form>
    </div>

    </div>
    </div>';
    else:
        $isim=htmlspecialchars($_POST["isim"]);
        $mesaj=htmlspecialchars($_POST["mesaj"]);
        if($isim=="" && $mesaj==""):
            echo '<div class="col-lg-6 mx-auto">
            <div class="alert alert-danger mt-5">
            Veriler boş olamaz.</div></div>';
            header("refresh:2,url=control.php?sayfa=yorumlar");
        else:
            self::sorgum($vt,"insert into yorumlar (icerik,isim) values('$mesaj','$isim')",0);
            echo '<div class="col-lg-6 mx-auto">
            <div class="alert alert-success mt-5">
            Ekleme başarılı.</div></div>';
            header("refresh:2,url=control.php?sayfa=yorumlar");
        endif;
endif;
echo '</div>';
}//yorum ekleme bitti
function yorumlarguncelleme($vt){
    echo '<div class="row text-center">
    <div class="col-lg-12 border-bottom">
    <h3 class=" mt-3 text-info">Yorum Guncelleme<h3>
    </div>';
    /* gelen id alınacak
    id ile veritabanından bilgiler alınacak
    inputlara o veriler yazılacak
    hidden ile id postiçin tasınacak
    $introbilgiler=$vt->prepare("select * from yorumlar");
    */
    $kayitid=$_GET["id"];
    $kayitbilgial=self::sorgum($vt,"select * from yorumlar where id=$kayitid",1);
    if(!$_POST):
    
    echo '<div class="col-lg-6 mx-auto">
    <div class="row card-bordered p-1 m-1 bg-light">
    <div class="col-lg-2 pt-3">
    İsim
    </div>
    <div class="col-lg-10 p-2">
    <form action="" method="post">
    <input type="text" name="isim" class="form-control" value="'.$kayitbilgial["isim"].'"/>
    
    </div>

    <div class="col-lg-12 border-top p-2 ">
    Mesaj
    </div>
    <div class="col-lg-12 border-top p-2">
    <textarea name="mesaj" rows="5" class="form-control">'.$kayitbilgial["icerik"].'</textarea>
    </div>
    <div class="col-lg-12 border-top p-2">
    <input type="hidden" name="kayitidsi" value="'.$kayitid.'" />
    <input type="submit" name="buton" value="Yorum Güncelle" class="btn btn-primary"/>
    </form>
    </div>

    </div>
    </div>';
    else:
        $isim=htmlspecialchars($_POST["isim"]);
        $mesaj=htmlspecialchars($_POST["mesaj"]);
        $kayitidsi=htmlspecialchars($_POST["kayitidsi"]);
        if($isim=="" && $mesaj==""):
            echo '<div class="col-lg-6 mx-auto">
            <div class="alert alert-danger mt-5">
            Veriler boş olamaz.</div></div>';
            header("refresh:2,url=control.php?sayfa=yorumlar");
        else:
            self::sorgum($vt,"update yorumlar set icerik='$mesaj',isim='$isim' where id=$kayitidsi",0);
            echo '<div class="col-lg-6 mx-auto">
            <div class="alert alert-success mt-5">
            Güncelleme başarılı.</div></div>';
            header("refresh:2,url=control.php?sayfa=yorumlar");
        endif;
endif;
echo '</div>';
}//yorum guncelleme bitti
function yorumlarsil($vt){
$kayitid=$_GET["id"];
echo '<div class="row text-center">
<div class="col-lg-12">';

//vtden sileme
self::sorgum($vt,"delete  from yorumlar where id=$kayitid",0);
echo '<div class="alert alert-success mt-5">
Silme başarılı.</div>';
echo '</div></div>';
header("refresh:2,url=control.php?sayfa=yorumlar");
}//mesajlar kısmı
//tab sistemi örnek;

private function mailgetir($vt,$veriler){
    $sor=$vt->prepare("select * from $veriler[0] where  durum=$veriler[1]");
    $sor->execute();
    return $sor;
}
function gelenmesajlar($vt){
    echo '<div class="row">
    <div class="col-lg-12 mt-2">
    <div class="card">
    <div class="card-body">
    <ul class="nav nav-tabs" id="myTab" role="tablist">
    <li class="nav-item">
    <a class="nav-link active" id="gelen-tab" data-toggle="tab" href="#gelen" role="tab"
    aria-control="gelen" aria-selected="true">
    <kbd>'.self::mailgetir($vt,array("gelenmail", 0))->rowCount().'</kbd>Gelen Mesajlar</a>
    </li>
    <li class="nav-item">
    <a class="nav-link"  id="okunmus-tab" data-toggle="tab" href="#okunmus" role="tab"
    aria-control="okunmus" aria-selected="false">
    <kbd>'.self::mailgetir($vt,array("gelenmail", 1))->rowCount().'</kbd>Okunmus Mesajlar</a>
    </li>
    <li class="nav-item">
    <a class="nav-link"  id="arsiv-tab" data-toggle="tab" href="#arsiv" role="tab"
    aria-control="arsiv" aria-selected="false">
    <kbd>'.self::mailgetir($vt,array("gelenmail", 2))->rowCount().'</kbd>Arsivlenmiş Mesajlar</a>
    </li>
    </ul>
    <div class="tab-content mt-3" id="benimTab">
    <div class="tab-pane fade show active" id="gelen" role="tabpanel" aria-labelbdy="gelen-tab">';
    $sonuc=self::mailgetir($vt,array("gelenmail", 0));
    if($sonuc->rowCount()!=0):
        while($sonucson=$sonuc->fetch(PDO::FETCH_ASSOC)):
            echo '<div class="row">
            <div class="col-lg-12 bg-light mt-2 font-weight-bold">
            <div class="row border-bottom">
            <div class="col-lg-1 p-1">Ad & Ünvan</div>
            <div class="col-lg-2 p-1 text-primary">'.$sonucson["ad"].'</div>
            <div class="col-lg-1 p-1">Mail Adresi</div>
            <div class="col-lg-2 p-1 text-primary">'.$sonucson["mailadres"].'</div>
            <div class="col-lg-1 p-1">Konu</div>
            <div class="col-lg-2 p-1 text-primary">'.$sonucson["konu"].'</div>
            <div class="col-lg-1 p-1">Tarih</div>
            <div class="col-lg-1 p-1 text-primary">'.$sonucson["zaman"].'</div>
            <div class="col-lg-1 p-1">
            <a href="control.php?sayfa=mesajoku&id='.$sonucson["id"].'">
            <i class="fa fa-folder-open border-right pr-2 text-dark"></i></a>
            <a href="control.php?sayfa=mesajarsivle&id='.$sonucson["id"].'">
            <i class="fa fa-share border-right pr-2 text-dark"></i></a>
            <a href="control.php?sayfa=mesajsil&id='.$sonucson["id"].'">
            <i class="fa fa-close  pr-2 text-dark"></i></a>
            </div></div></div>
            </div>';
        
            endwhile;
        else:
            echo '<div class="alert alert-info">Gelen mesaj yok</div>';
    endif;
    echo'</div>
    <div class="tab-pane fade" id="okunmus" role="tabpanel" aria-labelbdy="okunmus-tab">
    ';
    $sonuc=self::mailgetir($vt,array("gelenmail", 1));
    if($sonuc->rowCount()!=0):
        while($sonucson=$sonuc->fetch(PDO::FETCH_ASSOC)):
            echo '<div class="row">
            <div class="col-lg-12 bg-light mt-2 font-weight-bold">
            <div class="row border-bottom">
            <div class="col-lg-1 p-1">Ad & Ünvan</div>
            <div class="col-lg-2 p-1 text-primary">'.$sonucson["ad"].'</div>
            <div class="col-lg-1 p-1">Mail Adresi</div>
            <div class="col-lg-2 p-1 text-primary">'.$sonucson["mailadres"].'</div>
            <div class="col-lg-1 p-1">Konu</div>
            <div class="col-lg-2 p-1 text-primary">'.$sonucson["konu"].'</div>
            <div class="col-lg-1 p-1">Tarih</div>
            <div class="col-lg-1 p-1 text-primary">'.$sonucson["zaman"].'</div>
            <div class="col-lg-1 p-1">
            <a href="control.php?sayfa=mesajoku&id='.$sonucson["id"].'">
            <i class="fa fa-folder-open border-right pr-2 text-dark"></i></a>
            <a href="control.php?sayfa=mesajarsivle&id='.$sonucson["id"].'">
            <i class="fa fa-share border-right pr-2 text-dark"></i></a>
            <a href="control.php?sayfa=mesajsil&id='.$sonucson["id"].'">
            <i class="fa fa-close  pr-2 text-dark"></i></a>
            </div></div></div>
            </div>';
        
            endwhile;
        else:
            echo '<div class="alert alert-info">Okunmus mesaj yoktur.</div>';
    endif;
    echo'
    </div>
    <div class="tab-pane fade" id="arsiv" role="tabpanel" aria-labelbdy="arsiv-tab">
    ';
    $sonuc=self::mailgetir($vt,array("gelenmail", 2));
    if($sonuc->rowCount()!=0):
        while($sonucson=$sonuc->fetch(PDO::FETCH_ASSOC)):
            echo '<div class="row">
            <div class="col-lg-12 bg-light mt-2 font-weight-bold">
            <div class="row border-bottom">
            <div class="col-lg-1 p-1">Ad & Ünvan</div>
            <div class="col-lg-2 p-1 text-primary">'.$sonucson["ad"].'</div>
            <div class="col-lg-1 p-1">Mail Adresi</div>
            <div class="col-lg-2 p-1 text-primary">'.$sonucson["mailadres"].'</div>
            <div class="col-lg-1 p-1">Konu</div>
            <div class="col-lg-2 p-1 text-primary">'.$sonucson["konu"].'</div>
            <div class="col-lg-1 p-1">Tarih</div>
            <div class="col-lg-1 p-1 text-primary">'.$sonucson["zaman"].'</div>
            <div class="col-lg-1 p-1">
            <a href="control.php?sayfa=mesajoku&id='.$sonucson["id"].'">
            <i class="fa fa-folder-open border-right pr-2 text-dark"></i></a>
            <a href="control.php?sayfa=mesajarsivle&id='.$sonucson["id"].'">
            <i class="fa fa-share border-right pr-2 text-dark"></i></a>
            <a href="control.php?sayfa=mesajsil&id='.$sonucson["id"].'">
            <i class="fa fa-close  pr-2 text-dark"></i></a>
            </div></div></div>
            </div>';
        
            endwhile;
        else:
            echo '<div class="alert alert-info">Arşivlenmiş mesaj yoktur.</div>';
    endif;
    echo'
    </div>
    </div></div></div></div></div>';
}
function mesajdetay($vt,$id){
    $mesajbilgi=self::sorgum($vt,"select * from gelenmail where id=$id",1);
 
            echo '<div class="row mt-2">
            <div class="col-lg-12 bg-light mt-2 font-weight-bold">
            <div class="row border-bottom">
            <div class="col-lg-1 p-1">Ad & Ünvan</div>
            <div class="col-lg-2 p-1 text-primary">'.$mesajbilgi["ad"].'</div>
            <div class="col-lg-1 p-1">Mail Adresi</div>
            <div class="col-lg-2 p-1 text-primary">'.$mesajbilgi["mailadres"].'</div>
            <div class="col-lg-1 p-1">Konu</div>
            <div class="col-lg-2 p-1 text-primary">'.$mesajbilgi["konu"].'</div>
            <div class="col-lg-1 p-1">Tarih</div>
            <div class="col-lg-1 p-1 text-primary">'.$mesajbilgi["zaman"].'</div>
            <div class="col-lg-1 p-1">

            <a href="control.php?sayfa=mesajarsivle&id='.$mesajbilgi["id"].'">
            <i class="fa fa-share border-right pr-2 text-dark"></i></a>
            <a href="control.php?sayfa=mesajsil&id='.$mesajbilgi["id"].'">
            <i class="fa fa-close  pr-2 text-dark"></i></a>
            </div></div>
            <div class="row text-left p-2">
            <div class="col-lg-12">
            '.$mesajbilgi["mesaj"].'
            </div>
            </div></div></div></div>';
            self::sorgum($vt,"update gelenmail set durum=1 where id=$id",0);
            //durum guncellemesi bitti

}
function mesajarsivle($vt,$id){
             echo '<div class="row mt-2">
            <div class="col-lg-12 mt-2 font-weight-bold">
            <div class="alert alert-info mt-2 mb-2">Mesaj arşivlendi.</div>
            </div></div>';
            header("refresh:2,url=control.php?sayfa=gelenmesaj");
            self::sorgum($vt,"update gelenmail set durum=2 where id=$id",0);

}
function mesajsil($vt,$id){
    echo '<div class="row mt-2">
   <div class="col-lg-12 mt-2 font-weight-bold">
   <div class="alert alert-info mt-2 mb-2">Mesaj silindi.</div>
   </div></div>';
   header("refresh:2,url=control.php?sayfa=gelenmesaj");
   self::sorgum($vt,"delete from gelenmail where id=$id",0);

}
//-----MAİL AYARLARI--------------//
function mailayar($baglanti) {
    $sonuc=self::sorgum($baglanti,"SELECT * FROM gelenmailayar",1 );
    if($_POST):
        $host=htmlspecialchars($_POST["host"]);
        $mailadres=htmlspecialchars($_POST["mailadres"]);
        $sifre=htmlspecialchars($_POST["sifre"]);
        $port=htmlspecialchars($_POST["port"]);
        $alicimail=htmlspecialchars($_POST["alicimail"]);
        $guncelleme=$baglanti->prepare("update gelenmailayar set 
        host=?,mailadres=?,sifre=?,port=?, aliciadres=?");
        $guncelleme->bindParam(1,$host,PDO::PARAM_STR);
        $guncelleme->bindParam(2,$mailadres,PDO::PARAM_STR);
        $guncelleme->bindParam(3,$sifre,PDO::PARAM_STR);
        $guncelleme->bindParam(4,$port,PDO::PARAM_STR);
        $guncelleme->bindParam(5,$alicimail,PDO::PARAM_STR);
        $guncelleme->execute();
        echo '<div class="alert alert-success mt-5">
        <strong>Mail ayarları</strong> başarıyla güncellendi.
        </div>';
        header("refresh:2,url=control.php?sayfa=mailayar");
    else:
    ?>
  <form action="control.php?sayfa=mailayar" method="post">
    <div class="row text-center">
    <div class="col-lg-6 mx-auto">
    <div class="col-lg-12 mx-auto mt-2">
    <h3 class="text-info">Mail Ayarları
 
    </h3>
    </div>
    <div class="col-lg-12 mx-auto border">
    <div class="row">
    <div class="col-lg-3 border-right pt-3 text-left">
    <span id="siteayarfont">Host</span>
    </div>
    <div class="col-lg-9 p-1">
    <input type="text" name="host" class="form-control" value="<?php echo $sonuc['host']; ?>" />
    </div>
    </div>
    </div>
    <!--ara-->
    <div class="col-lg-12 mx-auto border">
    <div class="row">
    <div class="col-lg-3 border-right pt-3 text-left">
    <span id="siteayarfont">Mail Adresi</span>
    </div>
    <div class="col-lg-9 p-1">
    <input type="text" name="mailadres" class="form-control" value="<?php echo $sonuc['mailadres'];?>" />
    </div>
    </div>
    </div>
    <!--ara-->
    <div class="col-lg-12 mx-auto border">
    <div class="row">
    <div class="col-lg-3 border-right pt-3 text-left">
    <span id="siteayarfont">Host Sifre</span>
    </div>
    <div class="col-lg-9 p-1">
    <input type="text" name="sifre" class="form-control" value="<?php echo $sonuc["sifre"];?>" />
    </div>
    </div>
    </div>
    <!--ara-->
    <div class="col-lg-12 mx-auto border">
    <div class="row">
    <div class="col-lg-3 border-right pt-3 text-left">
    <span id="siteayarfont">Port</span>
    </div>
    <div class="col-lg-9 p-1">
    <input type="text" name="port" class="form-control" value="<?php echo $sonuc["port"];?>" />
    </div>
    </div>
    </div>
        <!--ara-->
        <div class="col-lg-12 mx-auto border">
    <div class="row">
    <div class="col-lg-3 border-right pt-3 text-left">
    <span id="siteayarfont">Alıcı Mail</span>
    </div>
    <div class="col-lg-9 p-1">
    <input type="text" name="alicimail" class="form-control" value="<?php echo $sonuc["aliciadres"];?>" />
    </div>
    </div>
    </div>
  
    <div class="col-lg-12 mx-auto mt-2">
    <input type="submit" name="buton" class="btn btn-info m-1" value="Guncelle" />
    </div>
    </div>
    </div>
    </form>
   <?php
  endif;
  
} //MAİL kısmı
//kullanıcı ayarları baslangıc
function ayarlar($baglanti) {
    $id=self::coz($_COOKIE["kulbilgi"]);
    $sonuc=self::sorgum($baglanti,"SELECT * FROM yonetim where id=$id",1 );
    if($_POST):
        @$kulad=htmlspecialchars($_POST["kulad"]);
        @$eskisif=htmlspecialchars($_POST["sifre"]);
        @$yenisif=htmlspecialchars($_POST["yenisifre"]);
        @$yenisif2=htmlspecialchars($_POST["yenisifre2"]);
        //eski şifreyi şifrele ve vt ile karsılastır.
        //yeni sifreler aynımı kontrol et
        //
        if($kulad=="" || $eskisif=="" || $yenisif=="" || $yenisif2==""):
            echo '<div class="alert alert-danger mt-5">Hiçbir alan boş geçilemez.</div>';
            header("refresh:2,url=control.php?sayfa=ayarlar");
        else:
        $sifrelihal=md5(sha1(md5($eskisif)));
        if($sonuc['sifre']!=$sifrelihal):
            echo '<div class="alert alert-danger mt-5">Eski şifre hatalı girildi.</div>';
            header("refresh:2,url=control.php?sayfa=ayarlar");
        else:
            if($yenisif!=$yenisif2):
                echo '<div class="alert alert-danger mt-5">Yeni şifreler eşleşmiyor.</div>';
                header("refresh:2,url=control.php?sayfa=ayarlar");
            else:
                $yenisifson=md5(sha1(md5($yenisif)));
                $guncelleme=$baglanti->prepare("update yonetim set 
                kulad=?,sifre=? where id=$id");
                $guncelleme->bindParam(1,$kulad,PDO::PARAM_STR);
                $guncelleme->bindParam(2,$yenisifson,PDO::PARAM_STR);
                $guncelleme->execute();
                echo '<div class="alert alert-success mt-5">
               Bilgiler başarıyla güncellendi.
                </div>';
                header("refresh:2,url=control.php?sayfa=ayarlar");
            endif;
        endif;
    endif;

    else:
    ?>
  <form action="control.php?sayfa=ayarlar" method="post">
    <div class="row text-center">
    <div class="col-lg-5 mx-auto">
    <div class="col-lg-12 mx-auto mt-2">
    <h3 class="text-info">Kullanıcı Ayarları
 
    </h3>
    </div>
    <div class="col-lg-12 mx-auto border">
    <div class="row">
    <div class="col-lg-4 border-right pt-3 text-left">
    <span id="siteayarfont">Kullanıcı Adı</span>
    </div>
    <div class="col-lg-8 p-1">
    <input type="text" name="kulad" class="form-control" value="<?php echo $sonuc['kulad']; ?>" />
    </div>
    </div>
    </div>
    <!--ara-->
    <div class="col-lg-12 mx-auto border">
    <div class="row">
    <div class="col-lg-4 border-right pt-3 text-left">
    <span id="siteayarfont">Şifre</span>
    </div>
    <div class="col-lg-8 p-1">
    <input type="password" name="sifre" class="form-control" />
    </div>
    </div>
    </div>
    <!--ara-->
    <div class="col-lg-12 mx-auto border">
    <div class="row">
    <div class="col-lg-4 border-right pt-3 text-left">
    <span id="siteayarfont">Yeni Sifre</span>
    </div>
    <div class="col-lg-8 p-1">
    <input type="password" name="yenisifre" class="form-control" />
    </div>
    </div>
    </div>
    <!--ara-->
    <div class="col-lg-12 mx-auto border">
    <div class="row">
    <div class="col-lg-4 border-right pt-3 text-left">
    <span id="siteayarfont">Yeni Sifre Tekrar</span>
    </div>
    <div class="col-lg-8 p-1">
    <input type="password" name="yenisifre2" class="form-control" />
    </div>
    </div>
    </div>
  
    <div class="col-lg-12 mx-auto mt-2">
    <input type="submit" name="buton" class="btn btn-info m-1" value="Değiştir" />
    </div>
    </div>
    </div>
    </form>
   <?php
  endif;
  
}// kullanıcı yönetimi baslangıc
function kullistele($vt){
    $al=self::sorgum($vt,"select * from yonetim",2);
    echo '<div class="row text-center">
    <div class="col-lg-6 mt-5 mx-auto">
    <div class="card">
    <div class="card-body">
    <h4 class="header-title">
    <a href="control.php?sayfa=yonekle" class="ti-plus bg-dark p-1 text-white mr-2 mt-3"></a>
    Kullanıcı Listesi </h4>
    <div class="single-table">
    <div class="table-responsive">
    <table class="table text-center border">
    <thead class="text-uppercase">
    <tr>
    <th scope="col" class="border-right">Ad</th>
    <th scope="col">İşlem</th>
    </tr>
    </thead>
    <tbody>';
    while($yonson=$al->fetch(PDO::FETCH_ASSOC)):
        echo '<tr>
        <th scope="row" class="border-right">'.$yonson["kulad"].'</th>
        <th scope="row"><a href="control.php?sayfa=yonsil&id='.$yonson["id"].'">
        <i class="ti-trash text-danger" style="font-size:20px;"></i></a></th>
        </tr>';
    endwhile;

    echo '</tbody>
    </table>
    </div></div></div></div></div>';
}
function yonsil($vt,$id){
    echo '<div class="row mt-2">
   <div class="col-lg-12 mt-2 font-weight-bold">
   <div class="alert alert-info mt-2 mb-2">Yonetici silindi.</div>
   </div></div>';
   header("refresh:2,url=control.php?sayfa=kulayar");
   self::sorgum($vt,"delete from yonetim where id=$id",0);

}
function yonekle($vt){

    if($_POST):
        @$kulad=htmlspecialchars($_POST["kulad"]);
        @$yenisif=htmlspecialchars($_POST["yenisifre"]);
        @$yenisif2=htmlspecialchars($_POST["yenisifre2"]);
        //eski şifreyi şifrele ve vt ile karsılastır.
        //yeni sifreler aynımı kontrol et
        //
        if($kulad=="" ||  $yenisif=="" || $yenisif2==""):
            echo '<div class="alert alert-danger mt-5">Hiçbir alan boş geçilemez.</div>';
            header("refresh:2,url=control.php?sayfa=yonekle");
        else:
            if($yenisif!=$yenisif2):
                echo '<div class="alert alert-danger mt-5">Yeni şifreler eşleşmiyor.</div>';
                header("refresh:2,url=control.php?sayfa=yonekle");
            else:
                $yenisifson=md5(sha1(md5($yenisif)));
                $ekle=$vt->prepare("insert into yonetim (kulad,sifre) values(?,?)");
                $ekle->bindParam(1,$kulad,PDO::PARAM_STR);
                $ekle->bindParam(2,$yenisifson,PDO::PARAM_STR);
                $ekle->execute();
                echo '<div class="alert alert-success mt-5">
                Yönetici eklendi.
                </div>';
                header("refresh:2,url=control.php?sayfa=yonekle");
            endif;
        endif;
 

    else:
    ?>
  <form action="control.php?sayfa=yonekle" method="post">
    <div class="row text-center">
    <div class="col-lg-5 mx-auto">
    <div class="col-lg-12 mx-auto mt-2">
    <h3 class="text-info">Yönetici Ekle
 
    </h3>
    </div>
    <div class="col-lg-12 mx-auto border">
    <div class="row">
    <div class="col-lg-5 border-right pt-3 text-left">
    <span id="siteayarfont">Kullanıcı Adı</span>
    </div>
    <div class="col-lg-7 p-1">
    <input type="text" name="kulad" class="form-control" />
    </div>
    </div>
    </div>
    <!--ara-->
    <div class="col-lg-12 mx-auto border">
    <div class="row">
    <div class="col-lg-5 border-right pt-3 text-left">
    <span id="siteayarfont">Yeni Sifre</span>
    </div>
    <div class="col-lg-7 p-1">
    <input type="password" name="yenisifre" class="form-control" />
    </div>
    </div>
    </div>
    <!--ara-->
    <div class="col-lg-12 mx-auto border">
    <div class="row">
    <div class="col-lg-5 border-right pt-3 text-left">
    <span id="siteayarfont">Yeni Sifre (Tekrar)</span>
    </div>
    <div class="col-lg-7 p-1">
    <input type="password" name="yenisifre2" class="form-control" />
    </div>
    </div>
    </div>
  
    <div class="col-lg-12 mx-auto mt-2">
    <input type="submit" name="buton" class="btn btn-info m-1" value="Yönetici Ekle" />
    </div>
    </div>
    </div>
    </form>
   <?php
  endif;  
    
}


//kategoriler listelem==========
    function category($vt){
        echo '<div class="row text-center">
        <div class="col-lg-12">
        <h4 class="float-left mt-3 text-info mb-2">
        <a href="control.php?sayfa=kategoriekle" class="ti-plus bg-success p-1 text-white mr-2 mt-3"></a>
        Kategori Ekle</h4> </div>';
     
    $introbilgiler=self::sorgum($vt,"select * from category",2);
    while($sonbilgi=$introbilgiler->fetch(PDO::FETCH_ASSOC)):
        echo '<div class="col-lg-4">
        <div class="row card-bordered  p-1 m-1">
        <div class="col-lg-12">
        <img src="../'.$sonbilgi["resimyol"].'">
        <kbd class="bg-white p-2" style="position:absolute; bottom:10px; right:10px;">
        <a href="control.php?sayfa=secimet&id='.$sonbilgi["id"].'" class="ti-reload m-2 text-success" style="font-size:20px;"></a>
        <a href="control.php?sayfa=kategorisil&id='.$sonbilgi["id"].'" class="ti-trash m-2 text-danger" style="font-size:20px;"></a>
        </kbd>
        </div>

        </div>
        </div>';
    endwhile;
    echo '</div>';
    }//kategi listelendi--------------------bitti
    function secimet($vt){
            $gelenintroid=$_GET["id"];
            $introbilgiler=self::sorgum($vt,"select * from category where id=$gelenintroid",2);
            $sonbilgi = $introbilgiler->fetch(PDO::FETCH_ASSOC);
        echo'<div class="row text-center">
           <div class="col-lg-12">
           <div class="col-lg-12 mt-2 bg-white text-center" style="min-height:500px;">
          <div class="col-md-9 mt-3">
            <div class="form-group card-bordered">
            <a href="control.php?sayfa=kategoriguncelle&id='.$sonbilgi["id"].'" class="btn btn-warning"><i class="ti ti-pencil"></i>  Kategori içerik Güncelle</a>
            <a href="control.php?sayfa=kategoriguncelleimg&id='.$sonbilgi["id"].'" class="btn btn-primary ml-3"><i class="ti ti-image"></i>  Kategori resmi Güncelle</a>
            </div>
            </div>
            </div>
           </div>
        </div>';
       }
  function kategoriekle($vt){
     echo '<div class="row text-center">
        <div class="container">';
    if($_POST):
        @$kategori_ad_az=htmlspecialchars($_POST["kategori_ad_az"]);
        @$kategori_ad_ru=htmlspecialchars($_POST["kategori_ad_ru"]);
        @$kategori_ad_tr=htmlspecialchars($_POST["kategori_ad_tr"]);
        @$kategori_ad_en=htmlspecialchars($_POST["kategori_ad_en"]);
        @$icerik_az=htmlspecialchars($_POST["icerik_az"]);
        @$icerik_ru=htmlspecialchars($_POST["icerik_ru"]);
        @$icerik_tr=htmlspecialchars($_POST["icerik_tr"]);
        @$icerik_en=htmlspecialchars($_POST["icerik_en"]);
        @$kategori_durum=htmlspecialchars($_POST["kategori_durum"]);
        @$kategori_sira=htmlspecialchars($_POST["kategori_sira"]);
        @$kategori_seourl_az=sefLink($_POST['kategori_ad_az']);
        @$kategori_seourl_ru=sefRussian($_POST['kategori_ad_ru']);
        @$kategori_seourl_tr=sefLink($_POST['kategori_ad_tr']);
        @$kategori_seourl_en=sefLink($_POST['kategori_ad_en']);


          if(@$_FILES["dosya"]["name"]==""):
            echo '<div class="alert alert-danger mt-5">
            Dosya yüklenmedi, bu alan boş olamaz.</div>';
          header("refresh:2,url=control.php?sayfa=kategoriekle");
            else://bos degilese
             if(@$_FILES["dosya"]["size"]>(1024*1024*5)):
                    echo '<div class="alert alert-danger mt-5">
                    Dosya boyutu 5mb  büyük olamaz!</div>';
                    header("refresh:2,url=control.php?sayfa=kategoriekle");
                else://boyut uygunsa
                    $izinverilen=array("image/png", "image/jpeg");
                    if(!in_array($_FILES["dosya"]["type"],$izinverilen)):
                        echo '<div class="alert alert-danger mt-5">
                       İzin verilen uzantılar (joeg,png)</div>';
                       header("refresh:2,url=control.php?sayfa=kategoriekle");
                    else://kosullar tamam
                        $dosyaminyolu='../../assets/img/category/'.$_FILES["dosya"]["name"];
                        $dosyayolu='../assets/img/category/'.$_FILES["dosya"]["name"];
                        move_uploaded_file($_FILES["dosya"]["tmp_name"],'../assets/img/category/'
                        .$_FILES["dosya"]["name"]);
                        addWatermark($dosyayolu);
                       $dosyaminyolu2=str_replace('../','',$dosyaminyolu);
                       $kayıtekle=self::sorgum($vt,"insert into category (resimyol,kategori_ad_az,kategori_ad_ru,kategori_ad_tr,kategori_ad_en,icerik_az,icerik_ru,icerik_en,icerik_tr,kategori_durum,kategori_sira,kategori_seourl_az,kategori_seourl_ru,kategori_seourl_tr,kategori_seourl_en) VALUES('$dosyaminyolu2','$kategori_ad_az','$kategori_ad_ru','$kategori_ad_tr','$kategori_ad_en','$icerik_az','$icerik_ru','$icerik_tr','$icerik_en','$kategori_durum','$kategori_sira','$kategori_seourl_az','$kategori_seourl_ru','$kategori_seourl_tr','$kategori_seourl_en')",0);
                       echo '<div class="alert alert-success mt-5">
                        Yükleme başarılı.</div>';
                         header("refresh:2,url=control.php?sayfa=category");
                    endif;
                endif; 
        endif;
         else:  
       ?>  

    <div class="col-lg-12 mt-2 bg-white text-center" style="min-height:500px; height:780px;">
           <div class="col-md-9 mt-3">
             <form action="" method="POST" class="form-control bg-white" enctype="multipart/form-data" style="min-height:500px; height:750px;">
                     
                      <input type="file" class="form-control mt-2 mb-3" name="dosya">
                
                      <div class="form-group">
                          
                            <div class="input-group mb-3">
                              <div class="input-group-prepend">
                                 <span class="input-group-text">
                             <img src="assets/images/flags/azerbaijan.png" alt="aze flag" class="input-group-addon flag">
                               </span>
                             </div>
                             <input type="text" class="form-control inp" placeholder="Kategoriya adı" name="kategori_ad_az">
                               </div>

                            <div class="input-group mb-3">
                             <div class="input-group-prepend">
                            <span class="input-group-text">
                           <img src="assets/images/flags/russian.png" alt="rus flag" class="input-group-addon flag_ru">
                            </span>
                        </div>
                           <input type="text" class="form-control inp" placeholder="Названия категории" name="kategori_ad_ru">
                           </div>

                           <div class="input-group mb-3">
                            <div class="input-group-prepend">
                            <span class="input-group-text">
                           <img src="assets/images/flags/turkey.png" alt="rus flag" class="input-group-addon flag_tr">
                             </span>
                         </div>
                           <input type="text" class="form-control inp" placeholder="Kategori adı" name="kategori_ad_tr">
                           </div>
     
                           <div class="input-group mb-3">
                             <div class="input-group-prepend">
                            <span class="input-group-text">
                           <img src="assets/images/flags/england.png" alt="rus flag" class="input-group-addon flag_en">
                          </span>
                      </div>
                        <input type="text" class="form-control inp" placeholder="Category name" name="kategori_ad_en">
                        </div>
                      </div>
                          <div class="form-group">
                            <div class="row">
                                <div class="col-md-6">
                                 <div class="input-group mb-3">
                             <div class="input-group-prepend">
                            <span class="input-group-text">
                           <img src="assets/images/flags/note.png" alt="rus flag" class="input-group-addon flag_en">
                          </span>
                          </div>
                            <textarea class="form-control" rows="4" name="icerik_az" id="editor"></textarea>
                          </div>
                        </div>
                        <div class="col-md-6">
                               <div class="input-group mb-3">
                             <div class="input-group-prepend">
                            <span class="input-group-text">
                           <img src="assets/images/flags/note_ru.png" alt="rus flag" class="input-group-addon flag_en">
                          </span>
                      </div>
                            <textarea class="form-control" rows="4" name="icerik_ru" id="editor"></textarea>
                          </div>
                        </div>
                     </div>
                        </div>

                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-6">
                               <div class="input-group mb-3">
                             <div class="input-group-prepend">
                            <span class="input-group-text">
                           <img src="assets/images/flags/note_tr.png" alt="rus flag" class="input-group-addon flag_en">
                          </span>
                      </div>
                            <textarea class="form-control" rows="4" name="icerik_tr" id="editor"></textarea>
                          </div>
                        </div>
                         <div class="col-md-6">
                                <div class="input-group mb-3">
                             <div class="input-group-prepend">
                            <span class="input-group-text">
                           <img src="assets/images/flags/note_en.png" alt="rus flag" class="input-group-addon flag_en">
                          </span>
                      </div>
                            <textarea class="form-control" rows="4" name="icerik_en" id="editor"></textarea>
                          </div>
                                </div>
                            </div>
                        </div>
                 <div class="for-group mt-1">
                     <div class="row">
                         <div class="col-md-6">
                            <div class="input-group mb-3">
                             <div class="input-group-prepend">
                            <span class="input-group-text">
                           <img src="assets/images/flags/order.png" alt="rus flag" class="input-group-addon flag_en">
                          </span>
                      </div>
                        <input type="text" class="form-control inp" placeholder="Kategori Sırası giriniz" name="kategori_sira">
                        </div>
                         </div>

                         <div class="col-md-6">
                             <div class="input-group mb-3">
                             <div class="input-group-prepend">
                            <span class="input-group-text">
                           <img src="assets/images/flags/tasks.png" alt="rus flag" class="input-group-addon flag_en">
                          </span>
                      </div>
                         <select  class="form-control sel" name="kategori_durum" required>
                            <option value="1">Aktif</option>
                              <option value="0" >Pasif</option>
                             </select>
                         </div>
                         </div>
                     </div>
                 </div>
               <div class="form-group bg-light">
                <div class="input-group mb-2">
                  <div class="input-group-prepend">
                    <span class="input-group-text">
                      <img src="assets/images/flags/process.png" alt="rus flag" class="input-group-addon flag_en">
                    </span>
                  </div> 
                  <a href="control.php?sayfa=category" class="btn btn-warning  float-left mt-4 fyd"><i class="fa fa-arrow-left"></i> Geri dön</a>
                  <button type="submit" class="btn btn-primary float-right ml-4 kyd mt-4"><i class="fa fa-save"></i> Kaydet</button>
                </div>
              </div>
                          
              </form>
             </div>
             </div>

             <?php 
         endif;
          echo '</div></div>';

  }

   function kategoriguncelleimg($vt){
    $gelenintroid=$_GET["id"];
   
    if($_POST):
     
        $formdangelenid=@$_POST["introid"];
        if($_FILES["dosya"]["name"]==""):
            echo '<div class="alert alert-danger mt-5">
            Dosya yüklenmedi, bu alan boş olamaz.</div>';
            header("refresh:2,url=control.php?sayfa=kategoriguncelleimg");
        else://bos degilese
            if($_FILES["dosya"]["size"]>(1024*1024*5)):
                echo '<div class="alert alert-danger mt-5">
                Dosya boyutu çok fazla!</div>';
                header("refresh:2,url=control.php?sayfa=kategoriguncelleimg");
            else://boyut uygunsa
                $izinverilen=array("image/png", "image/jpeg");
                if(!in_array($_FILES["dosya"]["type"],$izinverilen)):
                    echo '<div class="alert alert-danger mt-5">
                   İzin verilen uzantı değil!</div>';
                   header("refresh:2,url=control.php?sayfa=kategoriguncelleimg");
                else://kosullar tamam
                    //olanı sil yeniyi kaydet
                    $resimyolunabak=self::sorgum($vt,"select * from category where id=$gelenintroid",1);
                    $dbgelenyol='../'.$resimyolunabak["resimyol"];
                    unlink($dbgelenyol);
                    $dosyaminyolu='../assets/img/category/'.$_FILES["dosya"]["name"];
                    $dosyayolu='../assets/img/category/'.$_FILES["dosya"]["name"];
                    move_uploaded_file($_FILES["dosya"]["tmp_name"],$dosyaminyolu);
                    addWatermark($dosyayolu);
                    $dosyaminyolu2=str_replace('../','',$dosyaminyolu);
                    self::sorgum($vt,"update category set resimyol='$dosyaminyolu2' where id=$gelenintroid",0);
                    echo '<div class="alert alert-success mt-5">
                    Güncelleme başarılı.</div>';
                    header("refresh:2,url=control.php?sayfa=secimet");
                  
                endif;
            endif; 
    endif;
  
    else:
         ?>
         <div class="col-lg-4 mx-auto mt-2">
         <div class="card card-bordered">
         <div class="card-body">
         <h5 class="title border-bottom">Kategori resim güncelleme formu</h5>

        
         <form action="" method="post" enctype="multipart/form-data">
         <p class="card-text">
         <input type="file" name="dosya" /></p>
         <p class="card-text">
         <input type="hidden" name="introId" value="<?php echo $gelenintroid; ?>"/></p>
         <input type="submit" name="buton" value="YÜKLE" class="btn btn-primary mb-1" />
         </form>
         <p class="card-text text-left text-danger border-top">
         * İzin verilen formatlar : jpeg, png<br/>
         * izn verilen max. boyut : 5Mb
         </p>
         </div>
         </div>
         </div>
        <?php 
    endif;
       
    echo '</div></div>';

   }
 function kategoriguncelle($vt) {
    echo '<div class="row text-center">
        <div class="col-lg-12">'; 
    $kayitid=$_GET["id"];
    if(!$_POST):
    $sonbilgi=self::sorgum($vt,"select * from category where id=$kayitid",1);
        echo ' <div class="col-lg-12 mt-2 bg-white text-center" style="min-height:500px; height:780px;">
           <div class="col-md-9 mt-3">
             <form action="" method="POST" class="form-control bg-white" enctype="multipart/form-data" style="min-height:500px; height:750px;">
             
                 <div class="form-group">
                   <div class="input-group mb-3">
                      <div class="input-group-prepend">
                           <span class="input-group-text">
                         <img src="assets/images/flags/seo.png" alt="aze flag" class="input-group-addon flag">
                           </span>
                        </div>
                      <input type="text" class="form-control inp" value="'.$sonbilgi["kategori_seourl_az"].'" name="kategori_seourl_az" disabled>
                    </div>
                     <div class="input-group mb-3">
                      <div class="input-group-prepend">
                           <span class="input-group-text">
                         <img src="assets/images/flags/seo.png" alt="aze flag" class="input-group-addon flag">
                           </span>
                        </div>
                      <input type="text" class="form-control inp" value="'.$sonbilgi["kategori_seourl_ru"].'" name="kategori_seourl_tr" disabled>
                    </div>
                     <div class="input-group mb-3">
                      <div class="input-group-prepend">
                           <span class="input-group-text">
                         <img src="assets/images/flags/seo.png" alt="aze flag" class="input-group-addon flag">
                           </span>
                        </div>
                      <input type="text" class="form-control inp" value="'.$sonbilgi["kategori_seourl_tr"].'" name="kategori_seourl_ru" disabled>
                    </div>
                     <div class="input-group mb-3">
                      <div class="input-group-prepend">
                           <span class="input-group-text">
                         <img src="assets/images/flags/seo.png" alt="aze flag" class="input-group-addon flag">
                           </span>
                        </div>
                      <input type="text" class="form-control inp" value="'.$sonbilgi["kategori_seourl_en"].'" name="kategori_seourl_en" disabled>
                    </div>
                 </div>
                      <div class="form-group">
                            <div class="input-group mb-3">
                              <div class="input-group-prepend">
                                 <span class="input-group-text">
                             <img src="assets/images/flags/azerbaijan.png" alt="aze flag" class="input-group-addon flag">
                               </span>
                             </div>
                             <input type="text" class="form-control inp" value="'.$sonbilgi["kategori_ad_az"].'" name="kategori_ad_az">
                               </div>
                            <div class="input-group mb-3">
                             <div class="input-group-prepend">
                            <span class="input-group-text">
                           <img src="assets/images/flags/russian.png" alt="rus flag" class="input-group-addon flag_ru">
                            </span>
                        </div>
                           <input type="text" class="form-control inp" value="'.$sonbilgi["kategori_ad_ru"].'" name="kategori_ad_ru">
                           </div>

                           <div class="input-group mb-3">
                            <div class="input-group-prepend">
                            <span class="input-group-text">
                           <img src="assets/images/flags/turkey.png" alt="rus flag" class="input-group-addon flag_tr">
                             </span>
                         </div>
                           <input type="text" class="form-control inp" value="'.$sonbilgi["kategori_ad_tr"].'" name="kategori_ad_tr">
                           </div>
     
                           <div class="input-group mb-3">
                             <div class="input-group-prepend">
                            <span class="input-group-text">
                           <img src="assets/images/flags/england.png" alt="rus flag" class="input-group-addon flag_en">
                          </span>
                      </div>
                        <input type="text" class="form-control inp" value="'.$sonbilgi["kategori_ad_en"].'" name="kategori_ad_en">
                        </div>
                      </div>
                          <div class="form-group">
                            <div class="row">
                                <div class="col-md-6">
                                 <div class="input-group mb-3">
                             <div class="input-group-prepend">
                            <span class="input-group-text">
                           <img src="assets/images/flags/note.png" alt="rus flag" class="input-group-addon flag_en">
                          </span>
                          </div>
                            <textarea class="form-control" rows="4" name="icerik_az" id="editor">'.$sonbilgi["icerik_az"].'</textarea>
                          </div>
                        </div>
                        <div class="col-md-6">
                               <div class="input-group mb-3">
                             <div class="input-group-prepend">
                            <span class="input-group-text">
                           <img src="assets/images/flags/note_ru.png" alt="rus flag" class="input-group-addon flag_en">
                          </span>
                      </div>
                            <textarea class="form-control" rows="4" name="icerik_ru" id="editor">'.$sonbilgi["icerik_ru"].'</textarea>
                          </div>
                        </div>
                     </div>
                        </div>

                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-6">
                               <div class="input-group mb-3">
                             <div class="input-group-prepend">
                            <span class="input-group-text">
                           <img src="assets/images/flags/note_tr.png" alt="rus flag" class="input-group-addon flag_en">
                          </span>
                      </div>
                            <textarea class="form-control" rows="4" name="icerik_tr" id="editor">'.$sonbilgi["icerik_tr"].'</textarea>
                          </div>
                        </div>
                         <div class="col-md-6">
                                <div class="input-group mb-3">
                             <div class="input-group-prepend">
                            <span class="input-group-text">
                           <img src="assets/images/flags/note_en.png" alt="rus flag" class="input-group-addon flag_en">
                          </span>
                      </div>
                            <textarea class="form-control" rows="4" name="icerik_en" id="editor">'.$sonbilgi["icerik_en"].'</textarea>
                          </div>
                                </div>
                            </div>
                        </div>
                 <div class="for-group mt-1">
                     <div class="row">
                         <div class="col-md-6">
                            <div class="input-group mb-3">
                             <div class="input-group-prepend">
                            <span class="input-group-text">
                           <img src="assets/images/flags/order.png" alt="rus flag" class="input-group-addon flag_en">
                          </span>
                      </div>
                        <input type="text" class="form-control inp" value="'.$sonbilgi["kategori_sira"].'" name="kategori_sira">
                        </div>
                         </div>

                         <div class="col-md-6">
                             <div class="input-group mb-3">
                             <div class="input-group-prepend">
                            <span class="input-group-text">
                           <img src="assets/images/flags/tasks.png" alt="rus flag" class="input-group-addon flag_en">
                          </span>
                      </div>
                         <select  class="form-control sel" name="kategori_durum" required>';
                             if ($sonbilgi['kategori_durum']==0):
                                 echo'<option value="0" selected>Pasif</option>
                                    <option value="1">Aktif</option>';
                             else: 
                                echo'<option value="1" selected>Aktif</option>
                               <option value="0">Pasif</option>';
                             endif;
                          echo'</select>
                             </select>
                         </div>
                         </div>
                     </div>
                 </div>
               <div class="form-group bg-light">
                <div class="input-group mb-2">
                  <div class="input-group-prepend">
                    <span class="input-group-text">
                      <img src="assets/images/flags/process.png" alt="rus flag" class="input-group-addon flag_en">
                    </span>
                  </div> 
                  <a href="control.php?sayfa=category" class="btn btn-warning  float-left mt-4 fyd"><i class="fa fa-arrow-left"></i>&nbsp; Geri dön</a>
                   <input type="hidden" name="kayitidsi" value="'.$kayitid.'" />
                  <button type="submit" class="btn btn-primary float-right ml-4 kyd mt-4"><i class="fa fa-refresh"></i>&nbsp; Düzenle</button>
                </div>
              </div>
                          
              </form>
             </div>
             </div>';
     else:
 
        @$kategori_ad_az=htmlspecialchars($_POST["kategori_ad_az"]);
        @$kategori_ad_ru=htmlspecialchars($_POST["kategori_ad_ru"]);
        @$kategori_ad_tr=htmlspecialchars($_POST["kategori_ad_tr"]);
        @$kategori_ad_en=htmlspecialchars($_POST["kategori_ad_en"]);
        @$icerik_az=htmlspecialchars($_POST["icerik_az"]);
        @$icerik_ru=htmlspecialchars($_POST["icerik_ru"]);
        @$icerik_tr=htmlspecialchars($_POST["icerik_tr"]);
        @$icerik_en=htmlspecialchars($_POST["icerik_en"]);
        @$kategori_durum=htmlspecialchars($_POST["kategori_durum"]);
        @$kategori_sira=htmlspecialchars($_POST["kategori_sira"]);
        @$kategori_seourl_az=sefLink($_POST['kategori_ad_az']);
        @$kategori_seourl_ru=sefRussian($_POST['kategori_ad_ru']);
        @$kategori_seourl_tr=sefLink($_POST['kategori_ad_tr']);
        @$kategori_seourl_en=sefLink($_POST['kategori_ad_en']);
        @$kayitidsi=htmlspecialchars($_POST["kayitidsi"]);
        self::sorgum($vt,"update category set kategori_ad_az='$kategori_ad_az',kategori_ad_tr='$kategori_ad_tr',kategori_ad_ru='$kategori_ad_ru',kategori_ad_en='$kategori_ad_en',icerik_az='$icerik_az',icerik_ru='$icerik_ru',icerik_en='$icerik_en',icerik_tr='$icerik_tr',kategori_durum='$kategori_durum',kategori_sira='$kategori_sira',kategori_seourl_az='$kategori_seourl_az',kategori_seourl_ru='$kategori_seourl_ru',kategori_seourl_tr='$kategori_seourl_tr',kategori_seourl_en='$kategori_seourl_en' where id=$kayitid",0);
                echo '<div class="col-lg-6 mx-auto">
                <div class="alert alert-success mt-5">
                Güncelleme başarılı.</div></div>';
                header("refresh:2,url=control.php?sayfa=category");
                     
            endif;
   
          echo '</div>';
     }

     function kategorisil($vt){
        $gelenintroid=$_GET["id"];
        $verial=self::sorgum($vt,"select * from category where id=$gelenintroid",1);
        echo '<div class="row text-center">
        <div class="col-lg-12">';
        unlink("../".$verial["resimyol"]);
        self::sorgum($vt,"delete  from category where id=$gelenintroid",0);
        echo '<div class="alert alert-success mt-5">
        Silme başarılı.</div>';
      echo '</div></div>';
      header("refresh:2,url=control.php?sayfa=category");
     }
//Kategori islemleri bitis


 //alt kategori baslangic //    
function alt_kategoriler($vt){
     echo '<div class="row text-center">
        <div class="col-lg-12">
        <h4 class="float-left mt-3 text-info mb-2">
        <a href="control.php?sayfa=alt_kategoriekle" class="ti-plus bg-success p-1 text-white mr-2 mt-3"></a>
        Alt kategori Ekle</h4> <br> 
        </div>
        <div class="container-fluid">
             <div class="card">
              <div class="card-header mt-3">
                <h3 class="card-title">Alt Kategoriler listesi</h3>
              </div>
              <div class="card-body">
                <table id="myTable" class="table table-bordered table-striped col-lg-12">
                  <thead>
                  <tr>
                    <th>Ana Kategori id</th>
                    <th>Alt Kategori adı</th>
                    <th>Durum</th>
                    <th>İşlemler</th>
                  </tr>
                  </thead>
                  <tbody>';
                  $introbilgiler=self::sorgum($vt,"select * from altkategori",2);
                  while($sonbilgi=$introbilgiler->fetch(PDO::FETCH_ASSOC)):
                  echo'
                  <tr>
                    <td> '.$sonbilgi["kategori_id"].'</td>
                    <td>'.$sonbilgi["kategori_ad_az"].'</td>
                 <td>';
                
                  if ($sonbilgi["kategori_durum"]==1) {

                 echo'<button class="btn btn-success btn-xs">Aktif</button>';

               } else {

                echo'<button class="btn btn-danger btn-xs">Pasif</button>';


               } 
     echo'</td>
        
    <!-- <td><a href="altkategori-foto-yukle.php?altkategori_id='.$sonbilgi["id"].'" class="ti-image  text-light btn btn-primary btn-xs"></a>
    </td> -->
    <td>
    <a href="control.php?sayfa=secimetaltkategori&id='.$sonbilgi["id"].'" class="ti-reload m-2 text-success" style="font-size:20px;"></a>
    <a href="control.php?sayfa=altkategorisil&id='.$sonbilgi["id"].'" class="ti-trash m-2 text-danger" style="font-size:20px;"></a>
    </td>
    </tr>';
                   endwhile;
                echo' </tbody>
                    </table>
                   </div>
                 </div>
              </div>
         </div>';

}

function secimetaltkategori($vt){
            $gelenintroid=$_GET["id"];
            $introbilgiler=self::sorgum($vt,"select * from altkategori where id=$gelenintroid",2);
            $sonbilgi = $introbilgiler->fetch(PDO::FETCH_ASSOC);
        echo'<div class="row text-center">
           <div class="col-lg-12">
           <div class="col-lg-12 mt-2 bg-white text-center" style="min-height:500px;">
          <div class="col-md-9 mt-3">
            <div class="form-group card-bordered">
            <a href="control.php?sayfa=altkategoriguncelle&id='.$sonbilgi["id"].'" class="btn btn-warning"><i class="ti ti-pencil"></i> &nbsp Alt Kategori içerik Güncelle</a>
            <a href="control.php?sayfa=altkategoriguncelleimg&id='.$sonbilgi["id"].'" class="btn btn-primary ml-3"><i class="ti ti-image"></i>&nbsp Alt  Kategori resmi Güncelle</a>
            </div>
            </div>
            </div>
           </div>
        </div>';
       }

function altkategoriguncelleimg($vt){
     $gelenintroid=$_GET["id"];
    if($_POST):
        $formdangelenid=@$_POST["introid"];
        if($_FILES["dosya"]["name"]==""):
            echo '<div class="alert alert-danger mt-5">
            Dosya yüklenmedi, bu alan boş olamaz.</div>';
            header("refresh:2,url=control.php?sayfa=altkategoriguncelleimg");
        else://bos degilese
            if($_FILES["dosya"]["size"]>(1024*1024*5)):
                echo '<div class="alert alert-danger mt-5">
                Dosya boyutu çok fazla!</div>';
                header("refresh:2,url=control.php?sayfa=altkategoriguncelleimg");
            else://boyut uygunsa
                $izinverilen=array("image/png", "image/jpeg");
                if(!in_array($_FILES["dosya"]["type"],$izinverilen)):
                    echo '<div class="alert alert-danger mt-5">
                   İzin verilen uzantı değil!</div>';
                   header("refresh:2,url=control.php?sayfa=altkategoriguncelleimg");
                else://kosullar tamam
                    //olanı sil yeniyi kaydet
                    $resimyolunabak=self::sorgum($vt,"select * from altkategori where id=$gelenintroid",1);
                    $dbgelenyol='../'.$resimyolunabak["resimyol"];
                    unlink($dbgelenyol);
                    $dosyaminyolu='../assets/img/category/altcategory/'.$_FILES["dosya"]["name"];
                    $dosyayolu='../assets/img/category/altcategory/'.$_FILES["dosya"]["name"];
                    move_uploaded_file($_FILES["dosya"]["tmp_name"],$dosyaminyolu);
                    addWatermark($dosyayolu);
                    $dosyaminyolu2=str_replace('../','',$dosyaminyolu);
                    self::sorgum($vt,"update altkategori set resimyol='$dosyaminyolu2' where id=$gelenintroid",0);
                    echo '<div class="alert alert-success mt-5">
                    Güncelleme başarılı.</div>';
                    header("refresh:2,url=control.php?sayfa=alt_kategoriler");
                  
                endif;
            endif; 
    endif;
  
    else:
         ?>
         <div class="col-lg-4 mx-auto mt-2">
         <div class="card card-bordered">
         <div class="card-body">
         <h5 class="title border-bottom">Alt Kategori resim güncelleme formu</h5>

        
         <form action="" method="post" enctype="multipart/form-data">
         <p class="card-text">
         <input type="file" name="dosya" /></p>
         <p class="card-text">
         <input type="hidden" name="introId" value="<?php echo $gelenintroid; ?>"/></p>
         <input type="submit" name="buton" value="YÜKLE" class="btn btn-primary mb-1" />
         </form>
         <p class="card-text text-left text-danger border-top">
         * İzin verilen formatlar : jpeg, png<br/>
         * izn verilen max. boyut : 5Mb
         </p>
         </div>
         </div>
         </div>
        <?php 
    endif;
       
    echo '
    <a href="control.php?sayfa=alt_kategoriler" class="btn btn-warning  float-left mt-4 fyd"><i class="fa fa-arrow-left"></i> Geri dön</a>
     </div>
    </div>';

}


function alt_kategoriekle($vt){
   
  echo '<div class="row text-center">
        <div class="container">';
    if($_POST):
        @$kategori_ad_az=htmlspecialchars($_POST["kategori_ad_az"]);
        @$kategori_ad_ru=htmlspecialchars($_POST["kategori_ad_ru"]);
        @$kategori_ad_tr=htmlspecialchars($_POST["kategori_ad_tr"]);
        @$kategori_ad_en=htmlspecialchars($_POST["kategori_ad_en"]);
        @$kategori_durum=htmlspecialchars($_POST["kategori_durum"]);
        @$kategori_id=htmlspecialchars($_POST["kategori_id"]);
        @$kategori_seourl_az=sefLink($_POST['kategori_ad_az']);
        @$kategori_seourl_ru=sefRussian($_POST['kategori_ad_ru']);
        @$kategori_seourl_tr=sefLink($_POST['kategori_ad_tr']);
        @$kategori_seourl_en=sefLink($_POST['kategori_ad_en']);


          if(@$_FILES["dosya"]["name"]==""):
            echo '<div class="alert alert-danger mt-5">
            Dosya yüklenmedi, bu alan boş olamaz.</div>';
          header("refresh:2,url=control.php?sayfa=alt_kategoriekle");
            else://bos degilese
             if(@$_FILES["dosya"]["size"]>(1024*1024*5)):
                    echo '<div class="alert alert-danger mt-5">
                    Dosya boyutu 5mb  büyük olamaz!</div>';
                    header("refresh:2,url=control.php?sayfa=alt_kategoriekle");
                else://boyut uygunsa
                   $izinverilen = array("image/png", "image/jpeg", "image/webp");
                    if(!in_array($_FILES["dosya"]["type"],$izinverilen)):
                        echo '<div class="alert alert-danger mt-5">
                       İzin verilen uzantılar (joeg,png)</div>';
                       header("refresh:2,url=control.php?sayfa=alt_kategoriekle");
                    else://kosullar tamam
                        $dosyaminyolu='../../assets/img/category/altcategory/'.$_FILES["dosya"]["name"];
                        $dosyayolu='../assets/img/category/altcategory/'.$_FILES["dosya"]["name"];
                        move_uploaded_file($_FILES["dosya"]["tmp_name"],'../assets/img/category/altcategory/'
                        .$_FILES["dosya"]["name"]);
                         addWatermark($dosyayolu);
                       $dosyaminyolu2=str_replace('../','',$dosyaminyolu);
                       $kayıtekle=self::sorgum($vt,"insert into altkategori (resimyol,kategori_ad_az,kategori_ad_tr,kategori_ad_ru,kategori_ad_en,kategori_durum,kategori_id,kategori_seourl_az,kategori_seourl_ru,kategori_seourl_tr,kategori_seourl_en) VALUES('$dosyaminyolu2','$kategori_ad_az','$kategori_ad_ru','$kategori_ad_tr','$kategori_ad_en','$kategori_durum','$kategori_id','$kategori_seourl_az','$kategori_seourl_ru','$kategori_seourl_tr','$kategori_seourl_en')",0);
                       echo '<div class="alert alert-success mt-5">
                        Yükleme başarılı.</div>';
                         header("refresh:2,url=control.php?sayfa=alt_kategoriler");
                    endif;
                endif; 
        endif;
         else:  
       ?>  

    <div class="col-lg-12 mt-2 bg-white text-center" style="min-height:500px; height:780px;">
           <div class="col-md-9 mt-3">
             <form action="" method="POST" class="form-control bg-white" enctype="multipart/form-data" style="min-height:500px; height:750px;">
                     
                      <input type="file" class="form-control mt-2 mb-3" name="dosya">
                
                         <div class="form-group">
                          
                            <div class="input-group mb-3">
                              <div class="input-group-prepend">
                                 <span class="input-group-text">
                             <img src="assets/images/flags/azerbaijan.png" alt="aze flag" class="input-group-addon flag">
                               </span>
                             </div>
                             <input type="text" class="form-control inp" placeholder="Kategoriya adı" name="kategori_ad_az">
                               </div>

                            <div class="input-group mb-3">
                             <div class="input-group-prepend">
                            <span class="input-group-text">
                           <img src="assets/images/flags/russian.png" alt="rus flag" class="input-group-addon flag_ru">
                            </span>
                        </div>
                           <input type="text" class="form-control inp" placeholder="Названия категории" name="kategori_ad_ru">
                           </div>

                           <div class="input-group mb-3">
                            <div class="input-group-prepend">
                            <span class="input-group-text">
                           <img src="assets/images/flags/turkey.png" alt="rus flag" class="input-group-addon flag_tr">
                             </span>
                         </div>
                           <input type="text" class="form-control inp" placeholder="Kategori adı" name="kategori_ad_tr">
                           </div>
     
                           <div class="input-group mb-3">
                             <div class="input-group-prepend">
                            <span class="input-group-text">
                           <img src="assets/images/flags/england.png" alt="rus flag" class="input-group-addon flag_en">
                          </span>
                      </div>
                        <input type="text" class="form-control inp" placeholder="Category name" name="kategori_ad_en">
                        </div>
                      </div>
                       
                 <div class="for-group mt-1">
                     <div class="row">
                         <div class="col-md-6">
                            <div class="input-group mb-3">
                             <div class="input-group-prepend">
                            <span class="input-group-text">
                           <img src="assets/images/flags/order.png" alt="rus flag" class="input-group-addon flag_en">
                          </span>
                        </div>
                       
                        <select class="select2_multiple form-control sel"  name="kategori_id">
                        <option value="" disabled selected>Ana kategorisi seçiniz..</option>
                     <?php

                     $introbilgiler=self::sorgum($vt,"select * from category",2);
                     while($sonbilgi=$introbilgiler->fetch(PDO::FETCH_ASSOC)):
                    
                      
                     echo' <option  value="'.$sonbilgi["id"].'" name="kategori_id"> '.$sonbilgi["kategori_ad_az"].'</option>';
                     endwhile;
                      ?>
                    </select>
                        </div>
                         </div>

                         <div class="col-md-6">
                             <div class="input-group mb-3">
                             <div class="input-group-prepend">
                            <span class="input-group-text">
                           <img src="assets/images/flags/tasks.png" alt="rus flag" class="input-group-addon flag_en">
                          </span>
                      </div>
                         <select  class="form-control sel" name="kategori_durum" required>
                            <option value="1">Aktif</option>
                              <option value="0" >Pasif</option>
                             </select>
                         </div>
                         </div>
                     </div>
                 </div>
               <div class="form-group bg-light">
                <div class="input-group mb-2">
                  <div class="input-group-prepend">
                    <span class="input-group-text">
                      <img src="assets/images/flags/process.png" alt="rus flag" class="input-group-addon flag_en">
                    </span>
                  </div> 
                  <a href="control.php?sayfa=category" class="btn btn-warning  float-left mt-4 fyd"><i class="fa fa-arrow-left"></i> Geri dön</a>
                  <button type="submit" class="btn btn-primary float-right ml-4 kyd mt-4"><i class="fa fa-save"></i> Kaydet</button>
                </div>
              </div>
                          
              </form>
             </div>
             </div>

             <?php 
         endif;
          echo '</div></div>';
}

function altkategoriguncelle($vt){
    echo '<div class="row text-center">
        <div class="col-lg-12">'; 
    $kayitid=$_GET["id"];
    if(!$_POST):
    $sonbilgi=self::sorgum($vt,"select * from altkategori where id=$kayitid",1);
    echo'<div class="col-lg-12 mt-2 bg-white text-center" style="min-height:500px; height:780px;">
           <div class="col-md-9 mt-3">
             <form action="" method="POST" class="form-control bg-white" enctype="multipart/form-data" style="min-height:500px; height:750px;">
              
                 <div class="form-group">
                   <div class="input-group mb-3">
                      <div class="input-group-prepend">
                           <span class="input-group-text">
                         <img src="assets/images/flags/seo_Az.png" alt="aze flag" class="input-group-addon flag">
                           </span>
                        </div>
                      <input type="text" class="form-control inp" value="'.$sonbilgi["kategori_seourl_az"].'" name="kategori_seourl" disabled>
                    </div>
                    <div class="input-group mb-3">
                      <div class="input-group-prepend">
                           <span class="input-group-text">
                         <img src="assets/images/flags/seo_ru.png" alt="aze flag" class="input-group-addon flag">
                           </span>
                        </div>
                      <input type="text" class="form-control inp" value="'.$sonbilgi["kategori_seourl_ru"].'" name="kategori_seourl" disabled>
                    </div>
                    <div class="input-group mb-3">
                      <div class="input-group-prepend">
                           <span class="input-group-text">
                         <img src="assets/images/flags/seo_tr.png" alt="aze flag" class="input-group-addon flag">
                           </span>
                        </div>
                      <input type="text" class="form-control inp" value="'.$sonbilgi["kategori_seourl_tr"].'" name="kategori_seourl" disabled>
                    </div>
                    <div class="input-group mb-3">
                      <div class="input-group-prepend">
                           <span class="input-group-text">
                         <img src="assets/images/flags/seo_en.png" alt="aze flag" class="input-group-addon flag">
                           </span>
                        </div>
                      <input type="text" class="form-control inp" value="'.$sonbilgi["kategori_seourl_en"].'" name="kategori_seourl" disabled>
                    </div>
                 </div>
                      <div class="form-group">
                            <div class="input-group mb-3">
                              <div class="input-group-prepend">
                                 <span class="input-group-text">
                             <img src="assets/images/flags/azerbaijan.png" alt="aze flag" class="input-group-addon flag">
                               </span>
                             </div>
                             <input type="text" class="form-control inp" value="'.$sonbilgi["kategori_ad_az"].'" name="kategori_ad_az">
                               </div>
                            <div class="input-group mb-3">
                             <div class="input-group-prepend">
                            <span class="input-group-text">
                           <img src="assets/images/flags/russian.png" alt="rus flag" class="input-group-addon flag_ru">
                            </span>
                        </div>
                           <input type="text" class="form-control inp" value="'.$sonbilgi["kategori_ad_ru"].'" name="kategori_ad_ru">
                           </div>

                           <div class="input-group mb-3">
                            <div class="input-group-prepend">
                            <span class="input-group-text">
                           <img src="assets/images/flags/turkey.png" alt="rus flag" class="input-group-addon flag_tr">
                             </span>
                         </div>
                           <input type="text" class="form-control inp" value="'.$sonbilgi["kategori_ad_tr"].'" name="kategori_ad_tr">
                           </div>
     
                           <div class="input-group mb-3">
                             <div class="input-group-prepend">
                            <span class="input-group-text">
                           <img src="assets/images/flags/england.png" alt="rus flag" class="input-group-addon flag_en">
                          </span>
                      </div>
                        <input type="text" class="form-control inp" value="'.$sonbilgi["kategori_ad_en"].'" name="kategori_ad_en">
                        </div>
                      </div>
                         
                 <div class="for-group mt-1">
                     <div class="row">
                         <div class="col-md-6">
                            <div class="input-group mb-3">
                             <div class="input-group-prepend">
                            <span class="input-group-text">
                           <img src="assets/images/flags/orderA.png" alt="rus flag" class="input-group-addon flag_en">
                          </span>
                      </div>
                        <input type="text" class="form-control inp" value="'.$sonbilgi["kategori_id"].'" name="var_kategori_id">
                        </div>
                         </div>

                         <div class="col-md-6">
                             <div class="input-group mb-3">
                             <div class="input-group-prepend">
                            <span class="input-group-text">
                           <img src="assets/images/flags/tasks.png" alt="rus flag" class="input-group-addon flag_en">
                          </span>
                      </div>
                         <select  class="form-control sel" name="kategori_durum" required>';
                             if ($sonbilgi['kategori_durum']==0):
                                 echo'<option value="0" selected>Pasif</option>
                                    <option value="1">Aktif</option>';
                             else: 
                                echo'<option value="1" selected>Aktif</option>
                               <option value="0">Pasif</option>';
                             endif;
                          echo'</select>
                             </select>
                         </div>
                         </div>
                     </div>
                 </div>

               <div class="for-group mt-1">
                     <div class="row">
                         <div class="col-md-6">
                            <div class="input-group mb-3">
                             <div class="input-group-prepend">
                            <span class="input-group-text">
                           <img src="assets/images/flags/order.png" alt="rus flag" class="input-group-addon flag_en">
                          </span>
                      </div>
                      <select class="select2_multiple form-control sel" required="" name="kategori_id">
                     <option value="" disabled selected>Ana kategorisi seçiniz..</option>';
                     $introbilgiler=self::sorgum($vt,"select * from category",2);
                     while($sonbilgi=$introbilgiler->fetch(PDO::FETCH_ASSOC)):
                     $kategori_id=$sonbilgi["id"];
                      
                     echo'<option selected="select" value="'.$sonbilgi["id"].'" name="kategori_id"> '.$sonbilgi["kategori_ad_az"].'&nbsp; <span>ID : '.$sonbilgi["id"].'</span></option>';
                       var_dump($kategori_seourl_ru);
                     endwhile;
                      echo'</select>
                    </div>
                  </div>
                </div>
              </div>
               <div class="form-group bg-light">
                <div class="input-group mb-2">
                  <div class="input-group-prepend">
                    <span class="input-group-text">
                      <img src="assets/images/flags/process.png" alt="rus flag" class="input-group-addon flag_en">
                    </span>
                  </div> 
                  <a href="control.php?sayfa=alt_kategoriler" class="btn btn-warning  float-left mt-4 fyd"><i class="fa fa-arrow-left"></i>&nbsp; Geri dön</a>
                   <input type="hidden" name="kayitidsi" value="'.$kayitid.'" />
                  <button type="submit" class="btn btn-primary float-right ml-4 kyd mt-4"><i class="fa fa-refresh"></i>&nbsp; Düzenle</button>
                </div>
              </div>
                          
              </form>
             </div>
             </div>';  
     else:  

        @$kategori_ad_az=htmlspecialchars($_POST["kategori_ad_az"]);
        @$kategori_ad_ru=htmlspecialchars($_POST["kategori_ad_ru"]);
        @$kategori_ad_tr=htmlspecialchars($_POST["kategori_ad_tr"]);
        @$kategori_ad_en=htmlspecialchars($_POST["kategori_ad_en"]);
        @$kategori_durum=htmlspecialchars($_POST["kategori_durum"]);
        @$kategori_id=htmlspecialchars($_POST["kategori_id"]);
        @$kategori_seourl_az=sefLink($_POST['kategori_ad_az']);
        @$kategori_seourl_ru=sefRussian($_POST['kategori_ad_ru']);
        @$kategori_seourl_tr=sefLink($_POST['kategori_ad_tr']);
        @$kategori_seourl_en=sefLink($_POST['kategori_ad_en']);
        @$kayitidsi=htmlspecialchars($_POST["kayitidsi"]);
        self::sorgum($vt,"UPDATE altkategori SET kategori_ad_az='$kategori_ad_az',kategori_ad_tr='$kategori_ad_tr',kategori_ad_ru='$kategori_ad_ru',kategori_ad_en='$kategori_ad_en',kategori_durum='$kategori_durum',kategori_id='$kategori_id',kategori_seourl_az='$kategori_seourl_az',kategori_seourl_ru='$kategori_seourl_ru',kategori_seourl_tr='$kategori_seourl_tr',kategori_seourl_en='$kategori_seourl_en' WHERE id=$kayitid",0);
                echo '<div class="col-lg-6 mx-auto">
                <div class="alert alert-success mt-5">
                Güncelleme başarılı.</div></div>';
                header("refresh:2,url=control.php?sayfa=alt_kategoriler");
  endif;

     echo '</div>'; 
}

function altkategorisil($vt){
        $gelenintroid=$_GET["id"];
        $verial=self::sorgum($vt,"select * from altkategori where id=$gelenintroid",1);
        $dbgelenyol='../'.$resimyolunabak["resimyol"];
        unlink($dbgelenyol);
        echo '<div class="row text-center">
        <div class="col-lg-12">';
        self::sorgum($vt,"delete  from altkategori where id=$gelenintroid",0);
        echo '<div class="alert alert-success mt-5">
        Silme başarılı.</div>';
        echo '</div></div>';
      header("refresh:2,url=control.php?sayfa=alt_kategoriler");
}

//Kategori islemleri bitis

//urunler kismi ///

function products($vt){
     echo '<div class="row text-center">
        <div class="col-lg-12">
        <h4 class="float-left mt-3 text-info mb-2">
        <a href="control.php?sayfa=urunekle" class="ti-plus bg-success p-1 text-white mr-2 mt-3"></a>
        Ürün Ekle</h4> <br> 
        </div>
        <div class="container-fluid">
             <div class="card">
              <div class="card-header mt-3">
                <h3 class="card-title">Ürünler listesi</h3>
              </div>
              <div class="card-body">
                <table id="myTable" class="table table-bordered table-striped col-lg-12 display" style="width:100%">
                  <thead>
                  <tr>
                    <th>Kod</th>
                    <th>Ürün adı</th>
                    <th>Durum</th>
                    <th>Resim işlemi</th>
                    <th>İşlemler</th>
                  </tr>
                  </thead>
                  <tbody>';
                  $introbilgiler=self::sorgum($vt,"select * from products",2);
                  while($sonbilgi=$introbilgiler->fetch(PDO::FETCH_ASSOC)):
                  echo'
                  <tr>
                    <td> '.$sonbilgi["p_kod"].'</td>
                    <td style="text-align: left;">'.$sonbilgi["p_name_az"].'</td>
                 <td>';
                
                  if ($sonbilgi["urun_durum"]==1) {

                 echo'<button class="btn btn-success btn-xs">Aktif</button>';

               } else {

                echo'<button class="btn btn-danger btn-xs">Pasif</button>';


               } 
     echo'</td>
    <td><a href="urun-foto-yukle.php?urun_id='.$sonbilgi["id"].'" class="ti-image  text-light btn btn-primary btn-xs"></a>
    </td>
    <td>
    <a href="control.php?sayfa=urunguncelle&id='.$sonbilgi["id"].'" class="ti-reload m-2 text-success" style="font-size:20px;"></a>
    <a href="control.php?sayfa=urunsil&id='.$sonbilgi["id"].'" class="ti-trash m-2 text-danger" style="font-size:20px;"></a>
    </td>
    </tr>';
                   endwhile;
                echo' </tbody>
                    </table>
                   </div>
                 </div>
              </div>
         </div>';

   
}//urunler listelendi 

function secimett($vt){
    $gelenintroid=$_GET["id"];
    $introbilgiler=self::sorgum($vt,"select * from products where id=$gelenintroid",2);
    $sonbilgi = $introbilgiler->fetch(PDO::FETCH_ASSOC);
echo'<div class="row text-center">
   <div class="col-lg-12">
   <div class="col-lg-12 mt-2 bg-white text-center" style="min-height:500px;">
  <div class="col-md-9 mt-3">
    <div class="form-group card-bordered">
    <a href="control.php?sayfa=urunguncelle&id='.$sonbilgi["id"].'" class="btn btn-warning"><i class="ti ti-pencil"></i>  Kategori içerik Güncelle</a>
    <a href="control.php?sayfa=urunguncelleimg&id='.$sonbilgi["id"].'" class="btn btn-primary ml-3"><i class="ti ti-image"></i>  Kategori resmi Güncelle</a>
    </div>
    </div>
    </div>
   </div>
</div>';
}
function urunekle($vt){
   
    if($_POST):
    $urun_seourl_az = sefLink($_POST["p_name_az"]);
    $urun_seourl_ru = sefLink($_POST["p_name_ru"]);
    $urun_seourl_tr = sefLink($_POST["p_name_tr"]);
    $urun_seourl_en = sefLink($_POST["p_name_en"]);
    $p_kod =  $_POST["p_kod"];
    $p_name_az = $_POST["p_name_az"];
    $p_name_ru = $_POST["p_name_ru"];
    $p_name_tr = $_POST["p_name_tr"];
    $p_name_en = $_POST["p_name_en"];
    $kategori_id = htmlspecialchars($_POST["kategori_id"]);
    $icerik_az = html_entity_decode(htmlspecialchars(strip_tags($_POST["icerik_az"])));
    $icerik_ru = html_entity_decode(htmlspecialchars(strip_tags($_POST["icerik_ru"])));
    $icerik_tr = html_entity_decode(htmlspecialchars(strip_tags($_POST["icerik_tr"])));
    $icerik_en = html_entity_decode(htmlspecialchars(strip_tags($_POST["icerik_en"])));
    $stok = htmlspecialchars($_POST["stok"]);
    $marka  = htmlspecialchars($_POST["marka"]);
    $model = $_POST["model"];
    $agirlik = htmlspecialchars($_POST["agirlik"]);
    $makine_boyutlari = htmlspecialchars($_POST["makine_boyutlari"]);
    $urun_durum = htmlspecialchars($_POST["urun_durum"]);
      
   self::sorgum($vt,"INSERT into products (p_kod,p_name_az,p_name_ru,p_name_tr,p_name_en,kategori_id,icerik_az,icerik_ru,icerik_tr,icerik_en,stok,marka,model,agirlik,makine_boyutlari,urun_seourl_az,urun_seourl_ru,urun_seourl_tr,urun_seourl_en,urun_durum) VALUES('$p_kod','$p_name_az','$p_name_ru','$p_name_tr','$p_name_en','$kategori_id','$icerik_az','$icerik_ru','$icerik_tr','$icerik_en','$stok','$marka','$model','$agirlik','$makine_boyutlari','$urun_seourl_az','$urun_seourl_ru','$urun_seourl_tr','$urun_seourl_en','$urun_durum')",1);
           echo '<div class="alert alert-success mt-5">
                Yükleme başarılı.</div>';
                header("refresh:2,url=control.php?sayfa=products");
           
         else:  
       ?>  
<div class="container-fluid mt-5">
    <div class="row justify-content-center">
        <div class="col-lg-10">
            <div class="card" style="min-height:1500px; height:800px;">
                <div class="card-header">
                    <h4>Ürün Detaylı İçeriği Oluşturma Formu</h4>
                </div>
                <div class="card-body">
           <form action="" method="POST">
            <div class="form-row">
   <div class="form-group col-md-6">
    <label for="model">Məhsulun adı:</label>
    <div class="input-group align-items-center custom-flag">
      <img src="assets/images/flags/azerbaijan.png" alt="Russia Flag">
      <input type="text" class="form-control" id="p_name" name="p_name_az" required>
    </div>
  </div>  
   <div class="form-group col-md-6">
    <label for="model">Название продукта:</label>
    <div class="input-group align-items-center custom-flag">
      <img src="assets/images/flags/russian.png" alt="Russia Flag">
      <input type="text" class="form-control" id="p_name" name="p_name_ru">
    </div>
  </div>  
   <div class="form-group col-md-6">
    <label for="model">Ürün Adı:</label>
    <div class="input-group align-items-center custom-flag">
      <img src="assets/images/flags/turkey.png" alt="Russia Flag">
      <input type="text" class="form-control" id="p_name" name="p_name_tr">
    </div>
  </div>  
   <div class="form-group col-md-6">
    <label for="model">Name of the product:</label>
    <div class="input-group align-items-center custom-flag">
      <img src="assets/images/flags/england.png" alt="Russia Flag">
      <input type="text" class="form-control" id="p_name" name="p_name_en">
    </div>
  </div>  
   <div class="form-group col-md-6">
        <label for="model">Ürün Modeli:</label>
        <input type="text" class="form-control" id="model" name="model" placeholder="Ürün Modeli" required>
    </div>
    <div class="form-group col-md-6">
        <label for="marka">Ürün Markası:</label>
        <input type="text" class="form-control" id="marka" name="marka" placeholder="Ürün Markası" required>
    </div>
</div>
<div class="form-row">
<div class="form-group col-md-6">
    <label for="stok">Ürün Kod:</label>
    <input type="text" class="form-control" id="p_kod" name="p_kod" placeholder="Ürün Kodu">
</div>
<div class="form-group col-md-6">
    <label for="stok">Ürün Stok:</label>
    <input type="text" class="form-control" id="stok" name="stok" placeholder="Ürün Stok">
</div>
</div>
    <div class="form-row">
      <div class="form-group col-md-6">
          <label for="agirlik">Ürün Ağırlık:</label>
          <input type="text" class="form-control" id="agirlik" name="agirlik" placeholder="Ürün Ağırlık (Gramaj)">
      </div>
  <div class="form-group col-md-6">
    <label for="makine_boyutlari">Makine Boyutları:</label>
    <input type="text" class="form-control" id="makine_boyutlari" name="makine_boyutlari" placeholder="Makine Boyutları">
    </div>
</div>
    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="kategori_id">Ürün Kategorisi:</label>
                <select class="select2_multiple form-control" id="kategori_id" name="kategori_id" required>
                <option value="" disabled selected>Ürün kategorisi seçiniz..</option>
  <?php
        $altkategori=self::sorgum($vt,"select * from altkategori",2);
        while($sonbilgi=$altkategori->fetch(PDO::FETCH_ASSOC)):
            echo' <option  value="'.$sonbilgi["id"].'" name="kategori_id"> '.$sonbilgi["kategori_ad_az"].'</option>';
                     endwhile;
  ?>
</select>
    </div>
    <div class="form-group col-md-6">
        <label for="urun_durum">Ürün Durumu:</label>
            <select class="form-control" id="urun_durum" name="urun_durum" required>
              <option value="1">Aktif</option>
              <option value="0">Pasif</option>
</select>
    </div>
</div>
<style>
  .custom-flag {
    display: flex;
    align-items: center;
    background-color: lightgray;
    padding: 5px;
  }

  .custom-flag img {
    height: 50px;
  }

  .custom-textarea {
    flex: 1;
    margin-left: 10px;
    background-color: lightgray;
    border: none;
    resize: none;
  }
</style>
<div class="form-row">
  <div class="form-group col-md-12"> 
    <div class="input-group align-items-center custom-flag">
      <img src="assets/images/flags/azerbaijan.png" alt="Russia Flag">
      <textarea class="form-control custom-textarea" name="icerik_az" rows="8"></textarea>
    </div>
  </div>  
</div>
<div class="form-row">
  <div class="form-group col-md-12"> 
    <div class="input-group align-items-center custom-flag">
      <img src="assets/images/flags/russian.png" alt="Russia Flag">
      <textarea class="form-control custom-textarea" name="icerik_ru" rows="8"></textarea>
    </div>
  </div>  
</div>
<div class="form-row">
  <div class="form-group col-md-12"> 
    <div class="input-group align-items-center custom-flag">
      <img src="assets/images/flags/turkey.png" alt="Russia Flag">
      <textarea class="form-control custom-textarea" name="icerik_tr" rows="8"></textarea>
    </div>
  </div>  
</div><div class="form-row">
  <div class="form-group col-md-12"> 
    <div class="input-group align-items-center custom-flag">
      <img src="assets/images/flags/england.png" alt="Russia Flag">
      <textarea class="form-control custom-textarea" name="icerik_en" rows="8"></textarea>
    </div>
  </div>  
</div>
   <div class="form-row">
        <div class="form-group col-md-6 text-left">
        <a href="control.php?sayfa=products" class="btn btn-warning"><i class="ti ti-arrow-left"></i> &nbsp; Geri Dön</a>
        </div>
      <div class="form-group col-md-6 text-right">
        <button type="submit"  class="btn btn-primary" name="uruneklee"><i class="ti ti-save"></i> Kaydet</button>
   </div>
</div>    
</form>
  </div> 
  </div>
</div>
 </div>
</div>
  <?php 
         endif;
          echo '</div></div>';
}
 function urunsil($vt){
        $gelenintroid=$_GET["id"];
        $verial=self::sorgum($vt,"select * from products where id=$gelenintroid",1);
        echo '<div class="row text-center">
        <div class="col-lg-12">';
        self::sorgum($vt,"delete  from products where id=$gelenintroid",0);
        echo '<div class="alert alert-success mt-5">
        Silme başarılı.</div>';
      echo '</div></div>';
      header("refresh:2,url=control.php?sayfa=products");
     }
     function htmlcharset($icerik) {
    $text = preg_replace('/(<[^>]+) style=".*?"/i', '$1', $text);
    $text = preg_replace('/<h6.*?>/', '', $text);
    return htmlspecialchars($text, ENT_QUOTES, 'UTF-8');
}
function urunguncelle($vt){
   echo '<div class="row text-center">
        <div class="col-lg-12">'; 
    $kayitid=$_GET["id"];


//echo "Seçilen kategori id: $kayitid";

    if(!$_POST):
    $sonbilgi=self::sorgum($vt,"select * from products where id=$kayitid",1);
      $urun_id=$sonbilgi["kategori_id"];
    echo'<div class="container-fluid mt-5">
    <div class="row justify-content-center">
        <div class="col-lg-10">
            <div class="card" style="min-height:1500px; height:800px;">
                <div class="card-header">
                    <h4>Ürün Detaylı İçeriği Düzenleme Formu</h4>
                </div>
                <div class="card-body">
           <form action="" method="POST">
                    
   <div class="form-row">
   <div class="form-group col-md-6">
    <label for="model">Məhsulun adı:</label>
    <div class="input-group align-items-center custom-flag">
      <img src="assets/images/flags/azerbaijan.png" alt="Russia Flag">
      <input type="text" class="form-control" id="p_name" name="p_name_az" value="'.$sonbilgi["p_name_az"].'" required>
    </div>
  </div>  
   <div class="form-group col-md-6">
    <label for="model">Название продукта:</label>
    <div class="input-group align-items-center custom-flag">
      <img src="assets/images/flags/russian.png" alt="Russia Flag">
      <input type="text" class="form-control" id="p_name" name="p_name_ru" value="'.$sonbilgi["p_name_ru"].'">
    </div>
  </div>  
   <div class="form-group col-md-6">
    <label for="model">Ürün Adı:</label>
    <div class="input-group align-items-center custom-flag">
      <img src="assets/images/flags/turkey.png" alt="Russia Flag">
      <input type="text" class="form-control" id="p_name" name="p_name_tr" value="'.$sonbilgi["p_name_tr"].'">
    </div>
  </div>  
   <div class="form-group col-md-6">
    <label for="model">Name of the product:</label>
    <div class="input-group align-items-center custom-flag">
      <img src="assets/images/flags/england.png" alt="Russia Flag">
      <input type="text" class="form-control" id="p_name" name="p_name_en" value="'.$sonbilgi["p_name_en"].'">
    </div>
  </div>  
 <div class="form-group col-md-6">
                                <label for="model">Ürün Modeli:</label>
                                <input type="text" class="form-control" id="model" name="model" value="'.$sonbilgi["model"].'" required>
                            </div>
                        </div>
                     <div class="form-row">
                         <div class="form-group col-md-6">
                                <label for="stok">Ürün Kod:</label>
                                <input type="text" class="form-control" id="stok" name="p_kod" value="'.$sonbilgi["p_kod"].'" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="stok">Ürün Stok:</label>
                                <input type="text" class="form-control" id="stok" name="stok" value="'.$sonbilgi["stok"].'" required>
                            </div>
                           
                        </div>

                          <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="agirlik">Ürün Ağırlık:</label>
                                <input type="text" class="form-control" id="agirlik" name="agirlik" value="'.$sonbilgi["agirlik"].'" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="makine_boyutlari">Makine Boyutları:</label>
                                <input type="text" class="form-control" id="makine_boyutlari" name="makine_boyutlari" value="'.$sonbilgi["makine_boyutlari"].'">
                            </div>
                        </div>
 <style>
  .custom-flag {
    display: flex;
    align-items: center;
    background-color: lightgray;
    padding: 5px;
  }

  .custom-flag img {
    height: 50px;
  }

  .custom-textarea {
    flex: 1;
    margin-left: 10px;
    background-color: lightgray;
    border: none;
    resize: none;
  }
</style>
<div class="form-row">
  <div class="form-group col-md-12"> 
    <div class="input-group align-items-center custom-flag">
      <img src="assets/images/flags/azerbaijan.png" alt="Russia Flag">
      <textarea class="form-control custom-textarea" name="icerik_az" rows="8">'.$sonbilgi["icerik_az"].'</textarea>
    </div>
  </div>  
</div>
<div class="form-row">
  <div class="form-group col-md-12"> 
    <div class="input-group align-items-center custom-flag">
      <img src="assets/images/flags/russian.png" alt="Russia Flag">
      <textarea class="form-control custom-textarea" name="icerik_ru" rows="8">'.$sonbilgi["icerik_ru"].'</textarea>
    </div>
  </div>  
</div>
<div class="form-row">
  <div class="form-group col-md-12"> 
    <div class="input-group align-items-center custom-flag">
      <img src="assets/images/flags/turkey.png" alt="Russia Flag">
      <textarea class="form-control custom-textarea" name="icerik_tr" rows="8">'.$sonbilgi["icerik_tr"].'</textarea>
    </div>
  </div>  
</div><div class="form-row">
  <div class="form-group col-md-12"> 
    <div class="input-group align-items-center custom-flag">
      <img src="assets/images/flags/england.png" alt="Russia Flag">
      <textarea class="form-control custom-textarea" name="icerik_en" rows="8">'.$sonbilgi["icerik_en"].'</textarea>
    </div>
  </div>  
</div>';
             
    $kayitid = $_GET["id"];
// Seçilen kategoriyi getir

$secilenKategori = self::sorgum($vt, "SELECT kategori_id FROM products WHERE id = $kayitid", 2)->fetch(PDO::FETCH_ASSOC);
// Tüm kategorileri getir
$tumKategoriler = self::sorgum($vt, "SELECT * FROM altkategori", 2);
// Kategori seçeneklerini oluştur
$kategoriSecenekleri = '';
while ($kategori = $tumKategoriler->fetch(PDO::FETCH_ASSOC)) {
     $secili = ($kategori['id'] == $secilenKategori['kategori_id']) ? 'selected' : '';
    $kategoriSecenekleri .= '<option value="'.$kategori["id"].'" '.$secili.'> '.$kategori["kategori_ad_az"].' </option>';
} 
         echo '
                 <div class="form-row">
                     <div class="form-group col-md-6">
                         <label for="kategori_id">Ürün Kategorisi:</label>
                         <select class="form-control"  name="kategori_id">
                             <option value="" disabled selected>Ürün kategorisi seçiniz..</option>
                            '.$kategoriSecenekleri.'
                         </select>
                     </div>
                     <div class="form-group col-md-6">
                   <label for="urun_durum">Ürün Durumu:</label>
                    <select id="heard" class="form-control" name="urun_durum" required>';
                   if ($sonbilgi['urun_durum']==0):
                  echo'<option value="0" selected>Pasif</option>
                   <option value="1">Aktif</option>';
                    else: 
                   echo'<option value="1" selected>Aktif</option>
                   <option value="0">Pasif</option>';
                    endif;
                  echo'</select>
                    </div>
                </div>
               
                      <div class="form-row">
                     <div class="form-group col-md-6 text-left">
                         <a href="control.php?sayfa=products" class="btn btn-warning"><i class="ti ti-arrow-left"></i> &nbsp; Geri Dön</a>
                     </div>
                     <div class="form-group col-md-6 text-right">
                     <input type="hidden" name="kayitidsi" value="'.$kayitid.'" />
                    <button type="submit"  class="btn btn-primary" name="urunduzenle"><i class="ti-reload "></i> Düzenle</button>
                     </div>
                     </div>    
                     </div>      
              </form>
             </div>
         </div>
             </div>
          </div>
         </div>
';
else:
    
    $urun_seourl_az = sefLink($_POST["p_name_az"]);
    $urun_seourl_ru = sefLink($_POST["p_name_ru"]);
    $urun_seourl_tr = sefLink($_POST["p_name_tr"]);
    $urun_seourl_en = sefLink($_POST["p_name_en"]);
    $p_kod = $_POST["p_kod"];
    $p_name_az = $_POST["p_name_az"];
    $p_name_ru = $_POST["p_name_ru"];
    $p_name_tr = $_POST["p_name_tr"];
    $p_name_en = $_POST["p_name_en"];
    $kategori_id = htmlspecialchars($_POST["kategori_id"]);
    $icerik_az = html_entity_decode(htmlspecialchars(strip_tags($_POST["icerik_az"])));
    $icerik_ru = html_entity_decode(htmlspecialchars(strip_tags($_POST["icerik_ru"])));
    $icerik_tr = html_entity_decode(htmlspecialchars(strip_tags($_POST["icerik_tr"]),ENT_QUOTES));
    $icerik_en = html_entity_decode(htmlspecialchars(strip_tags($_POST["icerik_en"]),ENT_QUOTES));
    $stok = htmlspecialchars($_POST["stok"]);
    $model = $_POST["model"];
    $agirlik = htmlspecialchars($_POST["agirlik"]);
    $makine_boyutlari = htmlspecialchars($_POST["makine_boyutlari"]);
    $urun_durum = htmlspecialchars($_POST["urun_durum"]);
    self::sorgum($vt,"update products set p_kod='$p_kod',icerik_az='$icerik_az',icerik_ru='$icerik_ru',icerik_tr='$icerik_tr',icerik_en='$icerik_en',p_name_az='$p_name_az',p_name_ru='$p_name_ru',p_name_tr='$p_name_tr',p_name_en='$p_name_en',kategori_id='$kategori_id',stok='$stok',model='$model',agirlik='$agirlik',makine_boyutlari='$makine_boyutlari',urun_seourl_az='$urun_seourl_az',urun_seourl_ru='$urun_seourl_ru',urun_seourl_tr='$urun_seourl_tr',urun_seourl_en='$urun_seourl_en',urun_durum='$urun_durum' where id=$kayitid",2);
                echo '<div class="col-lg-6 mx-auto">
                <div class="alert alert-success mt-5">
                Güncelleme başarılı.</div></div>';
                header("refresh:2,url=control.php?sayfa=products");
            endif;
  echo '</div>';



}

function urungaleri($vt)
{
    echo'<div class="row text-center">
        <div class="col-lg-12">';
         $kayitid=$_GET["id"];
          if(!$_POST):
    $sonbilgi=self::sorgum($vt,"select * from urunfoto where id=$kayitid",1);
        echo'<div class="row">
          <div align="right" class="col-md-6">
                  <a href="control.php?sayfa=products" class="btn btn-primary" ><i class="fa fa-arrow-left" aria-hidden="true"></i> Geri Dön </a>
                  <button type="submit" name="urunfotosil"  class="btn btn-danger "><i class="fa fa-trash" aria-hidden="true"></i> Seçilenleri Sil</button>
                  <a class="btn btn-success" href="control.php?sayfa=urunfotoyukle?id='.$kayitid.'"><i class="fa fa-plus" aria-hidden="true"></i> Ürün Fotoğraf Yükle</a>
                </div>
        </div>';
    endif;
}

function urunfotoyukle($vt){
 
 } 



}
               
        
  ?>     


  






