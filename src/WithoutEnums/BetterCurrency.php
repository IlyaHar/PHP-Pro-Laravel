<?php

namespace Hillel\WithoutEnums;

use Hillel\WithoutEnums\Currency;

class BetterCurrency extends \Hillel\WithoutEnums\Currency
{
    protected string $isoCode;

    private array $codes = ['USD', 'UAH', 'EUR'];

    public function __construct(string $isoCode)
    {
        $this->setIsoCode($isoCode);
    }
    private function setIsoCode(string $isoCode): void
    {
        if (!in_array($isoCode, $this->codes)) {
            throw new \Exception('Currency is incorrect');
        }
        $this->isoCode = $isoCode;
    }
}