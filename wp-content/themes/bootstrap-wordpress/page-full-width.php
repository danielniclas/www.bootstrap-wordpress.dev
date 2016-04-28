<?php

/*
Template Name:  Full Width
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

      <p class='red'> PHP Custom Template File:  page-full-width.php </p>


<?php get_footer(); ?>