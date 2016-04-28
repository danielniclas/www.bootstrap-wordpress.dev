<?php get_header(); ?>



    <div class="container">
      <!-- Example row of columns -->
      <div class="row">
        <div class="col-md-9">

                <div class="page-header">
                <h1><?php wp_title('');?></h1>
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

      <p class='red'> PHP Template File: archive.php </p>
      <p class='red'> Created from home.php  </p>
      <p class='red'> Virtually no changes to code - just works </p>

<?php get_footer(); ?>