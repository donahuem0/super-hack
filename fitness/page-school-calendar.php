<?php 

/**
 * Template Name: School Calendar Page
 */

get_header(); ?>

<div class="container" >
  <div class="row">
    <div class="col-sm-8">
      <?php
        if ( have_posts() ):
          while( have_posts() ):
            the_post(); ?>
              
          <h3 class="text-center">
            <?php the_title(); ?>
          </h3>
          
          <?php the_content(); 
          
          $slug = get_post_field( 'post_name', get_post() );
          
          endwhile;
        endif;
      ?>
    </div><!-- /.col -->
    <div class="col-sm-4">
      <h3 class="text-center">News</h3>
      <div id="fitnews">
        
        <?php  
        $category = $slug;
        $args = array('category_name' => $category, 'post_per_page' => 3 );
        
      	$loop = new WP_Query( $args );
      	
      	if( $loop->have_posts() ):
      	  $first_post = true;
      		while( $loop->have_posts() ): $loop->the_post(); ?>
      		  
      		  <?php if($first_post): 
      		      $first_post = false;
      		    else:
      		      echo '<hr>';
      		    endif;
      		  ?>
      		  
      			<h3 class="post-title-link"><a href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a></h3>
      			<?php the_excerpt();?>
      			
      		<?php endwhile;
      		else: ?>
      		   <p>There are no posts to display at this time.</p>
      	<?php
          endif;
      	wp_reset_postdata();
      	?>
        
      </div>
    </div><!-- /.col -->
  </div><!-- /.row -->
</div><!-- /.container -->

<?php get_footer(); ?>