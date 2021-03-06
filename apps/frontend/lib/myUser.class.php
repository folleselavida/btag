<?php

class myUser extends sfGuardSecurityUser
{
	
	function setCiudad($ciudad) {
		$this->setAttribute("ciudad", $ciudad);
	}
	
	function getCiudad() {
		if ($this->getAttribute("ciudad")==null) {
			return 0;
		}
		else {
			return $this->getAttribute("ciudad");
		}
	}
	
	
	public function isFirstRequest($boolean = null)
	{
		if (is_null($boolean))
		{
			return $this->getAttribute('first_request', true);
		}
	
		$this->setAttribute('first_request', $boolean);
	}
	
	public function addCarrito($idprod)
	{
		$carrito = $this->getAttribute('carrito', array());
		if (array_search($idprod, $carrito) != false){
			return false;
		}else{
			$carrito[] = $idprod;
			$this->setAttribute('carrito', $carrito);
			return true;
		}
	
	}
	public function removerCarrito($idprod)
	{
		$carrito = $this->getAttribute('carrito', array());
	
		$key = array_search($idprod, $carrito);
		unset($carrito[$key]);
		$this->setAttribute('carrito', $carrito);
		//var_dump($carrito);
	}
	
	public function checkCarrito($idprod)
	{
		$carrito = $this->getAttribute('carrito', array());
		if (in_array($idprod, $carrito) ){
			return true;
		}else{
			return false;
		}
	}
	
	public function getCarrito()
	{
		if ($this->getAttribute('carrito', array())==null) {
			return -1;
		}
		else{
			$ids = $this->getAttribute('carrito', array());
			return $ids;
		}

	}
	public function getCarritoLink()
	{
		$ids = $this->getAttribute('carrito', array());
		return $ids;
	}
	private function esta($i,$ids, $url){
		if(count($ids) > $i){
			return $ids[$i] == $url;
		}
		return false;
	}
	
}
