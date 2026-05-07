<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Word</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="<?= base_url('css/style.css') ?>">
</head>
<body>

<!-- Navbar -->
<nav class="navbar navbar-dict">
    <div class="container">
        <a class="navbar-brand" href="<?= base_url('dictionary') ?>">
            <i class="bi bi-book"></i> WordVault
        </a>
    </div>
</nav>

<!-- Content -->
<div class="container mt-4">
    <a href="<?= base_url('dictionary') ?>" class="btn-back mb-3">
        <i class="bi bi-arrow-left"></i> Back to Dictionary
    </a>

    <div class="page-header">
        <h2><i class="bi bi-pencil-square"></i> Edit Word</h2>
    </div>

    <div class="card-form">
        <form method="post" action="<?= base_url('dictionary/update/'.$word->id) ?>">
            <?= csrf_field() ?>
            <div class="mb-3">
                <label class="form-label-custom">Word</label>
                <input type="text" name="word" value="<?= $word->word ?>" class="form-control" required>
            </div>

            <div class="mb-4">
                <label class="form-label-custom">Meaning</label>
                <textarea name="meaning" class="form-control" rows="4" required><?= $word->meaning ?></textarea>
            </div>

            <button type="submit" class="btn-update">
                <i class="bi bi-check-lg"></i> Update Word
            </button>
        </form>
    </div>
</div>

</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</html>