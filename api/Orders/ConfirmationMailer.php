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

    public function send($customerName, $customerEmail, $customerPhone, $dayDescription, $message) {
        $from = new SendGrid\Email("Francis Terry Website", "noreply@ftanda.co.uk");
        $subject = "Taster Day Booking";
        $to = new SendGrid\Email($this->name, $this->email);

        $content = "<h3>New booking from Francis Terry website</h3>";
        $content .= "<p>";
        $content .= "Booking name: " . $customerName . "<br/>";
        $content .= "Booking email: " . $customerEmail . "<br/>";
        $content .= "Booking telephone: " . $customerPhone . "<br/>";
        $content .= "Booking: " . $dayDescription . "<br/>";
        $content .= "Message: " . $message . "<br/>";
        $content .= "</p>";

        $content = new SendGrid\Content("text/html", $content);

        $mail = new SendGrid\Mail($from, $subject, $to, $content);

        $apiKey = getenv('SENDGRID_API_KEY');
        $sendgrid = new \SendGrid($apiKey);

        return $sendgrid->client->mail()->send()->post($mail);
    }
}
