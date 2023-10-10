<?php

namespace Core;

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;

class SMTPMailer
{
    private PHPMailer $mail;

    public function __construct(
        string $fromEmail,
        bool $tls = true,
    )
    {
        try {
            $this->mail = new PHPMailer(true);
            $this->mail->SMTPDebug = SMTP::DEBUG_SERVER;
            $this->mail->isSMTP();
            $this->mail->Host = $_ENV['SMTP_HOST'];
            $this->mail->Port = $_ENV['SMTP_PORT'];
            $this->mail->SMTPAuth = true;
            $this->mail->Username = $_ENV['SMTP_LOGIN'];
            $this->mail->Password = $_ENV['SMTP_PASSWORD'];
            $this->mail->SMTPSecure = $tls ? PHPMailer::ENCRYPTION_STARTTLS : PHPMailer::ENCRYPTION_SMTPS;
            $this->mail->setFrom($fromEmail);
        } catch (Exception $e) {
            echo "ERROR: {$e->getMessage()}";
        }
    }

    public function send(
        string $subject,
        string $body,
        string $toEmail,
        string $toName
    ) {

    }

    /**
     * This function takes in  all the form fields as an array,
     * places them in the template, and sends it to your configure email.
     *
     * @param array $userData array with keys [name, email, mobile, extrainfo]
     * @param string $toEmail recipient of the data
     * @return bool
     */
    public function sendUserInfo(array $userData, string $toEmail) : bool {
        try {
            $this->mail->addAddress($toEmail);

            $template = file_get_contents(__DIR__ . "\\..\\emailTemplate.html");
            $body = str_replace(
                ["{{name}}", "{{email}}", "{{mobile}}", "{{extrainfo}}"],
                [$userData['name'], $userData['email'], $userData['mobile'], $userData['extrainfo']],
                $template
            );

            $this->mail->isHTML(true);
            $this->mail->Subject = "User Information";
            $this->mail->Body = $body;
            $this->mail->send();
        } catch (Exception $e) {
            // what do I want to happen if something went wrong?
            // for now, we return a bool;
            return false;
        }

        return true;
    }
}

