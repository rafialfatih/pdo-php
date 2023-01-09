<?php

require 'helpers.php';
require 'Database.php';
// require 'router.php';

$config = require 'config.php';

$db = new Database($config['database']);

$posts = $db->query("SELECT * FROM posts")->fetchAll(PDO::FETCH_ASSOC);

dd($posts);
