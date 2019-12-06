<?php


return [
    \GuzabaPlatform\Platform\Application\RedisConnection::class => [
        'host'      => '192.168.0.95',
        'port'      => 6379,
        'timeout' => 1.5,
        'password' => '',
        'database' => 0,
        'expiry_time' => 3600,
    ],
    \GuzabaPlatform\Platform\Application\MysqlConnectionCoroutine::class => [
        'host'      => '192.168.0.82',
        'port'      => 3306,
        'user'      => 'root',
        'password'  => 'rectoverso',
        'database'  => 'guzaba2',
        'tprefix'   => 'guzaba_',
    ],
    \GuzabaPlatform\Platform\Application\MysqlConnection::class => [
        'host'      => '192.168.0.82',
        'port'      => 3306,
        'user'      => 'root',
        'password'  => 'rectoverso',
        'database'  => 'guzaba2',
        'tprefix'   => 'guzaba_',
    ],


];
