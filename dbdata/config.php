<?php 

	ini_set('display_errors', 1);

	define('DSN','mysql:host=localhost;dbname=massusers');
	define('DB_USERNAME','seita');
	define('DB_PASSWORD','Ffmania0930');

// massdataのデータベース情報
// create table massdata (
//     id int not null auto_increment primary key,
//     user_name text not null,
//     artist text not null,
//     title text not null,
//     youtube text,
//     comment text not null
// );