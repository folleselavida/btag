<?php

/**
 * empresarial actions.
 *
 * @package    AUV
 * @subpackage empresarial
 * @author     
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class empresarialActions extends sfActions
{
 /**
  * Executes index action
  *
  * @param sfRequest $request A request object
  */
  public function executeIndex(sfWebRequest $request)
  {
   		$this->colIzq = 'visible';
		$this->colDer = 'hidden';
		$this->tags = '10';
		
		$id = $request->getParameter("id");		
		
		$this->sitio = Doctrine_Core::getTable('sitio')->find($id);

		$q = Doctrine_Query::create()
		->select('s.nombre, r.*, u.ciudad, u.foto, u.pais, f.first_name')
		->from("review r")
		->innerJoin('r.usuario u ')
 		->innerJoin("u.sfGuardUser f")
 		->where("u.id = f.id")
		->innerJoin('r.sitio s')
		->where("r.sitio_id = ?", $id)
		->orderBy("s.id asc");
		$this->reviews = $q->fetchArray();

		
		$this->categoria = 'Restaurante & Bar';
// 		$this->cateImg = 'rest';
		$this-> info = '<p> 	Lunes a Viernes: 12 am - 8 pm </p> <p> 	Sabados: 10 am - 12 pm </p> <p> 	Domingos: 10 am - 3 pm </p> <p> </p> <h2> 	Direcci�n: </h2> <p> 	Cra 4A No. 27 - 27 </p> <h2> 	Tel�fono: </h2> <p> 	281 12 86 - 284 88 86 </p> <p> 	314 382 2453 </p> <a href="" target="_blank"> 	www.lahamburgueseria.com </a>';
 		$this->carac = $this-> carac();

 		$this->ofer = $this-> ofer();
 		$this->even = $this-> even();
 		
 		
 		$this->ofertas = Doctrine_Core::getTable('oferta')
 		->createQuery('a')
 		->where("sitio_id = ?", $id)
 		->andWhere("tipo = 'oferta'") 		
 		->orderBy("rand()")
 		->limit(2)
 		->execute();
 		
 		$this->eventos = Doctrine_Core::getTable('oferta')
 		->createQuery('a')
 		->where("sitio_id = ?", $id)
 		->andWhere("tipo = 'Evento'")
 		->orderBy("rand()")
 		->limit(2)
 		->execute();
 		
 		
		
// 		TODO: Busqueda
// En sitio, vincular la imagen con galeria
//Horarios
//Servicios
//Reviews
//Ofertas
//Eventos

  }
  
  
  public function executeCategoria(sfWebRequest $request)
  {
  	$this->colIzq = 'visible';
  	$this->colDer = 'hidden';
  	$this->li_cate = $this-> li_cate();
  	$this->resultados = $this->resultados();
  	$this->destacados = $this-> sitios();
  
  	$this->categorias = Doctrine_Core::getTable('categoria')
  	->createQuery('a')
  	->orderBy("nombre asc")
  	->execute();
  
  	$q = Doctrine_Query::create()
  	->select('s.*')
  	->from("sitio s")
  	->orderBy("s.created_at desc")
  	->limit(5);
  	$this->sitios = $q->fetchArray();
  	
  	
  }
  
  
  public function executeRegistro(sfWebRequest $request)
  {
  	
	  	$this->categorias = Doctrine_Core::getTable('categoria')
	  	->createQuery('a')
	  	->orderBy("nombre asc")
	  	->execute();
	  	
	  	$this->servicios = Doctrine_Core::getTable('servicio')
	  	->createQuery('a')
	  	->orderBy("nombre asc")
	  	->execute();
	  	
  		$this->colIzq = 'visible';
  		$this->colDer = 'hidden';
  	}
  	
  	
  	public function executeBusquedaSitio(sfWebRequest $request)
  	{
  		
   		$query = $request->getParameter("query");
   		$this->query = $query;
  		
  		$q = Doctrine_Query::create()
  		->select('s.*')
  		->from("sitio s")
  		->where("nombre LIKE '%".$query."%'")
  		->orderBy("s.id asc");
  		$this->resultados = $q->fetchArray();
  	}
  	
  	public function executeBusqueda(sfWebRequest $request)
  	{
  		$this->query = $request->getParameter("query");
  	
  		$q = Doctrine_Query::create()
  		->select('s.*')
  		->from("sitio s")
  		->where("nombre LIKE '%".$this->query."%'")
  		->orWhere("keywords LIKE '%".$this->query."%'")
  		->orderBy("s.id asc");
  		$this->resultados = $q->fetchArray();
  	}
  	
  	public function executeBusquedaCat(sfWebRequest $request)
  	{
  		$this->query = $request->getParameter("query");
  		 
  		$q = Doctrine_Query::create()
  		->select('s.*')
  		->from("sitio s")
  		->where("s.categoria_id = ?", $this->query)
  		->orderBy("s.id asc");
  		$this->resultados = $q->fetchArray();
  		
  		$this->setTemplate("busqueda");
  	}
  	
  	
  public function executeCreateReview(sfWebRequest $request)
  {
  	
  	$calificacion = $request->getParameter("calificacion");
  	$sitioid = $request->getParameter("sitioid");
  	$texto = $request->getParameter("texto");

  	$rev = new review();
  	$rev->calificacion = $calificacion;
  	$rev->sitio_id = $sitioid;
  	$rev->texto = "<p>".$texto."</p>";
  	$rev->usuario_id = $this->getUser()->getGuardUser()->getId();
  	$rev->save();
  	
  	$q = Doctrine_Query::create()
  	->select('s.nombre, r.*, u.ciudad, u.pais, f.first_name')
  	->from("review r")
  	->innerJoin('r.usuario u ')
  	->innerJoin("u.sfGuardUser f")
  	->where("u.id = f.id")
  	->innerJoin('r.sitio s')
  	->where("r.sitio_id = ?", $sitioid)
  	->orderBy("s.id asc");
  	$this->reviews = $q->fetchArray();
}


