<div class="photo-gallery mt-5">
    <div class="container">
        <h2 class="metin fw-light text-center text-lg-start mt-4 mb-0" style="font-weight:bold;color:#e06d0e;"><?php echo $sinif->galeribaslik; ?></h2>
        <hr class="mt-2 mb-5" id="gallery">
        <div class="row photos">
            <?php $sinif->galeri($baglanti); ?>
        </div>
    </div>
</div>
  