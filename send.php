
<?php
// دریافت اطلاعات فرم
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

// ساخت پیام ایمیل
$to = "you@example.com";
$subject = "پیام جدید از فرم تماس";
$body = "نام: $name\nایمیل: $email\nپیام:\n$message";
$headers = "From: $email";

// خاموش کردن نمایش مستقیم ارورها به کاربر
error_reporting(0);

// تلاش برای ارسال ایمیل
if (mail($to, $subject, $body, $headers)) {
    echo "پیام با موفقیت ارسال شد. ممنون از شما!";
} else {
    echo "❗ پیام ارسال نشد. سرور ایمیل در این لحظه در دسترس نیست یا پیکربندی نشده است.";
}
?>