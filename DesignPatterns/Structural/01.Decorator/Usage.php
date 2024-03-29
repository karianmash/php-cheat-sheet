<?php

namespace DesignPatterns\Structural\Decorator;

require_once 'BasicProduct.php';
require_once 'Decorators/GiftWrapDecorator.php';
require_once 'Decorators/ExpressShippingDecorator.php';

use DesignPatterns\Structural\Decorator\Decorators\GiftWrapDecorator;
use DesignPatterns\Structural\Decorator\Decorators\ExpressShippingDecorator;

$basicProduct = new BasicProduct(20.0, 'Basic Product');
$giftWrapProduct = new GiftWrapDecorator($basicProduct, 5.0);
$expressShippingProduct = new ExpressShippingDecorator($basicProduct, 10.0);
$giftWrapAndExpressShippingProduct = new GiftWrapDecorator(new ExpressShippingDecorator($basicProduct, 10.0), 5.0);

echo $basicProduct->getDescription() . ' = $' . $basicProduct->getPrice() . PHP_EOL;
echo $giftWrapProduct->getDescription() . ' = $' . $giftWrapProduct->getPrice() . PHP_EOL;
echo $expressShippingProduct->getDescription() . ' = $' . $expressShippingProduct->getPrice() . PHP_EOL;
echo $giftWrapAndExpressShippingProduct->getDescription() . ' = $' . $giftWrapAndExpressShippingProduct->getPrice() . PHP_EOL;
