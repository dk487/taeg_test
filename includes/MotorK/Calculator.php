<?php

namespace MotorK;

/**
 * Class Calculator
 * @package Modules\Loan
 */
abstract class Calculator {

	/**
	 * Protected vars
	 *
	 * @var float $tan
	 * @var float $rate
	 * @var float $tan
	 * @var int $num_payments_per_year
	 * @var int $years
	 */
	protected
		$mortgage,
		$rate,
		$tan,
		$num_payments_per_year,
		$years;

	/**
	 * Set mortgage - effectivly errogated
	 *
	 * @param mixed $mortgage
	 *
	 * @return Calculator
	 */
	public function set_mortgage( $mortgage ) {
		$this->mortgage = floatval( $mortgage );

		return $this;
	}

	/**
	 * Set rate
	 *
	 * @param mixed $rate
	 *
	 * @return Calculator
	 */
	public function set_rate( $rate ) {
		$this->rate = floatval( $rate );

		return $this;
	}

	/**
	 * Set TAN (tasso annuale nominale)
	 *
	 * @param mixed $num
	 *
	 * @return Calculator
	 */
	public function set_tan( $num ) {
		$this->tan = floatval( $num ) / 100;

		return $this;
	}

	/**
	 * Set numero rate annuali
	 *
	 * @param mixed $num
	 *
	 * @return Calculator
	 */
	public function set_num_payments_per_year( $num ) {
		$this->num_payments_per_year = intval( $num );

		return $this;
	}

	/**
	 * Set number of years
	 *
	 * @param mixed $years
	 *
	 * @return Calculator
	 */
	public function set_years( $years ) {
		$this->years = intval( $years );

		return $this;
	}

	/**
	 * Calculate
	 *
	 * @return float
	 */
	abstract public function calculate();

	/**
	 * Magic function
	 *
	 * @return string
	 */
	abstract public function __toString();

}