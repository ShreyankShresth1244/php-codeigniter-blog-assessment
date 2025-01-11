<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog Details</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <?php include(APPPATH . 'Views/layout/navbar.php'); ?>

    <div class="container mt-5">
        <!-- Blog Details Section -->
        <div class="card mb-4 shadow-lg border-0">
            <div class="card-body">
                <h1 class="card-title text-primary fw-bold"><?= esc($blog['title']) ?></h1>
                <p class="text-muted mb-3">
                    By <strong><?= esc($blog['author']) ?></strong> on <?= date('F j, Y', strtotime($blog['created_at'])) ?>
                </p>
                <hr>
                <p class="card-text lh-lg"><?= nl2br(esc($blog['content'])) ?></p>
            </div>
        </div>

        <!-- Comments Section -->
        <div class="card mb-4 shadow-lg border-0">
            <div class="card-body">
                <h3 class="card-title text-secondary fw-semibold">Comments</h3>
                <hr>
                <?php if (!empty($comments)): ?>
                    <?php foreach ($comments as $comment): ?>
                        <div class="mb-4 p-3 border rounded bg-light shadow-sm">
                            <strong class="text-dark"><?= esc($comment['name']) ?></strong>
                            <span class="text-muted">(<?= esc($comment['email']) ?>)</span>
                            <p class="mt-2 text-dark"><?= nl2br(esc($comment['comment'])) ?></p>
                        </div>
                    <?php endforeach; ?>
                <?php else: ?>
                    <p class="text-muted">No comments yet. Be the first to comment!</p>
                <?php endif; ?>
            </div>
        </div>

        <!-- Add a Comment Form -->
        <div class="card shadow-lg border-0">
            <div class="card-body">
                <h4 class="card-title text-primary fw-bold">Add a Comment</h4>
                <form method="post" action="/blog/addComment">
                    <?= csrf_field() ?> <!-- CSRF protection -->
                    <input type="hidden" name="blog_id" value="<?= esc($blog['id']) ?>">

                    <div class="mb-3">
                        <label for="name" class="form-label fw-semibold">Name</label>
                        <input type="text" name="name" id="name" class="form-control" placeholder="Your name" required>
                    </div>

                    <div class="mb-3">
                        <label for="email" class="form-label fw-semibold">Email</label>
                        <input type="email" name="email" id="email" class="form-control" placeholder="Your email" required>
                    </div>

                    <div class="mb-3">
                        <label for="comment" class="form-label fw-semibold">Comment</label>
                        <textarea name="comment" id="comment" class="form-control" rows="4" placeholder="Write your comment here..." required></textarea>
                    </div>

                    <button type="submit" class="btn btn-primary w-100 fw-bold">Submit Comment</button>
                </form>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
