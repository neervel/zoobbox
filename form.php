<!-- center-dent@yandex.ru -->
<?php
$headers = "From: admin@center-dent.ru";
$message = print_r($_POST,true);
// @mail('klihopoy@mail.ru', 'Форма с сайта use-use.ru', $message, $headers);
@mail('info@center-dent.ru', 'Заявка с лендинга', $message, $headers);
echo "ok";
?>
