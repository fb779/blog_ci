<?php
defined('BASEPATH') OR exit('No direct script access allowed');
//header ('Content-type: text/html; charset=utf-8');

class Home extends MX_Controller {
	var $datos;
	public function __construct() {
		parent::__construct();
		$this->datos['header'] = array(
			'static' => BASE_STATICS,
			'title' => TITULO_APP,
		);
		//$this->datos['menu'] = array();
		$this->datos['footer'] = array();
	}
	
	public function index()
	{
		$this->datos['template'] = 'prueba';
		$this->datos['dt'] = array(
			'url_login' => BASE_URL . 'login',
			'parrafo' => 'Parrafo de verificacion para la carga de contenido de la pagina..... ',
		);

		$this->parser->parse('loadTemplates', $this->datos, TRUE);
	}
}
