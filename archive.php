<!-- ヘッダー  -->
<?php get_header(); ?>

<!-- メイン -->
<div class="main">
  <section id="blog_list">
    <h1 class="page__title">BLOG</h1>
    <div id="content" class="page__content">
      <!-- 記事ループ -->
      <?php get_templete_part('loop'); ?>
      <!-- 記事ループ終わり -->
    </div>
  </section>
</div>

<!-- ページネーション -->
<?php if(function_exists("pagination")) pagination($additional_loop->max_num_pages); ?>

<!-- サイドバー -->
<?php get_sidebar(); ?>

<!-- フッター -->
<?php get_footer(); ?>