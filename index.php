<?php  get_header(); 
require_once('components/navbar.inc.php');
?>


    <!--Main Navigation-->
    <header class="global-header-index">  

        
        <div class="card card-intro blue-gradient mb-4">

            <div class="card-body white-text rgba-black-light text-center pt-5 pb-4">

             
                <div class="row d-flex justify-content-center">

                  
                    <div class="col-md-6">

                        <h1 class="font-weight-bold mb-4"><?php echo get_the_title() ?></h1>
                        <!--<p class="lead mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Deleniti ad impedit corporis ratione facere?
                            Cupiditate unde aliquid reiciendis animi, quas inventore, praesentium neque voluptatem, iusto
                            perferendis placeat similique dolor eum?
                        </p>-->

                    </div>
                  

                </div>
                

            </div>

        </div>
        

    </header>
    <!--Main Navigation-->

    <!--Main layout-->
    <main>
        <div class="container">

            <!--Section: Dynamic Content Wrapper-->
            <section>
              <div id="dynamic-content"></div>

            </section>
            <!--Section: Dynamic Content Wrapper-->

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