public function executeSubmitImage(sfWebRequest $request)
{
	$this->form = new galeriaForm();
	
	$this->sitio_id = $request->getParameter("sitio_id");
	$this->exito = 0;
	
	$this->imagenes = Doctrine_Core::getTable('galeria')
	->createQuery('a')
	->where("sitio_id = ?", $this->id)
	->execute();
	
	if($request->isMethod(sfRequest::POST)){
		$this->exito = $this->processForm($request, $this->form);
		$this->imagenes = Doctrine_Core::getTable('galeria')
		->createQuery('a')
		->where("sitio_id = ?", $this->sitio_id)
		->execute();
		$this->setTemplate("galeria");
	}
}


public function executeFinalizar(sfWebRequest $request)
{
	$this->servicio = $request->getParameter("query");
	$id = $request->getParameter("id");
	
	$sitio = Doctrine_Core::getTable("sitio")->find($id);
	 
	$servicio = explode("%", $this->servicio);
	
	
	
	foreach ($servicio as $serv){
		if($serv){
			/*$sn = Doctrine_Core::getTable("servicio")->find($serv);
			$sn->setServicio($sn);
			*/
			$sn = new SitioServicio();
			$sn->setServicioId($serv);
			$sn->setSitioId($sitio->id);
			$sn->save();
		}
	}
	
}



