<?php
if( ! empty($_POST) ) {

    $data = (object) $_POST;
    $to = 'v.karasik@cd-life.by';
    $subject = 'Сборка Cервера №'. $data->num;
    
    $message = "Компания: " . $data->company . "<br>" . "Телефон: " . $data->tel . "<br>" .  "Конфигурация: " . $data->config .  "<br>" . "Цена: " . $data->price . " USD без НДС" .  "<br>" . "Количество: " . $data->number .  " шт" .  "<br>" . "Срок поставки: " . $data->avail .  " дн";
    
    $message = wordwrap($message, 70, "\r\n");

    $headers  = "Content-type: text/html; charset=utf-8 \r\n" .  "From: Конфигуратор <k.standart@cdls.by>\r\n";

    mail($to, $subject, $message, $headers);

    //echo ('Ваш запрос отправлен!');
} 
?>