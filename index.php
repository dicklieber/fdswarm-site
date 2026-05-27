<?php
$pageTitle = 'Home | FdSwarm';
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
    <section class="hero-section">
        <div class="container py-5">
            <div class="row align-items-center g-5">
                <div class="col-lg-5">
                    <img class="brand-mark mb-4" src="/assets/images/fdswarm.svg" alt="FdSwarm">
                    <p class="text-uppercase text-primary fw-semibold small mb-2">Home</p>
                    <h1 class="display-4 fw-bold lh-1 mb-3">FdSwarm</h1>
                    <p class="lead text-secondary mb-4">Field Day logging for ARRL and Winter Field Day stations that need fast QSO entry and local-network synchronization without a central server.</p>
                    <div class="d-flex flex-wrap gap-2">
                        <a class="btn btn-primary btn-lg" href="/enterQSO.php">Watch QSO entry</a>
                        <a class="btn btn-outline-secondary btn-lg" href="#overview">View overview</a>
                    </div>
                </div>
                <div class="col-lg-7">
                    <img class="img-fluid app-screenshot" src="/assets/images/contestEntryAnnotated.png" alt="Annotated FdSwarm contest entry screen">
                </div>
            </div>
        </div>
    </section>

    <section id="overview" class="overview-section py-5">
        <div class="container">
            <div class="row mb-4">
                <div class="col-lg-8">
                    <h2 class="h3 mb-3">Built for shared station logging</h2>
                    <p class="text-secondary mb-0">FdSwarm lets operators enter contacts from multiple nodes on the local network. Each node keeps working independently while sharing QSO updates with the rest of the station.</p>
                </div>
            </div>
            <div class="row g-4">
                <div class="col-md-4">
                    <div class="card h-100 border-0 shadow-sm">
                        <div class="card-body">
                            <h2 class="h5 card-title">Fast QSO Entry</h2>
                            <p class="card-text text-secondary">The logging screen is built for active exchanges, keeping the data entry workflow direct and focused.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card h-100 border-0 shadow-sm">
                        <div class="card-body">
                            <h2 class="h5 card-title">Local Node Sync</h2>
                            <p class="card-text text-secondary">Multiple stations can run on the same local network with QSOs synchronized across all participating nodes.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card h-100 border-0 shadow-sm">
                        <div class="card-body">
                            <h2 class="h5 card-title">Shared-Nothing Design</h2>
                            <p class="card-text text-secondary">Nodes can join and leave the network without relying on one central server to keep the log moving.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="workflow-section py-5 bg-white">
        <div class="container">
            <div class="row align-items-center g-5">
                <div class="col-lg-5">
                    <h2 class="h3 mb-3">Start logging quickly</h2>
                    <p class="text-secondary mb-4">Open FdSwarm on each station computer, connect nodes on the local network, and keep operators focused on the exchange instead of the infrastructure.</p>
                    <a class="btn btn-outline-primary" href="/enterQSO.php">See the entry workflow</a>
                </div>
                <div class="col-lg-7">
                    <div class="row g-3">
                        <div class="col-sm-4">
                            <div class="workflow-step">
                                <span class="step-number">1</span>
                                <h3 class="h6 mb-2">Open a Node</h3>
                                <p class="small text-secondary mb-0">Run a station node on a laptop or desktop in the operating area.</p>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="workflow-step">
                                <span class="step-number">2</span>
                                <h3 class="h6 mb-2">Sync Locally</h3>
                                <p class="small text-secondary mb-0">Let nearby nodes discover updates and keep logs aligned.</p>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="workflow-step">
                                <span class="step-number">3</span>
                                <h3 class="h6 mb-2">Log QSOs</h3>
                                <p class="small text-secondary mb-0">Capture contacts from the contest screen during active operation.</p>
                            </div>
                        </div>
                    </div>
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
