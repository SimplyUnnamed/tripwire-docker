<?php

try {
    $mysql = new PDO(
        'mysql:host='.getenv('DB_HOST').';port='.getenv('DB_PORT').';dbname='.getenv('DB_NAME').';charset=utf8',
        getenv('DB_USERNAME'),
        getenv('DB_PASSWORD'),
        Array(
            PDO::ATTR_PERSISTENT     => true
        )
    );
} catch (PDOException $error) {
    error_log($error->getMessage());
}
