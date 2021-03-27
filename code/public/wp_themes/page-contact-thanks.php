<?php get_header();?>
<?php get_template_part( 'components/content', 'header' ); ?>
<div class="l-layout__contentsTop">
    <div class="p-sub-mv">
        <h1>
            <span class="en">CONTACT</span>
            <span class="ja">お問い合わせ</span>
        </h1>
    </div>
</div>

<div class="l-layout__contents">
    <main class="l-layout__main">
        <section>
            <div class="contact-content contact-content--thanks">
                <div class="contact-content__inner c-inner--l">
                    <div class="p-form">
                        <div class="p-form__inner c-inner">

                            <?php if ( have_posts() ) : ?>
                            <?php while ( have_posts() ) : the_post(); ?>
                            <?php the_content(); ?>
                            <?php endwhile; ?>
                            <?php endif; ?>

                            <div class="p-form__btn">
                                <div class="btn c-btn1 btn-11">
                                    <a href="<?php echo home_url();?>">トップへ戻る<i class="fas fa-chevron-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
</div>
<!-- /.l-layout__contents -->

<div class="l-layout__contentBottom">
    <?php get_template_part( 'components/content', 'bottom' ); ?>
</div>
<?php get_template_part( 'components/content', 'footer' ); ?>
<?php get_template_part( 'components/content', 'drawer' ); ?>
<?php get_footer();?>