<?php get_header(); ?>
<!-- uvod -->
<section class="uvod text-center text-white py-5">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2><?php the_field('o_nama_naslov'); ?></h2>
                <p class="lead">
                    <?php the_field('o_nama_opis'); ?>
                </p>
            </div>
        </div>
    </div>
</section>

<!-- teme -->
<section class="teme py-5 text-center">
    <div class="container">
        <h2><?php the_field('teme_naslov'); ?></h2>
        <p class="lead">Ako vas interesuju neke od tema prijavite se i pišite o nekoj od navedenih oblasti.</p>
        <div class="row">
            <div class="col-md-4 animate__animated animate__fadeInLeft animate__delay-2s">
                <h3>Sport i rekreacija</h3>
                <i class="fas fa-running"></i>
            </div>
            <div class="col-md-4 animate__animated animate__fadeInLeft animate__delay-3s">
                <h3>Posao iz snova</h3>
                <i class="fas fa-chart-line"></i>
            </div>
            <div class="col-md-4 animate__animated animate__fadeInLeft animate__delay-4s">
                <h3>Zdrava ishrana</h3>
                <i class="fas fa-carrot"></i>
            </div>
        </div>
    </div>
</section>

<!-- cta -->
<section class="cta text-center">
    <div class="container">
        <h2>Poziv za pisce</h2>
        <p class="lead">Ako se pronalazite u nekoj od tema prijavite se.</p>
        <div class="alert alert-success lead d-inline-block">Kao benefit ovog programa, svi pisci dobiće besplatnu obuku iz oblasti veb dizajna. </div>
        <br>
        <a href="" class="btn btn-danger btn-lg">PRIJAVI SE</a>

    </div>
</section>
<?php get_footer(); ?>