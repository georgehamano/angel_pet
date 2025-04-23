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
            <p class="vertical-text">Angel Pet Cemetery</p>
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
            <div class="news-header">
                <h2 class="vertical-title">お知らせ</h2>
            </div>
            <div class="news-swiper swiper">
                <div class="swiper-wrapper">
                    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                    <div class="swiper-slide">
                        <article class="news-item">
                            <div class="news-thumbnail">
                                <?php if (has_post_thumbnail()) : ?>
                                <a href="<?php the_permalink(); ?>">
                                    <?php the_post_thumbnail('medium'); ?>
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
                    </div>
                    <?php endwhile; else : ?>
                    <p class="no-news">お知らせはありません。</p>
                    <?php endif; ?>
                </div>

                <!-- ナビゲーション（任意） -->
                <div class="swiper-button-prev news-swiper-prev"></div>
                <div class="swiper-button-next news-swiper-next"></div>
            </div>
        </div>
    </section>
</main><!-- #main -->

<?php
get_sidebar();
get_footer();