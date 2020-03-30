<?php get_header(); ?>
  <!-- 記事ループ -->
  <?php get_template_part('loop'); ?>
  <?php if (function_exists('pagination')) pagination($additional_loop->max_num_pages); ?>
<?php get_sidebar(); ?>

<?php get_footer(); ?>