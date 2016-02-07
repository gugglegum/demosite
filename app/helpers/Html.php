<?php

namespace app\helpers;

/**
 * Хэлпер для экранирования строк для безопасной вставки в HTML.
 * Является по сути более простым аналогом функции htmlspecialchars()
 */
class Html
{
    /**
     * @param string $str
     * @return string
     */
    public static function encode($str)
    {
        return htmlspecialchars($str, ENT_COMPAT, 'UTF-8');
    }
}
