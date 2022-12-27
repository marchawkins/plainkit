<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">

    <title>marc's awesome website</title>

    <?= css('assets/css/pico.min.css') ?>
    <?= css('assets/css/styles.css') ?>
    <?= js('assets/js/scripts.js') ?>
</head>

<body>
    <header class="container">
        <nav>
            <ul>
                <li><a href="/" title="marc's awesome website"><strong>MH</strong></a></li>
            </ul>
            <ul>
            <?php foreach ($site->children()->listed() as $item): ?>
                <li><a <?php e($item->isOpen(), 'aria-current class="active"') ?> href="<?= $item->url() ?>" title="<?= $item->title()->esc() ?>"><?= $item->title()->esc() ?></a></li>
            <?php endforeach ?>
            </ul>
        </nav>
    </header>

    <main class="container">