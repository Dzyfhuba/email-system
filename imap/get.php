<?php
if (!function_exists('imap_open')) {
    echo "IMAP is not configured.";
    exit();
} else {

    /* Connecting Gmail server with IMAP */

    $host = $_POST['host'];
    $port = $_POST['port'];
    $mode = $_POST['mode'];
    $encryption = $_POST['encryption'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    echo 'asd1';
    $connection = imap_open('{' . $host . ':' . $port . '/' . $mode . '/' . $encryption . '}INBOX', $email, $password) or die('Cannot connect to Gmail: ' . imap_last_error());
    // $MC = imap_check($connection);
    /* Search Emails having the specified keyword in the email subject */
    $emailData = imap_sort($connection, SORTDATE, 10);

    $result = array();
    if (!empty($emailData)) {

        $i = 0;
        foreach ($emailData as $emailIdent) {
            if ($i++ > 20) {
                break;
            }
            $overview = imap_fetch_overview($connection, $emailIdent, 0);
            $message = imap_fetchbody($connection, $emailIdent, '1.1');
            $messageExcerpt = substr($message, 0, 150);
            $partialMessage = trim(quoted_printable_decode($messageExcerpt));
            $date = date("d F, Y", strtotime($overview[0]->date));
            array_push($result[$i], $overview);
            array_push($result[$i], $message);
            array_push($result[$i], $messageExcerpt);
            array_push($result[$i], $partialMessage);
            array_push($result[$i], $date);
        } // End foreach

    } // end if
    imap_close($connection);
    return $result;
}
