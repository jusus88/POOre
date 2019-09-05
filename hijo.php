<?php 

	class hijo extends base
	{
		public $titulo;
		public $cargo;
		function __construct($nombres,$apellidos,$titulo,$cargo)
		{
			parent::__construct($nombres,$apellidos);         //operador doble resulucion 
			$this ->titulo=$titulo;
			$this->cargo=$cargo;

		}


		public function mostrar()
		{
			$this-> show();
			echo "<hr/>";
			echo $this->titulo, PHP_EOL, $this->cargo;
		}
		
	}



 ?>