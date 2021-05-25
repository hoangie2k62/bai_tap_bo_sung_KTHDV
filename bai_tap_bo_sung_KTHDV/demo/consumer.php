<?php
require_once __DIR__ . '/vendor/autoload.php';
use PhpAmqpLib\Connection\AMQPStreamConnection;

$connection = new AMQPStreamConnection('localhost', 5672, 'guest', 'guest');
$channel = $connection->channel();

$channel->queue_declare('email_queue', false, false, false, false);

echo ' * Dang cho tin nhan. Nhan CTRL + C de thoat', "\n";

$callback = function($msg){

    echo " * Dang gui tin nha", "\n";
    $data = json_decode($msg->body, true);

    $from = $data['from'];
    $from_email = $data['from_email'];
    $to_email = $data['to_email'];
    $subject = $data['subject'];
    $message = $data['message'];

    $transport = new Swift_SmtpTransport('smtp.gmail.com', 465, 'ssl');
    $transport->setUsername('test920763@gmail.com')->setPassword('qbmhwtgyvkladpvw');
    
    $mailer = new Swift_Mailer($transport);

    $mail = new Swift_Message($transport);
    $mail
	->setSubject($subject)
        ->setFrom(array($from_email => $from))
        ->setTo(array($to_email))
        ->setBody($message);

    $mailer->send($mail);

    echo " * Da gui email", "\n";
    $msg->delivery_info['channel']->basic_ack($msg->delivery_info['delivery_tag']);
};

$channel->basic_qos(null, 1, null);
$channel->basic_consume('email_queue', '', false, false, false, false, $callback);

while(count($channel->callbacks)) {
    $channel->wait();
}
?>
