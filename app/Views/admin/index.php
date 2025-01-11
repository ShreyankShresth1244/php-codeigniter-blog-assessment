<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<?php include(APPPATH . 'Views/layout/navbar.php'); ?>
    <div class="container mt-5">
        <h1 class="text-primary mb-4">Admin Panel</h1>
        <a href="/admin/create" class="btn btn-primary mb-3"><i class="bi bi-plus-circle"></i> Add New Blog</a>
        <div class="table-responsive shadow-sm">
            <table class="table table-bordered table-hover">
                <thead class="table-primary">
                    <tr>
                        <th>Title</th>
                        <th>Author</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($blogs as $blog): ?>
                        <tr>
                            <td><?= esc($blog['title']) ?></td>
                            <td><?= esc($blog['author']) ?></td>
                            <td>
                                <a href="/admin/edit/<?= esc($blog['id']) ?>" class="btn btn-warning btn-sm me-2"><i class="bi bi-pencil"></i> Edit</a>
                                <a href="/admin/delete/<?= esc($blog['id']) ?>" class="btn btn-danger btn-sm"><i class="bi bi-trash"></i> Delete</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>

    <!-- Bootstrap JS with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Bootstrap Icons (Optional) -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
</body>
</html>
