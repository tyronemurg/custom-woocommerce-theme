<?php  get_header(); 
require_once('components/navbar.inc.php');
?>

<header>

     <div class="card card-intro blue-gradient mb-4">

        <div class="card-body white-text rgba-black-light text-center pt-5 pb-4">

            <!--Grid row-->
            <div class="row d-flex justify-content-center">

                <!--Grid column-->
                <div class="col-md-6">
                    <?php
                    $categories = get_the_category();
                    $first_category_name = $categories[0]->cat_name;
                    $first_category_id = get_cat_ID( $category[0]->cat_name );
                    $first_category_link = get_category_link( $category_id );
                    ?>
                <h1 class="font-weight-bold mb-4"><?php single_cat_title(); ?></h1>

                   <!-- Breadcrumbs -->
  
                 <!--     <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="<?php echo get_home_url(); ?>">Home </a>
                        </li>
                        <li class="breadcrumb-item">
                            <a href="<?php echo site_url('/blog/'); ?>">Blog </a>
                        </li>
                        <?php
                        if (count($categories)){
                        ?>
                        <li class="breadcrumb-item">
                            <a href="<?php echo $first_category_link ?>"><?php single_cat_title(); ?></a>
                        </li>
                        <?php
                        }
                        ?>
                        
                    </ol>  -->
                    <!-- Breadcrumbs -->


                </div>
                <!--Grid column-->

            </div>
            <!--Grid row-->

        </div>

    </div>
    <!-- Intro -->

</header>
<?php if( ! empty( category_description() ) ): ?>
<div class="row" id="">
    <p class="mb-4 mt-4"> <?php echo category_description(); ?></p>
</div>
<?php endif; ?>
<div class="mt-5" id="blog-wrapper">
    <div id="primary"  class="container"><!-- OR container-fluid for full width grid -->
        <h2 class="mb-5">Latest Posts | <?php single_cat_title(); ?></h2>
        <div class="row row-eq-height">
                   
        <?php 
        // the query
        $wpb_all_query = new WP_Query(array('post_type'=>'post', 'post_status'=>'publish', 'posts_per_page'=>-1)); ?>
        <?php if ( have_posts() ) : ?>
            <?php while ( have_posts() ) : the_post(); 
            //get_template_part('content');
            ?>
            <div class="col-lg-3 col-md-6 col-sm-12 mb-5 d-flex" style="">
                <div style="background:#f7f7f7;padding:20px;">
                     <div class="view overlay hm-white-slight rounded z-depth-2 mb-4" style="">
                    <?php the_post_thumbnail( 'medium-large', array( 'class'=> 'img-fluid blog-thumb')); ?>
                    <a href="<?php echo get_permalink() ?>">
                        <div class="mask"></div>
                    </a>
                </div>  
                 <p class="mb-4">
           <?php echo get_the_date(); ?> | <?php echo get_the_author(); ?> </p>
                   <a href="<?php echo get_permalink() ?>"><h3 class=""><?php echo mb_strimwidth(get_the_title(), 0, 30, '...'); ?></h3></a>
                   <p class="text-left mt-4 mb-3" style=""><?php echo get_the_excerpt(); ?></p>
                   <div class=""><a href="<?php echo get_permalink() ?>" class="btn btn-tertiary waves-effect waves-light" style="border-radius:0px">READ</a></div>
                   <!-- <a href="<?php echo get_permalink() ?>" class="btn btn-tertiary text-left">READ</a> -->
                </div>
            </div>
            <?php endwhile; ?>
        <?php endif; ?>

        </div>
    </div>
    <?php mdb_pagination(); ?>

</div>

<?php get_footer(); ?>