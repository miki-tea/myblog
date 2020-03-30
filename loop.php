<?php if(have_posts()): ?>
  <?php while(heve_posts()):the_post();?>
    <article class="article">
      <h2 class="article__title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
      <h3><?php the_authot_nickname(); ?>　<?php the_time("Y.m.j"); ?>　<?php single_cut_title('カテゴリー: '); ?></h3>
      <img src="" alt="">
      <p class="article__body">
        <?php the_content(); ?>
      </p>
    </article>
  <?php endwhile; ?>
  <?php endif; ?>