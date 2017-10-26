<?php get_header(); ?>

<div class="container">
  <div class="row">
    <div class="col-sm-12">
      <div id="fitness-slider" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner" role="listbox">
          <?php
            $active = true;
            $slider_posts = new WP_Query( array(  'post_type' =>'post', 
                                                'posts_per_page' =>4,
                                                'category_name' => 'slider' 
                                        ) );
          ?>
          <?php if( $slider_posts->have_posts() ): ?>
            <?php while( $slider_posts->have_posts() ): $slider_posts->the_post(); ?>
                
          <div class="item <?php 
            if($active){
              echo 'active';
              $active = false; 
            }
            ?>">
                  
            <div class="slider-img">
              <img src = "<?php the_post_thumbnail_url(); ?>" class="img-responsive"  />
            </div>
                
          </div><!-- /.item -->
              
            <?php endwhile; ?>
          <!-----Controls----> 
          <a class="left carousel-control" href="#fitness-slider" role="button" data-slide="prev">
              <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
          </a>
          <a class="right carousel-control" href="#fitness-slider" role="button" data-slide="next">
              <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
          </a>
          <?php endif; 
            wp_reset_postdata() 
          ?>
        </div><!-- /.carousel-inner -->
      </div><!-- /.carousel -->
    </div><!-- /.col -->
  </div><!-- /.row -->   
  <div class="row">
    <div class="col-xs-12">
      <?php if( have_posts() ): ?>
        <?php while( have_posts() ): the_post(); ?>
          <?php the_content(); ?>
        <?php endwhile; ?>
      <?php endif; ?>
    </div><!-- /.col -->
  </div><!-- /.row -->
  
</div><!-- /.container -->




<?php get_footer(); ?>