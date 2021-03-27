<?php get_header();?>
<?php get_template_part( 'components/content', 'header' ); ?>
<div class="l-layout__contentsTop">
    <div class="p-sub-mv">
        <h1>
            <span class="en">RECRUIT</span>
            <span class="ja">採用情報</span>
        </h1>
    </div>
</div>

<div class="l-layout__contents">
    <main class="l-layout__main">
        <section>
            <div class="career-list">
                <div class="career-list__inner c-inner--l">
                    <div class="career-list__title">
                        <h2 class="c-title2">現在募集中の職種</h2>
                    </div>
                    <div class="career-list__body">

                        <?php
                            $args = array( 
                                'post_type' => 'recruit',
                                'post_status' => 'publish',
                            );
                            $the_query = new WP_Query($args); if($the_query->have_posts()):
                            ?>
                        <?php while ($the_query->have_posts()): $the_query->the_post(); ?>
                        <article class="p-career-item">
                            <div class="p-career-item__inner c-inner">
                                <?php
                                    $title = get_field('title');
                                    if( $title ): ?>
                                <div class="p-career-item__name">
                                    <div class="logo">
                                        <img src="<?php echo $title['logo']; ?>" alt="">
                                    </div>
                                    <div class="name">
                                        <div class="name__shokushu"><?php echo $title['shokushu']; ?></div>
                                        <div class="name__jigyobu"><?php echo $title['jigyobu']; ?></div>
                                    </div>
                                </div>
                                <?php endif; ?>
                                <div class="p-career-item__txt">
                                    <?php the_field('body'); ?>
                                </div>
                                <div class="p-career-item__table">
                                    <?php
                                        $condition = get_field('condition');
                                        if( $condition ): ?>
                                    <table class="c-table c-table--vertical--sp">
                                        <tbody>
                                            <tr>
                                                <th>募集の背景</th>
                                                <td>
                                                    <?php echo $condition['background']; ?>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th>仕事の内容</th>
                                                <td>
                                                    <?php echo $condition['description']; ?>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th>求める人材</th>
                                                <td>
                                                    <?php echo $condition['jinzai']; ?>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th>勤務地</th>
                                                <td>
                                                    <?php echo $condition['place']; ?>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th>勤務時間</th>
                                                <td>
                                                    <?php echo $condition['time']; ?>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th>給与</th>
                                                <td>
                                                    <?php echo $condition['salary']; ?>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th>昇給・賞与</th>
                                                <td>
                                                    <?php echo $condition['bonus']; ?>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th>諸手当</th>
                                                <td>
                                                    <?php echo $condition['benefits']; ?>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th>休日・休暇</th>
                                                <td>
                                                    <?php echo $condition['dayoff']; ?>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th>福利厚生</th>
                                                <td>
                                                    <?php echo $condition['welfare']; ?>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th>採用プロセス</th>
                                                <td>
                                                    <?php echo $condition['process']; ?>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <?php endif; ?>
                                    <div class="p-career-item__btn">
                                        <div class="btn c-btn1 btn-11">
                                            <a href="<?php echo home_url();?>/career_form"><span>この求人に応募する<i class="fas fa-chevron-right"></i></span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </article>
                        <?php endwhile; ?>
                        <?php wp_reset_postdata(); ?>
                        <?php else: ?>
                        <!-- 投稿が無い場合の処理 -->
                        <?php endif; ?>

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