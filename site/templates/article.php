<?php snippet('header') ?>
<?php snippet('menu') ?>

<section class="content article">
  <article>
    <h1><?= $page->title()->html() ?></h1>
    <p><small>Published on <?= $page->date()->toDate('l, F jS Y') ?></small></p>
    <?= $page->text()->kirbytext() ?>

    <?php if($tags = $page->tags()->split()): ?>
      <ul>
      <?php foreach($tags as $tag): ?>
        <!-- change link to the page that lists all articles if necessary -->
        <li><a href="<?php echo url('blog/tag/' . urlencode($tag)) ?>"><?php echo $tag ?></a></li>
        <?php endforeach ?>
      </ul>
    <?php endif ?>

    <p><a href="<?= url('blog') ?>">Back to blog &raquo;</a></p>
  </article>

  <aside>
  <?php if ($page->hasPrevListed()): ?>
    <a href="<?= $page->prevListed()->url() ?>">&laquo; previous page</a>
    <?php endif ?>

    <?php if ($page->hasNextListed()): ?>
    <a href="<?= $page->nextListed()->url() ?>">next page &raquo;</a>
  <?php endif ?>
</aside>
</section>

<?php snippet('footer') ?>