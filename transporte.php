<?php 

class transporte 
{

	public $marca;
	public $modelo;
	function __construct($marca,$modelo)
	{

		$this->marca=$marca;
		$this->modelo=$modelo;
	}
	protected function encender()
	{
		echo "encendiendo auto" ;

	}
	protected function  apagar()
	{
		echo "auto apagando";
	}
}


 ?>