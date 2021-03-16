<?php
namespace MotorK;

class TaeCalc extends Calculator
{
    public function calculate()
    {
        return (($this->rate / (100 * $this->num_payments_per_year) + 1) ** $this->num_payments_per_year - 1) * 100;
    }

    public function __toString()
    {
        return sprintf('%.03f %%', $this->calculate());
    }
}
