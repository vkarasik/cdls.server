<meta http-equiv='refresh' content='3; url=http://cdls.by/server/'>
<meta charset="UTF-8" />
<link rel="stylesheet" href="css/main.min.css">

<?php
if (isset($_POST['name'])) {$name = $_POST['name']; if ($name == '') {unset($name);}}
if (isset($_POST['tel'])) {$tel = $_POST['tel']; if ($tel == '') {unset($tel);}}
 
if (isset($tel)){ //Если эти поля заполнены то..
 
$address = "k.standart@cdls.by"; // куда отправлять
$mes = "Серверное оборудование"; // тема письма
$send = mail ($address,$mes,"Content-type:text/plain; charset = UTF-8\r\nИмя:$name\r\nТелефон:$tel\r\n","From: k.standart@cdls.by\r\n"); // тело письма
if ($send == 'true') 
{echo "";} // здесь может быть сообщение пользователю, если его нет, и выводится тело документа
else {echo "Ошибка, сообщение не отправлено!";}
 
}
else
{
echo "Заполните пожалуйста все поля отмеченные звездочкой"; //здесь выводится сообщение, если поля name и tel не заполнены
}
?>
<body>
    <h2 style="color: #666">Спасибо! В ближайшее время с вами свяжется наш менеджер!</h1>
</body>