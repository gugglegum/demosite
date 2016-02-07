<?php

namespace app\db;

/**
 * Класс-обёртка на стандартный класс mysqli
 *
 * @package app\db
 */
class Mysqli extends \mysqli
{
    public function __construct($host, $user, $pass, $db)
    {
        parent::init();

        if (!parent::real_connect($host, $user, $pass, $db)) {
            throw new Exception('Ошибка подключения (' . mysqli_connect_errno() . ') ' . mysqli_connect_error());
        }

        if (!$this->set_charset('utf8')) {
            throw new Exception('Ошибка при загрузке набора символов utf8: ' . $this->error);
        }
    }

    /**
     * Заключает значение в $str в кавычки и экранирует все кавычки внутри $str
     *
     * Необходима для безопасного подставления значения в SQL-запрос и защиты от атаки SQL-injection.
     *
     * @param string $str
     * @return string
     */
    public function quote($str)
    {
        return "'" . $this->real_escape_string($str) . "'";
    }

    public function query($query, $resultMode = MYSQLI_STORE_RESULT)
    {
        if (($result = parent::query($query, $resultMode)) === false) {
            throw new Exception('DB error: (' . $this->errno . ') ' . $this->error);
        }
        return $result;
    }
}
