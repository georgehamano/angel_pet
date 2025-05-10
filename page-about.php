<?php
/**
 * Template Name: aboutページ
 * 
 * aboutページ用のテンプレート
 * ヘッダーとフッターを非表示にし、コンテンツのみを表示
 *
 * @package angel_pet
 */

get_header();
?>

<main id="primary" class="page-main about">
    <section id="post-<?php the_ID(); ?>" <?php post_class('page page-container'); ?>">
        <header class="page-header side-header">
            <?php the_title( '<h1 class="page-title vertical-title sub-title">', '</h1>' ); ?>
        </header><!-- .page-header -->
        <div class="page-content">
            <div class="page-thumbnail">
                <img src="<?php echo get_template_directory_uri(); ?>/images/about-mv.jpg" alt="about-mv">
            </div>
            <div class="about-content-wrap">
                <h2>緑豊かな動物たちの<br>やすらぎの杜</h2>
                <div class="about-content-text">
                    <p>エンジェルペット霊園は、お寺が管理運営をしているペット専用の霊園です。<br>
                        愛する動物たちの安住の地として、ご供養をしっかりと行っております。<br>
                        隣接する釈迦寺霊園へと続く散歩道があり、併設するドッグランの様子を眺めながら、木々の間をぬけて、ステンドグラスの美しい本堂へお参りすることができます。</p>
                </div>
            </div><!-- .entry-content -->
    </section>
    <section class="page-container about-overview">
        <div class="side-header">
            <h2 class="vertical-title sub-title">施設概要</h2>
        </div>
        <div class="page-content">
            <div class="about-overview-content">
                <dl>
                    <div class="info-block">
                        <dt>施設名</dt>
                        <dd style="font-weight: bold;">エンジェルペット霊園</dd>
                    </div>
                    <div class="info-block">
                        <dt>住所</dt>
                        <dd>〒274-0817 千葉県船橋市高根町２２４２</dd>
                    </div>
                    <div class="info-block">
                        <dt>フリーダイヤル</dt>
                        <dd><a href="tel:0120011200">0120-011-200</a></dd>
                    </div>
                    <div class="info-block">
                        <dt>電話</dt>
                        <dd><a href="tel:0474014000">047-401-4000</a></dd>
                    </div>
                    <div class="info-block">
                        <dt>FAX</dt>
                        <dd>047-401-4001</dd>
                    </div>
                    <div class="info-block">
                        <dt>営業時間</dt>
                        <dd>9:00～17:00</dd>
                    </div>
                    <div class="info-block">
                        <dt>主な施設</dt>
                        <dd>納骨堂 / 墓地 / 合祀墓 / 礼拝堂 / おくり庫 / 多目的室</dd>
                    </div>
                </dl>
            </div>
            <div class="about-overview-content">
                <dl>
                    <div class="info-block">
                        <dt>施設名</dt>
                        <dd style="font-weight: bold;">エンジェルペット斎場</dd>
                    </div>
                    <div class="info-block">
                        <dt>住所</dt>
                        <dd>〒274-0817 千葉県船橋市高根町２２３７</dd>
                    </div>
                    <div class="info-block">
                        <dt>フリーダイヤル</dt>
                        <dd><a href="tel:0120011200">0120-011-200</a></dd>
                    </div>
                    <div class="info-block">
                        <dt>営業時間</dt>
                        <dd>9:00～17:00</dd>
                    </div>

                </dl>
            </div>
        </div>
    </section>

    </section><!-- #post-<?php the_ID(); ?> -->
</main><!-- #main -->

<?php
get_footer();
?>