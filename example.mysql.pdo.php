<?php
return (function(){
    $hostname = 'localhost';
    $database = 'ISYS42833xx';
    $username = 'ISYS42833xx';
    $password = 'P@55w0rd';

    $pdo = new PDO("mysql:host=$hostname;
        charset=UTF8;
        dbname=$database",
        $username,
        $password
    );
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    return $pdo;
})();
