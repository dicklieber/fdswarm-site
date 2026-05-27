<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= htmlspecialchars($pageTitle ?? 'Hello World', ENT_QUOTES, 'UTF-8') ?></title>
    <link rel="stylesheet" href="/assets/css/styles.css">
</head>
<body>
    <header class="site-header">
        <a class="site-logo" href="/">Hello App</a>
        <nav class="site-nav" aria-label="Main navigation">
            <a href="/">Home</a>
        </nav>
    </header>
