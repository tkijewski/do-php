<?php

if ($_ENV['ENV'] == 'dev') {
    $dsn = 'mongodb://'.$_ENV['MONGO_DB_HOST'];
} else {
    $dsn = 'mongodb+srv://'.$_ENV['MONGO_DB_HOST'];
}

return
    [
        'class' => '\yii\mongodb\Connection',
        'dsn' => $dsn,
        'options' => [
            "username" => $_ENV['MONGO_DB_USER'],
            "password" => $_ENV['MONGO_DB_PASS']
        ]
    ];