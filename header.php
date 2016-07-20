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
              <a class="logo" href="<?php echo get_site_url(); ?>"><img src="<?php echo get_template_directory_uri() . '/images/logo.png';?>" class="img-responsive" alt="احسان ارشادی Ehsan Ershadi"></a>
              <div class="fb-like">
                <a class="btn btn-black" href="<?php echo $uri_facebook; ?>" target="_blank" role="button"><i class="fa fa-facebook"></i>Like</a>
                <span>4701</span>
              </div>
            </div>
          </div>
        </div>
<!--
<div class="menu-menu-top-container"><ul id="menu-menu-top" class="menu"><li id="menu-item-158" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-158"><a href="http://localhost:51000/pacioli.ir/category/blog/">بلاگ</a></li>
<li id="menu-item-178" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-178"><a href="http://localhost:51000/pacioli.ir/category/products/">محصولات</a></li>
<li id="menu-item-176" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-176"><a href="http://localhost:51000/pacioli.ir/category/projects/">پروژه ها</a></li>
<li id="menu-item-177" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-177"><a href="http://localhost:51000/pacioli.ir/%d8%aa%d9%85%d8%a7%d8%b3-%d8%a8%d8%a7-%d9%85%d9%86/">تماس با من</a></li>
</ul></div>
-->
        <nav class="navbar" role="navigation">
        <div class="navbar-header">
            <button type="button" id="toggle" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
              <div class="navbar-toggle-inner">
                <span class="top"></span>
                <span class="middle"></span>
                <span class="bottom"></span>
              </div>
            </button>
            <div class="visible-xs menu">فهرست</div>
          </div>            
            <?php wp_nav_menu( array( 
              'theme_location' => 'main', 
              'container_class' =>'collapse navbar-collapse',
              'menu_id','menu-header',
              'menu_class'=>'nav navbar-nav' ) ); ?>
        </nav>
        <!--
        <nav class="navbar" role="navigation">
          <div class="navbar-header">
            <button type="button" id="toggle" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
              <div class="navbar-toggle-inner">
                <span class="top"></span>
                <span class="middle"></span>
                <span class="bottom"></span>
              </div>
            </button>
            <div class="visible-xs menu">Menu</div>
          </div>
          <div class="collapse navbar-collapse">
            <ul id="menu-header" class="nav navbar-nav">
              <li id="menu-item-262" class="menu-item menu-item-type-post_type menu-item-object-page current-menu-item page_item page-item-258 current_page_item active menu-item-262"><a href="http://pixelstores.com/">Home</a></li>
              <li id="menu-item-10" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-10"><a href="http://pixelstores.com/ecommerce-themes/">Themes</a></li>
              <li id="menu-item-261" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-261"><a href="http://pixelstores.com/pricing/">Pricing</a></li>
              <li id="menu-item-31" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-31"><a href="http://pixelstores.com/blog/">Blog</a></li>
              <li id="menu-item-32" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-32"><a href="http://pixelstores.com/support/">Support</a></li>
              <li id="menu-item-265" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-265"><a href="http://pixelstores.com/contact/">Contact</a></li>
              <li class="login-btn">
                <ul class="nav navbar-nav navbar-right">
                  <li><a class="btn btn-primary" href="http://pixelstores.com/login/" role="button">Login</a></li>
                </ul>
              </li>
            </ul>
          </div>
        </nav>
        -->
      </div>
    </header>

    <div class="main-content-area full">