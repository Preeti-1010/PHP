<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2018-05-08 10:07:58 --> Severity: Error --> Call to undefined method User_model::insert_data() C:\xampp\htdocs\cidemo\application\controllers\Upload.php 35
ERROR - 2018-05-08 10:12:37 --> Severity: Error --> Call to undefined method User_model::insert_data() C:\xampp\htdocs\cidemo\application\controllers\Upload.php 36
ERROR - 2018-05-08 10:15:08 --> Severity: Notice --> Undefined variable: upload_data C:\xampp\htdocs\cidemo\application\controllers\Upload.php 36
ERROR - 2018-05-08 10:15:08 --> Severity: Warning --> Missing argument 2 for User_model::insert_data(), called in C:\xampp\htdocs\cidemo\application\controllers\Upload.php on line 36 and defined C:\xampp\htdocs\cidemo\application\models\user_model.php 88
ERROR - 2018-05-08 10:15:08 --> Severity: Notice --> Undefined variable: path_name C:\xampp\htdocs\cidemo\application\models\user_model.php 92
ERROR - 2018-05-08 10:15:08 --> Query error: Column 'image' cannot be null - Invalid query: INSERT INTO `registration` (`name`, `image`) VALUES (NULL, NULL)
ERROR - 2018-05-08 10:15:17 --> Severity: Notice --> Undefined variable: upload_data C:\xampp\htdocs\cidemo\application\controllers\Upload.php 36
ERROR - 2018-05-08 10:15:17 --> Severity: Warning --> Missing argument 2 for User_model::insert_data(), called in C:\xampp\htdocs\cidemo\application\controllers\Upload.php on line 36 and defined C:\xampp\htdocs\cidemo\application\models\user_model.php 88
ERROR - 2018-05-08 10:15:17 --> Severity: Notice --> Undefined variable: path_name C:\xampp\htdocs\cidemo\application\models\user_model.php 92
ERROR - 2018-05-08 10:15:17 --> Query error: Column 'image' cannot be null - Invalid query: INSERT INTO `registration` (`name`, `image`) VALUES (NULL, NULL)
ERROR - 2018-05-08 10:18:23 --> Severity: Warning --> Missing argument 2 for User_model::insert_data(), called in C:\xampp\htdocs\cidemo\application\controllers\Upload.php on line 36 and defined C:\xampp\htdocs\cidemo\application\models\user_model.php 88
ERROR - 2018-05-08 10:18:23 --> Severity: Notice --> Undefined variable: path_name C:\xampp\htdocs\cidemo\application\models\user_model.php 92
ERROR - 2018-05-08 10:18:23 --> Query error: Column 'image' cannot be null - Invalid query: INSERT INTO `registration` (`name`, `image`) VALUES ('C:/xampp/htdocs/cidemo/uploads/IMG_44805.JPG', NULL)
ERROR - 2018-05-08 10:46:38 --> Severity: Warning --> Missing argument 2 for User_model::insert_data(), called in C:\xampp\htdocs\cidemo\application\controllers\Upload.php on line 36 and defined C:\xampp\htdocs\cidemo\application\models\user_model.php 88
ERROR - 2018-05-08 10:46:38 --> Severity: Notice --> Undefined variable: path_name C:\xampp\htdocs\cidemo\application\models\user_model.php 92
ERROR - 2018-05-08 10:46:38 --> Query error: Column 'image' cannot be null - Invalid query: INSERT INTO `registration` (`name`, `image`) VALUES ('C:/xampp/htdocs/cidemo/uploads/IMG_44806.JPG', NULL)
ERROR - 2018-05-08 10:52:58 --> Severity: Notice --> Undefined index: image C:\xampp\htdocs\cidemo\application\controllers\Upload.php 36
ERROR - 2018-05-08 10:52:58 --> Severity: Warning --> Missing argument 2 for User_model::insert_data(), called in C:\xampp\htdocs\cidemo\application\controllers\Upload.php on line 36 and defined C:\xampp\htdocs\cidemo\application\models\user_model.php 88
ERROR - 2018-05-08 10:52:58 --> Severity: Notice --> Undefined variable: path_name C:\xampp\htdocs\cidemo\application\models\user_model.php 92
ERROR - 2018-05-08 10:52:58 --> Query error: Column 'image' cannot be null - Invalid query: INSERT INTO `registration` (`name`, `image`) VALUES (NULL, NULL)
ERROR - 2018-05-08 11:03:07 --> 404 Page Not Found: Img_upload/index
ERROR - 2018-05-08 11:05:18 --> 404 Page Not Found: Imgupload/index
ERROR - 2018-05-08 11:05:26 --> 404 Page Not Found: Imgupload/index
ERROR - 2018-05-08 11:05:47 --> 404 Page Not Found: Imgupload/add
ERROR - 2018-05-08 11:05:51 --> 404 Page Not Found: Imgupload/add
ERROR - 2018-05-08 11:08:19 --> Severity: Notice --> Undefined property: Imgupload::$registration C:\xampp\htdocs\cidemo\system\core\Model.php 73
ERROR - 2018-05-08 11:08:19 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near '(`name`, `email`, `picture`, `created`, `modified`) VALUES ('kj', 'jhjh@jhjh.com' at line 1 - Invalid query: INSERT INTO  (`name`, `email`, `picture`, `created`, `modified`) VALUES ('kj', 'jhjh@jhjh.com', 'IMG_44808.JPG', '2018-05-08 11:08:19', '2018-05-08 11:08:19')
ERROR - 2018-05-08 11:11:24 --> Severity: Notice --> Undefined property: Imgupload::$registration C:\xampp\htdocs\cidemo\system\core\Model.php 73
ERROR - 2018-05-08 11:11:24 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near '(`name`, `email`, `picture`, `created`, `modified`) VALUES ('kk', 'k@k.com', 'IM' at line 1 - Invalid query: INSERT INTO  (`name`, `email`, `picture`, `created`, `modified`) VALUES ('kk', 'k@k.com', 'IMG_44809.JPG', '2018-05-08 11:11:24', '2018-05-08 11:11:24')
ERROR - 2018-05-08 11:19:30 --> Query error: Unknown column 'picture' in 'field list' - Invalid query: INSERT INTO `registration` (`name`, `email`, `picture`, `created`, `modified`) VALUES ('jh', 'jhjh@jhjh.com', 'IMG_448010.JPG', '2018-05-08 11:19:30', '2018-05-08 11:19:30')
ERROR - 2018-05-08 11:20:47 --> Query error: Unknown column 'created' in 'field list' - Invalid query: INSERT INTO `registration` (`name`, `email`, `image`, `created`, `modified`) VALUES ('jh', 'jhjh@jhjh.com', 'IMG_448011.JPG', '2018-05-08 11:20:47', '2018-05-08 11:20:47')
ERROR - 2018-05-08 11:21:04 --> Query error: Unknown column 'created' in 'field list' - Invalid query: INSERT INTO `registration` (`name`, `email`, `image`, `created`, `modified`) VALUES ('hghghg', 'jhjh@jhjh.com', 'IMG_448012.JPG', '2018-05-08 11:21:04', '2018-05-08 11:21:04')
ERROR - 2018-05-08 11:22:50 --> Query error: Unknown column 'created' in 'field list' - Invalid query: INSERT INTO `registration` (`image`, `created`, `modified`) VALUES ('IMG_448013.JPG', '2018-05-08 11:22:50', '2018-05-08 11:22:50')
ERROR - 2018-05-08 12:12:11 --> 404 Page Not Found: Uploads/IMG_4465.JPG
ERROR - 2018-05-08 12:15:08 --> 404 Page Not Found: Uploads/IMG_4465.JPG
ERROR - 2018-05-08 12:15:38 --> 404 Page Not Found: Uploads/IMG_4466.JPG
ERROR - 2018-05-08 12:15:38 --> 404 Page Not Found: Uploads/IMG_4465.JPG
ERROR - 2018-05-08 12:15:43 --> 404 Page Not Found: Uploads/IMG_4466.JPG
ERROR - 2018-05-08 12:15:43 --> 404 Page Not Found: Uploads/IMG_4465.JPG
ERROR - 2018-05-08 12:27:37 --> 404 Page Not Found: Uploads/IMG_4466.JPG
ERROR - 2018-05-08 12:27:37 --> 404 Page Not Found: Uploads/IMG_4465.JPG
ERROR - 2018-05-08 12:27:51 --> 404 Page Not Found: Uploads/IMG_4465.JPG
ERROR - 2018-05-08 12:27:51 --> 404 Page Not Found: Uploads/IMG_4466.JPG
ERROR - 2018-05-08 12:28:08 --> 404 Page Not Found: Uploads/IMG_4465.JPG
ERROR - 2018-05-08 12:28:08 --> 404 Page Not Found: Uploads/IMG_4466.JPG
ERROR - 2018-05-08 12:30:39 --> 404 Page Not Found: Uploads/IMG_4465.JPG
ERROR - 2018-05-08 12:30:39 --> 404 Page Not Found: Uploads/IMG_4466.JPG
ERROR - 2018-05-08 12:31:11 --> 404 Page Not Found: Uploads/IMG_4465.JPG
ERROR - 2018-05-08 12:31:11 --> 404 Page Not Found: Uploads/IMG_4466.JPG
ERROR - 2018-05-08 12:31:52 --> 404 Page Not Found: Uploads/IMG_4466.JPG
ERROR - 2018-05-08 12:31:52 --> 404 Page Not Found: Uploads/IMG_4465.JPG
ERROR - 2018-05-08 12:32:07 --> 404 Page Not Found: Uploads/IMG_4466.JPG
ERROR - 2018-05-08 12:32:07 --> 404 Page Not Found: Uploads/IMG_4465.JPG
ERROR - 2018-05-08 12:32:58 --> 404 Page Not Found: Uploads/IMG_4466.JPG
ERROR - 2018-05-08 12:33:21 --> 404 Page Not Found: Uploads/IMG_4466.JPG
ERROR - 2018-05-08 12:33:41 --> 404 Page Not Found: Uploads/IMG_4466.JPG
ERROR - 2018-05-08 12:40:35 --> 404 Page Not Found: Uploads/IMG_4466.JPG
ERROR - 2018-05-08 12:42:58 --> 404 Page Not Found: Uploads/IMG_4466.JPG
ERROR - 2018-05-08 12:43:01 --> Severity: Parsing Error --> syntax error, unexpected 'echo' (T_ECHO) C:\xampp\htdocs\cidemo\application\views\edit.php 50
ERROR - 2018-05-08 12:43:56 --> Severity: Parsing Error --> syntax error, unexpected 'echo' (T_ECHO) C:\xampp\htdocs\cidemo\application\views\edit.php 50
ERROR - 2018-05-08 12:43:57 --> Severity: Parsing Error --> syntax error, unexpected 'echo' (T_ECHO) C:\xampp\htdocs\cidemo\application\views\edit.php 50
ERROR - 2018-05-08 12:44:00 --> Severity: Parsing Error --> syntax error, unexpected 'echo' (T_ECHO) C:\xampp\htdocs\cidemo\application\views\edit.php 50
ERROR - 2018-05-08 12:45:16 --> 404 Page Not Found: Uploads/IMG_4466.JPG
ERROR - 2018-05-08 12:48:51 --> 404 Page Not Found: Uploads/IMG_4466.JPG
ERROR - 2018-05-08 12:49:07 --> 404 Page Not Found: Uploads/IMG_4466.JPG
ERROR - 2018-05-08 12:49:53 --> 404 Page Not Found: Uploads/IMG_4466.JPG
ERROR - 2018-05-08 12:55:55 --> 404 Page Not Found: Uploads/IMG_4466.JPG
ERROR - 2018-05-08 12:56:14 --> 404 Page Not Found: Uploads/IMG_4466.JPG
ERROR - 2018-05-08 12:57:19 --> 404 Page Not Found: User/uploads
ERROR - 2018-05-08 12:57:19 --> 404 Page Not Found: User/uploads
ERROR - 2018-05-08 12:57:19 --> 404 Page Not Found: User/uploads
ERROR - 2018-05-08 12:57:40 --> 404 Page Not Found: Uploads/IMG_4466.JPG
ERROR - 2018-05-08 12:58:20 --> 404 Page Not Found: Uploads/IMG_4466.JPG
ERROR - 2018-05-08 13:22:00 --> 404 Page Not Found: Login/index
ERROR - 2018-05-08 13:22:19 --> Severity: Error --> Call to undefined method CI_Loader::send_mail() C:\xampp\htdocs\cidemo\application\controllers\user.php 140
ERROR - 2018-05-08 13:24:19 --> Severity: Warning --> mail(): Failed to connect to mailserver at &quot;localhost&quot; port 25, verify your &quot;SMTP&quot; and &quot;smtp_port&quot; setting in php.ini or use ini_set() C:\xampp\htdocs\cidemo\system\libraries\Email.php 1894
ERROR - 2018-05-08 13:29:46 --> Severity: Warning --> mail(): Failed to connect to mailserver at &quot;localhost&quot; port 25, verify your &quot;SMTP&quot; and &quot;smtp_port&quot; setting in php.ini or use ini_set() C:\xampp\htdocs\cidemo\system\libraries\Email.php 1894
ERROR - 2018-05-08 13:29:53 --> Severity: Warning --> mail(): Failed to connect to mailserver at &quot;localhost&quot; port 25, verify your &quot;SMTP&quot; and &quot;smtp_port&quot; setting in php.ini or use ini_set() C:\xampp\htdocs\cidemo\system\libraries\Email.php 1894
ERROR - 2018-05-08 13:39:01 --> Severity: Warning --> mail(): Failed to connect to mailserver at &quot;localhost&quot; port 25, verify your &quot;SMTP&quot; and &quot;smtp_port&quot; setting in php.ini or use ini_set() C:\xampp\htdocs\cidemo\system\libraries\Email.php 1894
ERROR - 2018-05-08 13:58:46 --> 404 Page Not Found: LanguageSwitcher/lang
ERROR - 2018-05-08 14:00:06 --> 404 Page Not Found: LanguageSwitcher/lang
ERROR - 2018-05-08 14:00:14 --> 404 Page Not Found: Lang/index
ERROR - 2018-05-08 14:01:10 --> 404 Page Not Found: Lang_view/index
ERROR - 2018-05-08 14:02:07 --> 404 Page Not Found: Lang_controller/lang_view
ERROR - 2018-05-08 14:15:55 --> Severity: Notice --> Array to string conversion C:\xampp\htdocs\cidemo\application\views\lang_view.php 33
