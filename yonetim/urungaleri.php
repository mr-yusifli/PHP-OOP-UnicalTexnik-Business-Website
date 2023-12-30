<?php 
ob_start();
session_start();
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include 'assets/fligran.php';
try {
 $baglanti=new PDO("mysql:host=localhost;dbname=nunica209_kurumsal;charset=utf8","nunica209_kurumsal","Kurumsal2023.");
            $baglanti->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
            
            }catch(PDOException $e){
                die($e->getMessage());
            }


if (!empty($_FILES)) {
  $urun_id = $_POST['urun_id'];
  $siraNumaralari = $baglanti->prepare("SELECT urunfoto_sira FROM urunfoto WHERE urun_id = $urun_id ORDER BY urunfoto_sira ASC");
  $siraNumaralari->execute();
  $urunfotosiracek = $siraNumaralari->fetchAll(PDO::FETCH_COLUMN);
  $enBuyukSiraNumarasi = (!empty($urunfotosiracek)) ? max($urunfotosiracek) : 0;
  $siraNumarasi = $enBuyukSiraNumarasi + 1;
  
  $uploads_dir = '../../assets/img/products';
  $uploads_dir2 = '../assets/img/products';
  $tmp_name = $_FILES['file']["tmp_name"];
  $name = $_FILES['file']["name"];
  $benzersizsayi1 = rand(20000,32000);
  $benzersizsayi2 = rand(20000,32000);
  $benzersizsayi3 = rand(20000,32000);
  $benzersizsayi4 = rand(20000,32000);
  $benzersizad = $benzersizsayi1.$benzersizsayi2.$benzersizsayi3.$benzersizsayi4;
  
  $extension = pathinfo($name, PATHINFO_EXTENSION);
  if ($extension != 'webp') {
    $im = imagecreatefromstring(file_get_contents($tmp_name));
    if (!$im) {
      die('Invalid file format');
    }
    $refimgyol = substr($uploads_dir, 6) . "/" . $benzersizad . '.webp';
    imagewebp($im, "$uploads_dir2/$benzersizad.webp");
    addWatermark($_SERVER['DOCUMENT_ROOT'] . '/' . $refimgyol);
    imagedestroy($im);
  } else {
    $refimgyol = substr($uploads_dir, 6) . "/" . $benzersizad . $name;
    move_uploaded_file($tmp_name, "$uploads_dir2/$benzersizad$name");
    addWatermark($_SERVER['DOCUMENT_ROOT'] . '/' . $refimgyol);
  }
  
  $kaydet = $baglanti->prepare("INSERT INTO urunfoto SET urunfoto_resimyol = :resimyol, urun_id = :urun_id, urunfoto_sira = :siraNumarasi");
  $insert = $kaydet->execute(array(
    'resimyol' => $refimgyol,
    'urun_id' => $urun_id,
    'siraNumarasi' => $siraNumarasi
  ));
}




if(isset($_POST['urunfotosil'])) {

	$urun_id=$_POST['urun_id'];
    $resimsilunlink=$_POST['urunfoto_resimyol'];
	echo $checklist = $_POST['urunfotosec'];
	foreach($checklist as $list) {
		$sil=$baglanti->prepare("DELETE from urunfoto where urunfoto_id=:urunfoto_id");
		$kontrol=$sil->execute(array(
			'urunfoto_id' => $list
		));
		}
		unlink("$resimsilunlink");
	   

	if ($kontrol) {
        
		
		Header("Location:urun-galeri.php?urun_id=$urun_id&durum=ok");
	} else {

		Header("Location:urun-galeri.php?urun_id=$urun_id&durum=no");
	}


} 





?>