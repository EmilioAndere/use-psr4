<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title><?= $_ENV['APP_NAME'] ?> - <?= $this->e($title) ?></title>
</head>
<body class="relative min-100vh w-full overflow-hidden">
    
    <?= $this->insert('partial::sidebar') ?>
</body>
<script defer src="https://unpkg.com/alpinejs@3.2.3/dist/cdn.min.js"></script>
</html>