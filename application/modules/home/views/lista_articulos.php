<!-- inicio Contenido -->
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<!--h1>Este es un mensaje de contenido para la pagina de prueba</h1-->
			<ul>
				{articulos}
				<li>
					<p>
						<h4>{nombre}</h4> 
						<h5>{url}</h5>
						<strong>Fecha publicación: </strong> {fecha}
						<p>Contenido: {contenido}</p>
					</p>
				</li>
				{/articulos}
			</ul>
		</div>
	</div>
</div>
<!-- fin Contenido -->