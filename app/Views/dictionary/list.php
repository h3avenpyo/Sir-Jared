<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dictionary</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="<?= base_url('css/style.css') ?>">
</head>
<body>


<nav class="navbar navbar-dict">
    <div class="container">
        <a class="navbar-brand" href="<?= base_url('dictionary') ?>">
            <i class="bi bi-book"></i> WordVault
        </a>
        <a href="<?= base_url('dictionary/create') ?>" class="btn-add">
            <i class="bi bi-plus-lg"></i> Add Word
        </a>
    </div>
</nav>


<div class="container mt-4">
    <div class="page-header">
        <h2>Dictionary</h2>
        <span class="stats-badge"><?= count($words) ?> words</span>
    </div>

    <?php if(empty($words)): ?>
    <div class="empty-state">
        <i class="bi bi-journal-text"></i>
        <p>No words yet. Add your first word!</p>
        <a href="<?= base_url('dictionary/create') ?>" class="btn-add mt-3">
            <i class="bi bi-plus-lg"></i> Add Word
        </a>
    </div>
    <?php else: ?>

    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 g-4">
    <?php foreach($words as $w): ?>
        <div class="col">
            <div class="card word-card h-100">
                <div class="card-body">
                    <h5 class="card-title"><?= $w->word ?></h5>
                    <p class="card-text"><?= $w->meaning ?></p>
                </div>
                <div class="card-footer">
                    <a href="<?= base_url('dictionary/edit/'.$w->id) ?>" class="btn-edit">
                        <i class="bi bi-pencil"></i> Edit
                    </a>
                    <a href="<?= base_url('dictionary/delete/'.$w->id) ?>" class="btn-delete" onclick="return confirm('Delete this word?')">
                        <i class="bi bi-trash"></i> Delete
                    </a>
                </div>
            </div>
        </div>
    <?php endforeach; ?>
    </div>

    <?php endif; ?>
</div>

</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</html>