<?php
$host = $_POST['host'];
$port = $_POST['port'];
$mode = $_POST['mode'];
$encryption = $_POST['encryption'];
$email = $_POST['email'];
$password = $_POST['password'];
$connection = imap_open('{' . $host . ':' . $port . '/' . $mode . '/' . $encryption . '}INBOX', $email, $password) or die('Cannot connect to Gmail: ' . imap_last_error());
return $_POST;
