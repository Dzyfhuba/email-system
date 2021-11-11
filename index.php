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
            <input type="hidden" name="_token" value="<?php echo $_SESSION['token'] ?? '' ?>">
            <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                <div class="container-fluid" style="background-color: gray;">
                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <label for="mode">Mode</label>
                                <select id="mode" class="form-control" name="mode" required>
                                    <option value="imap3">IMAP3</option>
                                    <option value="pop3">POP3</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-sm">
                            <div class="form-group">
                                <label for="host">Host</label>
                                <input id="host" class="form-control" type="text" name="host" required>
                            </div>
                        </div>
                        <div class="col-sm">
                            <div class="form-group">
                                <label for="port">Port</label>
                                <input id="port" class="form-control" type="text" name="port" required>
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
    <div id='loading' class="position-fixed" style="display: none; left: 50%; top: 50%; transform: translate(-50%, -50%);">
        <div class="lds-default">
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>
    <div class="alert alert-success alert-dismissible position-fixed" id='notification' style="display: none;">
        <button type="button" class="close" data-dismiss="alert">&times;</button>
        <strong>Success!</strong> Indicates a successful or positive action.
    </div>
    <div id="content" class="text-light container-fluid" style="display: none;">
        <?php //include('smtp/content.php') 
        ?>
        <?php //include('imap/get.php') 
        ?>
        <?php //include('connect.php'); 
        ?>
    </div>
    <a role="button" class="btn btn-light align-middle pb-0 m-1"><i class="material-icons">refresh</i></a>
    <div class="row align-items-center text-white position-fixed text-center m-0 w-100 h-100 text-capitalize font-weight-bolder" style='font-size: 4vw;' id='empty'>
        <div class="col">
            there are fields that have not been filled
        </div>
    </div>
    <script src="<?= $env['host_url'] . '/js/index.js' ?>"></script>
    <script src="//github.com/fyneworks/multifile/blob/master/jquery.MultiFile.min.js" type="text/javascript" language="javascript"></script>
</body>

</html>