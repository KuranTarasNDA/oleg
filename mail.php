<?php
//change this to your email.
$to = "test@gmail.com";
$email = $_POST['email'];
$subject = "Заявка с сайта Психотерапевт от" . $email;


$name = $_POST['name'];
$date = $_POST['date'];
$message = $_POST['message'];
$time = $_POST['time'];
$anonim = $_POST['anonim'];

if (!$name) {
    $name = $anonim;
}

//begin of HTML message
$message = '
Имя: ' . $name . '
Email: ' . $name . '
Дата: ' . $date . '
Время: ' . $time . '
Сообщение: ' . $message . '

';
//end of message
$headers = "From: Психотерапевт Прохоров Алексей \r\n";
$headers .= "Content-type: text/html\r\n";

mail($to, $subject, $message, $headers);

echo "Message has been sent....!";
print_r($message)
?>
