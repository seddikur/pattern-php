<?php

/**
 * Допустим, вы строите дом и вам нужны двери. Будет бардак, если каждый раз, когда вам требуется дверь, вы станете вооружаться инструментами и делать её на стройплощадке. Вместо этого вы закажете двери на фабрике.
 *
 * Вкратце
 * Простая фабрика просто генерирует экземпляр для клиента без предоставления какой-либо логики экземпляра.
 */
class Product
{
    private string $name;

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName(string $name): void
    {
        $this->name = $name;
    }

}

/**
 * Фабрика
 */
class ProductFactory
{
    public static function make(): Product
    {
        return new Product();
    }
}

$product = ProductFactory::make();
$product->setName('Блокнот');
var_dump($product->getName());