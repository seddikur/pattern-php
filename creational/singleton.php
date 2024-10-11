<?php

final class Connection
{
    private static ?self $instance = null;
    private static string $name;

    /**
     * @return string
     */
    public static function getName(): string
    {
        return self::$name;
    }

    /**
     * @param string $name
     */
    public static function setName(string $name): void
    {
        self::$name = $name;
    }

    /**
     * Проверка на существование объекта
     * если нет создать
     * @return self
     */
    public static function getInstance(): self
    {
        if (self::$instance === null){
            self::$instance = new self();
        }
        return self::$instance;

    }

    /**
     * Запретить клонирование (для этого метод оставим пустой)
     * @param string $name
     * @param array $arguments
     * @return void
     */
    public function __call(string $name, array $arguments)
    {
        // TODO: Implement __call() method.
    }


    public function __wakeup(): void
    {
        // TODO: Implement __wakeup() method.
    }

}

$connection = Connection::getInstance();
$connection::setName('PHP');

$connection2 = Connection::getInstance();
var_dump($connection2::getName());
