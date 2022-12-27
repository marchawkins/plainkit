<?php snippet('header') ?>
<?php snippet('menu') ?>

<section id="blog">

  <h1><?= $page->title()->html() ?></h1>
  <?= $page->text()->kirbytext() ?>

  <?php foreach($articles as $article): ?>

    <article>
      <h1><a href="<?= $article->url() ?>"><?= $article->title()->html() ?></a></h1>
      <p><?= $article->text()->excerpt(200) ?></p>
    </article>
    <hr/>

  <?php endforeach ?>

  <?php if ($articles->pagination()->hasPages()): ?>
    <nav class="pagination">

      <?php if ($articles->pagination()->hasNextPage()): ?>
        <a class="next" href="<?= $articles->pagination()->nextPageURL() ?>">&laquo; older posts</a>
      <?php endif ?>

      <?php if ($articles->pagination()->hasPrevPage()): ?>
        <a class="prev" href="<?= $articles->pagination()->prevPageURL() ?>">newer posts &raquo;</a>
      <?php endif ?>

    </nav>
  <?php endif ?>

</section>

<?php snippet('footer') ?>