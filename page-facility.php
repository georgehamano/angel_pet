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
    <section id="post-<?php the_ID(); ?>" <?php post_class('page page-container'); ?>>
        <header class="page-header side-header">
            <?php the_title('<h1 class="page-title vertical-title sub-title">', '</h1>'); ?>
        </header>
        <div class="page-content">
            <div class="page-thumbnail">
                <img src="<?php echo get_template_directory_uri(); ?>/images/facility-top.jpeg" alt="施設紹介">
            </div>
    </section>
    <section class="page-container-wrap facility-wrapper" id="facility1">
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
                    <button class="open-popup popup-button" data-target="popup1">料金を見る</button>
                    <div id="popup1" class="popup-overlay">
                        <div class="popup-content">
                            <button class="close-popup close-button">×</button>
                            <div class=" facility-content-price">
                                <table>
                                    <thead>
                                        <tr>
                                            <th rowspan="2">区画</th>
                                            <th rowspan="2">面積<br>間口×奥行(m)</th>
                                            <th colspan="2">永代利用コース</th>
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
                                    ※年間管理料は何体ご納骨してもかわりません<br>
                                    ※上記の金額に墓石代が別途かかります
                                </div>
                                <div class="facility-content-price-text">
                                    <h4>ご契約の流れ</h4>
                                    <p>ご来園予定日時の前日までにお電話にてご連絡いただき、ご見学のうえご契約いただきます。</p>
                                    <h4>お申し込み方法</h4>
                                    <p>墓地・納骨堂・合祀墓のお申し込みは、ご来園のうえ申込用紙にご記入いただきます。<br>
                                        お支払いは現金・クレジット・銀行振込がご利用いただけます。
                                    </p>
                                </div>
                            </div>

                        </div>

                    </div>

                </div>
            </div>
    </section>
    <section class="page-container facility-wrapper" id="facility2">
        <div class="side-header">
            <h2 class="vertical-title">納骨堂</h2>
        </div>
        <div class="page-content">
            <div class="facility-content">
                <div class="facility-content-img">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/cemetery2.jpg" alt="墓地">
                </div>
                <div class="facility-content-text">
                    <h3>ご家族との温かい想い出と共に<br>個別のお部屋にていつでも一緒にいられます。</h3>
                    <p>お部屋の大きさにより、輝き・安らぎ・寛ぎの３つのタイプをご用意いたしております。<br>
                        愛するご家族やゆっくりおやすみいただけるよう、少し暗くしております。<br>
                        納骨堂内には椅子もご用意しておりますので、お部屋からお出しいただき抱っこしたりお話したり、緑あふれる霊園内をお散歩する等ゆったりとお過ごしいただけます。
                    </p>

                    <button class="open-popup popup-button" data-target="popup2">料金を見る</button>
                    <div id="popup2" class="popup-overlay">
                        <div class="popup-content">
                            <button class="close-popup close-button">×</button>
                            <div class=" facility-content-price">
                                <table class="price-table">
                                    <thead>
                                        <tr>
                                            <th rowspan="2">区画</th>
                                            <th rowspan="2">サイズ<br>幅×奥行×高さ（m）</th>
                                            <th colspan="2">年間利用コース</th>
                                            <th colspan="2">永代利用コース</th>
                                        </tr>
                                        <tr>
                                            <th>年間使用料</th>
                                            <th>年間管理料<br><small>（頭数制限なし）</small></th>
                                            <th>永代使用料</th>
                                            <th>年間管理料<br><small>（頭数制限なし）</small></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>寛ぎ</td>
                                            <td>300×450×300</td>
                                            <td>8,800円</td>
                                            <td rowspan="3">4,400円/1体<br><br>2体〜<br>2,200円/1体</td>
                                            <td>132,000円</td>
                                            <td rowspan="3">4,400円/1体<br><br>2体〜<br>2,200円/1体</td>
                                        </tr>
                                        <tr>
                                            <td>安らぎ</td>
                                            <td>360×450×380</td>
                                            <td>13,200円</td>
                                            <td>264,000円</td>

                                        </tr>
                                        <tr>
                                            <td>輝き</td>
                                            <td>450×450×380</td>
                                            <td>19,800円</td>
                                            <td>297,000円</td>
                                        </tr>
                                    </tbody>
                                </table>


                                <div class="footnote">
                                    ※年間管理料は１体の場合は4,400円、２体目からは2,200円が加算されます<br>
                                    ※年間利用コースをご選択された場合、ご契約時に年間使用料２年分＋年間管理料２年分をお納めいただきます<br>
                                    ※永代利用コースをご選択された場合、ご契約時に永代使用料＋年間管理料２年分をお納めいただきます
                                </div>
                                <div class="facility-content-price-text">
                                    <h4>ご契約の流れ</h4>
                                    <p>ご来園予定日時の前日までにお電話にてご連絡いただき、ご見学のうえご契約いただきます。</p>
                                    <h4>お申し込み方法</h4>
                                    <p>墓地・納骨堂・合祀墓のお申し込みは、ご来園のうえ申込用紙にご記入いただきます。<br>
                                        お支払いは現金・クレジット・銀行振込がご利用いただけます。
                                    </p>
                                </div>
                            </div>

                        </div>

                    </div>

                </div>
            </div>

    </section>
    <section class="page-container facility-wrapper">
        <div class="side-header">
            <h2 class="vertical-title">合祀墓</h2>
        </div>
        <div class="page-content">
            <div class="facility-content">
                <div class="facility-content-img">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/cemetery3.jpg" alt="墓地">
                </div>
                <div class="facility-content-text">
                    <h3>たくさんのお友達と共に、<br>優しい木漏れ日射す「やすらぎの杜」で、<br>ゆっくり平安に土へ森へと還ります。</h3>
                    <p>ご遺骨はこちらで丁寧にご粉骨し、合祀墓内のカロートへ納め、土へ、森へと還ります。</p>

                    <button class="open-popup popup-button" data-target="popup3">料金を見る</button>
                    <div id="popup3" class="popup-overlay">
                        <div class="popup-content">
                            <button class="close-popup close-button">×</button>
                            <div class=" facility-content-price">
                                <table class="price-table">
                                    <thead>
                                        <tr>
                                            <th>永代利用料</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>一律 55,000円</td>
                                        </tr>

                                    </tbody>
                                </table>


                                <div class="footnote">
                                    ※ご粉骨につきましては料金に含まれております<br>
                                    ※ご納骨後のご返骨はできません
                                </div>
                                <div class="facility-content-price-text">
                                    <h4>ご契約の流れ</h4>
                                    <p>ご来園予定日時の前日までにお電話にてご連絡いただき、ご見学のうえご契約いただきます。</p>
                                    <h4>お申し込み方法</h4>
                                    <p>墓地・納骨堂・合祀墓のお申し込みは、ご来園のうえ申込用紙にご記入いただきます。<br>
                                        お支払いは現金・クレジット・銀行振込がご利用いただけます。
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </section>
    <!-- #post-<?php the_ID(); ?> -->
</main><!-- #main -->

<?php
get_footer();
?>