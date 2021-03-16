<?php
namespace MotorK;

class Rate
{
    public static function init($mortgage, $rate, $paymentsPerYear, $years)
    {
        $c = new RateCalc();
        $c->set_mortgage($mortgage);
        $c->set_rate($rate);
        $c->set_num_payments_per_year($paymentsPerYear);
        $c->set_years($years);

        return $c;
    }
}
