<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $this->renderSection('title') ?></title>
    <link rel="stylesheet" href="https://unpkg.com/bamboo.css">
</head>
<style>
    table {
        width: 100%;
        text-align: center;
    }

    th,
    td {
        padding: 8px;
        text-align: center;
    }
</style>


<body>
    <?= $this->renderSection('children') ?>
</body>

</html>