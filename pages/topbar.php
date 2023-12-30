<section id="topbar" class="d-flex align-items-center">
    <div class="container d-flex justify-content-center justify-content-md-between">
        <div class="contact-info d-flex align-items-center">
            <i class="bi bi-envelope d-flex align-items-center">
                <a href="mailto:<?php echo $sinif->mailadres; ?>"><?php echo $sinif->mailadres; ?></a></i>
            <i class="bi bi-phone d-flex align-items-center ms-4"><span><?php echo $sinif->telno; ?></span></i>
        </div>
        <div class="social-links d-none d-md-flex align-items-center">
            <a href="<?php echo $sinif->whatsapp; ?>" class="twitter" target="_blank"><i class="bi bi-whatsapp"></i></a>
            <a href="<?php echo $sinif->face; ?>" class="facebook" target="_blank"><i class="bi bi-facebook"></i></a>
            <a href="<?php echo $sinif->ints; ?>" class="instagram" target="_blank"><i class="bi bi-instagram"></i></a>
            <a href="<?php echo $sinif->twit; ?>" class="linkedin" target="_blank"><i class="bi bi-linkedin"></i></i></a>
        </div>
    </div>
</section>
