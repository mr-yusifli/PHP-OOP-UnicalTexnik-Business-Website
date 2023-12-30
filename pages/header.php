<header id="header" class="d-flex align-items-center">
    <div class="container d-flex justify-content-between">

        <div class="logo">
            <a href="https://www.unicaltexnik.com">
                <img src="../assets/img/UnicalTexnikLogo.svg" alt="<?php  if ($_SESSION['dil'] == "az") {echo $sinif->normaltitle($baglanti);  } else { echo $sinif->titleler($baglanti);} ?> | UnicalTexnik_Logo" class="mainlogo">
            </a>
        </div>

        <nav id="navbar" class="navbar"><!-- .navbar -->
            <ul>
                <?php $sinif->linkesaspages($baglanti); ?>
                <li class="dropdown">
                    <?php $sinif->linkavadpages($baglanti); ?>
                    <ul>
                         <?php 
                              $kategorisor=$baglanti->prepare("SELECT * FROM category order by id ASC");
                              $kategorisor->execute();
                              while($kategoricek=$kategorisor->fetch(PDO::FETCH_ASSOC)) {
                              
                               ?>
                        <li>
                     <a href="../categories-<?=sefLink($kategoricek['kategori_ad'])?>"><?php echo $kategoricek['kategori_ad_'.$_SESSION["dil"]] ?> </a>
                        </li>
                        <?php } ?>
                    </ul>
                </li>
                <li class="dropdown">
                     <?php $sinif->linkhakpages($baglanti); ?>
                    <ul>
                          <?php $sinif->linkhakkpages($baglanti); ?>
                     
                    </ul>
                    
                </li>
                 <?php $sinif->linklerpages($baglanti); ?>
                 <?php $sinif->linkelaqepages($baglanti); ?>
               
                <!-- Dil -->
                <li>
                <a href="services.php?dil=az">
                <img src="../assets/img/azerbaijan.png" alt="">
              </a>
             </li>
              
                   <li> 
                    <a href="services.php?dil=ru">
                        <img src="../assets/img/russia.jpg" alt="">
                    </a>
                </li>
                   <li>
                    <a href="services.php?dil=en">
                        <img src="../assets/img/england.png" alt="">
                    </a>
                  </li>
                  <li>
                    <a href="services.php?dil=tr">
                        <img src="../assets/img/turkey.png" alt="">
                    </a>
                </li>
               <!-- </ul>   -->
            
            <?php 
           @$dil=$_GET['dil'];
           if($dil=="az"|| $dil=="tr" || $dil=="en" || $dil=="ru"):
                @$_SESSION['dil']=$dil;
                header("Location:services.php");
            elseif(!isset($_SESSION['dil'])):
                 $_SESSION['dil']="az";  
           endif;
            
            ?>
            <!--- -->
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
        </nav><!-- .navbar -->
    </div>
</header>