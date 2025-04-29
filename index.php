<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package angel_pet
 */

get_header();
?>
<main id="primary" class="site-main">
    <section class="mv-slider-section">
        <div class="mv-slider-text">
            <p class="vertical-text">Angel Pet Cemetery<span>Cemetery & Funeral Center</span></p>
            <p class="side-text">Cemetery & Funeral Center</p>
        </div>
        <div class="mv-slider">
            <div class="swiper mv-slider01">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="slider-item">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/mv-slider01.jpg" alt="スライダー1">
                            <h2><span>火葬からご納骨まで</span><br><span>心を込めたご供養を</span></h2>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="slider-item">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/mv-slider02.jpg" alt="スライダー2">
                            <h2><span>火葬からご納骨まで</span><br><span>心を込めたご供養を</span></h2>
                        </div>
                    </div>
                </div>
            </div>

            <div class="business-hours"><span class="business-hours-text">本日の参拝時間</span><span
                    class="business-hours-times">9:00-17:00</span></div>
        </div>
    </section>
    <section class="news-section">
        <div class="news-container">
            <div class="side-header">
                <h2 class="vertical-title sub-title">お知らせ</h2>
                <div class="main-button news-button-pc">
                    <a href="<?php echo home_url('/news'); ?>" class="button">すべてのお知らせ<br><span>ALL NEWS</span></a>
                </div>
            </div>
            <div class="news-scroll-wrapper">
                <div class="news-scroll">
                    <?php
    $index = 0;
    $news_query = new WP_Query([
      'posts_per_page' => 5,
      'post_type' => 'post',
      'orderby' => 'date',
      'order' => 'DESC',
    ]);

    if ($news_query->have_posts()) :
      while ($news_query->have_posts()) : $news_query->the_post(); ?>
                    <article class="news-item" data-index="<?php echo $index++; ?>">
                        <div class="news-thumbnail">
                            <?php if (has_post_thumbnail()) : ?>
                            <a href="<?php the_permalink(); ?>">
                                <?php
                $image_id = get_post_thumbnail_id();
                $image_src = wp_get_attachment_image_src($image_id, 'medium');
                ?>
                                <img src="<?php echo esc_url($image_src[0]); ?>"
                                    alt="<?php the_title_attribute(); ?>" />
                            </a>
                            <?php endif; ?>
                        </div>
                        <div class="news-meta">
                            <span class="news-category">
                                <?php
              $categories = get_the_category();
              if (!empty($categories)) {
                echo esc_html($categories[0]->name);
              }
              ?>
                            </span>
                            <time class="news-date" datetime="<?php echo get_the_date('c'); ?>">
                                <?php echo get_the_date('Y.m.d'); ?>
                            </time>
                        </div>
                        <h3 class="news-title">
                            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                        </h3>
                    </article>
                    <?php endwhile; wp_reset_postdata(); endif; ?>
                </div>


            </div>

        </div>
        <div class="news-dots"></div>
        <div class="main-button news-button-sp">
            <a href="<?php echo home_url('/#'); ?>" class="button">すべてのお知らせ<br><span>ALL NEWS</span></a>
        </div>
    </section>
    <section class="about-section">
        <div class="about-container">
            <div class="about-header">
                <h3 class="vertical-secondary-title">
                    <span>緑豊かな</span>
                    <span>動物たちのやすらぎの杜</span>
                </h3>
                <h2 class="vertical-title sub-title">霊園について</h2>
            </div>
            <div class="about-content">
                <div class="about-content-text">
                    <p>豊かな緑に抱かれ<br>
                        静かに時が流れるやすらぎの杜。<br>
                        エンジェルペット霊園は<br>
                        大切な家族として<br>
                        ともに歩んできたペットたちが<br>
                        安らかに眠る場所です。 <br>
                        愛する存在を偲びながら<br>
                        お参りできますように<br>
                        心を込めた供養の場として<br>
                        静寂と温もりに満ちた空間を<br>
                        ご用意しております。</p>
                </div>
            </div>
        </div>
        <div class="main-button">
            <a href="<?php echo home_url('/#'); ?>" class="button">霊園について<br><span>ABOUT</span></a>
        </div>
    </section>
    <section class="service-section service-section-pet">
        <div class="service-container">
            <div class="side-header">
                <h2 class="vertical-title sub-title">ペットの火葬</h2>
            </div>
            <div class="service-content">
                <div class="service-content-text">
                    <h3>安らかに旅立てますよう<br>
                        丁寧に火葬を執り行います。</h3>
                    <p>ご家族の想いに寄り添い、5つの火葬プランをご用意しております。<br>
                        大切なペットとの最後の時間を、安心してお過ごしいただけるよう、心を込めてご案内いたします。
                    </p>
                </div>
                <div class="service-content-image">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/cremation-topimg1.jpg" alt="ペットの火葬">
                </div>
            </div>
        </div>
        <ul class="service-content-list">
            <li>一任火葬プラン<span>+</span>合祀墓</li>
            <li>ご家族による<span>お別れプラン</span></li>
            <li>ご葬儀プラン<span class="service-content-list-text">(僧侶による読経有)</span></li>
            <li>ご骨葬<span class="service-content-list-text">(僧侶による読経有)</span></li>
            <li>合同火葬プラン<span>+</span>合祀墓</li>
        </ul>
        <div class="main-button">
            <a href="<?php echo home_url('/#'); ?>" class="button">ペット火葬について<br><span>Pet Cremation</span></a>
        </div>
    </section>
    <section class="service-section service-section-cemetery">
        <div class="service-container">
            <div class="side-header">
                <h2 class="vertical-title sub-title">納骨堂・墓地</h2>
            </div>
            <div class="service-content-wrapper">
                <div class="service-content service-content-columbarium">
                    <div class="service-content-text">
                        <h3>納骨堂<span>Columbarium</span></h3>
                        <p>愛する家族の温もりを忘れず、穏やかに偲ぶ納骨堂。<br>
                            ご家族がいつでもお参りできるよう、落ち着いた空間でお迎えいたします。</p>
                    </div>
                </div>
                <div class="service-content service-content-cemetery">
                    <div class="service-content-text">
                        <h3>墓地<span>Cemetery</span></h3>
                        <p>自然の中で大切な想いを静かに見守る墓地。<br>
                            柔らかな太陽の光に包まれ、心穏やかにお参りいただけます。</p>
                    </div>
                </div>
            </div>
    </section>
    <section class="service-section service-section-memorial">
        <div class="service-container">
            <div class="side-header">
                <h2 class="vertical-title sub-title">法事・行事</h2>
            </div>
            <div class="service-content">
                <div class="service-content-image">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/cremation-topimg1.jpg" alt="法事・行事">
                </div>
                <div class="service-content-text">
                    <h3>大切なペットを偲び、<br>
                        感謝をこめて供養いたします。</h3>
                    <p>法要や年忌供養に加え、春・秋の合同供養祭など（内容要確認。仮の文章です。） ご家族とともに心を寄せる機会をご用意しております。
                        四季折々の行事を通じて、変わらぬ想いを届けながら、穏やかな時間の中で、大切な存在を偲ぶひとときをお過ごしください。</p>
                    <div class="main-button">
                        <a href="<?php echo home_url('/#'); ?>" class="button">法事・行事について<br><span>Memorial
                                events</span></a>
                    </div>
                </div>
            </div>
    </section>
    <section class="service-section service-section-goods">
        <div class="service-container">
            <div class="side-header">
                <h2 class="vertical-title sub-title">メモリアルグッツ</h2>
            </div>
            <div class="service-content">
                <div class="service-content-image">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/memorial-topimg1.jpg" alt="法事・行事">
                </div>
                <div class="service-content-text">
                    <h3>いつもそばに<br>大切な思い出を。</h3>
                    <p>ご遺骨を納めるペンダントや写真立てをはじめ、さまざまなかたちで偲ぶための品々をご案内いたします。<br>
                        変わらぬ愛を込めたひとつひとつの品が、これからもご家族の心を温かくつないでいきますように。</p>
                    <div class="main-button">
                        <a href="<?php echo home_url('/#'); ?>" class="button">メモリアルグッツを見る<br><span>Memorial
                                Goods</span></a>
                    </div>
                </div>
            </div>
    </section>
</main><!-- #main -->

<?php
get_sidebar();
get_footer();