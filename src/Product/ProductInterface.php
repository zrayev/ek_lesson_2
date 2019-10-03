<?php

namespace Product;

interface ProductInterface
{
    public function doSell();

    public function doBuy();

    public function getDiscount();

    public function getInfo($name, $description);
}
