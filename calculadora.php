<?php 

class calculadora
{
public static $numero;
public static $potencia;
public static $divisor;


public function _potencia()
{
	echo self::$numero** self::$potencia;
}


public function residuo()
{
	echo self::$numero% self::$divisor;
}

}

 ?>