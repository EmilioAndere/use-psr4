<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>HPP - <?= $this->e($title) ?></title>
</head>
<body>
    <?= $this->insert('partial::header') ?>
    <h1 class="font-thin">Hello, World!</h1>
    <?= $this->section('body') ?>
</body>
</html>