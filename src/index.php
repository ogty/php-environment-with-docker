<?php

echo 'Docker Local';

$dsn = 'mysql:host='.$_ENV['MYSQL_HOST']
     .';dbname='.$_ENV['MYSQL_DATABASE'];

$dbh = new PDO($dsn, $_ENV['MYSQL_USER'], $_ENV['MYSQL_PASSWORD']);

foreach($dbh->query('SHOW databases') as $row) {
    echo '<pre>';
    print_r($row);
    echo '</pre>';
}

phpinfo();
