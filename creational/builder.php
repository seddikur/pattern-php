<?php

/**
 * Допустим, вы пришли в забегаловку, заказали бургер дня, и вам выдали его без вопросов. Это пример «Простой фабрики».
 * Но иногда логика создания состоит из большего количества шагов.
 * К примеру, при заказе бургера дня есть несколько вариантов хлеба, начинки, соусов, дополнительных ингредиентов.
 * В таких ситуациях помогает шаблон «Строитель».
 */

class Burger
{
    protected $size;

    protected $cheese = false;
    protected $pepperoni = false;
    protected $lettuce = false;
    protected $tomato = false;

    public function __construct(BurgerBuilder $builder)
    {
        $this->size = $builder->size;
        $this->cheese = $builder->cheese;
        $this->pepperoni = $builder->pepperoni;
        $this->lettuce = $builder->lettuce;
        $this->tomato = $builder->tomato;
    }
}

class BurgerBuilder
{
    public $size;

    public $cheese = false;
    public $pepperoni = false;
    public $lettuce = false;
    public $tomato = false;

    public function __construct($size)
    {
        $this->size = $size;
    }

    public function addPepperoni()
    {
        $this->pepperoni = true;
        return $this;
    }

    public function addCheese()
    {
        $this->cheese = true;
        return $this;
    }

    public function addLettuce()
    {
        $this->lettuce = true;
        return $this;
    }

    public function addTomato()
    {
        $this->tomato = true;
        return $this;
    }

    public function build(): Burger
    {
        return new Burger($this);
    }
}

$burger = (new BurgerBuilder(14))
    ->addPepperoni()
    ->addLettuce()
    ->addTomato()
    ->addCheese();
var_dump($burger);