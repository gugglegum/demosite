<?php

namespace app;

/**
 * Автозагрузчик для классов PHP
 *
 * Автоматически подключает требуемые классы именно в тот момент, когда они нужны. Для нахождения используется
 * связь между именем класса (включая пространство имён) и путем к PHP-файлу на диске.
 *
 * @package app
 */
class AutoLoader
{
    public function autoload($class)
    {
        $classFile = PSR4_ROOT . '/' . str_replace(["\\", '_'], ['/', '/'], $class) . '.php';
        if (file_exists($classFile)) {
            require_once($classFile);
        }
    }
}
