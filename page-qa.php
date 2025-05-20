<?php

/**
 * Template Name: qaページ
 * 
 * よくある質問用のテンプレート
 *
 * @package angel_pet
 */

get_header();
?>

<main id="primary" class="page-main qa">
    <section id="post-<?php the_ID(); ?>" <?php post_class('page page-container'); ?>>
        <header class="page-header side-header">
            <?php the_title('<h1 class="page-title vertical-title sub-title">', '</h1>'); ?>
        </header>
        <div class="page-content">
            <div class="page-thumbnail">
                <img src="<?php echo get_template_directory_uri(); ?>/images/qa-top-img.jpg" alt="施設紹介">
            </div>
            <div class="qa-content-wrap">
                <div class="qa-list">
                    <h3>霊園に関するご質問</h3>

                    <div class="qa-accordion" style="border-bottom: none;">
                        <div class="qa-accordion-title">駐車場はありますか？</div>
                        <ul class="qa-accordion-content">
                            <li>５台分の駐車場をご用意しております。</li>
                        </ul>
                    </div>
                    <div class="qa-accordion" style="border-bottom: none;">
                        <div class="qa-accordion-title">定休日、営業時間はありますか？</div>
                        <ul class="qa-accordion-content">
                            <li>定休日はございません。営業時間は９:００～１７:００でございます。</li>
                        </ul>
                    </div>
                    <div class="qa-accordion" style="border-bottom: none;">
                        <div class="qa-accordion-title">車いすの貸し出しはありますか？</div>
                        <ul class="qa-accordion-content">
                            <li>ご用意はございません。</li>
                        </ul>
                    </div>
                </div>
                <div class="qa-list">
                    <h3>火葬に関するご質問</h3>
                    <div class="qa-accordion" style="border-bottom: none;">
                        <div class="qa-accordion-title">火葬にはどのくらい時間がかかりますか？</div>
                        <ul class="qa-accordion-content">
                            <li>大きさや体高等によって異なるため直接お問い合わせください。</li>
                        </ul>
                    </div>
                    <div class="qa-accordion" style="border-bottom: none;">
                        <div class="qa-accordion-title">大型犬やハムスター等の極小動物も大丈夫ですか？</div>
                        <ul class="qa-accordion-content">
                            <li>ハムスター等の極小動物も大型犬も対応できます。大型犬に関しましては長時間お時間をいただく可能性がございます。</li>
                        </ul>
                    </div>
                    <div class="qa-accordion" style="border-bottom: none;">
                        <div class="qa-accordion-title">棺に一緒に納められるもの納められないものは何ですか？</div>
                        <ul class="qa-accordion-content">
                            <li>フード、おやつ、お花は一緒にお納めいただけますが、プラスチック類、金属類、ガラス類、ぬいぐるみ類、毛布類などについてはご遠慮ください。<br>
                                ※お別れ室まではお持込みいただけますのでお別れの際ご使用したいものはご持参ください。</li>
                        </ul>
                    </div>
                    <div class="qa-accordion" style="border-bottom: none;">
                        <div class="qa-accordion-title">火葬の立ち合いや収骨はできますか？</div>
                        <ul class="qa-accordion-content">
                            <li>安全性の観点より火葬室へのご入室はご遠慮いただいておりますが、ご収骨につきましてはご家族様ご収骨かスタッフによる収骨のいずれかは受付の際にご選択いただけます。</li>
                        </ul>
                    </div>
                    <div class="qa-accordion" style="border-bottom: none;">
                        <div class="qa-accordion-title">火葬に関して、宗教などの決まりはありますか？</div>
                        <ul class="qa-accordion-content">
                            <li>特にありません。</li>
                        </ul>
                    </div>
                    <div class="qa-accordion" style="border-bottom: none;">
                        <div class="qa-accordion-title">火葬当日までにやっておくことや用意するものはありますか？</div>
                        <ul class="qa-accordion-content">
                            <li><a href="<?php echo home_url(); ?>/cremation">火葬トップページ</a>をご覧ください。</li>
                        </ul>
                    </div>
                    <div class="qa-accordion" style="border-bottom: none;">
                        <div class="qa-accordion-title">分骨はできますか？</div>
                        <ul class="qa-accordion-content">
                            <li>ご分骨いただけます。ご分骨入れ（カプセル等）につきましては別途販売となります。</li>
                        </ul>
                    </div>
                    <div class="qa-accordion" style="border-bottom: none;">
                        <div class="qa-accordion-title">お葬式や読経はしてもらえますか？</div>
                        <ul class="qa-accordion-content">
                            <li>ご家族によるお別れプランや僧侶により読経をさせていただく葬儀プランのご用意もございます。<br>
                                詳しくは<a href="<?php echo home_url(); ?>/cremation">火葬トップページ</a>をご覧ください。</li>
                        </ul>
                    </div>
                    <div class="qa-accordion" style="border-bottom: none;">
                        <div class="qa-accordion-title">遺体を引き取りに来ていただくことは可能ですか？</div>
                        <ul class="qa-accordion-content">
                            <li>可能です（3キロまで2,200円、5キロまで3,300円、それ以上5キロ毎3,300円を申し受けます）<br>
                                ※ご返骨も同様となります。</li>
                        </ul>
                    </div>
                    <div class="qa-accordion" style="border-bottom: none;">
                        <div class="qa-accordion-title">ペットが亡くなった後、何日以内に火葬した方が良いですか？</div>
                        <ul class="qa-accordion-content">
                            <li>室温等によっても異なりますが、夏場は１日～２日以内に、冬場は２日～３日以内にご火葬されることをおすすめいたします。<br>
                                （上記以上ご安置される場合は斎場にて一時的にお預かりすることも可能ですので、ご利用ください）。
                            </li>
                        </ul>
                    </div>
                    <div class="qa-accordion" style="border-bottom: none;">
                        <div class="qa-accordion-title">すぐに火葬ができないのですが、預かってもらえますか？</div>
                        <ul class="qa-accordion-content">
                            <li>霊安室を完備しておりますので、お預かりし大切にご安置させていただきます。<br>
                                ご対面も可能です（9:00～17:00）。</li>
                        </ul>
                    </div>
                    <div class="qa-accordion" style="border-bottom: none;">
                        <div class="qa-accordion-title">ご遺体はどのように保管しておけばよいでしょうか？</div>
                        <ul class="qa-accordion-content">
                            <li><a href="<?php echo home_url(); ?>/cremation">火葬トップページ</a>をご覧ください。</li>
                        </ul>
                    </div>
                    <div class="qa-accordion" style="border-bottom: none;">
                        <div class="qa-accordion-title">亡くなったペットをどのように霊園に連れて行けばよいでしょうか？</div>
                        <ul class="qa-accordion-content">
                            <li><a
                                    href="<?php echo home_url(); ?>/cremation">火葬トップページ</a>の冷却処置をした状態でタオルケット等で優しく包んでお車等でご来園ください<br>（普段使用されていたベッドや箱類でお連れいただいても構いません）。
                            </li>
                        </ul>
                    </div>
                    <div class="qa-accordion" style="border-bottom: none;">
                        <div class="qa-accordion-title">合同火葬はされていますか？</div>
                        <ul class="qa-accordion-content">
                            <li>承っております（Plan5をご参照ください）。</li>
                        </ul>
                    </div>
                    <div class="qa-accordion" style="border-bottom: none;">
                        <div class="qa-accordion-title">火葬のプランはありますか？</div>
                        <ul class="qa-accordion-content">
                            <li><a href="<?php echo home_url(); ?>/cremation#plan">ペット火葬プラン</a>をご覧ください。</li>
                        </ul>
                    </div>
                    <div class="qa-accordion" style="border-bottom: none;">
                        <div class="qa-accordion-title">骨壺の料金は含まれていますか？</div>
                        <ul class="qa-accordion-content">
                            <li>含まれております。<br>※オリジナル等をご希望の場合は別途販売となります</li>
                        </ul>
                    </div>
                    <div class="qa-accordion" style="border-bottom: none;">
                        <div class="qa-accordion-title">予約なしで即日火葬してもらうことが可能ですか？</div>
                        <ul class="qa-accordion-content">
                            <li>当日空きがございましたらご案内可能となります。まずはご一報ください。</li>
                        </ul>
                    </div>
                    <div class="qa-accordion" style="border-bottom: none;">
                        <div class="qa-accordion-title">合同火葬で遺骨を持ち帰ることは可能ですか？</div>
                        <ul class="qa-accordion-content">
                            <li>合同火葬の場合のご返骨はできません</li>
                        </ul>
                    </div>
                    <div class="qa-accordion" style="border-bottom: none;">
                        <div class="qa-accordion-title">亡くなったペットの他に、ペットを連れて行っても良いですか？</div>
                        <ul class="qa-accordion-content">
                            <li>是非ご一緒にお越しください。</li>
                        </ul>
                    </div>
                    <div class="qa-accordion" style="border-bottom: none;">
                        <div class="qa-accordion-title">どのような服装で行けばよいですか？</div>
                        <ul class="qa-accordion-content">
                            <li>平服でお越しください。</li>
                        </ul>
                    </div>
                    <div class="qa-accordion" style="border-bottom: none;">
                        <div class="qa-accordion-title">役所等への手続きは必要ですか？</div>
                        <ul class="qa-accordion-content">
                            <li>30日以内に保健所または市役所へ届け出が必要です（犬のみ）。<br>
                                任意の保険のお入りの場合も、早めのお手続きをお勧めいたします。<br>
                                【準備するもの】<br>
                                ・自治体のHPよりダウンロードした犬の死亡届<br>
                                ・犬鑑札<br>
                                ・狂犬病予防注射済票（当年度分のみ）<br>
                                ・血統書（手元に残したい場合は届け出先へ相談すると返却してもらえる可能性有）
                            </li>
                        </ul>
                    </div>
                    <div class="qa-accordion" style="border-bottom: none;">
                        <div class="qa-accordion-title">火葬後の流れを教えてください？</div>
                        <ul class="qa-accordion-content">
                            <li>【ご遺骨をお持ち帰りになる場合】<br>
                                ご収骨終了後ご遺骨とともにご帰宅となります<br>
                                【エンジェルペット霊園合祀墓をご希望の場合】<br>
                                一度ご遺骨とともにご帰宅いただき改めてご持参いただくもしくは当霊園にてお預かりも可能となります（別途手続きが必要となります）<br>
                                【エンジェルペット霊園納骨堂をご希望の場合】<br>
                                即日ご納骨いただくことも可能でございます。（別途手続きが必要となります）<br>
                                ※お時間によっては翌日以降になる場合がございます<br>
                                【エンジェルペット霊園のお墓をご希望の場合】<br>
                                墓石建立までお時間を要するため、一度ご遺骨とともにご帰宅いただき、お墓及び納骨の準備が整いましたら納骨となります。（別途手続きが必要となります）<br>

                                ※詳しくはエンジェルペット斎場・霊園スタッフまでお気軽にお問い合わせください
                            </li>
                        </ul>
                    </div>
                    <div class="qa-accordion" style="border-bottom: none;">
                        <div class="qa-accordion-title">料金の支払い方法は？</div>
                        <ul class="qa-accordion-content">
                            <li>現金、クレジットカード（VISA、master、JCB、AMEX、DC、Diners club等）、QRコード決済がご利用いただけます。<br>
                                ※法要お布施、お守り、お線香、卒塔婆、お花につきましては現金のみとなります。
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="qa-list">
                    <h3>墓地・納骨堂に関するご質問</h3>
                    <div class="qa-accordion" style="border-bottom: none;">
                        <div class="qa-accordion-title">どんな種類のペットでも入れますか？</div>
                        <ul class="qa-accordion-content">
                            <li>入堂可能です。</li>
                        </ul>
                    </div>
                    <div class="qa-accordion" style="border-bottom: none;">
                        <div class="qa-accordion-title">宗教・宗派など決まりはありますか？</div>
                        <ul class="qa-accordion-content">
                            <li>ございません。</li>
                        </ul>
                    </div>
                    <div class="qa-accordion" style="border-bottom: none;">
                        <div class="qa-accordion-title">永代使用料とはどういうものですか？</div>
                        <ul class="qa-accordion-content">
                            <li>永年にわたって当霊園をご使用いただける料金となっております。</li>
                        </ul>
                    </div>
                    <div class="qa-accordion" style="border-bottom: none;">
                        <div class="qa-accordion-title">年間使用料や管理料が支払えなくなった場合はどうすれば良いですか？</div>
                        <ul class="qa-accordion-content">
                            <li>合祀墓へご入堂いただくことが可能です。</li>
                        </ul>
                    </div>
                    <div class="qa-accordion" style="border-bottom: none;">
                        <div class="qa-accordion-title">生前でもお墓を建てることはできますか？</div>
                        <ul class="qa-accordion-content">
                            <li>可能でございます。生前にお墓を建てることを寿建墓といい、長生きするといわれております。</li>
                        </ul>
                    </div>
                    <div class="qa-accordion" style="border-bottom: none;">
                        <div class="qa-accordion-title">納骨堂の中には花や供物は入れてもいいですか？</div>
                        <ul class="qa-accordion-content">
                            <li>造花や未開封の乾いたフードおやつは自由にお供えください。生ものと缶詰に関しましては（缶詰は破裂する危険性があるため）お参り後にお持ち帰りいただくか、礼拝堂にお供えください（期限の切れた物はこちらで処分させていただきます）<br>
                                ※ご判断が難しい場合はお気軽にスタッフまでお声がけください。</li>
                        </ul>
                    </div>
                    <div class="qa-accordion" style="border-bottom: none;">
                        <div class="qa-accordion-title">他墓所から改葬する場合、どのような手続きが必要ですか？</div>
                        <ul class="qa-accordion-content">
                            <li>直接ご相談ください。</li>
                        </ul>
                    </div>
                    <div class="qa-accordion" style="border-bottom: none;">
                        <div class="qa-accordion-title">納骨堂・お墓を見学したいのですが予約は必要ですか？</div>
                        <ul class="qa-accordion-content">
                            <li>9:00～17:00までいつでも見学可能ですので、お気軽にお立ち寄りください。<br>
                                ※前日までにお電話いただけますとよりスムーズなご案内が可能となります。</li>
                        </ul>
                    </div>
                </div>
                <div class="qa-list">
                    <h3>供養・法要に関するご質問</h3>
                    <div class="qa-accordion" style="border-bottom: none;">
                        <div class="qa-accordion-title">お参りに予約は必要ですか？</div>
                        <ul class="qa-accordion-content">
                            <li>不要です。9:00～17:00にいつでもお気軽にお参りください。</li>
                        </ul>
                    </div>
                    <div class="qa-accordion" style="border-bottom: none;">
                        <div class="qa-accordion-title">ペットにも回忌法要はありますか？</div>
                        <ul class="qa-accordion-content">
                            <li>初七日、49日、百日、一周忌、三回忌、七回忌、十三回忌…とございます。</li>
                        </ul>
                    </div>
                    <div class="qa-accordion" style="border-bottom: none;">
                        <div class="qa-accordion-title">法要の場所はどこがいいですか？</div>
                        <ul class="qa-accordion-content">
                            <li>礼拝堂・墓前・合祀墓前とございます。お客様のご希望の場所での法要が可能です。</li>
                        </ul>
                    </div>
                    <div class="qa-accordion" style="border-bottom: none;">
                        <div class="qa-accordion-title">友引・仏滅に法要してもいいの？</div>
                        <ul class="qa-accordion-content">
                            <li>とくに問題ございません。</li>
                        </ul>
                    </div>
                    <div class="qa-accordion" style="border-bottom: none;">
                        <div class="qa-accordion-title">法要の際、服装は喪服の方がいいですか？</div>
                        <ul class="qa-accordion-content">
                            <li>平服でお越しください。</li>
                        </ul>
                    </div>
                    <div class="qa-accordion" style="border-bottom: none;">
                        <div class="qa-accordion-title">霊園でお花は販売していますか？</div>
                        <ul class="qa-accordion-content">
                            <li>隣接の萬徳院釈迦寺船橋中央にて販売いたしております。</li>
                        </ul>
                    </div>
                    <div class="qa-accordion" style="border-bottom: none;">
                        <div class="qa-accordion-title">お供えをしたいのですが、お供えしてはいけないものはありますか？</div>
                        <ul class="qa-accordion-content">
                            <li>生の食べ物や缶詰の食べ物はご遠慮ください。もしお供え希望の場合は、お参り後必ずお持ち帰りください。</li>
                        </ul>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <section class="page-container-wrap">


    </section>
    <!-- #post-<?php the_ID(); ?> -->
</main><!-- #main -->

<?php
get_footer();
?>