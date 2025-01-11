<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog Posts</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<?php include(APPPATH . 'Views/layout/navbar.php'); ?>
    <div class="container mt-5">
        <h1 class="mb-4 text-primary fw-bold">Blog Posts</h1>
        <div class="row">
            <?php foreach ($blogs as $blog): ?>
                <div class="col-md-6 col-lg-4 mb-4">
                    <div class="card h-100 shadow-sm">
                        <div class="card-body">
                            <h5 class="card-title text-primary fw-bold"><?= esc($blog['title']) ?></h5>
                            <p class="card-text text-muted"><?= substr(esc($blog['content']), 0, 100) ?>...</p>
                            <p class="card-text">
                                <small class="text-muted">
                                    By <strong><?= esc($blog['author']) ?></strong> on <?= date('F j, Y', strtotime($blog['created_at'])) ?>
                                </small>
                            </p>
                            <a href="/blog/<?= esc($blog['id']) ?>" class="btn btn-primary w-100 mt-2">Read More</a>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>

    <!-- Bootstrap JS with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
