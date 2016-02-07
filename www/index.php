<?php
/**
 * Индексный файл, точка входа в приложение веб-сайта
 */

define('APPLICATION_ENV', 'development');

require_once __DIR__ . '/../init.php';

\app\App::run();
