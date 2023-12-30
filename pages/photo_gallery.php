<div class="photo-gallery mt-5">
    <div class="container">
        <h1 class="fw-light text-center text-lg-start mt-4 mb-0 letter"><?php echo $sinif->galeribaslik; ?></h1>
        <hr class="mt-2 mb-5" id="gallery">
        <div class="row photos">

            <?php $sinif->galeri($baglanti); ?>
            
        </div>
    </div>
</div>
  