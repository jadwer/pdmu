<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Bill managment">
    <meta name="keywords" content="bills, checkout, ventas, comandas, restaurante">
    <meta name="author" content="Gabino Ramírez">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?= $this->include('includes/style') ?>

    <title><?= $title ?></title>
</head>

<body>
    <?= $this->include('templates/header') ?>
    <main>
        <?= $this->renderSection('content') ?>
    </main>

    <?= $this->include('templates/footer') ?>
    <?= $this->include('includes/javascript') ?>
</body>

</html>   