<?php
require_once __DIR__ . '/src/index_init.php';

$pageTitle = $GLOBALS['page']['title'];
require __DIR__ . '/src/header.php';
?>

<section class="hero">
    <h1><?= htmlspecialchars($GLOBALS['page']['hero']) ?></h1>
</section>

<?php require __DIR__ . '/src/footer.php'; ?>