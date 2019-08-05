<?php

namespace litvinjuan\MPPayments;

use Money\MoneyFormatter as BaseFormatter;
use Money\Money;

class MoneyFormatter implements BaseFormatter
{

    public function format(Money $money)
    {
        return '$' . $money->getAmount() / 100;
    }

}