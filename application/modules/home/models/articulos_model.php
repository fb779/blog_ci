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
		//return $contulta->result_array(); // retorno en forma de arreglo
	}

	// Consulta el articulo por su Id de articulo
	function detalle_articulo($id_articulo) {
 		//$this->db->select('fecha,contenido');
 		$this->db->where('id_articulo', $id_articulo);
 		$contulta = $this->db->get('t_articulo');
		//return $contulta->row();
		return $contulta->row_array(); // retorno en forma de arreglo
 	}

 	function detalle_articulo_2($link) {
 		//$this->db->select('link');
 		$this->db->where('link', $link);
 		$contulta = $this->db->get('t_articulo');
		//return $contulta->row();
		
		if ($contulta->num_rows()>0){
			//return $contulta->row_array(); // retorno en forma de arreglo
			$query = $contulta->row();
			$query->articulo = TRUE;
			return $query;
		} else {
			return array ('articulo' => FALSE);
		}
 	}
}