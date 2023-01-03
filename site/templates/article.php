<?php snippet('header') ?>
<?php snippet('menu') ?>

<section class="content article">
  <article>
    <h1><?= $page->title()->html() ?></h1>
    <p><small>Published on <?= $page->date()->toDate('l, F jS Y') ?></small></p>
    
   
    <?php if($feature_image = $page->feature_image()->toFile()):
      $imgSrc = $feature_image->thumb()->url(); ?>
      <img src="<?php echo $imgSrc ?>" alt="<?php echo $page->title() ?>"/>
    <?php endif ?>
    
    <?php /*
    <a class="block sm:flex" href="<?= $note->url() ?>" title="Read: <?php echo $note->title() ?>"><img src="<?php echo $imgSrc ?>" alt="<?php echo $note->title() ?>" width="300" class="object-cover h-48 sm:h-48 w-full"></a>
    <h2 class="text-base text-white font-title leading-tight mt-2"><a class="block hover:underline sm:flex" href="<?= $note->url() ?>" title="Read: <?php echo $note->title() ?>"><?php echo $note->title() ?></a></h2>
    <h3 class="text-xs text-gray-500"><?php echo $note->date()->toDate('l, M jS, Y') ?></h3>
    */ ?>
    
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