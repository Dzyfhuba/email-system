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

<body class="bg-dark">
    <div class="accordion" id="accordionExample">
        <form id="data" method="POST" action="javascript:void(0);">
            <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                <div class="container-fluid" style="background-color: gray;">
                    <div class="row">
                        <div class="col-sm">
                            <div class="form-group">
                                <label for="host">Host</label>
                                <input id="host" class="form-control" type="text" name="host" required>
                            </div>
                        </div>
                        <div class="col-sm">
                            <div class="form-group">
                                <label for="encryption">Encryption</label>
                                <input id="encryption" class="form-control" type="text" name="encryption" required>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm">
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input id="email" class="form-control" type="email" name="email" required>
                            </div>
                        </div>
                        <div class="col-sm">
                            <div class="form-group">
                                <label for="password">Password</label>
                                <input id="password" class="form-control" type="password" name="password" autocomplete="true" required>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <div>
                <button id="save" type="submit" class="btn btn-primary w-100 rounded-0" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">Edit</button>
            </div>
        </form>
    </div>
    <div id="content" class="text-light container-fluid">
        <?php //include('smtp/content.php') ?>
        <?php include('imap/get.php') ?>
    </div>
    <script src="<?= $env['host_url'] . '/js/index.js' ?>"></script>
    <script src="//github.com/fyneworks/multifile/blob/master/jquery.MultiFile.min.js" type="text/javascript" language="javascript"></script>
</body>

</html>