<?php

namespace FrancisTerry\Orders;

use SendGrid;

require_once '../../vendor/autoload.php';
require_once '../env.php';

class MailProvider {
    protected $sendgrid;

    public function __construct()
    {
        $this->sendgrid = new \SendGrid(getenv('SENDGRID_API_KEY'));
    }

    public function send($to, $subject, $content) {
        $from = new SendGrid\Email("Francis Terry Website", "noreply@ftanda.co.uk");
        $mail = new SendGrid\Mail($from, $subject, $to, $content);


        return $this->sendgrid->client->mail()->send()->post($mail);
    }
}
