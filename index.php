<!DOCTYPE html>
<html lang="en">
<?php require('env.php') ?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Email System</title>
    <link rel="icon" href="<?= $env['icon'] ?>" type="image/x-icon">

    <?php include('layouts/dependencies.php') ?>
</head>

<body>
    <?php require('layouts/navbar.php') ?>
    <?php echo $env['host_url'] ?>
    <?php echo $_SERVER['REQUEST_URI'] ?>
</body>

</html>