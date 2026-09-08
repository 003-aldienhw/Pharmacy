<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="<?= base_url('css/app.css') ?>?v=<?= filemtime(FCPATH . 'css/app.css') ?>">

    <title><?= $title ?? 'Pharmacy' ?></title>
</head>

<body>
    <?= view($page) ?>
</body>
</html>