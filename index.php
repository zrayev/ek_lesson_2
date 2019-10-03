<?php

require_once 'vendor/autoload.php';

use Product\SimpleProduct;
use Product\VirtualProduct;

$simpleProduct = new SimpleProduct();
echo $simpleProduct;
$simpleProduct->getInfo($simpleProduct->getName(), $simpleProduct->getDescription());

$virtualProduct = new VirtualProduct();
$virtualProduct->setQty(20);
$virtualProduct->setPrice(175);
$virtualProduct->costCalculate($virtualProduct->getPrice(), $virtualProduct->getPrice());
