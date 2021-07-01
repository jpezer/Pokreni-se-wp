<?php 
/* 
    Template name: Main page template
*/
?>
<?php get_header(  ); ?>
    <!-- blog -->
    <section class="blog container py-3">
        <div class="row justify-content-between">
            <div class="col-md-7 py-5">

            <?php if(have_posts()) : while(have_posts()) : the_post(); ?>

                <div class="post py-5">
                    <div class="text">
                        <h3><?php the_title(  ); ?></h3>
                        <?php the_content(  ); ?>
                    </div>
                </div>
                
                <?php endwhile; else : ?>
                    <?php _e('Nema unjetih stranica'); ?>
            <?php endif; ?>
            </div>
            <div class="col-md-4 py-5">
                <?php get_sidebar(); ?>
            </div>
        </div>
    </section>

<?php get_footer(  ); ?>