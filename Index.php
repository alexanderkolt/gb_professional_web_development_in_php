<?php
abstract class AbstractGood {
	const TAX = 1.2;
	protected $quantity;
	abstract protected function totalCost ();
	abstract protected function revenueSales ();

}
class DigitalGood extends AbstractGood 
{
	const PRICE = 10;
	public function __construct ($quantity)
	{
		$this -> quantity = $quantity;
	}
	protected function totalCost ()
	{
		return self::PRICE * $this->quantity;
	}
	public function revenueSales()
	{
		return $this->totalCost() * self::TAX;
	}
}
class PiceGood extends DigitalGood
{
	public function __construct ($quantity)
	{
		$this -> quantity = $quantity;
	}
	protected function totalCost ()
	{
		return self::PRICE * $this->quantity * 2;
	}
	public function revenueSales()
	{
		return $this->totalCost() * self::TAX;
	}
}
class BulkGood extends AbstractGood
{
	private $price;
	public function __construct ($quantity, $price)
	{
		$this -> quantity = $quantity;
		$this -> price = $price;
	}
	protected function totalCost ()
	{
		return $this -> price * $this->quantity;
	}
	public function revenueSales ()
	{
		return $this->totalCost() * self::TAX;
	}
}
$obj_digitalGood = new DigitalGood(3);
echo $obj_digitalGood->revenueSales();?><br><?php
$obj_piceGood = new PiceGood(2);
echo $obj_piceGood->revenueSales();?><br><?php
$obj_bulkGood = new BulkGood(4, 20);
echo $obj_bulkGood->revenueSales();
?>

