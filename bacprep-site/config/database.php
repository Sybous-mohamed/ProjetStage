<?php
$host = 'localhost';       // السيرفر ديالك، غالباً localhost
$dbname = 'mon_site';      // اسم قاعدة البيانات ديالك
$user = 'root';            // اسم المستخدم ديال MySQL
$pass = '';                // كلمة السر، غالباً فارغة ف local

try {
    $dsn = "mysql:host=$host;dbname=$dbname;charset=utf8";
    $options = array(
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,       // لعرض الأخطاء
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,  // النتائج كمصفوفة مرتبطة
    );
    $conn = new PDO($dsn, $user, $pass, $options);
} catch (PDOException $e) {
    die("Erreur de connexion à la base de données : " . $e->getMessage());
}