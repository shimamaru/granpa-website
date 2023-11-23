<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width">
  <meta name="description" content="<?php echo trim(wp_title('', false)); if(wp_title('', false)) { echo ' - '; } bloginfo('description'); ?>">
  <title>
    <?php
      global $page, $paged;
      wp_title('|', true, 'right');
      bloginfo('name');
      $site_description = get_bloginfo('description', 'display');
      if ($site_description && (is_home() || is_front_page()))
        echo " | $site_description";
      if ($paged >= 2 || $page >= 2)
        echo ' | ' . sprintf(__('Page %s', 'tpl_090_rwd'), max($paged, $page));
    ?>
  </title>
  <link rel="profile" href="http://gmpg.org/xfn/11">
  <link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo('stylesheet_url'); ?>">
  <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Shippori+Mincho+B1:wght@600&display=swap" rel="stylesheet">
  <?php wp_head(); ?>
</head>
<body>
  <header id="header" itemscope="itemscope">
    <div class="header_inner">
      <div class="logo">
        <h1 class="title">LOGO</h1>
      </div>
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
  </header>
</body>
</html>
