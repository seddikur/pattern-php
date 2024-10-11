<?php

interface Worker
{
    public  function  work();
}

class Developer implements Worker
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
 * Фабрика
 */
class WorkerFactory
{
    public static function make($workerTitle): ?Worker
    {
        //strtoupper — Приводит строку к верхнему регистру
        $className = strtoupper($workerTitle);

        if(class_exists($className)){
            return new $className;
        }
        return null;

    }
}

$developer = WorkerFactory::make('developer');
$developer->work();