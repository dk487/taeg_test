<?php
namespace MotorK;

class Tae
{
    public static function init($rate, $paymentsPerYear)
    {
        $c = new TaeCalc();
        $c->set_rate($rate);
        $c->set_num_payments_per_year($paymentsPerYear);

        return $c;
    }
}
