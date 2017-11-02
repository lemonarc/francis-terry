<?php

namespace FrancisTerry\Orders;

use SendGrid;
use FrancisTerry\Orders\MailProvider;

require_once '../../vendor/autoload.php';
require_once '../env.php';

class StaffMailer {
    private $recipientName;
    private $recipientEmail;
    private $mailer;

    public function __construct(MailProvider $mailer)
    {
        $this->recipientName = getenv('TASTER_DAY_STAFF_NAME');
        $this->recipientEmail = getenv('TASTER_DAY_STAFF_EMAIL');
        $this->mailer = $mailer;
    }

    public function send($customerName, $customerEmail, $customerPhone, $dayDescription, $message) {
        $subject = "Taster Day Booking";
        $to = new SendGrid\Email($this->recipientName, $this->recipientEmail);

        $content = "<h3>New booking from Francis Terry website</h3>";
        $content .= "<p>";
        $content .= "Booking name: " . $customerName . "<br/>";
        $content .= "Booking email: " . $customerEmail . "<br/>";
        $content .= "Booking telephone: " . $customerPhone . "<br/>";
        $content .= "Booking: " . $dayDescription . "<br/>";
        $content .= "Message: " . $message . "<br/>";
        $content .= "</p>";

        $content = new SendGrid\Content("text/html", $content);

        return $this->mailer->send($to, $subject, $content);
    }
}
