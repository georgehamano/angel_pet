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
            <?php the_title('<h1 class="page-title vertical-title sub-title">', '</h1>'); ?>
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
    <!-- 施設紹介 -->
    <section class="page-container-wrap">
        <div class="side-header">
            <h2 class="vertical-title">施設紹介</h2>
        </div>
        <div class="page-content about-facility">
            <!-- 紹介コンテンツ -->
            <div class="facility-content">
                <div class="fade-content-img">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/facility-img-1-1.jpg" alt="墓地">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/facility-img-1-2.jpg" alt="墓地">
                </div>
                <div class="facility-content-text">
                    <h3>墓地</h3>
                    <p>区画の広さによって、虹・そよ風・花の３つのタイプをご用意しております。
                        区画内は自由設計のため、皆様の想いと安心をかたちにできます。
                    </p>


                </div>
            </div>
            <!-- 紹介コンテンツ -->
            <div class="facility-content">
                <div class="fade-content-img">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/facility-img-2-1.jpg" alt="墓地">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/facility-img-2-2.jpg" alt="墓地">
                </div>
                <div class="facility-content-text">
                    <h3>納骨堂</h3>
                    <p>想い出をフレームに残すように、ご家族ごとに納骨棚をご用意しており、落ち着いた雰囲気の中、ゆっくりとおやすみいただけます。
                    </p>
                </div>
            </div>
            <!-- 紹介コンテンツ -->
            <div class="facility-content">
                <div class="fade-content-img">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/facility-img-3-1.jpg" alt="墓地">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/facility-img-3-2.jpg" alt="墓地">
                </div>
                <div class="facility-content-text">
                    <h3>合祀墓</h3>
                    <p>木漏れ日の差し込む森へと続く合祀墓。<br>
                        ご遺骨は粉骨したのち、合祀墓内のカロートへ納め、土へ森へと還ります。
                    </p>
                </div>
            </div>
            <!-- 紹介コンテンツ -->
            <div class="facility-content">
                <div class="fade-content-img">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/facility-img-4-1.jpg" alt="墓地">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/facility-img-4-2.jpg" alt="墓地">
                </div>
                <div class="facility-content-text">
                    <h3>礼拝堂</h3>
                    <p>白い大理石の祭壇。神聖な雰囲気の中、日々のお参りやご葬儀ご法要等にご利用いただけます。
                        扉を開けると納骨堂へと続き、祭壇前でお線香やお花、ご供物等をお供えし、お参りいただくこともできます。
                    </p>
                </div>
            </div>
            <!-- 紹介コンテンツ -->
            <div class="facility-content">
                <div class="fade-content-img">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/facility-img-5-1.jpg" alt="墓地">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/facility-img-5-2.jpg" alt="墓地">
                </div>
                <div class="facility-content-text">
                    <h3>多目的室</h3>
                    <p>ストーンヘンジの描かれた多目的室、お待ち合わせやお打ち合わせ等にご利用いただけます。</p>
                </div>
            </div>
            <!-- 紹介コンテンツ -->
            <div class="facility-content">
                <div class="fade-content-img">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/facility-img-6-1.jpg" alt="墓地">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/facility-img-6-2.jpg" alt="墓地">
                </div>
                <div class="facility-content-text">
                    <h3>ロビー</h3>
                    <p>墓地からの光に照らされ、明るくも落ち着きのあるロビー。<br>
                        ゆったりとお過ごしください。ご家族のための思い出グッズ等も取り揃えております。
                    </p>
                </div>
            </div>
            <!-- 紹介コンテンツ -->
            <div class="facility-content">

                <div class="facility-content-text">
                    <h3>散歩道</h3>
                    <p>木々の間を抜け、釈迦寺霊園と続く散歩道。
                        併設するドッグランの様子と森林浴をお楽しみいただけます。
                    </p>
                </div>
            </div>


    </section>
    <!-- 施設概要 -->
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