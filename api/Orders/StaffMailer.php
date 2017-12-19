<?php

namespace FrancisTerry\Orders;

use SendGrid;
use FrancisTerry\Orders\MailProvider;

require_once '../../vendor/autoload.php';
require_once '../env.php';

class StaffMailer {
    private $recipients;
    private $mailer;

    public function __construct(MailProvider $mailer)
    {
        $this->recipients = explode(',', getenv('TASTER_DAY_STAFF_EMAIL'));
        $this->mailer = $mailer;
    }

    public function send($customerName, $customerEmail, $customerPhone, $dayDescription, $bookingReference, $message) {
        $subject = "Taster Day Booking";

        $content = "<h3>New booking from Francis Terry website</h3>";
        $content .= "<p>";
        $content .= "Booking reference: " . $bookingReference . "<br/>";
        $content .= "Booking name: " . $customerName . "<br/>";
        $content .= "Booking email: " . $customerEmail . "<br/>";
        $content .= "Booking telephone: " . $customerPhone . "<br/>";
        $content .= "Booking: " . $dayDescription . "<br/>";
        $content .= "Message: " . $message . "<br/>";
        $content .= "</p>";

        $content = new SendGrid\Content("text/html", $content);

        foreach ($this->recipients as $email) {
            $to = new SendGrid\Email(null, $email);
            $this->mailer->send($to, $subject, $content);
        }
    }
}
