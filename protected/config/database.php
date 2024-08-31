<?php

// This is the database connection configuration.
return array(
	// 'connectionString' => 'sqlite:' . dirname(__FILE__) . '/../data/blog.db',
	// uncomment the following lines to use a MySQL database
	'connectionString' => 'mysql:host=localhost;dbname=yii_blog',
	'emulatePrepare' => true,
	'username' => 'user_yii_blog',
	'password' => 'yii',
	'charset' => 'utf8',
	'tablePrefix' => 'tbl_',
);
