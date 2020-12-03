<?php

$date = $_POST['date'];
$time = $_POST['time'];
$adress = $_POST['adress'];

$token = "1474463003:AAHDdWA2Mcb7EQGrmG1htKokNJ4KgQ_cnbA";
$chat_id = "536563418";
$arr = array( 
    'ДАТА: ' => $name,
    'ЧАС: ' => $time,
    'АДРЕС: ' => $adress
);

foreach($arr as $key => $value) {
    $txt .= "<b>".$key."/b".$value."%0A";
};

$sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$txt}","r");

 

if($sendToTelegram) {
    echo '<h1>Дякую</h1>';
} else {
    echo "Error";
}

?>



