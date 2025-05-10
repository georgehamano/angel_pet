<?php
/**
 * Template Name: facilityページ
 * 
 * 施設紹介ページ用のテンプレート
 * ヘッダーとフッターを非表示にし、コンテンツのみを表示
 *
 * @package angel_pet
 */

get_header();
?>

<main id="primary" class="page-main facility">
    <section id="post-<?php the_ID(); ?>" <?php post_class('page page-container'); ?>">
        <header class="page-header side-header">
            <?php the_title( '<h1 class="page-title vertical-title sub-title">', '</h1>' ); ?>
        </header><!-- .page-header -->
        <div class="page-content">
            <div class="page-thumbnail">
                <img src="<?php echo get_template_directory_uri(); ?>/images/facility-top.jpeg" alt="施設紹介">
            </div>
    </section>
    <section class="page-container facility-wrapper">
        <div class="side-header">
            <h2 class="vertical-title">墓地</h2>
        </div>
        <div class="page-content">
            <div class="facility-content">
                <div class="facility-content-img">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/cemetery.jpg" alt="墓地">
                </div>
                <div class="facility-content-text">
                    <h3>想い出をかたちに、墓石は自由設計<br>草木に囲まれ明るく大きな空のもと眠っています。</h3>
                    <p>当霊園では丸型やハート型、お花型などさまざまな形の墓石が並んでおります。<br>
                        カロート（ご遺骨をお納めする所）が地上にあり、愛するご家族をよりお近くに感じていただくとこができ、お参りもしやすくなっております。</p>
                    <p>墓石の設計工事は、当釈迦寺直営の石材部「ハート綜合石材」が責任を持ってご相談から施工まで行います</p>
                    <button id="openPopup" class="popup-button">料金を見る</button>
                    <div id="popup" class="popup-overlay">
                        <div class="popup-content">
                            <button id="closePopup" class="close-button">×</button>
                            <div class=" facility-content-price">
                                <p>墓石は当釈迦寺の直営石材部「ハート総合石材」が責任を持って設計・施工いたしますので、ご安心ください。</p>

                                <table>
                                    <thead>
                                        <tr>
                                            <th rowspan="2">区画</th>
                                            <th rowspan="2">面積<br>間口×奥行(m)</th>
                                            <th colspan="2" style="border-bottom: 2px dotted #d06a84;">永代利用コース</th>
                                        </tr>
                                        <tr>
                                            <th>永代使用料</th>
                                            <th>年間管理料<br><small>（数制限なし）</small></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>花</td>
                                            <td>0.4m² (0.5×0.8)</td>
                                            <td>220,000円</td>
                                            <td rowspan="3">一律<br>11,000円</td>
                                        </tr>
                                        <tr>
                                            <td>そよ風</td>
                                            <td>0.75m² (0.75×1.0)</td>
                                            <td>308,000円</td>
                                        </tr>
                                        <tr>
                                            <td>虹</td>
                                            <td>1.2m² (1.0×1.2)</td>
                                            <td>418,000円</td>
                                        </tr>
                                    </tbody>
                                </table>

                                <div class="footnote">
                                    ＊上記料金の他に、墓石代が必要となります。<br>
                                    ＊区画内は自由設計ですので、飼い主様の「想い」を形にすることが可能です。
                                </div>
                            </div>

                        </div>

                    </div>

                </div>
            </div>
    </section>

    </section><!-- #post-<?php the_ID(); ?> -->
</main><!-- #main -->

<?php
get_footer();
?>