<?php
$currentPage = basename($_SERVER['SCRIPT_NAME'] ?? '');
?>
<header class="site-header">
    <nav class="navbar navbar-expand-lg bg-white border-bottom">
        <div class="container">
            <a class="navbar-brand d-flex align-items-center gap-2 fw-bold" href="/">
                <img class="header-logo" src="/assets/images/fdswarm.svg" alt="FdSwarm">
                <span>FdSwarm</span>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainNavbar" aria-controls="mainNavbar" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="mainNavbar">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link<?= $currentPage === 'index.php' || $currentPage === '' ? ' active' : '' ?>" href="/"<?= $currentPage === 'index.php' || $currentPage === '' ? ' aria-current="page"' : '' ?>>Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link<?= $currentPage === 'enterQSO.php' ? ' active' : '' ?>" href="/enterQSO.php"<?= $currentPage === 'enterQSO.php' ? ' aria-current="page"' : '' ?>>Enter QSO</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>
