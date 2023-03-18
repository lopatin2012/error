<?php
  $to = "admin@yandex.com";
  $subject = "Ошибка на сайте";
  $message = "Текст ошибки: " . $_POST['error-text'];
  $headers = "From: user@yandex.com" . "\r\n" .
    "Reply-To: user@yandex.com" . "\r\n" .
    "X-Mailer: PHP/" . phpversion();
  mail($to, $subject, $message, $headers);
?>