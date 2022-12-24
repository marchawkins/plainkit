<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">

    <title>marc's awesome website</title>

    <?= css('assets/css/styles.css') ?>
    <?= js('assets/js/scripts.js') ?>
</head>

<body>
    <header>
        <nav class="menu">
        <?php foreach ($site->children()->listed() as $item): ?>
        <a <?php e($item->isOpen(), 'aria-current ') ?> href="<?= $item->url() ?>"><?= $item->title()->esc() ?></a>
        <?php endforeach ?>
        </nav>
    </header>

    <main>