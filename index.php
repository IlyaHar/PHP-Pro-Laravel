<?php


use Hillel\WithEnums\Currency;
use Hillel\WithEnums\CurrencyEnum;
use Hillel\WithEnums\Money;

require_once 'autoload.php';


$euro = new Currency(CurrencyEnum::EUR);
$dollar = new Currency(CurrencyEnum::USD);

$money = new Money(150, $dollar);
echo $money->getAmount() . PHP_EOL . $money->getCurrency()->getName() . '<br>';
echo $money->getAmount() . PHP_EOL . $money->getCurrency()->getSymbol() . '<br>';


$money2 = new Money(150, $dollar);
$result = $money2->add($money);
echo $result->getAmount() . PHP_EOL . $money->getCurrency()->getName() . '<br>';
echo $result->getAmount() . PHP_EOL. $money2->getCurrency()->getSymbol() . '<br>';

var_dump($money->equals($money2));

//$c1 = new BetterCurrency('EUR');
//$c2 = new BetterCurrency('EUR');
//
//$m1 = new Money(150, $c1);
//echo $m1->getAmount() . PHP_EOL . $m1->getCurrency()->getIsoCode() . '<br>';
//
//$m2 = new Money(150, $c2);
//$res = $m1->add($m2);
//echo $res->getAmount() . PHP_EOL . $m1->getCurrency()->getIsoCode() . '<br>';
//
//var_dump($m1->equals($m2));