<div class="container">
    <h1>Blogs</h1>
    <?php foreach ($blogs as $blog): ?>
        <div>
            <h2><?= $blog['title'] ?></h2>
            <p><?= substr($blog['content'], 0, 100) ?>...</p>
            <p>By <?= $blog['author'] ?> on <?= $blog['created_at'] ?></p>
            <a href="/blog/<?= $blog['id'] ?>">Read More</a>
        </div>
    <?php endforeach; ?>
</div>
