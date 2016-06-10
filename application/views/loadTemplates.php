<?php
	if (isset($header)){
		$this->parser->parse("templates/header.php", $header);	
	}
	

	if (isset($menu)){
		$this->parser->parse("templates/navigation.php", $menu);
	}
	
	if (isset($template)){
		$this->parser->parse($template, $dt);
	} 

	if (isset($footer)){
		$this->parser->parse("templates/footer.php", $footer);
	} /*else {
		$this->parser->parse("templates/footer.php", array());
	}*/
