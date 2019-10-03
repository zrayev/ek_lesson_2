<?php

namespace Product;

class SimpleProduct extends AbstractProduct implements CanShippingInterface
{
    /**
     * @var float
     */
    public $weight;
    /**
     * @var string
     */
    public $color;
    /**
     * @var string
     */
    public $size;

    public function __construct($name = 'test', $description = 'test description')
    {
        $this->name = $name;
        $this->description = $description;
    }

    public function __toString()
    {
        return $this->name;
    }

    /**
     * @return float
     */
    public function getWeight(): float
    {
        return $this->weight;
    }

    /**
     * @param float $weight
     */
    public function setWeight($weight): void
    {
        $this->weight = $weight;
    }

    /**
     * @return string
     */
    public function getColor(): string
    {
        return $this->color;
    }

    /**
     * @param string $color
     */
    public function setColor($color): void
    {
        $this->color = $color;
    }

    /**
     * @return string
     */
    public function getSize(): string
    {
        return $this->size;
    }

    /**
     * @param string $size
     */
    public function setSize($size): void
    {
        $this->size = $size;
    }

    protected function prefixName($name)
    {
        // TODO: Implement prefixName() method.
    }

    public function doSell()
    {
        // TODO: Implement doSell() method.
    }

    public function doBuy()
    {
        // TODO: Implement doBuy() method.
    }

    public function getDiscount()
    {
        // TODO: Implement getDiscount() method.
    }

    public function canShipping()
    {
        // TODO: Implement canShipping() method.
    }
}
