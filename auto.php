<?php 

class auto extends transporte
{
	public $puertas;
	public $pasajeros;
	public $ruedas;

	function __construct($marca,$modelo,$puertas,$pasajeros,$ruedas)
	{
		parent::__construct($marca,$modelo); 
		$this->puertas=$puertas;
		$this->pasajeros=$pasajeros;
		$this->ruedas=$ruedas;
	}
	
}
 ?>