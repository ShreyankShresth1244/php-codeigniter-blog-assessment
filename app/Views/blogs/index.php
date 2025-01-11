<?php include(APPPATH . 'Views/layout/navbar.php'); ?>

<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h1 class="mb-4">Blog Posts</h1>
        <?php foreach ($blogs as $blog): ?>
            <div class="card mb-3">
                <div class="card-body">
                    <h5 class="card-title"><?= $blog['title'] ?></h5>
                    <p class="card-text"><?= substr($blog['content'], 0, 100) ?>...</p>
                    <p class="card-text"><small>By <?= $blog['author'] ?> on <?= $blog['created_at'] ?></small></p>
                    <a href="/blog/<?= $blog['id'] ?>" class="btn btn-primary">Read More</a>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</body>
</html>
