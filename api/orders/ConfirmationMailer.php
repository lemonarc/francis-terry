<?php

namespace FrancisTerry\Orders;

use SendGrid;

require_once '../../vendor/autoload.php';
require_once '../env.php';

class ConfirmationMailer {
    private $name;
    private $email;

    public function __construct()
    {
        $this->name = getenv('TASTER_DAY_STAFF_NAME');
        $this->email = getenv('TASTER_DAY_STAFF_EMAIL');
    }

    public function send($customerName, $customerEmail, $dayDescription) {
        $from = new SendGrid\Email("Francis Terry Website", "noreply@ftanda.co.uk");
        $subject = "Taster Day Booking";
        $to = new SendGrid\Email($this->name, $this->email);

        $content = "New booking from Francis Terry website\r\n";
        $content .= "\r\n";
        $content .= "Booking name: " . $customerName . "\r\n";
        $content .= "Booking email: " . $customerEmail . "\r\n";
        $content .= "Booking: " . $dayDescription . "\r\n";

        $content = new SendGrid\Content("text/plain", $content);

        $mail = new SendGrid\Mail($from, $subject, $to, $content);

        $apiKey = getenv('SENDGRID_API_KEY');
        $sendgrid = new \SendGrid($apiKey);

        return $sendgrid->client->mail()->send()->post($mail);
    }
}
