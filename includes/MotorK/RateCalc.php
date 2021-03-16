<?php
namespace MotorK;

use Prophecy\Call\CallCenter;

class RateCalc extends Calculator
{
    public function calculate()
    {
        return 659.96; // FIXME
    }

    public function __toString()
    {
        return sprintf('%.02f €', $this->calculate());
    }
}
