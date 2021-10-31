<?php
function isCurrentUrl($string)
{
    $url = $_SERVER['REQUEST_URI'];
    if (strpos($url, $string))
        return ' active';
    else
        return '';
}
?>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="<?= $env['host_url'] . "Email" ?>"><img src="<?= $env['host_url']."/img/email.png" ?>" width="30" height="30" alt=""> Email System</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item<?= isCurrentUrl('smtp') ?>">
                <a class="nav-link" href="<?= $env['host_url'] . "/smtp" ?>">SMTP <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item<?= isCurrentUrl('imap') ?>">
                <a class="nav-link" href="<?= $env['host_url'] . "/imap" ?>">IMAP</a>
            </li>
            <li class="nav-item<?= isCurrentUrl('pop3') ?>">
                <a class="nav-link" href="<?= $env['host_url'] . "/pop3" ?>">POP3</a>
            </li>
        </ul>
    </div>
</nav>