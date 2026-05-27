<?php
$pageTitle = 'Enter QSO';
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

<main class="site-main video-main">
    <section class="video-section">
        <p>Entering a QSO in FdSwarm is designed to be quick during an active Field Day exchange. This short video shows the QSO entry workflow from the contest logging screen.</p>
        <video class="demo-video" controls preload="metadata">
            <source src="/assets/videos/enterQSO.mp4" type="video/mp4">
            Your browser does not support the video tag.
        </video>
    </section>
</main>

<?php
include __DIR__ . '/includes/footer.php';
?>
</body>
</html>
