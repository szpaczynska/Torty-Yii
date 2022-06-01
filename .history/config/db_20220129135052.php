<?php

return [
    /*'class' => 'yii\db\Connection',
    'dsn' => 'mysql:host=localhost;dbname=yii2basic',
    'username' => 'root',
    'password' => '',
    'charset' => 'utf8',
    */

    // Schema cache options (for production environment)
    //'enableSchemaCache' => true,
    //'schemaCacheDuration' => 60,
    //'schemaCache' => 'cache',
    'class' => 'yii\db\Connection',
    'dsn' => 'pgsql:host=localhost;dbname=torty_php',
    'username' => 's46175',
    'password' => '',
    'charset' => 'utf8',
    'schemaMap' => [
    'pgsql'=> [
    'class'=>'yii\db\pgsql\Schema',
    'defaultSchema'=> 'cakes' //specify your schema here
    ]
    ], // PostgreSQL



];