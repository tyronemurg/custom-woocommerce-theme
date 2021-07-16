<?php /* Template Name: Blog */ ?>
 
<?php  get_header(); 
require_once('components/navbar.inc.php');
?>
 <header>

    <!-- Intro -->
    <div class="card card-intro blue-gradient mb-4">

        <div class="card-body white-text rgba-black-light text-center pt-5 pb-4">

            <!--Grid row-->
            <div class="row d-flex justify-content-center">

                <!--Grid column-->
                <div class="col-md-6">

                      <h1 class="font-weight-bold mb-4">Blog</h1>
                        <!--<p class="lead mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Deleniti ad impedit corporis ratione facere?
                            Cupiditate unde aliquid reiciendis animi, quas inventore, praesentium neque voluptatem, iusto
                            perferendis placeat similique dolor eum?
                        </p>-->

                </div>
                <!--Grid column-->

            </div>
            <!--Grid row-->

        </div>

    </div>
    <!-- Intro -->

</header>
<div class="mt-5" id="blog-wrapper">
<div id="primary" class="container">
<h2 class="mb-5">Latest Articles</h2>
<div  class="row">
        <div class="col-lg-3 col-md-5 col-sm-12">
    <?php get_sidebar( 'content-bottom' ); ?>
    </div>
        <div class="col-lg-9 col-md-7 col-sm-12">
        <?php
        // Start the loop.
        while ( have_posts() ) : the_post();
 
            // Include the page content template.
            get_template_part('content');
 
            // If comments are open or we have at least one comment, load up the comment template.
            // if ( comments_open() || get_comments_number() ) {
            //     comments_template();
            // }
 
            // End of the loop.
        endwhile;
        ?>
 </div>
    

    </div>
</div><!-- .content-area -->
</div>
 
<?php get_sidebar(); ?>
<?php get_footer(); ?>