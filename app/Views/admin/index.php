<?php include(APPPATH . 'Views/layout/navbar.php'); ?>

<div class="container">
    <h1>Admin Panel</h1>
    <a href="/admin/create">Add New Blog</a>
    <table>
        <thead>
            <tr>
                <th>Title</th>
                <th>Author</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($blogs as $blog): ?>
                <tr>
                    <td><?= $blog['title'] ?></td>
                    <td><?= $blog['author'] ?></td>
                    <td>
                        <a href="/admin/edit/<?= $blog['id'] ?>">Edit</a>
                        <a href="/admin/delete/<?= $blog['id'] ?>">Delete</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>
