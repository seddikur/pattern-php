<?php
/**
 * Фабричный метод (Factory Method) - паттерн, порождающий классы.
 *
 * Определяет интерфейс для создания объекта, но оставляет подклассам решение о том, какой класс инстанцировать.
 * Позволяет делегировать инстанцирование подклассам.
 *
 * Абстрактная фабрика часто реализуется с помощью фабричных методов.
 * Фабричные методы часто вызываются внутри шаблонных методов.
 */

//
interface Worker
{
    public  function  work();
}

class Developed implements Worker
{

    public function work()
    {
        printf('Я разработчик');
    }
}

class Designer implements Worker
{

    public function work()
    {
        printf('Я дезайнер');
    }
}


/**
 * Фабричный метод
 */
interface WorkerFactory
{
    public static function  make();
}

class DevelopedFactory implements WorkerFactory
{

    public static function make()
    {
        return new Developed();
    }
}

class DesignerFactory implements WorkerFactory
{

    public static function make()
    {
        return new Designer();
    }
}


$developer = DevelopedFactory::make();
$designer = DesignerFactory::make();

$developer->work();
$designer->work();