<header class="l-layout__header">
    <div class="p-header">
        <div class="p-header__inner">

            <?php if ( is_home() ) : ?>
            <h1 class="p-header__logo">
                <a href="<?php echo home_url();?>">
                    <img src="<?php echo get_template_directory_uri();?>/assets/img/logo_home.png" alt="新潟のM＆A・事業承継・人材サービスをサポートする絆コーポレーション" class="pctb only_home">
                    <img src="<?php echo get_template_directory_uri();?>/assets/img/logo_home_sp.png" alt="新潟のM＆A・事業承継・人材サービスをサポートする絆コーポレーション" class="sp only_home">
                </a>
            </h1>
            <?php else: ?>
            <div class="p-header__logo">
                <a href="<?php echo home_url();?>">
                    <img src="<?php echo get_template_directory_uri();?>/assets/img/logo.png" alt="新潟のM＆A・事業承継・人材サービスをサポートする絆コーポレーション" class="pctb not_home">
                    <img src="<?php echo get_template_directory_uri();?>/assets/img/logo_sp.png" alt="新潟のM＆A・事業承継・人材サービスをサポートする絆コーポレーション" class="sp not_home">
                </a>
            </div>
            <?php endif; ?>

            <div class="p-header__menu">
                <ul>
                    <li><a href="<?php echo home_url();?>/service">事業紹介</a></li>
                    <li><a href="<?php echo home_url();?>/about">会社概要・アクセス</a></li>
                    <li><a href="<?php echo home_url();?>/staff">スタッフ紹介</a></li>
                    <li><a href="<?php echo home_url();?>/career">採用情報</a></li>
                </ul>
            </div>
            <div class="p-header__tel">
                <dl>
                    <dt>新潟</dt>
                    <dd><a href="tel:025-240-7033">025-240-7033</a></dd>
                </dl>
                <dl>
                    <dt>東京</dt>
                    <dd><a href="tel:03-5537-3177">03-5537-3177</a></dd>
                </dl>
            </div>
            <div class="p-header__btn">
                <div class="btn btn-11">
                    <a href="<?php echo home_url();?>/contact"><span>お問い合わせ</span></a>
                </div>
            </div>
            <div class="p-header__burger u-drawer_open">
                <div></div>
                <div></div>
                <div></div>
            </div>
        </div>
    </div>
</header>