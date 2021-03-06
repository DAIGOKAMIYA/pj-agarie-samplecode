<?php get_header();?>
<?php get_template_part( 'components/content', 'header' ); ?>
<div class="l-layout__contentsTop">
    <div class="p-sub-mv">
        <h1>
            <span class="en">SERVICE</span>
            <span class="ja">絆コーポレーションの事業紹介</span>
        </h1>
    </div>
</div>

<div class="l-layout__contents">
    <div class="l-layout__main">
        <section>
            <div class="service-content">
                <div class="service-content__inner">
                    <div class="service-content__img">
                        <img src="<?php echo get_template_directory_uri();?>/assets/img/service/service_img1.png" alt="アドバイザリー事業部">
                    </div>
                    <div class="service-content__desc">
                        <div class="logo logo--1">
                            <img src="<?php echo get_template_directory_uri();?>/assets/img/service/service_content1.png" alt="アドバイザリー事業部">
                        </div>
                        <h2>
                            M＆A、事業継承をご検討中の企業様を<br class="pctb">完全成果報酬型でサポート。
                        </h2>
                        <p>
                            M＆Aの専門家（弁護士、公認会計士、税理士）との連携でデューデリジェンスをワンストップで提供することで、譲受企業・譲渡企業双方にとってベストなM＆Aを実現。メガバンク出身の代表小川がご納得ゆくまで対応します。
                        </p>
                        <div class="btn">
                            <a href=""><img src="<?php echo get_template_directory_uri();?>/assets/img/service/service_link1.png" alt="新潟M＆A相談センター"></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section>
            <div class="service-content">
                <div class="service-content__inner">
                    <div class="service-content__img service-content__img--reverse">
                        <img src="<?php echo get_template_directory_uri();?>/assets/img/service/service_img2.png" alt="エージェント事業部">
                    </div>
                    <div class="service-content__desc service-content__desc--reverse">
                        <div class="logo logo--2">
                            <img src="<?php echo get_template_directory_uri();?>/assets/img/service/service_content2.png" alt="エージェント事業部">
                        </div>
                        <h2>
                            新潟地域に特化し、優良企業と優秀な人材をつなぐ採用支援サービスを行う、　<br class="pctb">地域唯一の人材紹介サービス。
                        </h2>
                        <p>
                            UIターンの希望をお持ちの優秀な人材の発掘を得意とします。とりわけ採用が難しいとされている特定の分野に関する深い知識や経験、専門的な技術を持つスペシャリスト人材を採用したい企業ニーズに対し、独自の人材アプローチにより採用効果を最大化できることが強みです。
                        </p>
                        <div class="btn">
                            <a href="//k-agent.biz/"><img src="<?php echo get_template_directory_uri();?>/assets/img/service/service_link2.png" alt="新潟 絆エージェント"></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section>
            <div class="service-content">
                <div class="service-content__inner">
                    <div class="service-content__img">
                        <img src="<?php echo get_template_directory_uri();?>/assets/img/service/service_img3.png" alt="ケアスタッフ事業部">
                    </div>
                    <div class="service-content__desc">
                        <div class="logo logo--3">
                            <img src="<?php echo get_template_directory_uri();?>/assets/img/service/service_content3.png" alt="ケアスタッフ事業部">
                        </div>
                        <h2>
                            医療機関や福祉施設等からの<br class="pctb">求人取り扱い件数は年間300件以上。<br>登録者数は10,000名を突破。
                        </h2>
                        <p>
                            地元新潟の地域医療、福祉の雇用インフラをサポートし、医療、福祉の従事者から強く必要とされる会社を目指しています。<br>また、スキルアップの勉強会・研修会を地元にいながら参加できるように、ケアスタッフセミナーを主催しています。
                        </p>
                        <div class="btn">
                            <a href="//carestaff.jp/index.html"><img src="<?php echo get_template_directory_uri();?>/assets/img/service/service_link3.png" alt="ケアスタッフ"></a>
                        </div>
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