public function executeCreateSitio(sfWebRequest $request)
{
	if(!$this->exito){
		try {
			$nombre = $request->getParameter("nombre");
			$direccion = $request->getParameter("direccion");
			$telefono = $request->getParameter("telefono");
			$website = $request->getParameter("website");
			$latitud = $request->getParameter("latitud");
			$longitud = $request->getParameter("longitud");
			$categoria = $request->getParameter("categoria");
			$descripcion = $request->getParameter("descripcion");
			
			$services = $request->getParameter("services");
			$horario = $request->getParameter("horario");
			
			$site = new sitio();
			
			$site->nombre = $nombre;
			$site->categoria_id = $categoria;
			$site->nombre = $nombre;
			$site->direccion = $direccion;
			$site->website = $website;
			$site->latitud = $latitud;
			$site->longitud = $longitud;
			$site->ciudad_id= 1;
			$site->calificacion = 0;
			$site->usuario_id = 1;
			$site->imagen = "NIL";
			$site->thumbnail = "NIL";
			$site->telefono = $telefono;
			$site->horario = $horario;
			$servicios = explode("%", $services);
			
			$site->save();
			$this->exito = 1;
			$this->sitio_id = $site->getId();
		} catch (Exception $e) {
			$this->result = "Error";
		}
	}

	$this->imagenes = Doctrine_Core::getTable('galeria')
	->createQuery('a')
	->where("sitio_id = ?", $site->id)
	->execute();
	
	$this->servicios = Doctrine_Core::getTable('servicio')
	->createQuery('a')
	->orderBy("nombre asc")
	->execute();
	
	
	$this->form = new galeriaForm();
	$this->form->setDefault("sitio_id", $site->id);
	
	if($request->isMethod(sfRequest::POST)){
		
		$this->processForm($request, $this->form);
		$this->imagenes = Doctrine_Core::getTable('galeria')
		->createQuery('a')
		->where("sitio_id = ?", $site->id)
		->execute();
		$this->setTemplate("galeria");
	}
}


	function processForm(sfWebRequest $request, sfForm $form)
	{
		$exito = 0;
		$form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
		if ($form->isValid())
		{
			$galeria = $form->save();
			$exito = 1;
		}
		return $exito;
	}


