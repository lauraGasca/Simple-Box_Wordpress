<?php get_header(); ?>
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                <div class="sidebar">
                    <?php get_sidebar(); ?>
                </div><!--sidebar-->
            </div><!--col-->
            <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                    <article class="blog-post">
                        <figure>
                            <?php the_post_thumbnail();?>
                        </figure>
                        <div class="post-head">
                            <h3><?php the_title(); ?></h3>
                            <div class="clearfix"></div>
                        </div><!--post-head-->
                        <?php the_content(); ?>
                    </article>
                <?php endwhile; else : ?>
                    <article class="blog-post">
                        <p><em>No se encontraron articulos</em></p>
                    </article>
                <?php endif; ?>
            </div><!--col-->
        </div><!--row-->
    </div>
<?php get_footer(); ?>