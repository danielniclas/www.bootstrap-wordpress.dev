<?php

/*
Template Name:  Portfolio Grid Template
*/

?>

<?php get_header(); ?>



    <div class="container">
      <!-- Example row of columns -->
      <div class="row">
        <div class="col-md-12">

              <!-- THE LOOP:   -->
              <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

                <div class="page-header">
                <h1><?php the_title();?></h1>
                </div>
                <?php the_content();?>


              <?php endwhile; else: ?>

               <div class="page-header">
               <h1>Oh No!</h1>
               </div>

               <p>No content is appearing on this page</p>

              <?php endif; ?>

        </div>
    </div>

    <div class='row'>

        <?php
            $args = array(
            'post_type' => 'portfolio'
            );
            $the_query = new WP_Query( $args );
        ?>

        <?php if (have_posts() ) : while( $the_query->have_posts()): $the_query->the_post();?>

         <div class='col-xs-3 portfolio-piece'>

            <?php
            $thumbnail_id = get_post_thumbnail_id();
            $thumbnail_url = wp_get_attachment_image_src($thumbnail_id, 'thummbnail-size', true);
            ?>

            <!-- By including the actual image instead of the_post_thumbnail('medium') you get better resizing -->
            <!--  <p><?php the_post_thumbnail('medium');?>   -->

             <p><a href="<?php the_permalink();?>"><img src="<?php echo $thumbnail_url[0];?>" alt"<?php the_title();?> graphic"></a></p>
             <a href="<?php the_permalink();?>"><h4><?php the_title(); ?></h4></a>
            <p>$thumbnail_id = <?php echo $thumbnail_id;?></p>

         </div>


        <!-- EVERY FOUR IMAGES ADD A BREAK </div> and start a new ROW <div class='row'>  Important trick for structure  -->
        <!--  +1 because of index 0 -->

         <?php $portfolio_count = $the_query->current_post + 1; ?>
         <?php if ( $portfolio_count % 4 == 0): ?>

                </div><div class='row'>

        <?php endif; ?>



        <?php endwhile; endif; ?>

    </div>










      <p class='red'> PHP Custom Template File:  page-portfolio.php </p>


<?php get_footer(); ?>