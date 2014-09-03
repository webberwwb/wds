<?php

// TODO:
// Match provided token with stored token
// Send email to ourselves with provided information

$to      = 'wds@dal.ca';
$subject = $_POST['subject'];
$message = $_POST['message'];
$from = $_POST['from'];
$headers = 'From: ' . $from . "\r\n" .
    'Reply-To: ' . $from . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

$errors = 0;

header('Content-type: application/json');

if (! preg_match('/^[A-Z0-9._%+-]+@[A-Z0-9.-]+\.[A-Z]{2,4}$/i', $from) ) {
	echo '{"error":"Email Address is Invalid."}';
	exit();
}

if (empty($subject)) {
	echo '{"error":"Subject cannot be empty."}';
	exit();
}

if (empty($message)) {
	echo '{"error":"Message cannot be empty."}';
	exit();
}

mail($to, $subject, $message, $headers);
echo '{"success":"Email has been sent."}';