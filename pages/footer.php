<footer id="footer">
    <div class="footer-top">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-7 footer-contact">
                    <?php $sinif->kelimeunvan($baglanti); ?>
                    <p>
                       <?php echo $sinif->normaladres; ?><br>
                        <strong>Tel:</strong> <?php echo $sinif->telno; ?><br>
                        <strong>Email:</strong> <?php echo $sinif->mailadres; ?><br>
                    </p>
                </div>
                <div class="col-lg-2 col-md-6 footer-links">
                    <?php $sinif->kelimesiteharitasi($baglanti); ?>
                    <ul>
                        <?php $sinif->linkesass($baglanti); ?>
                       <?php $sinif->linkhakkk($baglanti); ?>
                        <?php $sinif->kelimehizmetsartlari($baglanti); ?>
                  </ul>
                </div>
                <div class="col-lg-3 col-md-6 footer-links">
                    <?php $sinif->linkavaddd($baglanti); ?>
                    <ul>
                            <div class="content">
                            <?php 
                              $kategorisor=$baglanti->prepare("SELECT * FROM category where kategori_durum=:durum  order by id ASC");
                              $kategorisor->execute(array(
                                'durum' => 1
                                ));
                              while($kategoricek=$kategorisor->fetch(PDO::FETCH_ASSOC)) {
                              
                               ?>
                        <li><i class="bx bx-chevron-right"></i> 
                            <a href="alt-kategori-<?=sefLink($kategoricek['kategori_seourl_'.$_SESSION["dil"]])?>?kategori_id=<?= $kategoricek['id'] ?>"><?php echo $kategoricek['kategori_ad_'.$_SESSION["dil"]] ?></a>
                        </li>
                       <?php } ?>
                    </ul>
                </div>
                 <?php session_start();?>
                <div class="col-lg-4 col-md-6 footer-newsletter">
                     <?php $sinif->buletenbaslik($baglanti); ?>
                      <?php $sinif->buletenicerik($baglanti); ?>
                    <form id="newsletter-form" action="" method="post">
                        <input type="email" name="email" placeholder="example@mail.com" id="email" required>
                        <input type="submit" name="submit" value="<?php $sinif->buletenbuton($baglanti); ?>">
                    </form>
                </div>

            </div>
        </div>
    </div>
    <div class="container d-md-flex py-4">
        <div class="me-md-auto text-center text-md-start">
            <div class="copyright">
                <strong>2020 - <?php echo date("Y");?> <span><?php echo $sinif->footer; ?></span></strong>
            </div>
          <span><?php echo $sinif->metaown; ?></span>
        </div>
        <div class="social-links text-center text-md-right pt-3 pt-md-0">
            <a href="#" class="developer" data-toggle="modal" data-target="#myModal" type="button"><i class="fa-solid fa-laptop-code"></i></a>
            <a href="<?php echo $sinif->face; ?>" class="facebook" target="_blank"><i class="bx bxl-facebook"></i></a>
            <a href="<?php echo $sinif->ints; ?>" class="instagram" target="_blank"><i class="bx bxl-instagram"></i></a>
            <a href="<?php echo $sinif->twit; ?>" class="linkedin" target="_blank"><i class="bx bxl-linkedin"></i></a>
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-body row">
        <div class="col-md-4">
          <img src="assets/img/developer.webp" class="img-fluid" alt="royal,Royal,Yusifli,Röyal,Generator,generator satisi,kompressor,unicaltexnik">
        </div>
        <div class="col-md-8">
            <hr>
            <p><b>©2023</b> This site is made by Yusifli Röyal.</p><br><hr><br>
          <h4>Röyal YUSİFLİ</h4>
          <p>E-mail: royalyusifli7@gmail.com</p>
          <p>Telephone: (+99470) 342 90 50</p>
          <a href="https://wa.me/+994703429050/"><i class="fab fa-whatsapp"></i></a>
          <a href="https://www.facebook.com/royal.yusifli.3/"><i class="fab fa-facebook"></i></a>
          <a href="https://twitter.com/musa142"><i class="fab fa-twitter"></i></a>
          <a href="https://www.instagram.com/mr_yusifli_/"><i class="fab fa-instagram"></i></a>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary" id="contactButton"><i class="fab fa-whatsapp"></i> Contact Us</button>
      </div>

    </div>
  </div>
</div>
        </div>
    </div>
</footer>
<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-cookie/1.4.1/jquery.cookie.min.js"></script>
<script src="assets/js/jquery-3.6.3.min.js"></script>
<script src="assets/vendor/aos/aos.js"></script>
<script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.8.2/js/lightbox.min.js"></script>
<script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
<script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
<script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
<script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
<script src="assets/js/main.js"></script>

<script>
  $(document).ready(function() {
    $("#contactButton").click(function() {
      window.open("https://wa.me/+994703429050/?text=Salam size sayt sifaris etmek isteyirdik");
    });
  });
</script>
<script>
$(document).ready (function (e){
  $("#gonderbtn").click(function(){
    $.ajax({
      type:"POST",
      url:'lib/mail/gonder.php',
      data:$('#mailform').serialize(),
      success: function(donen){
      $('#mailform').trigger("reset");
      //$('#formtutucu').fadeOut(500);
      $('#mesajsonuc').show(500).html(donen);
    },
    });});
    });

</script>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
  document.addEventListener('DOMContentLoaded', function () {
    const newsletterForm = document.querySelector('#newsletter-form');

    newsletterForm.addEventListener('submit', function (event) {
      event.preventDefault(); // Sayfanın yenilenmesini engelle

      const email = document.querySelector('#email').value;

      if (email) {
        fetch('newsletter.php', {
          method: 'POST',
          body: new URLSearchParams({
            'email': email
          })
        }).then(response => {
          if (response.ok) {
            return response.json();
          } else {
            throw new Error('Network response was not ok.');
          }
        }).then(data => {
          // Sweet Alert kullanarak mesaj göster
          Swal.fire({
            icon: data.success ? 'success' : 'error',
            title: data.title,
            text: data.message,
            confirmButtonText: 'Tamam'
          });
        }).catch(error => {
          console.error('There was an error!', error);
        });
      }
    });
  });
</script>
<!-- <script>
  window.addEventListener('load', function() {
  var popup = document.getElementById('popup');
  var closeBtn = document.getElementById('closeBtn');

  // Popup penceresini göster
  popup.style.display = 'block';

  // Kapatma düğmesine tıklandığında popup penceresini gizle
  closeBtn.addEventListener('click', function() {
    popup.style.display = 'none';
  });
});


</script> -->

<!-- <script>
  document.addEventListener('contextmenu', function(e) {
    e.preventDefault(); // Sağ tık menüsünün görüntülenmesini engeller
});
document.addEventListener('copy', function(e) {
    e.preventDefault(); // Metin kopyalamayı engeller
});

</script> -->
</body>

</html>