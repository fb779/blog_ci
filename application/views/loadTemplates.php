<?php
	if (isset($header)){
		$this->parser->parse("templates/header.php", $header);	
		//$this->load->view("templates/header.php", $header);
	}
	

	if (isset($menu)){
		$this->parser->parse("templates/navigation.php", $menu);
		//$this->load->view("templates/navigation.php", $menu);
	}
	
	if (isset($template)){
		$this->parser->parse($template, $dt);
		//$this->load->view($template, $dt);
	} 

	if (isset($footer)){
		$this->parser->parse("templates/footer.php", $footer);
		//$this->load->view("templates/footer.php", $footer);
	} /*else {
		$this->parser->parse("templates/footer.php", array());
	}*/

	// $this->load->view("templates/header.php");
	// $this->load->view("templates/navigation.php");
	// $this->load->view($page, $dt);
	// $this->load->view("templates/footer.php");
