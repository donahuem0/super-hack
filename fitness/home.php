<?php get_header(); ?>

<?php 
  if ( have_posts() ):
    while( have_posts() ):

      the_post();
      get_template_part( 'content-templates/content', get_post_format() ); ?>
      <div class="container"><div class="row"><div class="col-xs-12"><hr></div></div></div>
    
      <?php endwhile;
  endif; ?>

<!-- This code is super awesome! -->
<div class="container">
  <div class="row">
    <div class="col-xs-12">
      <ul class="pager">
        <?php if( get_previous_posts_link() ): ?>
          <li class="previous"><?php previous_posts_link( 'Newer Posts' ); ?></li>
        <?php else: ?>
          <li class="previous disabled" ><a href="#">Newer Posts</a></li>
        <?php endif; ?>

        <?php if( get_next_posts_link() ): ?>
          <li class="next"><?php next_posts_link( 'Older Posts' ); ?></li>
        <?php else: ?>
          <li class="next disabled" ><a href="#">Older Posts</a></li>
        <?php endif; ?>    
      </ul>
        
    </div>
  </div>
</div>


<?php get_footer(); ?>
