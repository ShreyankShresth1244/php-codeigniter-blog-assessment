<div class="container">
    <h1><?= $blog['title'] ?></h1>
    <p><?= $blog['content'] ?></p>
    <p>By <?= $blog['author'] ?> on <?= $blog['created_at'] ?></p>

    <h2>Comments</h2>
    <?php foreach ($comments as $comment): ?>
        <div>
            <p><?= $comment['comment'] ?> - <?= $comment['name'] ?></p>
        </div>
    <?php endforeach; ?>

    <h3>Add a Comment</h3>
    <form method="post" action="/blog/addComment">
        <input type="hidden" name="blog_id" value="<?= $blog['id'] ?>">
        <input type="text" name="name" placeholder="Name" required>
        <input type="email" name="email" placeholder="Email" required>
        <textarea name="comment" placeholder="Comment" required></textarea>
        <button type="submit">Submit</button>
    </form>
</div>
