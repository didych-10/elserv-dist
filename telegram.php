<?php

$date = $_POST['date'];
$time = $_POST['time'];
$adress = $_POST['adress'];

$token = "1390388368:AAHh7PrOtBHBa58PsLYkUVWYhEIKVlkMfdw";
$chat_id = "386083989";
$arr = array ( 
    
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



