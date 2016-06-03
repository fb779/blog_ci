<div id="content" class="row">
	<h1>Este es un mensaje de contenido para la pagina de prueba</h1>
	<!--section>
		<p>{parrafo}</p>
		<p>{parrafo}</p>
		<p>{parrafo}</p>
	</section-->
	<div>
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