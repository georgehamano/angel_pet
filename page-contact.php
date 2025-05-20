<?php

/**
 * Template Name: contactページ
 * 
 * お問い合わせページ用のテンプレート
 *
 * @package angel_pet
 */

get_header();
?>

<main id="primary" class="page-main contact">
    <section id="post-<?php the_ID(); ?>" <?php post_class('page page-container'); ?>>
        <header class="page-header side-header">
            <?php the_title('<h1 class="page-title vertical-title sub-title">', '</h1>'); ?>
        </header>
        <div class="page-content">
            <div class="page-thumbnail">
                <img src="<?php echo get_template_directory_uri(); ?>/images/contact-top-img.jpg" alt="施設紹介">
            </div>
            <div class="contact-content-wrap">
                <h3>予約申し込み注意事項</h3>
                <ul>
                    <li>1． ペット火葬をご希望の方は、下記のご利用規約をお読みいただき「ペット火葬予約状況」よりお申し込みください。</li>
                    <li>2． 火葬時間が大きさにより異なるため「ご予約確定」につきましては、お申し込みの当日もしくは翌日には折り返しお電話にてご連絡させていただきます。</li>
                    <li>3． 翌日の午前中もしくは当日火葬ご希望の場合は直接お問い合わせください</li>
                </ul>
    </section>

    <section class="page-container-wrap">

        <?php echo do_shortcode('[contact-form-7 id="ecc2b97" title="火葬予約"]'); ?>
    </section>
    <!-- #post-<?php the_ID(); ?> -->
</main><!-- #main -->

<?php
get_footer();
?>