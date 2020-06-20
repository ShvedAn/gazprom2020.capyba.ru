<?php
class MySQLiWorker {

    protected static $instance;  // object instance
    public $dbName;
    public $dbHost;
    public $dbUser;
    public $dbPassword;
    public $connectLink = null;

    //Чтобы нельзя было создать через вызов new MySQLiWorker
    private function __construct() { /* ... */
    }

    //Чтобы нельзя было создать через клонирование
    private function __clone() { /* ... */
    }

    //Чтобы нельзя было создать через unserialize
    private function __wakeup() { /* ... */
    }

    //Получаем объект синглтона
    public static function getInstance($dbName, $dbHost, $dbUser, $dbPassword) {
        if (is_null(self::$instance)) {
            self::$instance = new MySQLiWorker();
            self::$instance->dbName = $dbName;
            self::$instance->dbHost = $dbHost;
            self::$instance->dbUser = $dbUser;
            self::$instance->dbPassword = $dbPassword;
            self::$instance->openConnection();
        }
        return self::$instance;
    }

    //Определяем типы параметров запроса к базе и возвращаем строку для привязки через ->bind
    function prepareParams($params) {
        $retSTMTString = '';
        foreach ($params as $value) {
            if (is_int($value) || is_double($value)) {
                $retSTMTString.='d';
            }
            if (is_string($value)) {
                $retSTMTString.='s';
            }
        }
        return $retSTMTString;
    }

    //Соединяемся с базой
    public function openConnection() {
        if (is_null($this->connectLink)) {
            $this->connectLink = new mysqli($this->dbHost, $this->dbUser, $this->dbPassword, $this->dbName);
            $this->connectLink->query("SET NAMES utf8");
            if (mysqli_connect_errno()) {
                printf("Подключение невозможно: %s\n", mysqli_connect_error());
                $this->connectLink = null;
            } else {
                mysqli_report(MYSQLI_REPORT_ERROR);
            }
        }
        return $this->connectLink;
    }

    //Закрываем соединение с базой
    public function closeConnection() {
        if (!is_null($this->connectLink)) {
            $this->connectLink->close();
        }
    }

    //Преобразуем ответ в ассоциативный массив
    public function stmt_bind_assoc(&$stmt, &$out) {
        $data = mysqli_stmt_result_metadata($stmt);
        $fields = array();
        $out = array();
        $fields[0] = $stmt;
        $count = 1;
        $currentTable = '';
        while ($field = mysqli_fetch_field($data)) {
            if (strlen($currentTable) == 0) {
                $currentTable = $field->table;
            }
            $fields[$count] = &$out[$field->name];
            $count++;
        }
        call_user_func_array('mysqli_stmt_bind_result', $fields);
    }

}