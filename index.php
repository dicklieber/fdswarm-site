<?php
$pageTitle = 'Hello World';
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= htmlspecialchars(isset($pageTitle) ? $pageTitle : 'FdSwarm', ENT_QUOTES, 'UTF-8') ?></title>
    <link rel="stylesheet" href="/assets/css/styles.css">
</head>
<body>
<?php
include __DIR__ . '/includes/header.php';
?>

<main class="site-main screenshot-main">
    <section>
        <p>FdSwarm is a web application that allows users to log QSOs for ARRL or Winter Field Days.</p>
        <p>Multiple nodes can be on a local network. QSOs on all nodes are synchronized. Nodes can entry and leave the
            network and are automatically synchronized. There is no central server or node, so-called shared-nothing.</p>
    </section>
    <section class="screenshot-section">
        <img class="screenshot-image" src="/assets/images/contestEntryAnnotated.png" alt="fdswarm screenshot">
    </section>
</main>

<?php
include __DIR__ . '/includes/footer.php';
?>
</body>
</html>
