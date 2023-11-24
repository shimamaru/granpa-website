<?php get_header();


$header_image = get_header_image();
if ($header_image): ?>




<?php endif; ?>

<?php if (have_posts()) : the_post(); ?>
   


<?php
// カテゴリーのID
$category_id = 5;

// WP_Queryで指定したカテゴリーの記事を最大5つ取得
$args = array(
  'cat' => $category_id,
  'posts_per_page' => -1, // 最大5つの記事を取得
);
$query = new WP_Query($args);

// クエリが記事を持っているか確認
if ($query->have_posts()) :
?>
<div class="worksList-page">
  <section class="works">
    <h2 class="c-header works__header">作品一覧</h2>
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
            <!-- 日付と文章を取得 -->
            <p class="title"><?php the_title(); ?></p>
            <p class="date"><?php echo get_the_date('Y.m.d'); ?></p>
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

<?php wp_reset_query(); ?>

<?php get_footer(); ?>
