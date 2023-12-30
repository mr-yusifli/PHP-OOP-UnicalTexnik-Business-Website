<section id="hero">
    <div id="heroCarousel" data-bs-interval="5000" class="carousel slide carousel-fade" data-bs-ride="carousel">
         <div class="carousel-inner" role="listbox">
         <?php $sinif->introbak($baglanti); ?>);
        <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
            <span class="carousel-control-prev-icon bx bx-left-arrow" aria-hidden="true"></span>
        </a>

        <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
            <span class="carousel-control-next-icon bx bx-right-arrow" aria-hidden="true"></span>
        </a>
         
        <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>
      
    </div>
</section>
<style>

    @media only screen and (max-width: 768px) {
        #hero {
            display: none;
        }
    }
</style>