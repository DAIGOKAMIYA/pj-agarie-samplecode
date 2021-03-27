<?php get_header();?>
<?php get_template_part( 'components/content', 'header' ); ?>
<div class="l-layout__contentsTop">
    <div class="p-sub-mv">
        <h1>
            <span class="en">NEWS</span>
            <span class="ja">お知らせ</span>
        </h1>
    </div>
</div>

<div class="l-layout__contents">
    <main class="l-layout__main">
        <div class="news-list">

            <?php
                $paged = get_query_var('paged')? get_query_var('paged') : 1;
                $args = array( 
                    'post_type' => 'post',
                    'post_status' => 'publish',
                    'paged' => $paged,
                    'posts_per_page' => 20,
                );
                $the_query = new WP_Query($args); if($the_query->have_posts()):
                ?>
            <div class="c-inner--l news-list__inner">
                <?php while ($the_query->have_posts()): $the_query->the_post(); ?>
                <article class="p-newsItem">
                    <a href="<?php the_permalink(); ?>">
                        <div class="p-newsItem__img">
                            <?php if ( has_post_thumbnail() ) : ?>
                            <?php the_post_thumbnail(); ?>
                            <?php else: ?>
                            <img src="<?php echo get_template_directory_uri();?>/assets/img/news/news_thumb_placeholder.png" alt="">
                            <?php endif; ?>
                        </div>
                        <div class="p-newsItem__txt">
                            <div class="cat">
                                <?php
                                    $categories = get_the_category();
                                    if ( $categories ) {
                                        foreach ( $categories as $category ) {
                                            echo '<span>'.$category->name.'</span>';
                                        }
                                    }
                                    ?>
                            </div>
                            <h1 class="title"><?php the_title(); ?></h1>
                            <div class="date"><?php the_time('Y.m.d'); ?></div>
                        </div>
                    </a>
                </article>
                <?php endwhile; ?>
            </div>
            <?php
                if(function_exists('wp_pagenavi')):
                    wp_pagenavi(array('query'=>$the_query));   ////wp_pagenavi()の呼び出し(ただし、引数の指定が必要！)
                endif;
                ?>
            <?php wp_reset_postdata(); ?>
            <?php else: ?>
            <!-- 投稿が無い場合の処理 -->
            <?php endif; ?>

        </div>
    </main>
</div>
<!-- /.l-layout__contents -->

<div class="l-layout__contentBottom">
    <?php get_template_part( 'components/content', 'bottom' ); ?>
</div>
<?php get_template_part( 'components/content', 'footer' ); ?>
<?php get_template_part( 'components/content', 'drawer' ); ?>
<?php get_footer();?>