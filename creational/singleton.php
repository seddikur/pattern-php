<?php

/**
 * Одиночка (Singleton) - паттерн, порождающий объекты.
 *
 * Гарантирует, что у класса есть только один экземпляр, и предоставляет к нему глобальную точку доступа.
 *
 * С помощью паттерна одиночка могут быть реализованы многие паттерны (абстрактная фабрика, строитель, прототип).
 */


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
        if (self::$instance === null) {
            self::$instance = new self();
        }
        return self::$instance;

    }

    /**
     * Запретить клонирование (для этого метод private)
     * @return void
     */
    public function __clone(): void
    {
    }


    /**
     * Конструктор закрыт
     */
    private function __construct()
    {
    }

    /**
     * Десериализация запрещена
     * @return void
     */
    public function __wakeup(): void
    {
    }

}

$connection = Connection::getInstance();
$connection::setName('PHP');


$connection2 = Connection::getInstance();
$connection2::setName('PHP2');
var_dump($connection::getName());
var_dump($connection2::getName());
