<?php get_header();
$header_image = get_header_image();
if ($header_image): ?>
    <!-- <div id="mainImg">
        <img src="<?php header_image(); ?>" width="<?php echo HEADER_IMAGE_WIDTH; ?>" height="<?php echo HEADER_IMAGE_HEIGHT; ?>" alt="<?php bloginfo('description'); ?>">
    </div> -->
<div class="kv">
  <div class="container">
    <img class="image" src="<?php echo get_template_directory_uri(); ?>/images/syoku-01.jpg" alt="職人1">
    <img class="image" src="<?php echo get_template_directory_uri(); ?>/images/syoku-02.jpeg" alt="職人1">
    <img class="image" src="<?php echo get_template_directory_uri(); ?>/images/syoku-03.jpeg" alt="職人1">
  </div>
</div>
</div>
<?php endif; ?>

<?php if (have_posts()) : the_post(); ?>
   <section class="info">
    <div class="info__inner">
        <h2 class="info__header">お知らせ・イベント</h2>
        <?php
        // カテゴリーのID
        $category_id = 4;
    
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

<?php endif; ?>

<?php query_posts('post_type=post'); ?>
<?php get_template_part('module_loop'); ?>

<?php wp_reset_query(); ?>

<?php get_footer(); ?>
