<?php 
//Kelime kisaltma fonksyonu....
function shorten_text($text, $max_length) {
    if (strlen($text) > $max_length) {
        $offset = ($max_length - 3) - strlen($text);
        $text = substr($text, 0, strrpos($text, ' ', $offset)) . '...';
    }
    return $text;
}
 

?>

<section class="servicess mb-3">
    <div class="container">
        <?php $sinif->linkavadd($baglanti); ?>
        <hr class="mt-1 mb-5">
        <div class="content col-md-12">
     <?php 
       $kategorisor=$baglanti->prepare("SELECT * FROM category where kategori_durum=:durum  order by id ASC");
       $kategorisor->execute(array(
      'durum' => 1
      ));
       while($kategoricek=$kategorisor->fetch(PDO::FETCH_ASSOC)) {
        $kelme= $kategoricek['icerik_'.$_SESSION["dil"]];
        $max_length = 60;

        ?>  
            <a href="alt-kategori-<?=sefLink($kategoricek['kategori_seourl_'.$_SESSION["dil"]])?>" class="box col-md-4">
           
                <div class="inner">
                    <div class="icon">
            <img class="img-fluid cat" src="https://www.unicaltexnik.com/<?php echo $kategoricek['resimyol'] ?>" alt="Generator,generator satisi,kompressor,unicaltexnik">
                    </div>
                    <h3><?php echo $kategoricek['kategori_ad_'.$_SESSION["dil"]] ?> </h3>
                    <p><?php echo shorten_text($kelme, $max_length); ?></p>
                </div>
            </a> 
           <?php } ?>
            
          
        </div>
    </div>
</section>

