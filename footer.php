 <section class="reviews">
      <div class="container">
        <div class="wrapper__reviews">
          <h2 class="title title__reviews">
            <span>What Our Clients Say</span>
          </h2>

          <div class="swiper">
            <div class="swiper-wrapper">
             <?php
                           
                $posts = get_posts( array(
                  'numberposts' => 4,
                  'category_name'    => 'slider',
                  'orderby'     => 'date',
                  'order'       => 'ASC',
                  'include'     => array(),
                  'exclude'     => array(),
                  'post_type'   => 'post',
                  'suppress_filters' => true,
                ) );

                global $post;

                foreach( $posts as $post ){
                  setup_postdata( $post );
                    ?> 
                       <div class="swiper-slide">
                <div class="reviewer">
                  <img src="<?php the_field('slider_photo'); ?>" alt="reviewer" />
                  <div class="info-reviewer">
                    <div class="name-reviewer"><?php the_title();?></div>
             
                    <div class="job-title-reviewer">
                     <?php the_field('slider_job_title'); ?>
                    </div>
                  </div>
                  <img
                    class="reviewer-logo"
                    src="<?php the_field('slider_company'); ?>"
                    alt="tourcompass logo"
                  />
                </div>
                <div class="review">
                  <?php the_field('slider_review'); ?>
                </div>
              </div>
                    <?php

                    
                 
                }

                wp_reset_postdata(); 
                                      ?>
             
              
            </div>
          </div>
        </div>

        <div class="pagination">
          <img
            class="review-button-prev"
            src="<?php echo bloginfo('template_url');?>/img/Reviews slider/left.svg"
            alt="arrow left"
          />
          <div class="review-pagination"></div>

          <img
            class="review-button-next"
            src="<?php echo bloginfo('template_url');?>/img/Reviews slider/right.svg"
            alt="arrow right"
          />
        </div>
      </div>
    </section>
    <?php
    wp_footer();
    ?>
  </body>
</html>
