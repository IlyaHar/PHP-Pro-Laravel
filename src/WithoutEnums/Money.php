<?php

namespace src\WithoutEnums;

class Money
{
    private int|float $amount;
    private Currency $currency;

    public function __construct(int|float $amount, Currency $currency)
    {
        $this->setAmount($amount);
        $this->setCurrency($currency);
    }

    public function getAmount(): int|float
    {
        return $this->amount;
    }

    public function getCurrency(): Currency
    {
        return $this->currency;
    }

    private function setAmount(int|float $amount): void
    {
        $this->amount = $amount;
    }

    private function setCurrency(Currency $currency): void
    {
        $this->currency = $currency;
    }

    public function equals(Money $money): bool
    {
        return $this == $money;
    }

    public function add(Money $money): int|float
    {
        if ($this->getCurrency() != $money->getCurrency()) {
            throw new \Exception('Currency is different');
        }
        return $this->getAmount() + $money->getAmount();
    }
}