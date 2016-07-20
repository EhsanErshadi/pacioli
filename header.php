<?php
/**
* the header element and the opening of the main content elements
*/
$title = get_bloginfo('name');
$tagline = get_bloginfo('description');
$char = get_bloginfo('charset');
$ping = get_bloginfo('pingback_url');

$uri_facebook = 'https://www.facebook.com/ershadi.ehsan';
$uri_stackoverflow = 'http://stackoverflow.com/users/404339/ehsan-ershadi';
$uri_sof_flair = 'http://stackoverflow.com/users/flair/404339.png';
?>
  <!DOCTYPE html>
  <html <?php language_attributes(); ?>>

  <head>
    <meta charset="<?php echo $char; ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>
      <?php wp_title( '|', true, 'right' ); ?>
    </title>
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="pingback" href="<?php echo $ping; ?>">
    <?php wp_head(); ?>
  </head>

  <body <?php body_class(); ?>>

    <header role="banner">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
            <div class="site-header clearfix">
              <a class="logo" href="<?php echo get_site_url(); ?>"><img src="<?php echo get_template_directory_uri() . '/images/logo-'. get_locale() .'.png';?>" class="img-responsive" alt="احسان ارشادی Ehsan Ershadi"></a>
              <div class="fb-like">
                <a class="btn btn-black" href="<?php echo $uri_facebook; ?>" target="_blank" role="button"><i class="fa fa-facebook"></i>Like</a>
                <span>4701</span>
              </div>
            </div>
          </div>
        </div>
        <nav class="navbar" role="navigation">
          <div class="navbar-header">
            <button type="button" id="toggle" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
              <div class="navbar-toggle-inner">
                <span class="top"></span>
                <span class="middle"></span>
                <span class="bottom"></span>
              </div>
            </button>
            <div class="visible-xs menu"><?php echo __('Menu');?></div>
          </div>
          <?php wp_nav_menu( array(
'theme_location' => 'main',
'container_class' =>'collapse navbar-collapse',
'menu_id','menu-header',
'menu_class'=>'nav navbar-nav' ) ); ?>
        </nav>
      </div>
    </header>