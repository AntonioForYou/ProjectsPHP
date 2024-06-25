<?php

class Database
{
    private static $instance = null;

    private $connection = null;

    protected function __construct()
    {
        $this->connection = new \PDO(
            'mysql:dbname=diagnostic_laboratory;host=127.0.0.1:3325', 'root', '',
                [
                    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
                    PDO::ATTR_EMULATE_PREPARES => false
                ]
            );
    }
    protected function __clone()
    {
    }

    public function __wakeup()
    {
        throw new \BadMethodCallException('Unable to deserialize database connection');
    }

    public static function getInstance()
    {
        if(null === self::$instance)
        {
            self::$instance = new static();
        }

        return self::$instance;
    }

    public static function connection()
    {
        return static::getInstance()->connection;
    }

    public static function prepare($statement)
    {
        return static::connection()->prepare($statement);
    }

    public static function lastInsertId()
    {
        return intval(static::connection()->lastInsertId());
    }
}