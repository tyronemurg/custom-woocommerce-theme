<?php /* Template Name: Page Builder */ ?>
<?php  get_header(); 
require_once('components/navbar.inc.php');
?>


    <!--Main layout-->
    <main>
        <div class="container">

            <!--Section: Articles-->
            <section class="text-center">
            <div class="container"><!-- OR container-fluid for full width grid -->

<?php if (have_posts()) : the_post(); ?>
    <div class="row">
      
        <div class="col-sm-12">
         
           
            

           <?php the_content(); ?>
        </div>
    </div>
<?php endif; ?>
</div>

            <?php mdb_pagination(); ?>
            </section>
            <!--Section: Articles-->

        </div>
    </main>
    <!--Main layout-->

<?php  get_footer(); ?>