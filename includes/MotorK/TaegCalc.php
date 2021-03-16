<?php
namespace MotorK;

class TaegCalc extends Calculator
{
    public function calculate()
    {
        return 5.281; // FIXME
    }

    public function __toString()
    {
        return sprintf('%.03f %%', $this->calculate());
    }
}
