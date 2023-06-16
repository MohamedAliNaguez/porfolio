<?php

require 'vendor/autoload.php';

use SendGrid\Mail\From;
use SendGrid\Mail\To;
use SendGrid\Mail\Mail;
use SendGrid\SendGrid;

// Set your SendGrid API key
$sendgrid_api_key = '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';

// Retrieve form data
$from_email = $_POST['email'];
$from_name = $_POST['name'];
$subject = $_POST['subject'];
$message = $_POST['message'];

// Create the SendGrid email object
$email = new Mail();
$email->setFrom(new From($from_email, $from_name));
$email->setSubject($subject);
$email->addTo(new To('silienislem@gmail.com')); // Replace with your desired recipient email address
$email->addContent("text/plain", $message);

// Send the email using SendGrid
$sendgrid = new SendGrid($sendgrid_api_key);
try {
    $response = $sendgrid->send($email);
    if ($response->statusCode() === 202) {
        echo "success";
    } else {
        echo "error";
    }
} catch (Exception $e) {
    echo "error";
}
