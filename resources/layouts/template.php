<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title><?= $_ENV['APP_NAME'] ?> - <?= $this->e($title) ?></title>
</head>
<body>
    <?= $this->insert('partial::header') ?>
    <?= $this->section('body') ?>
</body>
<script defer src="https://unpkg.com/alpinejs@3.2.3/dist/cdn.min.js"></script>
</html>