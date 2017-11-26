<?php
define('APP', substr(str_replace("\\","/", __DIR__), 0,-7).'/src');
define('SMARTY_CACHE', false);
define('DB_HOST', 'localhost');
define('DB_USER','root');
define('DB_PASSWORD', '');
define('DB_NAME','taskmanager');
define('DB_CHARSET', 'utf8');