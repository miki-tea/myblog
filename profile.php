<?php
/*
Template Name: Profile -プロフィールページ-
*/
?>
<!-- ヘッダー読み込み -->
<?php get_header(); ?>
    <!-- メニュー読み込み -->
    <?php get_template_part('content','menu'); ?>
    <div class="main">
      <section id="profile">
        <h1 class="title">
          <?php echo get_the_title(); ?>
        </h1>
        <div class="content">
          <?php echo get_post_meta($post->ID, 'profile', true); ?>
        </div>
      </section>
      <section id="prof_info" class="site-eidth">
        <?php if(have_posts()) :
          while (have_posts()) : the_post(); ?>
            <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
              <?php the_content(); ?>
            </div>
          <?php endwhile;
          else : ?>
            <div class="post">
              <p>お探しの記事は見つかりませんでした。</p>
            </div>
          <?php endif; ?>
      </section>
    </div>

<?php get_footer(); ?>
