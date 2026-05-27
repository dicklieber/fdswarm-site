<?php
$pageTitle = 'Enter QSO';
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= htmlspecialchars(isset($pageTitle) ? $pageTitle : 'FdSwarm', ENT_QUOTES, 'UTF-8') ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="/assets/css/styles.css">
</head>
<body>
<?php
include __DIR__ . '/includes/header.php';
?>

<main class="site-main">
    <section class="py-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-10">
                    <div class="mb-4">
                        <p class="text-uppercase text-primary fw-semibold small mb-2">Contest workflow</p>
                        <h1 class="h2 mb-3">Enter a QSO</h1>
                        <p class="lead text-secondary mb-0">Entering a QSO in FdSwarm is designed to be quick during an active Field Day exchange. This short video shows the QSO entry workflow from the contest logging screen.</p>
                    </div>
                    <video class="demo-video" controls preload="metadata">
                        <source src="/assets/videos/enterQSO.mp4" type="video/mp4">
                        Your browser does not support the video tag.
                    </video>
                </div>
            </div>
        </div>
    </section>
</main>

<?php
include __DIR__ . '/includes/footer.php';
?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
