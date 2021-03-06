<?php get_header();?>
<?php get_template_part( 'components/content', 'header' ); ?>
<div class="l-layout__contentsTop">
    <div class="home-mv">
        <div class="home-mv__wrapper">
            <div class="home-mv__inner">
                <div class="catch">
                    新潟の人をつなぐ<br>絆でつなぐ
                </div>
                <div class="scroll">SCROLL</div>
            </div>
        </div>
    </div>
</div>

<div class="l-layout__contents">
    <div class="l-layout__main">
        <section id="service">
            <div class="home-service">
                <div class="home-service__inner">
                    <div class="home-service__txt">
                        <h2 class="c-title1">
                            <span class="en">SERVICE</span>
                            <span class="ja">絆コーポレーションの事業紹介</span>
                        </h2>
                        <p>
                            絆コーポレーションは「アドバイザリー」「エージェント」「ケアスタッフ」3つの事業部を展開。M＆Aや事業継承、各種人材サービスを通し、新潟の人と事業の絆をつなぐことをミッションとして地域貢献に携わっています。
                        </p>
                    </div>
                    <div class="home-service__cards">
                        <div class="card">
                            <img src="<?php echo get_template_directory_uri();?>/assets/img/home/home_service_item1.png" alt="アドバイザリー事業部" class="pctb">
                            <img src="<?php echo get_template_directory_uri();?>/assets/img/home/home_service_item1_sp.png" alt="アドバイザリー事業部" class="sp">
                        </div>
                        <div class="card">
                            <img src="<?php echo get_template_directory_uri();?>/assets/img/home/home_service_item2.png" alt="エージェント事業部" class="pctb">
                            <img src="<?php echo get_template_directory_uri();?>/assets/img/home/home_service_item2_sp.png" alt="エージェント事業部" class="sp">
                        </div>
                        <div class="card">
                            <img src="<?php echo get_template_directory_uri();?>/assets/img/home/home_service_item3.png" alt="ケアスタッフ事業部" class="pctb">
                            <img src="<?php echo get_template_directory_uri();?>/assets/img/home/home_service_item3_sp.png" alt="ケアスタッフ事業部" class="sp">
                        </div>
                    </div>
                    <div class="home-service__img">
                        <div class="img">
                            <img src="<?php echo get_template_directory_uri();?>/assets/img/home/home_service_img.png" alt="スーツの人の写真">
                        </div>
                    </div>
                    <div class="home-service__btn">
                        <div class="c-btn1 btn-11">
                            <a href="<?php echo home_url();?>/service"><span>さらに詳しく<i class="fas fa-chevron-right"></i></span></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="company">
            <div class="home-company">
                <div class="home-company__inner">
                    <div class="home-company__txt">
                        <h2 class="c-title1">
                            <span class="en">COMPANY</span>
                            <span class="ja">会社概要</span>
                        </h2>
                        <table class="c-table">
                            <tbody>
                                <tr>
                                    <th>会社名</th>
                                    <td>株式会社絆コーポレーション</td>
                                </tr>
                                <tr>
                                    <th>代表取締役</th>
                                    <td>小川潤也</td>
                                </tr>
                                <tr>
                                    <th>設立日</th>
                                    <td>1998年9月10日</td>
                                </tr>
                                <tr>
                                    <th>所在地</th>
                                    <td>
                                        <dl>
                                            <dt>新潟本社</dt>
                                            <dd>
                                                〒950-0983 新潟県新潟市中央区神道寺2-1-1<br>
                                                TEL 025-240-7033　FAX 025-244-3023
                                            </dd>
                                            <dt>東京オフィス</dt>
                                            <dd>
                                                〒105-0004 東京都港区新橋2-20-15 新橋駅前ビル1号館4階<br>
                                                TEL 03-5537-3177　FAX 03-4333-7515
                                            </dd>
                                        </dl>
                                    </td>
                                </tr>
                                <tr>
                                    <th>許認可</th>
                                    <td>
                                        一般労働者派遣事業　<br class="sp">般-15-110005<br>
                                        有料職業紹介事業　 <br class="sp">15-ユ-300017<br>
                                        医療関連サービスマーク　<br class="sp">患者等給食業務
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <div class="btn c-btn1 btn-11">
                            <a href="<?php echo home_url();?>/about"><span>さらに詳しく<i class="fas fa-chevron-right"></i></span></a>
                        </div>
                    </div>
                    <div class="home-company__img">
                        <div class="img">
                            <img src="<?php echo get_template_directory_uri();?>/assets/img/home/home_company_img.png" alt="空から撮った町の写真">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="staff">
            <div class="home-staff">
                <div class="home-staff__inner">
                    <div class="home-staff__img">
                        <div class="img">
                            <img src="<?php echo get_template_directory_uri();?>/assets/img/home/home_staff_img.png" alt="仕事の様子" class="pctb">
                            <img src="<?php echo get_template_directory_uri();?>/assets/img/home/home_staff_img_sp.png" alt="仕事の様子" class="sp">
                        </div>
                    </div>
                    <div class="home-staff__txt">
                        <h2 class="c-title1">
                            <span class="en">STAFF</span>
                            <span class="ja">スタッフ紹介</span>
                        </h2>
                        <p>
                            絆コーポレーション自慢のスタッフをご紹介します。スタッフ全員新潟出身だからこそ、地元の企業や人に貢献できるサービスを提供できると思っています。
                        </p>
                        <div class="home-staff__btn">
                            <div class="btn c-btn1 btn-11">
                                <a href="<?php echo home_url();?>/staff"><span>さらに詳しく<i class="fas fa-chevron-right"></i></span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="recruit">
            <div class="home-recruit">
                <div class="home-recruit__inner">
                    <div class="home-recruit__head">
                        <h2 class="c-title1">
                            <span class="en">RECRUIT</span>
                            <span class="ja">採用情報</span>
                        </h2>
                        <p>
                            M＆Aや人材サービスの"一流"を目指す<br>人材を求めています
                        </p>
                    </div>
                    <div class="home-recruit__body">
                        <h3>現在募集中の職種</h3>
                        <ul>
                            <li>
                                <div class="img">
                                    <img src="<?php echo get_template_directory_uri();?>/assets/img/home/home_recruit_item1.png" alt="M&Aコンサルタント">
                                </div>
                                <div class="label">M&Aコンサルタント</div>
                            </li>
                            <li>
                                <div class="img">
                                    <img src="<?php echo get_template_directory_uri();?>/assets/img/home/home_recruit_item2.png" alt="採用コンサルタント">
                                </div>
                                <div class="label">採用コンサルタント</div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <section id="news">
            <div class="home-news">
                <div class="home-news__inner">
                    <div class="home-news__head">
                        <h2 class="c-title1">
                            <span class="en">NEWS</span>
                            <span class="ja">お知らせ</span>
                        </h2>
                    </div>
                    <div class="home-news__list">

                        <?php if ( have_posts() ) : ?>
                        <?php while ( have_posts() ) : the_post(); ?>
                        <dl>
                            <dt><?php the_time('Y.m.d'); ?></dt>
                            <dd><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></dd>
                        </dl>
                        <?php endwhile; ?>
                        <?php endif; ?>

                    </div>
                </div>
            </div>
        </section>
    </div>
    <!-- /.l-layout__main -->

</div>
<!-- /.l-layout__contents -->

<div class="l-layout__contentBottom">
    <?php get_template_part( 'components/content', 'bottom' ); ?>
</div>
<?php get_template_part( 'components/content', 'footer' ); ?>
<?php get_template_part( 'components/content', 'drawer' ); ?>
<?php get_footer();?>