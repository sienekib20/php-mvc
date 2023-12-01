<?php

session_start();
use Dotenv\Dotenv;

require __DIR__ . '/../vendor/autoload.php';

$env = Dotenv::createImmutable(abs_path());
$env->load();

app()->init();