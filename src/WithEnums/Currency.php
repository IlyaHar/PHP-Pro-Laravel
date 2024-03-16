<?php

namespace src\WithEnums;

class Currency
{
    private CurrencyEnum $isoCode;

    public function __construct(CurrencyEnum $isoCode)
    {
        $this->setIsoCode($isoCode);
    }

    public function getName(): string
    {
        return $this->isoCode->name;
    }

    public function getSymbol(): string
    {
        return $this->isoCode->value;
    }

    private function setIsoCode(CurrencyEnum $isoCode): void
    {
        $this->isoCode = $isoCode;
    }

    public function equals(Currency $currency): bool
    {
        return $this == $currency;
    }
}