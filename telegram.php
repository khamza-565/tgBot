<?php

/* https://api.telegram.org/bot6950874329:AAFe_u8Y9pfwdkxBvA-3gX_bhpMbMpRzoVE/getUpdates,
где, XXXXXXXXXXXXXXXXXXXXXXX - токен вашего бота, полученный ранее */

$name = $_POST['user_name'];
$lastname = $_POST['user_lastname'];
$phone = $_POST['user_phone'];
$email = $_POST['user_email'];
$message = $_POST['user_message'];
$token = "6950874329:AAFe_u8Y9pfwdkxBvA-3gX_bhpMbMpRzoVE";
$chat_id = "-4097338037";
$arr = array(
  'Имя пользователя: ' => $name,
  'Фамилия пользователя' => $lastname,
  'Телефон: ' => $phone,
  'Email' => $email,
  'Сообщение' => $message 
);

foreach($arr as $key => $value) {
  $txt .= "<b>".$key."</b> ".$value."%0A";
};

$sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$txt}","r");

if ($sendToTelegram) {
  header('Location: thank-you.html');
} else {
  echo "Error";
}
?>