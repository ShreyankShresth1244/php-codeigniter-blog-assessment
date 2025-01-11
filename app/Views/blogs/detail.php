<div class="container mt-5">
    <h1><?= $blog['title'] ?></h1>
    <p class="text-muted">By <?= $blog['author'] ?> on <?= $blog['created_at'] ?></p>
    <p><?= $blog['content'] ?></p>

    <h3 class="mt-4">Comments</h3>
    <?php foreach ($comments as $comment): ?>
        <div class="mb-3">
            <strong><?= $comment['name'] ?></strong> (<?= $comment['email'] ?>): 
            <p><?= $comment['comment'] ?></p>
        </div>
    <?php endforeach; ?>

    <h4>Add a Comment</h4>
    <form method="post" action="/blog/addComment">
        <input type="hidden" name="blog_id" value="<?= $blog['id'] ?>">
        <div class="mb-3">
            <label for="name">Name</label>
            <input type="text" name="name" id="name" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="email">Email</label>
            <input type="email" name="email" id="email" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="comment">Comment</label>
            <textarea name="comment" id="comment" class="form-control" rows="4" required></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
