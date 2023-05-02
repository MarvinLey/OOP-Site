# OOP-Site
PHP-Seite mit OOP

Erstellt mit XAMP auf Localhost.
Datenbankname = oop
Besteht aktuell aus zwei Tabellen, users und profiles.
CREATE TABLE users (
	user_id int(11) AUTO_INCREMENT PRIMARY KEY not null,
	user_uid TINYTEXT not null,
	user_pwd LONGTEXT not null,
	user_email TINYTEXT not null
	);

CREATE TABLE profiles (
	profile_id int not null AUTO_INCREMENT,
	profile_about TEXT not null,
	profile_introtitle TEXT not null,
	profile_introtext TEXT not null,
	user_id int,
	PRIMARY KEY (profile_id),
	FOREIGN KEY (user_id) REFERENCES users(user_id) ON DELETE CASCADE
);
