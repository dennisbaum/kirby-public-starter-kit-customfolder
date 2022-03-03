<h1><?= $page->title() ?></h1>
<p>SECRET: <?= $page->env('SECRET'); ?> from .env</p>
<p>DEBUG: <?= $page->env('DEBUG'); ?> from config via .env</p>
