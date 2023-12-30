<section id="clients" class="clients">
    <div class="container">
        <h2 class="metin fw-light text-center text-lg-start mt-4 mb-0" style="font-weight:bold;color:#e06d0e;"><?php echo $sinif->ortaklar; ?></h2>
        <hr class="mt-2 mb-5">
        <div class="row no-gutters clients-wrap clearfix" data-aos="fade-up">

           <?php $sinif->clients($baglanti); ?>

          

        </div>

    </div>
</section>