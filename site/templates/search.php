<?php snippet('header') ?>
<?php snippet('menu') ?>

<h1><?= $page->title() ?></h1>

<p><?= $page->text() ?></p>

<form>
  <input type="search" aria-label="Search" name="q" value="<?= html($query) ?>"/>
  <input type="submit" value="Search"/>
</form>

<?php if($query && $query!='') : ?>
    <?php if(count($results)>0): ?>
    <ul>
    <?php foreach ($results as $result): ?>
    <li>
        <a href="<?= $result->url() ?>">
        <?= $result->title() ?>
        </a>
    </li>
    <?php endforeach ?>
    </ul>
    <?php else: ?>
        <p>No results found.</p>
    <?php endif ?>
<?php endif ?>

<?php snippet('footer') ?>