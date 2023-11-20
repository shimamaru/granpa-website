<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width">
  <meta name="description" content="<?php echo trim(wp_title('', false)); if(wp_title('', false)) { echo ' - '; } bloginfo('description'); ?>">
  <title><?php
    global $page, $paged;
    wp_title('|', true, 'right');
    bloginfo('name');
    $site_description = get_bloginfo('description', 'display');
    if ($site_description && (is_home() || is_front_page()))
      echo " | $site_description";
    if ($paged >= 2 || $page >= 2)
      echo ' | ' . sprintf(__('Page %s', 'tpl_090_rwd'), max($paged, $page));
  ?></title>
  <link rel="profile" href="http://gmpg.org/xfn/11">
  <link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo('stylesheet_url'); ?>">
  <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
  <?php wp_head(); ?>
  <script src="<?php bloginfo('template_url'); ?>/js/script.js"></script>
</head>
<body>
  <header id="header" itemscope="itemscope" itemtype="http://schema.org/WPHeader">
        <!-- <?php wp_nav_menu(); ?> -->
        <!-- <?php wp_nav_menu($args);?> -->
    </div>

  <div class="header_inner">
    <div class="logo">
    <h1 class="title">LOGO</h1>
    </div>
    <!-- <nav class="nav">
      <ul class="nav_list">
        <li class="nav_item"><a href="#">メニュー1</a></li>
        <li class="nav_item"><a href="#">メニュー2</a></li>
        <li class="nav_item"><a href="#">メニュー3</a></li>
        <li class="nav_item"><a href="#">メニュー4</a></li>
        <li class="nav_item"><a href="#">メニュー5</a></li>
      </ul>
    </nav> -->
    <nav class="nav">
     <?php
$args = array(
    'menu_class' => 'nav_list', // ulタグにクラスを追加
      'menu_item_class' => 'nav_item', // liタグにクラスを追加
);

wp_nav_menu($args);
?>
    </nav>
  </div>
  <div class="hamburger" id="js-hamburger">
    <span class="hamburger_border hamburger_border_top"></span>
    <span class="hamburger_border hamburger_border_center"></span>
    <span class="hamburger_border hamburger_border_bottom"></span>
  </div>
  <div class="black_bg" id="js-black-bg"></div>

    <div class="hamburger" id="js-hamburger">
      <span class="hamburger_border hamburger_border_top"></span>
      <span class="hamburger_border hamburger_border_center"></span>
      <span class="hamburger_border hamburger_border_bottom"></span>
    </div>
    <div class="black_bg" id="js-black-bg"></div>
  
    <!-- <div id="headerWrap">
      <p id="logo">
        <?php if (function_exists('the_custom_logo')):?>
          <?php the_custom_logo();?>
        <?php else:?>
          <a href="<?php echo esc_url(home_url('/')); ?>" title="<?php echo esc_attr(get_bloginfo('name', 'display')); ?>" rel="home"><?php echo esc_attr(get_bloginfo('name', 'display'))?></a>
        <?php endif;?>
      </p>
      <nav id="mainnav">
        <p id="menuWrap"><a id="menu"><span id="menuBtn"></span></a></p>
        <div class="panel">
          <?php wp_nav_menu(array('theme_location' => 'primary'));?>
        </div>
      </nav>
    </div> -->
  </header>
</body>
</html>
