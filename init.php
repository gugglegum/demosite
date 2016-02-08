<?php
/**
 * Скрипт инициализации окружения
 */

if (file_exists(__DIR__ . '/init.local.php')) {
    require(__DIR__ . '/init.local.php');
}

// Инициализация базовых констант
defined('PSR4_ROOT')
    || define('PSR4_ROOT', realpath(__DIR__));
defined('APPLICATION_PATH')
    || define('APPLICATION_PATH', PSR4_ROOT . '/app');
defined('APPLICATION_ENV')
    || define('APPLICATION_ENV', 'production');

// Инициализация автолоадера классов
require_once(APPLICATION_PATH . '/AutoLoader.php');
$autoLoader = new \app\AutoLoader(APPLICATION_PATH);
spl_autoload_register([$autoLoader, 'autoload'], true);
