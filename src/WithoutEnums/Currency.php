<?php

namespace Hillel\WithoutEnums;

use src\WithEnums\CurrencyEnum;

class Currency
{
    protected string $isoCode;

    public function __construct(string $isoCode)
    {
        $this->setIsoCode($isoCode);
    }

    public function getIsoCode(): string
    {
        return $this->isoCode;
    }

    private function setIsoCode(string $isoCode): void
    {
        if ( !ctype_upper($isoCode) || strlen($isoCode) != 3) {
            throw new \Exception('Currency is incorrect');
        }
        $this->isoCode = $isoCode;
    }

    public function equals(Currency $currency): bool
    {
        return $this == $currency;
    }
}