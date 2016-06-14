<!-- inicio Contenido -->
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<p>
				<?php if ($articulo) { ?>
				<h4>{nombre}</h4>
				<strong>Fecha publicación: </strong> {fecha}
				<p>Contenido: {contenido}</p>
				<?php } else { ?>
				<h4>Objeto no valido</h4>
				<?php } ?>
			</p>
		</div>
	</div>
</div>
<!-- fin Contenido -->