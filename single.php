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
                            <div class="date-stamp">
                                <span class="date"><?php echo get_the_date('d'); ?></span>
                                <span class="month"><?php echo get_the_date('M'); ?></span>
                            </div><!--date-->
                            <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                            <ul>
                                <li><span>Por:</span> <?php echo get_the_author(); ?> </li>
                                <li><span>Fecha:</span> <?php echo get_the_date(); ?></li>
                                <li><span>Comentarios:</span> <?php comments_number(); ?> </li>
                            </ul>
                            <div class="clearfix"></div>
                        </div><!--post-head-->
                        <?php the_excerpt(); ?>
                    </article>
                    <div class="comments">
                        <br/><br/>
                        <?php comments_template(); ?>
                    </div><!--comments-->
                <?php endwhile; else : ?>
                    <h4>No se encontraron articulos</h4>
                <?php endif; ?>
            </div><!--col-->
        </div><!--row-->
    </div>
<?php get_footer(); ?>