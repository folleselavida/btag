<?php
class Iridian
{
	
	static public function parseYoutube($ytURL){
		$ytvIDlen = 11;	// This is the length of YouTube's video IDs
		
		// The ID string starts after "v=", which is usually right after 
		// "youtube.com/watch?" in the URL
		$idStarts = strpos($ytURL, "?v=");
		
		// In case the "v=" is NOT right after the "?" (not likely, but I like to keep my 
		// bases covered), it will be after an "&":
		if($idStarts === FALSE)
			$idStarts = strpos($ytURL, "&v=");
		// If still FALSE, URL doesn't have a vid ID
		if($idStarts === FALSE)
			die("YouTube video ID not found. Please double-check your URL.");
		
		// Offset the start location to match the beginning of the ID string
		$idStarts +=3;
		
		// Get the ID string and return it
		$ytvID = substr($ytURL, $idStarts, $ytvIDlen);
		
		return $ytvID;
	}
	
	
	static public function slugify($text)
	{
		// replace all non letters or digits by -
		$text = Iridian::normaliza2($text);
		$text = preg_replace('/\W+/', '_', $text);

		// trim and lowercase
		$text = strtolower(trim($text, '_'));

		return $text;
	}
	static public function normaliza ($cadena){
		$originales = 'Ã€Ã�Ã‚ÃƒÃ„Ã…Ã†Ã‡ÃˆÃ‰ÃŠÃ‹ÃŒÃ�ÃŽÃ�Ã�Ã‘Ã’Ã“Ã”Ã•Ã–Ã˜Ã™ÃšÃ›ÃœÃ�Ãž
	ÃŸÃ Ã¡Ã¢Ã£Ã¤Ã¥Ã¦Ã§Ã¨Ã©ÃªÃ«Ã¬Ã­Ã®Ã¯Ã°Ã±Ã²Ã³Ã´ÃµÃ¶Ã¸Ã¹ÃºÃ»Ã½Ã½Ã¾Ã¿Å”Å•ñ';
		$modificadas = 'aaaaaaaceeeeiiiidnoooooouuuuy
	bsaaaaaaaceeeeiiiidnoooooouuuyybyRrn';
		$cadena = utf8_decode($cadena);
		$cadena = strtr($cadena, utf8_decode($originales), $modificadas);
		$cadena = strtolower($cadena);
		return utf8_encode($cadena);
	}
	static public function normaliza2 ($cadena){
		$originales = 'ÑñáéíóúÁÉÍÓÚ';
		$modificadas = 'NnaeiouAEIOU';
		$cadena = utf8_decode($cadena);
		$cadena = strtr($cadena, utf8_decode($originales), $modificadas);
		$cadena = strtolower($cadena);
		return utf8_encode($cadena);
	}

	static public function fecha1($row_date){
		$months_names=array("January","Febrary","March","April","May","June","July","August","September","October","November","Dicember");
		$arr = explode("-", $row_date);
		$ano = $arr[0];
		$mes = (int)$arr[1];
		$dia = (int)$arr[2];
		return $dia." ".$months_names[$mes]." ".$ano;
	}
	
	static public function fecha2($row_date){
		$re = "am.";
		$months_names=array("","Jan","Feb","Mar","Apr","May","Jun","Jul","Aug","Sep","Oct","Nov","Dic");
		$arr = explode("-", $row_date);
		$ano = $arr[0];
		$mes = (int)$arr[1];
		$dia = (int)$arr[2];
		$tim = explode(" ", $row_date);
		$hora = explode(":", $tim[1]);
		$h = $hora[0];
		if($h > 12){
			$h -= 12;
			$re = "pm.";
		}
		return $dia." ".$months_names[$mes]." - ".$h.":".$hora[1]." ".$re;
	}
	static public function fecha3($row_date){
		$months_names=array("","Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre");
		$arr = explode("-", $row_date);
		$ano = $arr[0];
		$mes = (int)$arr[1];
		$dia = (int)$arr[2];
		return $dia." de ".$months_names[$mes];
	}
	static public function fecha4($row_date){
		$arr = explode("-", $row_date);
		$ano = $arr[0];
		$mes = (int)$arr[1];
		$dia = (int)$arr[2];
		if($mes<10)
			$mes='0'.$mes;
		if($dia<10)
			$dia='0'.$dia;
		return $mes."/".$dia."/".$ano;
	}
	static public function fecha5($row_date){
		$months_names=array("","Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre");
		$arr = explode("-", $row_date);
		$ano = $arr[0];
		$mes = (int)$arr[1];
		$dia = (int)$arr[2];
		return $months_names[$mes];
	}
	static public function fechames($row_date){
		$arr = explode("-", $row_date);
		$mes = (int)$arr[1];
		return $mes;
	}

	static public function cambiarIdioma($uri,$idioma,$actual){
		if($actual == $idioma){
			return "";
		}
		return str_replace('/'.$actual.'/', '/'.$idioma.'/', $uri);
	
	}
	
	static public function cleanTempoDir($ruta){
	 $dir = $ruta;
	    foreach(glob($dir.'*.*') as $v){
 	    	unlink($v);
    	}
	}
	
	static public function saveTempoDir($ruta, $destino, $pyid){
		$dir = $ruta;
		foreach(glob($dir.'*.*') as $v){
			if (!copy($v, $destino.$v)) {
				$galeria = new galeria();
				$galeria->imagen = $v;
				$galeria->sitio_id = $pyid;
				$galeria->save();
				echo "Error al copiar $archivo...\n";
			}
			unlink($v);
		}
	}
	
	
	static public function getUserCulture($user = false)
	{
		if ($user == false)
		{
			$culture = false;
			try
			{
				$context = sfContext::getInstance();
			} catch (Exception $e)
			{
				// Not present in tasks
				$context = false;
			}
			if ($context)
			{
				$user = sfContext::getInstance()->getUser();
			}
		}
		if ($user)
		{
			$culture = $user->getCulture();
		}
		if (!$culture)
		{
			$culture = sfConfig::get('sf_default_culture', 'en');
		}
		return $culture;
	}
	
	static public function getUser($user = false)
	{
		if ($user == false)
		{
			try
			{
				$context = sfContext::getInstance();
			} catch (Exception $e)
			{
				// Not present in tasks
				$context = false;
			}
			if ($context)
			{
				$user = sfContext::getInstance()->getUser();
			}
		}
		if ($user)
		{
			return $user;
		}
		return $user;
	}
	
			
	static public function stampToDateString($date){
	
		$month_es = array("","Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Diciembre");
		$justDate = explode(" ", $date);
		$expDate =  explode("-", $justDate[0]);
		return $month_es[(int)$expDate[1]]." de ".$expDate[0];
	
	}
}