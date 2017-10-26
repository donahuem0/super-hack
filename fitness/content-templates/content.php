<div class="container" >
  <div class="row">
    <div class="col-xs-12">
    
    <h3 class="post-title-link"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
    
      <div>
        <small>
          <?php the_time('F j, Y'); //Date ?>
          
          | Filed Under: <?php the_category(' '); // Category ?>
          
          <?php the_tags( $before = '| Tagged in ', $sep = ', ', $after = '' ) ?>
        </small>
      </div>
      
    </div><!-- /.col -->
  </div><!-- /.row -->
  
  <div class="row">
    <div class="col-xs-12">
      <?php the_content(); ?>
    </div> <!-- /.col -->
  </div><!-- /.row -->
</div><!-- /.container -->