<!DOCTYPE html>
<html>
    <head>
      <meta charset="utf-8"> 
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      
      <title>FITCLUB Foundation</title>
        
      <?php wp_head(); ?>
        
    </head>
    <body>
      <nav class="navbar navbar-default">
        <div class="container">
          <!-- Brand and toggle get grouped for better mobile display -->
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#fitness-collapse" aria-expanded="false">
              <div class="hamburger">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </div>
              <div id="active-page">Home</div>

            </button>
              
          </div><!-- /.navbar-header -->
            
          <!--div class="tagline hidden-xs hidden-sm">
            <?php $blog_title = get_bloginfo( 'description' ); ?>
            <h2><?php echo $blog_title; ?></h2>
          </div-->
            
          <?php wp_nav_menu(array(
              'menu'  => 'primary',
              'theme_location'    => 'primary',
              'depth' => 2,
              'container' => 'div',
              'container_class'   => 'collapse navbar-collapse',
              'container_id'  => 'fitness-collapse',
              'menu_class'    => 'nav navbar-nav',
              'fallback_cb'   => 'wp_bootstrap_navwalker::fallback',
              'walker'    => new wp_bootstrap_navwalker())
              );
          ?>
          
        </div><!-- /.container -->
        <div class="clearfix"></div>
      </nav>

<div class="container<?php echo (is_front_page() ? null : ' hidden-sm hidden-xs'); ?>">
  <div class="row">
    <div class="col-xs-12">
      <div class="site-brand">
        <img src="<?php echo get_template_directory_uri(). '/images/fit-club-logo.png'; ?>" alt="Fit Club Logo" id="drop-shadow" class="img-responsive">
      </div>
      <div class="stripe"></div>
      <div class="tagline"><?php echo get_bloginfo( 'description' ); ?></div>
    </div><!-- /.col -->
    
  </div><!-- /.row -->
  <hr>
</div><!-- /.container -->
