<!-- ヘッダー  -->
<?php get_header() ?>

<!-- メニュー -->
<?php get_template('content','menu'); ?>

<!-- メイン -->
<div id="main">
<!-- 記事表示 -->
<?php if(have_posts()): ?>
  <?php the_post();?>
    <article class="article__item">
      <h2 class="article__title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
      <h3><?php the_author_nickname(); ?>　<?php the_time("Y.m.j"); ?>　<?php single_cut_title('カテゴリー: '); ?></h3>
      <img src="" alt="">
      <p class="article__body">
        <?php the_content(); ?>
      </p>
    </article>
  <!-- ページネーション -->
  <div class="pagination">
    <ul>
      <li class="prev"><?php previous_post_link('%link','PREV'); ?></li>
      <li class="next"><?php next_post_link('%link','NEXT'); ?></li>
    </ul>
  </div>

  <!-- コメント表示 -->
  <?php comments_template(); ?>

  <!-- 何も投稿がなかった場合の表示 -->
  <?php else : ?>
    <h2 class="title">記事が見つかりませんでした。</h2>
<?php endif; ?>
<!-- 記事表示終わり -->
</div>

<!-- フッダー -->
<?php get_footer() ?>
