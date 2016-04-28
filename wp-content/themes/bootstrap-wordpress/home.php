<?php get_header(); ?>

    <div class="container">
      <!-- Example row of columns -->
      <div class="row">
        <div class="col-md-9">

                <div class="page-header">
                <h1><?php wp_title('');?></h1>
                </div>


           <!-- BOOTSTRAP CAROUSEL -->

                <?php

                $args = array(
                'post_type'=>'post',
                'category_name'=>'featured'
                );

                $the_query = new WP_Query($args);

                ?>

                <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                  <!-- Indicators -->
                  <ol class="carousel-indicators">

                    <!-- Loop through CAROUSEL Indicators -->
                    <?php if (have_posts() ) : while( $the_query->have_posts()): $the_query->the_post();?>

                    <li data-target="#carousel-example-generic" data-slide-to="<?php $the_query->current_post; ?>" class="<?php if( $the_query->current_post == 0 ): ?>active<?php endif;?>"></li>

                    <?php endwhile; endif;?>

                  </ol>


                  <!-- RESET - reloop to beginning at zero -->
                  <?php rewind_posts();?>


                  <!-- Wrapper for slides -->
                  <div class="carousel-inner" role="listbox">

                  <!-- Loop through each image item -->
                  <?php if (have_posts() ) : while( $the_query->have_posts()): $the_query->the_post();?>


                    <div class="item <?php if( $the_query->current_post == 0 ): ?>active<?php endif;?>">

                                <?php
                                $thumbnail_id = get_post_thumbnail_id();
                                $thumbnail_url = wp_get_attachment_image_src($thumbnail_id, 'thummbnail-size', true);
                                $thumbnail_meta = get_post_meta( $thumbnail_id, '_wp_attachment_image_alt', true);
                                ?>


                      <a href="<?php the_permalink();?>"><img src="<?php echo $thumbnail_url[0];?>" alt="<?php echo $thumbnail_meta; ?>"></a>
                      <div class="carousel-caption"><?php the_title(); ?></div>

                    </div>


                    <?php endwhile; endif;?>

                  </div>    <!-- Added -->

                  <!-- Controls -->
                  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                  </a>
                  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                  </a>
                </div>





              <!-- THE LOOP:   -->
              <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

                <article class='post'>
                    <h2><a href="<?php the_permalink();?>" > <?php the_title('');?> </h2>

                    <p><em> By <?php the_author(); ?>
                    on <?php echo the_time('l, F, jS, Y');?>
                    in <?php the_category( ', ');?>.
                    <a href="<?php comments_link();?>"><?php comments_number(); ?></a>
                    </em></p>

                    <?php the_excerpt();?>
                    <hr>

                </article>

               <!-- <?php the_content();?>   -->


              <?php endwhile; else: ?>

               <div class="page-header">
               <h1>Oh No!</h1>
               </div>
               <p>No content is appearing on this page</p>

              <?php endif; ?>

        </div>

            <?php get_sidebar('blog'); ?>

      </div>

      <p class='red'> PHP Template File:  home.php </p>
      <p class='red'> Automatically used by WP for BLOG Pages when: Settings > Reading > Posts page > Blog  </p>

<?php get_footer(); ?>