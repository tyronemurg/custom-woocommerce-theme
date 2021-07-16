<div class="row wow fadeIn">
            <?php
            if ( ! function_exists( 'pagination' ) ) :

                function pagination( $paged = '', $max_page = '' ) {
                    $big = 999999999; // need an unlikely integer
                    if( ! $paged ) {
                        $paged = get_query_var('paged');
                    }

                    if( ! $max_page ) {
                        global $wp_query;
                        $max_page = isset( $wp_query->max_num_pages ) ? $wp_query->max_num_pages : 1;
                    }

                    echo paginate_links( array(
                        'base'       => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
                        'format'     => '?paged=%#%',
                        'current'    => max( 1, $paged ),
                        'total'      => $max_page,
                        'mid_size'   => 1,
                        'prev_text'  => __( '«' ),
                        'next_text'  => __( '»' ),
                        'type'       => 'list'
                    ) );
                }
            endif;
                // Define custom query parameters
                $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
                $args = array(
                    'post_type' => 'post',
                    'posts_per_page' => 8,
                    'paged'          => $paged
                    );
                $counter = 1;
                $loop = new WP_Query( $args );

                if ( $loop->have_posts() ) {
                    while ( $loop->have_posts() ) : $loop->the_post();
            ?>
                <!--Grid column-->
                <div class="col-lg-6 col-md-6 col-sm-12 mb-5 d-flex" style="">
                <div style="background:#f7f7f7;padding:20px;">
                     <div class="view overlay hm-white-slight rounded z-depth-2 mb-4" style="">
                    <?php the_post_thumbnail( 'medium-large', array( 'class'=> 'img-fluid blog-thumb')); ?>
                    <a href="<?php echo get_permalink() ?>">
                        <div class="mask"></div>
                    </a>
                </div>  
                 <p class="mb-4">
           <?php echo get_the_date(); ?> | <?php echo get_the_author(); ?> |<?php the_category(', '); ?> </p>
                   <a href="<?php echo get_permalink() ?>"><h3 class=""><?php echo mb_strimwidth(get_the_title(), 0, 30, '...'); ?></h3></a>
                   <p class="text-left mt-4 mb-3" style=""><?php echo get_the_excerpt(); ?></p>
                   <div class=""><a href="<?php echo get_permalink() ?>" class="btn btn-tertiary waves-effect waves-light" style="border-radius:0px">READ</a></div>
                   <!-- <a href="<?php echo get_permalink() ?>" class="btn btn-tertiary text-left">READ</a> -->
                </div>
            </div>
                <!--Grid column-->
                <?php
                if ($counter % 2 == 0) {
                ?>
                    </div>
                    <!--Grid row-->
                    <!--Grid dynamic row-->
                    <div class="row wow fadeIn">
                <?php
                }
                $counter++;
                endwhile;
                } else {
                    echo __( 'No products found' );
                }

                ?>
                 <div class="col-sm-12">
                <?php
                // Custom query loop pagination
                pagination( $paged, $loop->max_num_pages);
                
                ?>
                </div>
            </div>
            <!--Grid row-->