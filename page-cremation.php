<?php

/**
 * Template Name: cremationページ
 * 
 * ペット火葬ページ用のテンプレート
 * ヘッダーとフッターを非表示にし、コンテンツのみを表示
 *
 * @package angel_pet
 */

get_header();
?>

<main id="primary" class="page-main facility cremation">
    <section id="post-<?php the_ID(); ?>" <?php post_class('page page-container'); ?>>
        <header class="page-header side-header">
            <?php the_title('<h1 class="page-title vertical-title sub-title">', '</h1>'); ?>
        </header>
        <div class="page-content">
            <div class="page-thumbnail">
                <img src="<?php echo get_template_directory_uri(); ?>/images/cemetery-top.jpg" alt="施設紹介">
            </div>
            <div class="cremation-content-wrap">
                <div class="cremation-content-text">
                    <h2>大切なご家族がお亡くなりになったら</h2>
                    <p>お迎えや一時預かりの有無、火葬までのアドバイス、ご希望の葬送などスタッフが誠意を持って、対応させていただきます。</p>
                </div>
            </div>
    </section>
    <section class="cremation-illust">
        <div class="cremation-illust-wrap">
            <div class="cremation-illust-discription">
                <h3>ご来場（お迎え）前に飼い主様でやっていただきたい安置の仕方</h3>
                <p>死後硬直は死後数時間以内に頭部、手足先からはじまります。<br>その前に下記手順でご自宅にご安置ください。</p>
            </div>
            <div class="cremation-illust-content">

                <div class="cremation-illust-img">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/illustration1.png" alt="ペットのご遺体の安置">
                </div>
                <div class="cremation-illust-text">
                    <p>日が当たらない、冷房等で涼しい状態が保持できるお部屋にご安置ください<br>
                        いつも使用していたベッドやクッションなどにバスタオルやペットシーツ等を敷いて寝かせます。<br>
                        お体が硬直する前に手足を体に寄せ、丸く姿勢を整えてください。
                    </p>
                </div>
            </div>
            <div class="cremation-illust-content">
                <div class="cremation-illust-img">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/illustration2.png" alt="ペットのご遺体の安置">
                </div>
                <div class="cremation-illust-text">
                    <p>舌を口の中へ優しくしまい、目を閉じます。<br>毛並みを整えたりタオル等でお体を軽く拭いて、きれいにしてあげましょう。
                    </p>
                </div>
            </div>
            <div class="cremation-illust-content">
                <div class="cremation-illust-img">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/illustration3.png" alt="ペットのご遺体の安置">
                </div>
                <div class="cremation-illust-text">
                    <p>氷やドライアイスを袋に詰めてタオルで包んだものや保冷剤を「腹部」「背中」「首元」等に優しくあてて冷却処置をしましょう。（当斎場にて保冷剤の貸し出しを行っております）
                    </p>
                </div>
            </div>
            <div class="cremation-illust-content">
                <div class="cremation-illust-img">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/illustration4.png" alt="ペットのご遺体の安置">
                </div>
                <div class="cremation-illust-text">
                    <p>最後にタオル等で姿勢が保てるように包み込み、生前好きだったご飯やおやつ、おもちゃ等と一緒にご安置ください。<br>
                        ※ご不明な点がある場合やご不安な場合等はお気軽にご連絡ください

                    </p>
                </div>
            </div>
        </div>
    </section>
    <section class="page-container-wrap">
        <div class="side-header">
            <h2 class="vertical-title">施設のご紹介</h2>
        </div>
        <div class="page-content">
            <img class="angelpet_cemetery"
                src="<?php echo get_template_directory_uri(); ?>/images/angelpet_cremetion.jpg" alt="エンジェルペット斎場">
            <!-- 紹介コンテンツ -->
            <div class="cremation-content">
                <div class="fade-content-img">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/cremation-img-1-1.jpg" alt="墓地">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/cremation-img-1-2.jpg" alt="墓地">
                </div>
                <div class="cremation-content-text">
                    <h3>お控室</h3>
                    <p>こちらにてお受付をさせていただきます。<br>
                        また、ご来場予定時間より早く到着され、お別れ室の準備が整うまでお待ちいただくお部屋となっております。
                    </p>
                </div>
            </div>
            <!-- 紹介コンテンツ -->
            <div class="cremation-content">
                <div class="fade-content-img">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/cremation-img-2-1.jpg" alt="墓地">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/cremation-img-2-2.jpg" alt="墓地">
                </div>
                <div class="cremation-content-text">
                    <h3>お別れ室</h3>
                    <p>こちらにてお別れの儀を執り行い、ご家族との最期のお時間を大切にお過ごしいただくためのお部屋となっております。
                    </p>
                </div>
            </div>
            <!-- 紹介コンテンツ -->
            <div class="cremation-content">
                <div class="fade-content-img">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/cremation-img-3-1.jpg" alt="墓地">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/cremation-img-3-2.jpg" alt="墓地">
                </div>
                <div class="cremation-content-text">
                    <h3>ご収骨室</h3>
                    <p>火葬後にご遺骨をお骨壺へお納めいただく、ご収骨の儀を執り行うお部屋となっております。<br>
                        分骨をご希望の際もこちらのお部屋にて行います。
                    </p>
                </div>
            </div>
            <!-- 紹介コンテンツ -->
            <div class="cremation-content">
                <div class="fade-content-img">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/cremation-img-4-1.jpg" alt="墓地">

                </div>
                <div class="cremation-content-text">
                    <h3>霊安室</h3>
                    <p>お亡くなりになられてから火葬までの間、ご自宅でのご安置が難しい場合やご不安がある場合等、こちらの霊安室に完備してあります「おくり庫」にてご安置いただけます。<br>
                        籠のお棺へご納棺し、大好きなおもちゃやおやつ等と一緒にご安置いただけます。9:00～17:00までいつでもご対面可能です。<br>
                        ※霊安室につきましては施錠されておりますので、お越しの際は事前にご連絡いただくか当斎場スタッフまでお声をおかけください
                    </p>
                </div>
            </div>
    </section>
    <section class="page-container-wrap" id="plan">
        <div class="side-header">
            <h2 class="vertical-title">火葬プラン</h2>
        </div>
        <div class="page-content plan-content-wrap">
            <!--火葬プラン-->
            <div class="plan-content">
                <h3><span>Plan1</span><br>一任火葬プラン＋合祀墓</h3>
                <div class="plan-block-wrap">
                    <ul class="plan-block">
                        <li class="plan-block-title">エンジェルペット斎場にてお出迎え</li>
                        <li class="plan-block-title">お別れ室にてお別れの儀<br><span>清拭、末期のお水、香入れ、断毛</span></li>
                        <li class="plan-block-title">個別火葬</li>
                        <li class="plan-block-title">ご収骨の儀<br><span>・ご家族によるご収骨 or<br>・スタッフによるご収骨</span></li>
                        <li class="plan-block-title">合祀墓入堂</li>
                        <li class="plan-block-title">ご帰宅</li>
                    </ul>
                    <div class=" plan-price">
                        <table>
                            <thead>
                                <tr>
                                    <th>サイズ</th>
                                    <th>サイズの目安</th>
                                    <th>料金<br>（合祀墓永代含む）</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>小型</td>
                                    <td>約5kg以内</td>
                                    <td>¥71,500</td>

                                </tr>
                                <tr>
                                    <td>中型</td>
                                    <td>約20kg以内</td>
                                    <td>¥82,500</td>
                                </tr>
                                <tr>
                                    <td>大型</td>
                                    <td>約20kg以上</td>
                                    <td>¥93,500</td>
                                </tr>
                            </tbody>
                        </table>

                        <div class="footnote">
                            【プランに含まれているもの】骨壷、仮位牌<br>
                            ※体高等によっても異なりますのであらかじめご了承ください<br>
                            ※超大型に関してはご相談ください
                        </div>
                    </div>
                </div>
            </div>

            <!--火葬プラン-->
            <div class="plan-content">
                <h3><span>Plan2</span><br>ご家族によるお別れプラン</h3>
                <div class="plan-block-wrap">
                    <ul class="plan-block">
                        <li class="plan-block-title">エンジェルペット斎場にてお出迎え</li>
                        <li class="plan-block-title">斎場にて籠棺へ納棺<br><span>清拭、末期のお水、香入れ、断毛</span></li>
                        <li class="plan-block-title">お別れの儀（お花入れ）<br><span>清拭、末期のお水、香入れ、断毛、お花入れの儀</span></li>
                        <li class="plan-block-title">個別火葬</li>
                        <li class="plan-block-title">ご収骨の儀<br><span>・ご家族によるご収骨 or<br>・スタッフによるご収骨</span></li>
                        <li class="plan-block-title">ご帰宅</li>
                    </ul>
                    <div class=" plan-price">
                        <table>
                            <thead>
                                <tr>
                                    <th>サイズ</th>
                                    <th>サイズの目安</th>
                                    <th>料金</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>小型</td>
                                    <td>約5kg以内</td>
                                    <td>¥55,000</td>

                                </tr>
                                <tr>
                                    <td>中型</td>
                                    <td>約20kg以内</td>
                                    <td>¥66,000</td>
                                </tr>
                                <tr>
                                    <td>大型</td>
                                    <td>約20kg以上</td>
                                    <td>¥77,000</td>
                                </tr>
                            </tbody>
                        </table>

                        <div class="footnote">
                            【プランに含まれているもの】籠棺、お布団、籠花、骨壷、骨袋、仮位牌<br>
                            ※体高等によっても異なりますのであらかじめご了承ください<br>
                            ※超大型に関してはご相談ください
                        </div>
                    </div>
                </div>
            </div>
            <!--火葬プラン-->
            <div class="plan-content">
                <h3><span>Plan3</span>ご葬儀プラン<br>（僧侶による読経有）</h3>
                <div class="plan-block-wrap">
                    <ul class="plan-block">
                        <li class="plan-block-title">ペット霊園にてお出迎え</li>
                        <li class="plan-block-title">待合室にて受付</li>
                        <li class="plan-block-title">礼拝堂にてご葬儀</li>
                        <li class="plan-block-title">お見送り</li>
                        <li class="plan-block-title">エンジェルペット斎場にてお出迎え</li>
                        <li class="plan-block-title">お別れの儀（お花入れ）<br><span>末期のお水、香入れ、断毛、お花入れの儀</span></li>
                        <li class="plan-block-title">個別火葬</li>
                        <li class="plan-block-title">ご収骨の儀<br><span>・ご家族によるご収骨 or<br>・スタッフによるご収骨</span></li>
                        <li class="plan-block-title">ご帰宅</li>
                    </ul>
                    <div class=" plan-price">
                        <table>
                            <thead>
                                <tr>
                                    <th>サイズ</th>
                                    <th>サイズの目安</th>
                                    <th>料金</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>小型</td>
                                    <td>約5kg以内</td>
                                    <td>¥90,500</td>

                                </tr>
                                <tr>
                                    <td>中型</td>
                                    <td>約20kg以内</td>
                                    <td>¥101,500</td>
                                </tr>
                                <tr>
                                    <td>大型</td>
                                    <td>約20kg以上</td>
                                    <td>¥112,500</td>
                                </tr>
                            </tbody>
                        </table>

                        <div class="footnote">
                            【プランに含まれているもの】籠棺、お布団、ご供花、籠花、骨壷、骨袋、仮位牌<br>
                            ※霊園ご利用者は10,000円割引となります
                        </div>
                    </div>
                </div>
            </div>
            <!--火葬プラン-->
            <div class="plan-content">
                <h3><span>Plan4</span>お骨葬プラン<br>（僧侶による読経有）</h3>
                <div class="plan-block-wrap">
                    <ul class="plan-block">
                        <li class="plan-block-title">エンジェルペット斎場にてお出迎え</li>
                        <li class="plan-block-title">個別火葬</li>
                        <li class="plan-block-title">ご収骨の儀<br><span>・ご家族によるご収骨 or<br>・スタッフによるご収骨</span></li>
                        <li class="plan-block-title">霊園にてお骨葬</li>
                        <li class="plan-block-title">お見送り</li>
                        <li class="plan-block-title">ご帰宅</li>
                    </ul>
                    <div class=" plan-price">
                        <table>
                            <thead>
                                <tr>
                                    <th>サイズ</th>
                                    <th>サイズの目安</th>
                                    <th>料金（当日火葬）</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>小型</td>
                                    <td>約5kg以内</td>
                                    <td>¥79,500</td>

                                </tr>
                                <tr>
                                    <td>中型</td>
                                    <td>約20kg以内</td>
                                    <td>¥90,500</td>
                                </tr>
                                <tr>
                                    <td>大型</td>
                                    <td>約20kg以上</td>
                                    <td>¥101,500</td>
                                </tr>
                            </tbody>
                        </table>
                        <div class="footnote">
                            【プランに含まれているもの】ご供花、骨壷、骨袋、仮位牌<br>
                        </div>
                        <h4 style="margin-top: 20px;">お骨葬（火葬済み）</h4>
                        <table>
                            <thead>
                                <tr>
                                    <th>料金</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>一律 52,000円<br>ご供花、お骨葬のみ</td>
                                </tr>
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
            <!--火葬プラン-->
            <div class="plan-content">
                <h3><span>Plan5</span>合同火葬プラン + 合祀墓<br>（ご返骨はできません）</h3>
                <div class="plan-block-wrap">
                    <ul class="plan-block">
                        <li class="plan-block-title">エンジェルペット斎場にてお出迎え</li>
                        <li class="plan-block-title">合同火葬</li>
                        <li class="plan-block-title">スタッフによるご収骨</li>
                        <li class="plan-block-title">後日合祀墓入堂</li>
                    </ul>
                    <div class=" plan-price">

                        <table>
                            <thead>
                                <tr>
                                    <th colspan="2">料金（合祀墓永代使用料含む）</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>約15kg以内</td>
                                    <td>一律 52,000円</td>
                                </tr>
                            </tbody>
                        </table>
                        <div class="footnote">
                            【プランに含まれているもの】一時預かり、仮位牌<br>
                        </div>
                    </div>
                </div>
            </div>
            <!--火葬プラン-->
            <div class="plan-content">
                <h3>その他の料金</h3>
                <div class="plan-block-wrap">

                    <div class=" plan-price">

                        <table>
                            <thead>
                                <tr>
                                    <th>一時預かり</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>一律 一泊5,500円</td>
                                </tr>
                            </tbody>
                        </table>
                        <div class="footnote">
                            <p>※一時預かりも承っております<br>
                                お電話の上、お越しください。</p>
                        </div>
                        <table>
                            <thead>
                                <tr>
                                    <th colspan="2">お迎え・お引き取り</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>3km以内</td>
                                    <td>2,200円</td>
                                </tr>
                                <tr>
                                    <td>5km以内</td>
                                    <td>3,300円</td>
                                </tr>
                                <tr>
                                    <td>5km以上</td>
                                    <td>5km毎に3,300円</td>
                                </tr>
                            </tbody>
                        </table>
                        <br>
                        <table>
                            <thead>
                                <tr>
                                    <th colspan="3">お返骨<br><span></span></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>3km以内</td>
                                    <td>2,200円</td>
                                </tr>
                                <tr>
                                    <td>5km以内</td>
                                    <td>3,300円</td>
                                </tr>
                                <tr>
                                    <td>5km以上</td>
                                    <td>5km毎に3,300円</td>
                                </tr>
                            </tbody>
                        </table>

                        <div class="footnote">
                            <p>※火葬の都合上、ご返骨が翌日になることがございます</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="page-container-wrap">
        <div class="side-header">
            <h2 class="vertical-title">当園の火葬について</h2>
        </div>
        <div class="page-content">
            <img class="angelpet_cemetery" src="<?php echo get_template_directory_uri(); ?>/images/kaso-top-img.JPG"
                alt="火葬について">
            <div class="cremation-content-grid">
                <div class="cremation-content-text-inner">
                    <h3>当日の火葬の流れ</h3>
                    <p>当園の火葬は一任火葬方式（火葬室へのご入室はお断りさせていただいております）で執り行っております。</p>
                    <ol>
                        <li>お亡くなりになったご家族のご来場</li>
                        <li>受付</li>
                        <li>お別れ室にてお別れ</li>
                        <li>火葬</li>
                        <li>ご家族によるご収骨（スタッフにお任せいただくことも可能です）<br>
                            ※受付時に伺います</li>
                        <li>ご帰宅もしくはエンジェルペット霊園へご納骨</li>
                    </ol>
                </div>
                <div class="cremation-content-text-inner-wrap">
                    <div class="cremation-content-text-inner">
                        <h3>火葬可能なペット</h3>
                        <p>小鳥、ハムスター、リス、モルモット、ウサギ、フェレット、亀等の極小動物から猫、大型犬等
                            上記種類は一部のため記載がない種類でもお気軽にご相談ください</p>
                    </div>
                    <div class="cremation-content-text-inner">
                        <h3>ご用意いただくもの</h3>
                        <p>写真、写真データ（携帯電話の写真データでかまいません）、大好きだったフード等
                            お別れの際に近くに置いてさしあげたいもの（おもちゃやおやつ等）はご一緒にご持参ください（一緒に火葬できないと判断したものはお返しもしくはこちらで処分させていただきます）
                        </p>
                    </div>
                </div>
                <div class="cremation-content-text-inner-wrap">
                    <div class="cremation-content-text-inner">
                        <h3>購入できるもの</h3>
                        <p>お手元供養グッズ、分骨入れカプセル等
                        </p>
                    </div>
                    <div class="cremation-content-text-inner">
                        <h3>棺に入れて一緒に火葬できるもの</h3>
                        <p>フード類、おやつ、お花、お手紙等<br>
                            ※プラスチック類、金属類、ガラス類、ぬいぐるみ、お洋服類、毛布類等につきましては一緒に火葬することができませんので、ご返却させていただきます

                        </p>
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