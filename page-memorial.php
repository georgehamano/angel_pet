<?php

/**
 * Template Name: memorialページ
 * 
 * 法事ページ用のテンプレート
 *
 * @package angel_pet
 */

get_header();
?>

<main id="primary" class="page-main memorial">
    <section id="post-<?php the_ID(); ?>" <?php post_class('page page-container'); ?>>
        <header class="page-header side-header">
            <?php the_title('<h1 class="page-title vertical-title sub-title">', '</h1>'); ?>
        </header>
        <div class="page-content">
            <div class="page-thumbnail">
                <img src="<?php echo get_template_directory_uri(); ?>/images/memorialevents-topimg1.jpg" alt="施設紹介">
            </div>
            <div class="memorial-content-wrap">
                <h2>当霊園の法要について</h2>
                <div class="memorial-content-text">
                    <p>当霊園では釈迦寺僧侶により丁寧にご供養させていただきます。</p>
                </div>
    </section>
    <section class="page-container-wrap">
        <div class="side-header">
            <h2 class="vertical-title">法要の種類</h2>
        </div>
        <div class="page-content">
            <!-- 紹介コンテンツ -->
            <div class="memorial-content">
                <div class="fade-content-img">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/memorial-img-1-1.jpg" alt="墓地">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/memorial-img-1-2.jpg" alt="墓地">
                </div>
                <div class="memorial-content-text">
                    <h3>個別法要</h3>
                    <p>初七日・祥月命日・49日・納骨式・百か日・墓石開眼・お位牌開眼・一周忌・三回忌等、礼拝堂や墓前、納骨堂のお部屋前等ご家族に寄り添い、丁寧にご供養させていただきます。</p>
                    <div class="memorial-content-text-inner">
                        <h4>お申込み方法</h4>
                        <p>１週間前までにお電話にてお申し込みください</p>
                    </div>
                    <div class="memorial-content-text-inner">
                        <h4>料金</h4>
                        <p>御布施：1法要20,000円（直接僧侶へお渡しいただきます）<br>
                            施設使用料：11,000円（エンジェルペット霊園納骨堂または墓地をご契約の方につきましてはかかりません）</p>
                    </div>
                </div>
            </div>

            <!-- 紹介コンテンツ -->
            <div class="memorial-content">
                <div class="fade-content-img">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/memorial-img-2-1.jpg" alt="墓地">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/memorial-img-2-2.jpg" alt="墓地">
                </div>
                <div class="memorial-content-text">
                    <h3>合同法要</h3>
                    <p>春のお彼岸会（３月）・盂蘭盆会（８月）・秋のお彼岸会（９月）・修生会（１月１日）
                        亡くなられたご家族のお名前を読み上げて丁寧にご供養させていただきます。</p>
                    <div class="memorial-content-text-inner">
                        <h4>お申込み方法</h4>
                        <p>当霊園にご来園いただき指定のお申し込み用紙にご記入いただくか、FAX、お電話、メールでもお申し込みいただけます。</p>
                    </div>
                    <div class="memorial-content-text-inner">
                        <h4>料金</h4>
                        <p>無料でご参列いただけます。<br>
                            ただし、卒塔婆をお申し込みの場合は１基につき3,000円お納めいただきます
                        </p>
                    </div>
                </div>
            </div>
    </section>
    <!-- #post-<?php the_ID(); ?> -->
</main><!-- #main -->

<?php
get_footer();
?>