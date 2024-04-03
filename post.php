<?php
// اطلاعات عکس را دریافت
$imageData = $_POST['image'];

// تبدیل داده Base64 به فرمت فایل تصویر
list($type, $imageData) = explode(';', $imageData);
list(, $imageData) = explode(',', $imageData);
$imageData = base64_decode($imageData);

// ذخیره عکس در سرور
$fileName = 'uploads/' . uniqid() . '.png'; // مسیر و نام فایل جدید
file_put_contents($fileName, $imageData);

echo "آدرس عکس: " . $fileName;
?>
