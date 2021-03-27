<?php get_header();?>
<?php get_template_part( 'components/content', 'header' ); ?>
<div class="l-layout__contentsTop">
    <div class="p-sub-mv">
        <h1>
            <span class="en">ENTRY</span>
            <span class="ja">採用応募フォーム</span>
        </h1>
    </div>
</div>

<div class="l-layout__contents">
    <main class="l-layout__main">
        <section>
            <div class="career_form-content">
                <div class="career_form-content__inner c-inner--l">
                    <div class="p-form">
                        <div class="p-form__inner c-inner">
                            <div class="p-form__txt">
                                <p>
                                    絆コーポレーションの採用についてのご応募は下記フォームをご利用ください。<br>
                                    必ず「<a href="<?php echo home_url();?>/privacy">プライバシーポリシー</a>」をご一読ください。
                                </p>
                            </div>

                            <?php if ( have_posts() ) : ?>
                            <?php while ( have_posts() ) : the_post(); ?>
                            <?php the_content(); ?>
                            <?php endwhile; ?>
                            <?php endif; ?>

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