<?php
defined('BASEPATH') OR exit('No direct script access allowed');
//header ('Content-type: text/html; charset=utf-8');

class Home extends MX_Controller {
	
	var $datos;
	var $atts = array(
		'class' => 'text-warning'
	);

	function __construct() {
		parent::__construct();
		//$this->output->enable_profiler(TRUE);
		$this->load->model('Articulos_model');
		$this->datos['header'] = array(
			'static' => BASE_STATICS,
			'title' => TITULO_APP,
		);
		$this->datos['menu'] = array(
			'navigate' => array(
				'Home' => array('link' => anchor('home', 'Home'), 'activo' => ''), 
        		'Lista_articulos' => array('link' => anchor('home/lista_articulos', 'Lista articulos'),'activo' => ''), 
			)
		);
		$this->datos['footer'] = array();
	}
	
	public function index()
	{
		$this->datos['menu']['navigate']['Home']['activo'] = 'class="active"';
		
		$this->datos['template'] = 'prueba';
		$this->datos['dt'] = array(
			'parrafo' => 'Parrafo de verificacion para la carga de contenido de la pagina..... ',
		);

		$this->parser->parse('loadTemplates', $this->datos, TRUE);
		//$this->parser->parse('plantilla', $this->datos);
	}

	function lista_articulos(){
		$this->datos['menu']['navigate']['Lista_articulos']['activo'] = 'class="active"';

		$query = $this->Articulos_model->listar_articulos();
		
		$articuos = array();
		
		foreach ($query as $item) {
			$item->url = anchor('home/detalle_articulo/'.$item->url, url_title(convert_accented_characters('Detalle')), $this->atts);
			$articulos[] = $item;
		}

		$this->datos['template'] = 'lista_articulos';
		
		$this->datos['dt'] = array(
			'url_login' => BASE_URL . 'login',
			'articulos' => $articulos,
		);

		$this->parser->parse('loadTemplates', $this->datos);
	}


}
