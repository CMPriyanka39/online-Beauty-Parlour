<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $recipient_email = $_POST['email'];
    $output = shell_exec('python send_email.py ' . escapeshellarg($recipient_email));
    echo $output;
}
?>