<?php

/* اسم قاعدة البيانات */
define( 'DB_NAME', 'qrcode_db' );

/* اسم مستخدم قاعدة البيانات */
define( 'DB_USER', 'root' );

/* كلمة مرور قاعدة البيانات */
define( 'DB_PASSWORD', '' );

/* عنوان خادم قاعدة البيانات */
define( 'DB_HOST', 'localhost' );

/* اعدادات الاتصال بقاعدة البيانات */
$mysqli = new mysqli(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME);

if($mysqli->connect_errno > 0){
	die('Unable to connect to database [' . $mysqli->connect_error . ']');
}
?>