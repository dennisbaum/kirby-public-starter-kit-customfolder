<?php
use Beebmx\KirbyEnv;

$envpath = dirname(__DIR__, 2);
KirbyEnv::load($envpath);

return [
    'debug' => env('DEBUG', false),
    'secret2' => env('SECRET2', 'default')
];