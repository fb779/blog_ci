<?php

/**
* 
*/
class Articulos_model extends CI_Model {
	
	function __construct() {
		parent::__construct();
	}

	// Generar un listado de articulos
	function listar_articulos(){
		$this->db->order_by('fecha','desc');
		$contulta = $this->db->get('t_articulo');
		return $contulta->result();
		//return $contulta->result_array();
	}
}