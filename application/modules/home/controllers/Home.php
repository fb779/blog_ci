<?php
defined('BASEPATH') OR exit('No direct script access allowed');
//header ('Content-type: text/html; charset=utf-8');

class Home extends MX_Controller {
	
	var $datos;
	var $atts = array(
		'class' => 'text-danger'
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
				'home' => array('link' => anchor('home', 'Home'), 'activo' => ''), 
        		'lista_articulos' => array('link' => anchor('home/lista_articulos', 'Lista articulos'),'activo' => ''),
        		//'detalle_articulo' => array('link' => anchor('home/detalle_articulo', 'Detalle articulo'),'activo' => ''), 
			)
		);
		//$this->datos['menu'] = MENUS;
		$this->datos['footer'] = array('static' => BASE_STATICS,);
	}
	
	function index()	{
		$this->datos['menu']['navigate']['home']['activo'] = 'class="active"';
		
		$this->datos['template'] = 'prueba';
		$this->datos['dt'] = array(
			'parrafo' => 'Parrafo de verificacion para la carga de contenido de la pagina..... ',
		);

		$this->parser->parse('loadTemplates', $this->datos, TRUE);
		//$this->parser->parse('plantilla', $this->datos);
	}

	function lista_articulos() {
		$this->datos['menu']['navigate']['lista_articulos']['activo'] = 'class="active"';

		$query = $this->Articulos_model->listar_articulos();
		
		foreach ($query as $item) {
			//$item->url = anchor('home/articulo/'.$item->id_articulo, url_title(convert_accented_characters('Detalle')), $this->atts);
			
			$item->url = anchor('home/articulo/'.url_title(convert_accented_characters($item->link),'-'), url_title(convert_accented_characters('Detalle')), $this->atts);
			//$item->url = url_title('home/detalle_articulo/'.$item->nombre);
			$articulos[] = $item;
		}

		$this->datos['template'] = 'lista_articulos';
		
		$this->datos['dt'] = array(
			'articulos' => $articulos,
		);

		$this->parser->parse('loadTemplates', $this->datos, TRUE);
	}

 	// function articulo($id_articulo) {
 	// 	//$this->datos['menu']['navigate']['lista_articulos']['activo'] = 'class="active"';
 		
 	// 	$id_art = $this->security->xss_clean($id_articulo);
 	// 	$articulo = $this->Articulos_model->detalle_articulo($id_art);

 	// 	//echo $articulo->nombre;

 	// 	$this->datos['template'] = 'detalle_articulo';
 	// 	$this->datos['dt'] = $articulo;
 	// 	//$this->datos['dt']['jsonArticulos'] = json_encode($articulo);
 		
		// $this->parser->parse('loadTemplates', $this->datos);

 	// }

 	function articulo($link) {
 		//$this->datos['menu']['navigate']['lista_articulos']['activo'] = 'class="active"';
 		
 		$link_limpio = $this->security->xss_clean($link);
 		$articulo = $this->Articulos_model->detalle_articulo_2($link_limpio);

 		$this->datos['template'] = 'detalle_articulo';
 		$this->datos['dt'] = $articulo;
 		//$this->datos['dt']['jsonArticulos'] = json_encode($articulo);
 		
		$this->parser->parse('loadTemplates', $this->datos);

 	}

}

function array2json($arr) { 
    if(function_exists('json_encode')) return json_encode($arr); //Lastest versions of PHP already has this functionality.
    $parts = array(); 
    $is_list = false; 

    //Find out if the given array is a numerical array 
    $keys = array_keys($arr); 
    $max_length = count($arr)-1; 
    if(($keys[0] == 0) and ($keys[$max_length] == $max_length)) {//See if the first key is 0 and last key is length - 1
        $is_list = true; 
        for($i=0; $i<count($keys); $i++) { //See if each key correspondes to its position 
            if($i != $keys[$i]) { //A key fails at position check. 
                $is_list = false; //It is an associative array. 
                break; 
            } 
        } 
    } 

    foreach($arr as $key=>$value) { 
        if(is_array($value)) { //Custom handling for arrays 
            if($is_list) $parts[] = array2json($value); /* :RECURSION: */ 
            else $parts[] = '"' . $key . '":' . array2json($value); /* :RECURSION: */ 
        } else { 
            $str = ''; 
            if(!$is_list) $str = '"' . $key . '":'; 

            //Custom handling for multiple data types 
            if(is_numeric($value)) $str .= $value; //Numbers 
            elseif($value === false) $str .= 'false'; //The booleans 
            elseif($value === true) $str .= 'true'; 
            else $str .= '"' . addslashes($value) . '"'; //All other things 
            // :TODO: Is there any more datatype we should be in the lookout for? (Object?) 

            $parts[] = $str; 
        } 
    } 
    $json = implode(',',$parts); 
     
    if($is_list) return '[' . $json . ']';//Return numerical JSON 
    return '{' . $json . '}';//Return associative JSON 
}
