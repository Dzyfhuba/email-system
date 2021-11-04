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
    <div class="container-fluid py-2" style="background-color: gray;">
        <form id="data" method="POST" action="javascript:void(0);">
            <div class="row">
                <div class="col">
                    <div class="form-group">
                        <label for="mode">Mode</label>
                        <select id="mode" class="form-control" name="mode" required>
                            <option value="smtp">SMTP</option>
                            <option value="imap3">IMAP3</option>
                            <option value="pop3">POP3</option>
                        </select>
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                        <label for="host">Host</label>
                        <input id="host" class="form-control" type="text" name="host" required>
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                        <label for="encryption">Encryption</label>
                        <input id="encryption" class="form-control" type="text" name="encryption" required>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input id="email" class="form-control" type="email" name="email" required>
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input id="password" class="form-control" type="password" name="password" autocomplete="true" required>
                    </div>
                </div>
            </div>
            <button id="save" type="submit" class="btn btn-primary w-100">Save</button>
            <button id="edit" class="btn btn-secondary w-100" style="display: none;">Edit</button>
        </form>
    </div>

    <div id="content" class="text-light container-fluid">
        <?php include ('smtp/content.php') ?>
    </div>
    <script src="<?= $env['host_url'] . '/js/index.js' ?>"></script>
</body>

</html>