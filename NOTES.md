No proper task definition, no design, no formulas.
Damn, do I really need to decrypt it?

 - php7.4 vendor/bin/phpunit
 - php7.4 -d xdebug.mode=coverage vendor/bin/phpunit  --coverage-html tests/coverage

Side note:

 - package name with uppercase char
 - does not follow PSR-2

* * *

<http://www.calcolatoremutui.it/tan-e-taeg/> does not work:

> L'installazione PHP non ha l'estensione MySQL che è necessaria per utilizzare WordPress.

* * *

Oh my god: <https://en.wikipedia.org/wiki/Annual_percentage_rate#European_Union>


# TAE

 - TAE is the annual percentage rate of charge (APR)
 - Tae::init(5, 12)->calculate() == 5.116
 
<https://eqtor.com/tools/apr-to-ear-calculator/>

 - Input: APR = 5%, compounding period 1 month
 - Output: 5.1162%
 - Formula: EAR = ((APR / (100 * 12) + 1) ^ 12 - 1) * 100

Try to calculate the same value

 - $apr = 5; $n = 12;
 - echo (($apr / (100 * $n) + 1) ** $n - 1) * 100;
 - Result: 5.1161897881733

Okay, now I have an idea how to implement that.


# TAN

 - TAN is the nominal interest rate
 - Rate::init(100000, 5, 12, 20)->calculate() == 659.96 (EUR)
 - __toString() should show '659.96 €'

Gimme da formulaz.


# TAEG

 - TAEG is the effective APR (or EAPR)
 - Taeg::init(99000, 5, 661.96, 12, 20)->calculate() == 5.281%
 - __toString() should show '5.281 %'
