<?php

namespace FrancisTerry\Orders;

use SendGrid;
use Handlebars\Handlebars;

require_once '../../vendor/autoload.php';
require_once '../env.php';

class CustomerMailer {
    private $mailer;

    public function __construct(MailProvider $mailer)
    {
        $this->mailer = $mailer;
    }

    public function send($customerName, $customerEmail, $bookingReference, $dayDescription, $bookingTotal) {
        $handlebars = new Handlebars;
        $template = file_get_contents('../../email/email.html');
        $content = $handlebars->render($template,
            [
                'booking_reference' => $bookingReference,
                'type_taster' => $dayDescription,
                'booking_total' => '£' . number_format((float)($bookingTotal / 100), 2)
            ]
        );

        $subject = "Taster Day Booking";
        $to = new SendGrid\Email($customerName, $customerEmail);
        $content = new SendGrid\Content("text/html", $content);

        return $this->mailer->send($to, $subject, $content);
    }
}