public function copyToDir($pattern, $dir)
{
    foreach (glob($pattern) as $file) {
        if(!is_dir($file) && is_readable($file)) {
            $dest = realpath($dir . DIRECTORY_SEPARATOR) . basename($file);
            copy($file, $dest);
        }
    }    
}
  
  public function carac(){
  	$car[] = array('Waiter Service');
  	$car[] = array('Good for Groups:');
  	$car[] = array('Hours: 5 -10');
  	$car[] = array('Noise level');
  	$car[] = array('Outdoor Seating');
  	$car[] = array('Price Range: 20,000 - 100,000');
  	$car[] = array('Good for kids: Yes');
  	$car[] = array('Ambience: loud');
  	$car[] = array('Wi-fi: Yes');
  	$car[] = array('Takes Reservations');
  	$car[] = array('Accepts credit cards');
  	$car[] = array('Has TV: Yes');
  	$car[] = array('Good for: adults');
  	$car[] = array('Delivery');
  	$car[] = array('Parking');
  	$car[] = array('Caters');
  	$car[] = array('Alcohol: Yes');
  	$car[] = array('Take-out: Yes');
  	$car[] = array('Parking: yes');
  	$car[] = array('Weelchair Access');
  	$car[] = array('Dogs Allowed: No');
  	return $car;
  }
  
  public function coments(){
  	$com[] = array(5, 'La Hamburgueser�a','fernando_caviedes', 'perfil.jpg', 'Fernando Caviedes', 'Bogot�, Colombia', '20', '27/09/2012', '<p>Praesent ornare libero et diam sagittis a scelerisque neque hendrerit. Donec id quam a nisl lobortis convallis. Vivamus eget velit at nisl laoreet faucibus. Sed faucibus suscipit est. Nunc vitae enim libero. Fusce non tellus nisi, ac accumsan erat. Suspendisse ac sapien erat, quis cursus ipsum</p>');
  	$com[] = array(5, 'La Hamburgueser�a','fernando_caviedes', 'perfil.jpg', 'Fernando Caviedes', 'Bogot�, Colombia', '20', '27/09/2012', '<p>Praesent ornare libero et diam sagittis a scelerisque neque hendrerit. Donec id quam a nisl lobortis convallis. Vivamus eget velit at nisl laoreet faucibus. Sed faucibus suscipit est. Nunc vitae enim libero. Fusce non tellus nisi, ac accumsan erat. Suspendisse ac sapien erat, quis cursus ipsum</p>');
  	$com[] = array(5, 'La Hamburgueser�a','fernando_caviedes', 'perfil.jpg', 'Fernando Caviedes', 'Bogot�, Colombia', '20', '27/09/2012', '<p>Praesent ornare libero et diam sagittis a scelerisque neque hendrerit. Donec id quam a nisl lobortis convallis. Vivamus eget velit at nisl laoreet faucibus. Sed faucibus suscipit est. Nunc vitae enim libero. Fusce non tellus nisi, ac accumsan erat. Suspendisse ac sapien erat, quis cursus ipsum</p>');
  	$com[] = array(5, 'La Hamburgueser�a','fernando_caviedes', 'perfil.jpg', 'Fernando Caviedes', 'Bogot�, Colombia', '20', '27/09/2012', '<p>Praesent ornare libero et diam sagittis a scelerisque neque hendrerit. Donec id quam a nisl lobortis convallis. Vivamus eget velit at nisl laoreet faucibus. Sed faucibus suscipit est. Nunc vitae enim libero. Fusce non tellus nisi, ac accumsan erat. Suspendisse ac sapien erat, quis cursus ipsum</p>');
  
  	return $com;
  }
  
  
  public function resultados(){
  $com[] = array(5, 'hamburgueseria', '1', 'La Hamburgueseria', '20', 'La hamburgueser�a', 'Cra 4A No. 27 - 27', 'Tel�fono: 2811286', 'Sed faucibus suscipit est. Nunc vitae enim libero. Fusce non tellus nisi, ac accumsan erat. Suspendisse ac sapien erat, quis cursus ipsum');
  $com[] = array(5, 'hamburgueseria', '1', 'La Hamburgueseria', '20', 'La hamburgueser�a', 'Cra 4A No. 27 - 27', 'Tel�fono: 2811286', 'Sed faucibus suscipit est. Nunc vitae enim libero. Fusce non tellus nisi, ac accumsan erat. Suspendisse ac sapien erat, quis cursus ipsum');
  		$com[] = array(5, 'hamburgueseria', '1', 'La Hamburgueseria', '20', 'La hamburgueser�a', 'Cra 4A No. 27 - 27', 'Tel�fono: 2811286', 'Sed faucibus suscipit est. Nunc vitae enim libero. Fusce non tellus nisi, ac accumsan erat. Suspendisse ac sapien erat, quis cursus ipsum');
  		
  return $com;
  }
  
  public function sitios(){
  	$sit[] = array(3, 'hamburgueseria', 1, 'La Hamburgueseria', 'Restaurante', 'Cra 4A No. 27 - 27');
  	$sit[] = array(3, 'hamburgueseria', 1, 'La Hamburgueseria', 'Restaurante', 'Cra 4A No. 27 - 27');
  	$sit[] = array(3, 'hamburgueseria', 1, 'La Hamburgueseria', 'Restaurante', 'Cra 4A No. 27 - 27');
  
  	return $sit;
  }
  
  
  public function ofer(){
  	$prom[] = array('prom1.jpg', '50% de descuento en hamburguesas al carbon m�s 2 adiciones', '2 dias');
  	$prom[] = array('prom1.jpg', '50% de descuento en hamburguesas al carbon m�s 2 adiciones', '2 dias');
  
  	return $prom;
  }
  
  public function even(){
  	$even[] = array('prom2.jpg', 'Concierto de THE HALL EFFECT y THE MILLS', '17/09/12');
  	$even[] = array('prom2.jpg', 'Concierto de THE HALL EFFECT y THE MILLS', '17/09/12');
  
  	return $even;
  }
  
  public function li_cate(){
  	$li[] = array('rest', 'Restaurantes');
  	$li[] = array('hot', 'Hoteles');
  	$li[] = array('bar', 'Bares');
  	$li[] = array('ti', 'Tiendas');
  	$li[] = array('spa', 'Spa');
  	$li[] = array('spa', 'Centros Deportivos');
  	$li[] = array('club', 'Club Social');
  	$li[] = array('uni', 'Universidades');
  	$li[] = array('cole', 'Colegios');
  
  	return $li;
  }
  
  
  
}
