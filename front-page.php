<?php get_header();
$header_image = get_header_image();
if ($header_image): ?>
    <div id="mainImg">
        <img src="<?php header_image(); ?>" width="<?php echo HEADER_IMAGE_WIDTH; ?>" height="<?php echo HEADER_IMAGE_HEIGHT; ?>" alt="<?php bloginfo('description'); ?>">
    </div>
<?php endif; ?>

<?php if (have_posts()) : the_post(); ?>
    <section>
        <h2>お知らせ・イベント</h2>
        <?php
        // カテゴリーのID
        $category_id = 4;

        // WP_Queryで指定したカテゴリーの記事を取得
        $args = array(
            'cat' => $category_id,
            'posts_per_page' => -1, // すべての記事を取得する場合は-1を指定
        );
        $query = new WP_Query($args);

        // クエリが記事を持っているか確認
        if ($query->have_posts()) :
            echo '<ul>'; // リストの開始

            while ($query->have_posts()) : $query->the_post();
                echo '<li>';
                the_title(); // 記事のタイトルを表示
                echo '</li>';
            endwhile;

            echo '</ul>'; // リストの終了

            wp_reset_postdata(); // ループ後に元の投稿データを復元
        else :
            echo '該当する記事はありません。';
        endif;
        ?>
    </section>
<?php endif; ?>

<?php query_posts('post_type=post'); ?>
<?php get_template_part('module_loop'); ?>

<?php wp_reset_query(); ?>

<?php get_footer(); ?>
