<?php
/**
 * Шаблон «Прототип» используется, когда типы создаваемых объектов определяются экземпляром-прототипом,
 * клонированным для создания новых объектов.
 * То есть шаблон позволяет дублировать существующий объект и модифицировать копию в соответствии с потребностями.
 * Без заморочек с созданием объекта с нуля и его настройкой.
 */

/**
 * Помните клонированную овечку Долли? Так вот, этот шаблон проектирования как раз посвящён клонированию.
 */

class Sheep{
    protected $name;
    protected $category;

    public function __construct($name, $category = 'Горные бараны')
    {
        $this->name = $name;
        $this->category = $category;
    }

    public function setName($name){
        $this->name = $name;
    }

    public function getName(){
        return $this->name;
    }

    public function setCategory($category){
        $this->category = $category;
    }

    public function getCategory(){
        return $this->category;
    }
}


$original = new Sheep('Jolly');

echo $original->getName();
echo $original->getCategory();
echo '<br>';

$cloned = clone $original;

$cloned->setName('Dolly');

echo $cloned->getName();
echo $cloned->getCategory();