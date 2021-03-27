<?php get_header();?>
<?php get_template_part( 'components/content', 'header' ); ?>
<div class="l-layout__contentsTop">
</div>

<div class="l-layout__contents">
    <main class="l-layout__main">

        <?php if ( have_posts() ) : ?>
        <?php while ( have_posts() ) : the_post(); ?>
        <article class="p-post">
            <div class="p-post__img">
                <?php if ( has_post_thumbnail() ) : ?>
                <?php the_post_thumbnail(); ?>
                <?php else: ?>
                <img src="<?php echo get_template_directory_uri();?>/assets/img/post_thumb_placeholder.png" alt="">
                <?php endif; ?>
            </div>
            <div class="c-inner">
                <header>
                    <h1><?php the_title(); ?></h1>
                    <div class="meta">
                        <div class="date"><?php the_date('Y.m.d'); ?></div>
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
                    </div>
                </header>
                <?php the_content(); ?>
            </div>
        </article>
        <?php endwhile; ?>
        <?php endif; ?>

        <div class="p-relatedPost">
            <div class="c-inner--l">
                <div class="p-relatedPost__head">
                    <h2 class="title">
                        <span class="en">RELATED POST</span>
                        <span class="ja">関連記事</span>
                    </h2>
                </div>

                <?php
                        $args = array( 
                            'post_type' => 'post',
                            'post_status' => 'publish',
                            'posts_per_page' => 4,
                        );
                        $the_query = new WP_Query($args); if($the_query->have_posts()):
                        ?>
                <div class="p-relatedPost__list">
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
                <?php wp_reset_postdata(); ?>
                <?php else: ?>
                <!-- 投稿が無い場合の処理 -->
                <?php endif; ?>

            </div>
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