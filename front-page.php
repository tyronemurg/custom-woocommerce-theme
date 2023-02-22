<?php  get_header(); 
require_once('components/navbar.inc.php');
?>

      <div class="container-fluid d-none">
<div class="row">
          <div id="demo" class="carousel slide" data-ride="carousel" style="max-height: 400px;">

  <!-- Indicators -->
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>
  
  <!-- The slideshow -->
  <div class="carousel-inner" style="height: 100%;">
    <div class="carousel-item active">
      <img src="https://placehold.co/1800x1200" alt="Los Angeles" width="1100" height="500">
    </div>
    <div class="carousel-item">
      <img src="https://placehold.co/1800x1200" alt="Chicago" width="1100" height="500">
    </div>
    <div class="carousel-item">
      <img src="https://placehold.co/1800x1200" alt="New York" width="1100" height="500">
    </div>
  </div>
  
  <!-- Left and right controls -->
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>
</div>
      </div>



      </section>
    <!--Main layout-->
    <main>
      <section class="text-center">
        <div class="container-fluid">
          <div class="row">
            <div class="col-sm-12 p-0">
              <?php the_content(); ?>
            </div>
            
        </div>
      </div>
      <div class="container mt-5">
                 <div class="row">
          <?php

                 $args = array(
                        'post_type' => 'post',
                        'post_status' => 'publish',
                        'category_name' => 'trending1',
                        'posts_per_page' => 1,
                    );
                    $arr_posts = new WP_Query( $args );

                    // Start the loop.
                    if ( $arr_posts->have_posts() ) :
                      while ( $arr_posts->have_posts() ) :
                        $arr_posts->the_post();
                  ?>
                  <div class="col-sm-6">
                     <b><p class="date-blog mt-5" style="font-size:11px;">
                                  <?php echo get_the_date(); ?> | BY <?php echo get_the_author(); ?> / Feature
                                </p></b>

                                <a href="<?php echo get_permalink() ?>"> <h2 class="card-title color-off-black  mt-4" style="font-size:30px;text-transform: uppercase;"><strong><?php the_title(); ?></strong></h2></a>
                                <p class="text-dt-brown  mt-4" style="font-size:15px;">
                                  <?php echo get_the_excerpt(); ?>
                                </p>
                                <p class="date-blog  mt-4 mb-4">
                                <?php echo the_tags(); ?>
                                </p>
                                <a href="<?php echo get_permalink() ?>" class="btn btn-tertiary">READ MORE</a><br><br>


                  </div>
                  <div class="col-sm-6">
                    <a href="<?php echo get_permalink() ?>"> <?php the_post_thumbnail( 'medium-large', array( 'class'=> 'img-fluid')); ?>  </a>
                  </div>
                      <?php
                        endwhile;
                       endif;
                      ?>

     

        
          <?php

                 $args = array(
                        'post_type' => 'post',
                        'post_status' => 'publish',
                        'category_name' => 'trending2',
                        'posts_per_page' => 1,
                    );
                    $arr_posts = new WP_Query( $args );

                    // Start the loop.
                    if ( $arr_posts->have_posts() ) :
                      while ( $arr_posts->have_posts() ) :
                        $arr_posts->the_post();
                  ?>
                  <div class="col-sm-6">
                    <a href="<?php echo get_permalink() ?>"> <?php the_post_thumbnail( 'medium-large', array( 'class'=> 'img-fluid')); ?>  </a>
                    


                  </div>
                  <div class="col-sm-6">
                     <b><p class="date-blog mt-5" style="font-size:11px;">
                                  <?php echo get_the_date(); ?> | BY <?php echo get_the_author(); ?> / Feature
                                </p></b>

                                <a href="<?php echo get_permalink() ?>"> <h2 class="card-title color-off-black  mt-4" style="font-size:30px;text-transform: uppercase;"><strong><?php the_title(); ?></strong></h2></a>
                                <p class="text-dt-brown  mt-4" style="font-size:15px;">
                                  <?php echo get_the_excerpt(); ?>
                                </p>
                                <p class="date-blog  mt-4 mb-4">
                                <?php echo the_tags(); ?>
                                </p>
                                <a href="<?php echo get_permalink() ?>" class="btn btn-tertiary">READ MORE</a>
                  </div>
                      <?php
                        endwhile;
                       endif;
                      ?>

     

        </div>

      </div>
        </main>

    
<?php  get_footer(); ?>