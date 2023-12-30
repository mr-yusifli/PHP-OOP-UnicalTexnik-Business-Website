
<header id="header" class="d-flex align-items-center">
    <div class="container d-flex justify-content-between">
      <div class="logo">
<a href="https://www.unicaltexnik.com">
  <img src="assets/img/UnicalTexnikLogo.svg" alt="<?php  if ($_SESSION['dil'] == "az") {echo $sinif->normaltitle($baglanti);  } else { echo $sinif->titleler($baglanti);} ?> | UnicalTexnik_Logo" class="mainlogo">
</a>
</div>

   <nav id="navbar" class="navbar">
     <ul><?php $sinif->linkesas($baglanti); ?>
       <li class="dropdown"><?php $sinif->linkavad($baglanti); ?>
      <ul>
           <?php
              $kategorisor=$baglanti->prepare("SELECT * FROM category order by id ASC");
              $kategorisor->execute();
              while($kategoricek=$kategorisor->fetch(PDO::FETCH_ASSOC)) {?>
    <li>
        <a href="alt-kategori-<?=sefLink($kategoricek['kategori_seourl_'.$_SESSION["dil"]])?>"><?php echo $kategoricek['kategori_ad_'.$_SESSION["dil"]] ?></a>
    </li>
         <?php } ?>
   </ul>
       </li>
<li class="dropdown"><?php $sinif->linkhak($baglanti); ?>
    <ul><?php $sinif->linkhakk($baglanti); ?></ul>
      </li>
 <?php $sinif->linkler($baglanti); ?>
 <?php $sinif->linkelaqe($baglanti); ?>
 <li>
    <a href="https://unicaltexnik.com?dil=az">
     <img src="assets/img/azerbaijan.webp" alt="Lang_Flag">
    </a>
</li>
<li> 
    <a href="https://unicaltexnik.com?dil=ru">
        <img src="assets/img/russia.webp" alt="Lang_Flag">
    </a>
</li>
<li>
    <a href="https://unicaltexnik.com?dil=en">
        <img src="assets/img/england.webp" alt="Lang_Flag">
    </a>
</li>
<li>
    <a href="https://unicaltexnik.com?dil=tr">
        <img src="assets/img/turkey.webp" alt="Lang_Flag">
    </a>
</li> </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
        </nav>
    </div>
</header>