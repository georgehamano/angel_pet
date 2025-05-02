<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package angel_pet
 */

?>

<footer id="colophon" class="site-footer">
    <section class="access-section">
        <div class="access-container">
            <div class="access-header">
                <h2 class="vertical-title sub-title">アクセス</h2>
            </div>
            <div class="access-content">
                <div class="access-content-text">
                    <h3>エンジェルペット霊園</h3>
                    <p>〒274-0817<br>千葉県船橋市高根町2242<br>
                        <span>※ 釈迦寺霊園となり、金杉十字街そばです</span>
                    <ul>
                        <li>フリーダイヤル：<a href="tel:0120-011-200">0120-011-200</a></li>
                        <li>TEL：<a href="tel:047-401-4000">047-401-4000</a> / FAX：047-401-4001</li>
                        <li>営業時間：9:00-17:00 (年中無休)</li>
                    </ul>
                    </p>
                </div>
                <div class="access-content-route">
                    <h3 class="route-title-car">お車でお越しの方</h3>
                    <ul>
                        <li>花輪ICより車で7分（約4.5km）</li>
                        <li>JR東船橋駅より車で6分（約3.3km）</li>
                        <li>JR船橋駅より車で7分</li>
                        <li>東葉高速鉄道 飯山満駅より車で5分</li>
                        <li>施設内に駐車場をご用意しております</li>
                    </ul>
                </div>
                <div class="access-content-route">
                    <h3 class="route-title-bus">バスでお越しの方</h3>
                    <ul>
                        <li>東船橋駅北口（1番乗場）より<br>船橋グリーンハイツ行（東50路線）</li>
                        <li>船橋駅北口（1番乗場）より<br>船橋グリーンハイツ行（東51-53路線）</li>
                        <li>共に秋葉神社前バス停より徒歩８分</li>
                    </ul>
                </div>
                <div class="access-content-message">
                    <p>JR東船橋駅南口より無料送迎バスを運行しております</p>
                    <p>土日祝日10：00 - 14：00発 平日は予約にて運行。詳しくはお問い合わせください。</p>
                </div>
                <div class="access-content-map">
                    <iframe
                        src="https://www.google.com/maps/d/embed?mid=1BF4gvupqFcsKEOQsZ32HyrhMLDH9RL8&ehbc=2E312F&noprof=1"></iframe>
                </div>
            </div>
        </div>
    </section>
    <section class="footer-section">
        <div class="footer-container">
            <div class="footer-content footer-content-1">
                <h2><img src="<?php echo get_template_directory_uri(); ?>/images/angel-logo-w.svg"" alt=" エンジェルペット霊園">
                </h2>

                <ul>
                    <li>〒274-0817<br>千葉県船橋市高根町2242</li>
                    <li>フリーダイヤル：<a href="tel:0120-011-200">0120-011-200</a></li>
                    <li>TEL：<a href="tel:047-401-4000">047-401-4000</a> / FAX：047-401-4001</li>
                    <li>営業時間：9:00-17:00 (年中無休)</li>
                </ul>
                <div class="footer-content footer-content-sns">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/icon-instagram.svg" alt=" エンジェルペット霊園">
                    <span>Instagram</span>
                </div>
            </div>
            <div class="footer-content footer-content-menu">
                <h2>Menu</h2>
                <?php
                    wp_nav_menu(
                        array(
                            'theme_location' => 'menu-1',
                            'menu_id'        => 'primary-menu',
                            'container'      => false,
                            'menu_class'     => 'menu',
                        )
                    );
                    ?>
            </div>

            <div class="footer-content footer-content-contact">
                <div class="footer-content-contact-wrapper">
                    <div class="main-button">
                        <a href="<?php echo home_url('/#'); ?>" class="button">お問い合わせ・ご予約<br>
                            <span>Contact・Reserve</span></a>
                    </div>
                    <div class="footer-content-contact-tel">
                        <p>まずはご相談ください</p>
                        <a href="tel:0120-011-200">0120-011-200</a>
                        <span>（電話受付 8:30-17:00）</span>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="site-info">
        <a href="<?php echo esc_url( __( 'https://angelpet.jp/', 'angel_pet' ) ); ?>">
            <?php
				printf( esc_html__( 'powered by %s', 'angel_pet' ), 'エンジェルペット霊園' );
				?>
        </a>

    </div><!-- .site-info -->
</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>

</html>