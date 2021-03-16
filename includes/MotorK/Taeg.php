<?php
namespace MotorK;

class Taeg
{
    public static function init($mortgage, $rate, $somethingStrangeFIXME, $paymentsPerYear, $years)
    {
        $c = new TaegCalc;
        $c->set_mortgage($mortgage);
        $c->set_rate($rate);
        $c->set_num_payments_per_year($paymentsPerYear);
        $c->set_years($years);

        return $c;
    }
}
