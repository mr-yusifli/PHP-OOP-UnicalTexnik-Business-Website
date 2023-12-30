<?php 
ob_start();
session_start();
error_reporting();
date_default_timezone_set('Asia/Baku');
header('Content-type: text/html; charset=utf-8');
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require'src/Exception.php';
require'src/PHPMailer.php';
require'src/SMTP.php';
 try {
            $baglanti = new PDO("mysql:host=localhost;dbname=nunica209_kurumsal;charset=utf8","nunica209_kurumsal","Kurumsal2023.");
            $baglanti->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
            }catch(PDOException $e){
                die($e->getMessage());
            }
            $ayarlar=$baglanti->prepare("select * from gelenmailayar");
            $ayarlar->execute();
            $ayarson=$ayarlar->fetch();
            // tercih al
            $ayarlar2=$baglanti->prepare("select mesajtercih from ayarlar");
            $ayarlar2->execute();
            $tercihgeldi=$ayarlar2->fetch();
            
    $mail= new PHPMailer(true);
    $mail->SMTPDebug=0;
    $mail->isSMTP();
    $mail->CharSet='UTF-8';
    $mail->Host=$ayarson["host"];
    $mail->STMPAuth=true;
    $mail->Username=$ayarson["mailadres"];
    $mail->Password=$ayarson["sifre"];
    $mail->STMPSecure="tls";
    $mail->Port=$ayarson["port"];
    $mail->isHTML(true);
    $mail->addAddress($ayarson["aliciadres"]);
    if($_POST):

        $isim=htmlspecialchars(strip_tags($_POST["isim"]));
        $mailadres=htmlspecialchars(strip_tags($_POST["mail"]));
        $konu=htmlspecialchars(strip_tags($_POST["konu"]));
        $mesaj=htmlspecialchars(strip_tags($_POST["mesaj"]));
        
        switch($tercihgeldi["mesajtercih"]):
            case 1:
            echo '<div class="alert alert-success mt-5 text-center">
            Mesajınız göndərildi. Təşəkkür edirik!<br>
             </div>';
    $mail->setFrom($mailadres,$isim);
    $mail->addReplyTo($mailadres,"Yanıt");
    $mail->Subject=$konu;
    $mail->Body=$mesaj;
    if($mail->send()):
  
    else:
        /*günderimde hata olabilir, host bilgilerini kontrol et, 
        anlık kesinti vs..dbye kayıt et*/
        $zaman=date("d.m.Y")."/".date("H:i");
        $kaydet=$baglanti->prepare("insert into gelenmail (ad,mailadres,konu,mesaj,zaman) VALUES(?,?,?,?,?)");
        $kaydet->bindParam(1,$isim,PDO::PARAM_STR);
        $kaydet->bindParam(2,$mailadres,PDO::PARAM_STR);
        $kaydet->bindParam(3,$konu,PDO::PARAM_STR);
        $kaydet->bindParam(4,$mesaj,PDO::PARAM_STR);
        $kaydet->bindParam(5,$zaman,PDO::PARAM_STR);
        $kaydet->execute();
    endif;
            break;
            case 2:
            echo '<div class="alert alert-success mt-5 text-center">
            Mesajınız göndərildi. Təşəkkür edirik!<br>
             </div>';
            $mail->setFrom($mailadres,$isim);
            $mail->addReplyTo($mailadres,"Yanıt");
            $mail->Subject=$konu;
            $mail->Body=$mesaj;
            $mail->send();
            $zaman=date("d.m.Y")."/".date("H:i");
            $kaydet=$baglanti->prepare("insert into gelenmail (ad,mailadres,konu,mesaj,zaman) VALUES(?,?,?,?,?)");
            $kaydet->bindParam(1,$isim,PDO::PARAM_STR);
            $kaydet->bindParam(2,$mailadres,PDO::PARAM_STR);
            $kaydet->bindParam(3,$konu,PDO::PARAM_STR);
            $kaydet->bindParam(4,$mesaj,PDO::PARAM_STR);
            $kaydet->bindParam(5,$zaman,PDO::PARAM_STR);
            $kaydet->execute();
            break;
            case 3:
            echo '<div class="alert alert-success mt-5 text-center">
           Mesajınız göndərildi. Təşəkkür edirik!<br>
             </div>';
            $zaman=date("d.m.Y")."/".date("H:i");
            $kaydet=$baglanti->prepare("insert into gelenmail (ad,mailadres,konu,mesaj,zaman) VALUES(?,?,?,?,?)");
            $kaydet->bindParam(1,$isim,PDO::PARAM_STR);
            $kaydet->bindParam(2,$mailadres,PDO::PARAM_STR);
            $kaydet->bindParam(3,$konu,PDO::PARAM_STR);
            $kaydet->bindParam(4,$mesaj,PDO::PARAM_STR);
            $kaydet->bindParam(5,$zaman,PDO::PARAM_STR);
            $kaydet->execute();
            break;

        endswitch;


    //veritabanındaki tercihe bak
    
        
    endif;






 

                
                  
        
       


  


?>



