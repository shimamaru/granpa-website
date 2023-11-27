<?php get_header();
$header_image = get_header_image();
if ($header_image): ?>
    <!-- <div id="mainImg">
        <img src="<?php header_image(); ?>" width="<?php echo HEADER_IMAGE_WIDTH; ?>" height="<?php echo HEADER_IMAGE_HEIGHT; ?>" alt="<?php bloginfo('description'); ?>">
    </div> -->
<div id="loading">
    <div class="loader"></div>
</div>
<!-- <div class="kv">
  <div class="container">
    <img class="image" src="<?php echo get_template_directory_uri(); ?>/images/syoku-01.jpg" alt="職人1">
    <img class="image" src="<?php echo get_template_directory_uri(); ?>/images/syoku-02.jpeg" alt="職人1">
    <img class="image" src="<?php echo get_template_directory_uri(); ?>/images/syoku-03.jpeg" alt="職人1">
  </div>
</div> -->


         <div class="kv">
  <div class="container">
<?php
// カテゴリーID
$category_id = 6;

// カスタムクエリの設定
$args = array(
  'post_type' => 'post', // 投稿タイプを指定
  'cat' => $category_id, // カテゴリーIDを指定
  'posts_per_page' => -1, // すべての投稿を取得
);

$query = new WP_Query($args);

// クエリが記事を持っているか確認
if ($query->have_posts()) :
?>
        <?php
        while ($query->have_posts()) : $query->the_post();
        ?>

 
<?php if (has_post_thumbnail()) : ?>
              <?php echo get_the_post_thumbnail($post->ID, 'full', array('class' => 'image')); ?>
            <?php endif; ?>
 
            
        <?php
        endwhile;
        ?>
  <?php
  wp_reset_postdata(); // ループ後に元の投稿データを復元
else :
  echo '該当する記事はありません。';
endif;
?>

 </div>
</div>



</div>
<?php endif; ?>

<?php if (have_posts()) : the_post(); ?>
   <section class="info">
    <div class="info__inner">
        <h2 class="c-header">お知らせ・イベント</h2>
        <?php
        // カテゴリーのID
        $category_id = 3;
    
        // WP_Queryで指定したカテゴリーの記事を最大5つ取得
        $args = array(
            'cat' => $category_id,
            'posts_per_page' => 5, // 最大5つの記事を取得
        );
        $query = new WP_Query($args);
    
        // クエリが記事を持っているか確認
        if ($query->have_posts()) :
            echo '<ul>'; // リストの開始
    
            while ($query->have_posts()) : $query->the_post();
                echo '<li>';
                // タイトルにリンクを設定
                echo '<a href="' . esc_url(get_permalink()) . '">' . get_the_title() . '</a>';
                echo '</li>';
            endwhile;
    
            echo '</ul>'; // リストの終了
    
            wp_reset_postdata(); // ループ後に元の投稿データを復元
        else :
            echo '該当する記事はありません。';
        endif;
        ?>
    
        <div class="info__list">
         
            <p class="info__list__text">
                
                <a class="info__list__link" href="<?php echo get_category_link($category_id); ?>">
                
               <i class="fas fa-list-ul"></i>
              お知らせ一覧を見る</a>
              
            
   
        </div>
    </div>
</section>


<?php
// カテゴリーのID
$category_id = 5;

// WP_Queryで指定したカテゴリーの記事を最大5つ取得
$args = array(
  'cat' => $category_id,
  'posts_per_page' => 6, // 最大5つの記事を取得
);
$query = new WP_Query($args);

// クエリが記事を持っているか確認
if ($query->have_posts()) :
?>
<div class="topPage-works">
  <section class="works">
    <h2 class="c-header works__header">作品</h2>
    <ul class="col">
      <?php
      while ($query->have_posts()) : $query->the_post();
      ?>
        <li>
          <a href="<?php the_permalink() ?>">
            <div>
              <?php if (has_post_thumbnail()) : ?>
                <p class="thumb"><?php echo get_the_post_thumbnail($post->ID, 'full'); ?></p>
              <?php endif; ?>
            </div>
          </a>
        </li>
      <?php
      endwhile;
      ?>
    </ul>
  </section>
  </div>
<?php
  wp_reset_postdata(); // ループ後に元の投稿データを復元
else :
  echo '該当する記事はありません。';
endif;
?>


<?php endif; ?>

<?php query_posts('post_type=post'); ?>
<!-- <?php get_template_part('module_loop'); ?> -->

<?php wp_reset_query(); ?>

<?php get_footer(); ?>
