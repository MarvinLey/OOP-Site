# OOP-Site
PHP-Site with OOP

Dont forget to add your Database:
CREATE TABLE users (
	user_id int(11) AUTO_INCREMENT PRIMARY KEY not null,
	user_uid TINYTEXT not null,
	user_pwd LONGTEXT not null,
	user_email TINYTEXT not null
	);
  And make your changes in the connect() function in dbh.classes.php
