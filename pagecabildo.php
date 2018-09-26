<?php
/*
Template Name: template cabildo
*/
?>
<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package mawt
 */

get_header(); ?>

<style type="text/css">






	.article{
		width:100%;
		height:auto;
		margin-bottom:50px;
		display: flex;
		background-color: #e7e8ea;
	}
	.imagen{
		width:250px;
		margin-right: 20px;
	}
	.imagen img{
		width: 100%;
	}
	.texto{
		width: 600px;
		padding: 15px 0px;
	}
	.objetivo{
		margin-bottom: -10px;
		color: #3bab3d;
		font-weight: bold;
	}
	h4{
		color: #3bab3d;
		font-size: 25px;
	}

	ul{margin-left: 30px;}

	@media only screen and (max-width: 700px){
    .article{
			display: block;
		}


	.imagen{
		width:100%;
		margin-right: 20px;
	}
	.imagen img{
		width: 100%;
	}
	.texto{
		width: 100%;
		padding: 10px;
	}
	.objetivo{
		margin-bottom: -10px;
		color: #3bab3d;
		font-weight: bold;
	}
}
</style>

<div class="banner">
	<img id="oculto" src="http://chocolatepublicidad.com/banner.png" alt="">
</div>

<br>
<br>
<br>

<div style="max-width:1115px; padding-bottom:70px; background-color:#fff; margin:0 auto;">

    <article class="article">
    	<div class="imagen"><img src="http://www.magdaperaza.mx/cabildos/S-1-P-ESTEBAN-FUENTES-SALAZAR-IMG_6973.png"></div>
    	<div class="texto"><h4>Esteban Fuentes Salazar</h4>
				<br>
	    	<p>SÍNDICO 1</p>
				<br>
	    	<ul>
	    		<li>Contador público, consultor y consejero corporativo.</li>
	    		<li>Catedrático ITESM Campus Tampico.</li>
	    		<li>Catedrático UNE.</li>
	    		<li>Catedrático UAT.</li>
	    	</ul>
	    	<br>
	    	<p class="objetivo">OBJETIVO</p>
				<br>
	    	<p>Servir en la administración municipal buscando cuidar y optimizar los recuersos públicos.</p>
    	</div>
    </article>

    <article class="article">
    	<div class="imagen"><img src="http://www.magdaperaza.mx/cabildos/S-2-P-ENRIQUETA YOBANI HERNANDEZ REYES-IMG_7021.png"></div>
    	<div class="texto"><h4>Enriqueta Yobani Hdz. Reyes</h4>
				<br>
	    	<p>SÍNDICO 2</p>
				<br>
	    	<ul>
	    		<li>Empresaria.</li>
	    		<li>Profesional del ramo de la construcción de vivienda y obra mecánica.</li>
	    	</ul>
	    	<br>
	    	<p class="objetivo">OBJETIVO</p>
				<br>
	    	<p>Coadyuvar el desarrollo económico y social de Tampico para que seamos una ciudad próspera y segura.</p>
    	</div>
    </article>

    <article class="article">
    	<div class="imagen"><img src="http://www.magdaperaza.mx/cabildos/R-1-P-BENITO-ABAD-PEREZ-ESCALANTE-IMG_4381.png"></div>
    	<div class="texto"><h4>Benito Abad Pérez Escalante</h4>
				<br>
	    	<p>REGIDOR 1</p>
				<br>
	    	<ul>
	    		<li>Agente aduanal y operador logístico.</li>
	    		<li>Empresario del sector portuario, logística y transporte.</li>
	    	</ul>
	    <br>
	    <p class="objetivo">OBJETIVO</p>
			<br>
	    <p>Impulsar el desarrollo urbano y económico de Tampico para que sea polo comercial, turístico y servicios en el sur de Tamaulipas.</p>
    	</div>
    </article>

     <article class="article">
    	<div class="imagen"><img src="http://www.magdaperaza.mx/cabildos/R-2-P-ANA-ESTHER-GORORDO-ARIAS-IMG_4422.png"></div>
    	<div class="texto"><h4>Ana Esther Gorordo Arias</h4>
				<br>
    		<p>REGIDOR 2</p>
				<br>
	    	<ul>
	    		<li>Empresaria del sector comercial y de servicios.</li>
	    		<li>Coach profesional de desarrollo de potencial humano y empresarial.</li>
	    	</ul>
	    <br>
	    <p class="objetivo">OBJETIVO</p>
			<br>
	    <p>Aplicar la lógica empresarial a la administración pública. Posicionar a Tampico como una marca a nivel nacional e internacional en el ámbito turístico, cultural y social.</p>

    	</div>
    </article>


    <article class="article">
    	<div class="imagen"><img src="http://www.magdaperaza.mx/cabildos/R-5-P-RODRIGO-AZCARRAGA-SALAZAR-IMG_4373.png"></div>
    	<div class="texto"><h4>Rodrigo Azcárraga Salazar</h4>
				<br>
	    	<p>REGIDOR 3</p>
				<br>
	    	<ul>
	    		<li>Empresario en la rama gastronómica, educativa y de organización de eventos.</li>
	    	</ul>
	    	<br>
	    	<p class="objetivo">OBJETIVO</p>
				<br>
	    	<p>Fomentar la participación ciudadana, principalmente de los jóvenes y la cooperación entre sociedad y gobierno.</p>
    	</div>
    </article>

    <article class="article">
    	<div class="imagen"><img src="http://www.magdaperaza.mx/cabildos/R-4-P-MICAELA-ISABEL-GOLDARACENA-MARTINEZ-IMG_4418.png"></div>
    	<div class="texto"><h4>Isabel Goldaracena Martínez</h4>
				<br>
	    	<p>REGIDOR 4</p>
				<br>
	    	<ul>
	    		<li>Profesionista dedicada al hogar y al servicio público.</li>
	    	</ul>
	    	<br>
	    	<p class="objetivo">OBJETIVO</p>
				<br>
	    	<p>Ser un servidor público cercano a la ciudadanía y sensible a sus necesidades, participando con compromiso y responsabilidad.</p>
    	</div>
    </article>



    <article class="article">
    	<div class="imagen"><img src="http://www.magdaperaza.mx/cabildos/R-6-P-PALOMA-GONZALEZ---IMG_4363.png"></div>
    	<div class="texto"><h4>Paloma González Carrasco</h4>
				<br>
	    	<p>REGIDOR 6</p>
				<br>
	    	<ul>
	    		<li>Empresaria y política con cargos municipales y estatales.</li>
	    		<li>Madre de familia con valores, retos y con mucho interés en el bienestar de la ciudad.</li>
	    	</ul>
	    	<br>
	    	<p class="objetivo">OBJETIVO</p>
				<br>
	    	<p>Estar cerca de la ciudadanía atendiendo gestiones con entisiasmo.</p>
    	</div>
    </article>

		<article class="article">
    	<div class="imagen"><img src="http://www.magdaperaza.mx/cabildos/R-7-P-RODOLFO-PIZARRO-PONCE-IMG_4397.png"></div>
    	<div class="texto"><h4>Rodolfo Pizarro Ponce</h4>
				<br>
	    	<p>REGIDOR 7</p>
				<br>
	    	<ul>
	    		<li>Empleado de Pemex</li>
	    	</ul>
	    	<br>
	    	<p class="objetivo">OBJETIVO</p>
				<br>
	    	<p>Mejorar y dar seguimiento a los servicios que otorga el Ayuntamiento haciendo equipo con los ciudadanos</p>
    	</div>
    </article>

    <article class="article">
    	<div class="imagen"><img src="http://www.magdaperaza.mx/cabildos/R-8-P-ILIANA-MOSES-SAID-IMG_4408.png"></div>
    	<div class="texto"><h4>Iliana Moses Said</h4>
				<br>
	    	<p>REGIDOR 8</p>
				<br>
	    	<ul>
	    		<li>Comerciante.</li>
	    		<li>Madre de familia con un gran amor por la ciudad.</li>
	    	</ul>
	    	<br>
	    	<p class="objetivo">OBJETIVO</p>
				<br>
	    	<p>Impulsar la transformación positiva de tampico proponiendo ideas y gestionando las mismas.</p>
    	</div>
    </article>

    <article class="article">
    	<div class="imagen"><img src="http://www.magdaperaza.mx/cabildos/R-9-P-ROBERTO-MORENO-BRONDO-IMG_4400.png"></div>
    	<div class="texto"><h4>Roberto Moreno Brondo</h4>
				<br>
	    	<p>REGIDOR 9</p>
				<br>
	    	<ul>
	    		<li>Ingeniero Civil</li>
	    		<li>Master en construcción, ciencias políticas y administración pública</li>
	    	</ul>
	    	<br>
	    	<p class="objetivo">OBJETIVO</p>
				<br>
	    	<p>Promover la gestión de recursos e impulsar su aplicación de manera eficaz, eficiente y transparente.</p>
    	</div>
    </article>
    <article class="article">
    	<div class="imagen"><img src="http://www.magdaperaza.mx/cabildos/R-11-P-ROGELIO-PEREZ-LARA-IMG_6971.JPG"></div>
    	<div class="texto"><h4>Rogelio Pérez Lara</h4>
				<br>
	    	<p>REGIDOR 11</p>
				<br>
	    	<ul>
	    		<li>Miembro activo SNTE</li>
	    		<li>Profesor de nivel secundaria</li>
	    	</ul>
	    	<br>
	    	<p class="objetivo">OBJETIVO</p>
				<br>
	    	<p>Seguir de cerca el apoyo al sector educativo, tanto en infraestructura, como en otorgamiento e incremento de becas, asi como apoyar las escuelas que requieran de personal de intendencia, seguridad y psicólogos.</p>
    	</div>
    </article>

    <article class="article">
    	<div class="imagen"><img src="http://www.magdaperaza.mx/cabildos/R-12-P-MA-TERESA-RAMIREZ-OLVERA-IMG_4393.png"></div>
    	<div class="texto"><h4>María Teresa Ramírez Olvera</h4>
				<br>
	    	<p>REGIDOR 12</p>
				<br>
	    	<ul>
	    		<li>Gestora social.</li>
	    		<li>Madre de familia honesta y compremetida con el bienestar de la ciudad</li>
	    	</ul>
	    	<br>
	    	<p class="objetivo">OBJETIVO</p>
				<br>
	    	<p>Impulsar la creación de una estancia para adultos mayores.</p>
    	</div>
    </article>

    <article class="article">
    	<div class="imagen"><img src="http://www.magdaperaza.mx/cabildos/R-13-P-PEDRO-MONSIVAIS-BECERRA-IMG_7000.png"></div>
    	<div class="texto"><h4>Pedro Monsivais Becerra</h4>
				<br>
    	<p>REGIDOR 13</p>
			<br>
	    	<ul>
	    		<li>Comerciante.</li>
	    		<li>Funcionario público y gestor social.</li>
	    	</ul>
	    	<br>
	    	<p class="objetivo">OBJETIVO</p>
				<br>
	    	<p>Apoyar a los pequeños comerciantes en sus gestiones ante el gobierno municipal y participar activamente en la mejora de la ciudad.</p>

    	</div>
    </article>

    <article class="article">
    	<div class="imagen"><img src="http://www.magdaperaza.mx/cabildos/R-14-P-MARTHA-NOHEMI-LANTO-RUIZ-IMG_6992.png"></div>
    	<div class="texto"><h4>Martha Nohemí Lanto Ruíz</h4>
				<br>
	    	<p>REGIDOR 14</p>
				<br>
	    	<ul>
	    		<li>Profesora de nivel primaria.</li>
	    		<li>Profesionista al servio de la educación.</li>
	    	</ul>
	    	<br>
	    	<p class="objetivo">OBJETIVO</p>
				<br>
	    	<p>Atender las necesidades de las escuelas y fortalecer el vínculo entre padres de familia y profesores.</p>
    	</div>
    </article>

    <article class="article">
    	<div class="imagen"><img src="http://www.magdaperaza.mx/cabildos/P-S-ALICIA-SOSA-CAVAZOS-IMG_4389.png"></div>
    	<div class="texto"><h4>Alicia Sosa Cavazos</h4>
				<br>
    		<p>ALCALDE SUPLENTE</p>
				<br>
    		<ul>
	    		<li>Ama de casa</li>
	    	</ul>

	    	<br>
	    	<p class="objetivo">OBJETIVO</p>
				<br>
	    	<p>Sumar esfuerzos por el bien de Tampico generando propuestas dándole continuidad a los proyecto pactados.</p>
    	</div>
    </article>

    <article class="article">
    	<div class="imagen"><img src="http://www.magdaperaza.mx/cabildos/S-1-S-SERGIO-MATA-BARRERA-IMG_4385.png"></div>
    	<div class="texto"><h4>Sergio Mata Barrera</h4>
				<br>
	    	<p>SÍNDICO 1 SUPLENTE</p>
				<br>
	    	<ul>
	    		<li>Empresario en el sector de la construcción, transporte de carga y negocios comerciales.</li>
	    	</ul>
	    	<br>
	    	<p class="objetivo">OBJETIVO</p>
				<br>
	    	<p>Impulsar a la juventud para que desarrollen proyectos que ayuden a mejorar los servicios públicos de Tampico y al mismo tiempo generen empleos.</p>
    	</div>
    </article>

    <article class="article">
    	<div class="imagen"><img src="http://www.magdaperaza.mx/cabildos/R-1-S-JOSE-MANUEL-ARGUELLO-REY-IMG_7018.png"></div>
				<div class="texto"><h4>José Manuel Arguello Rey</h4>
					<br>
    		<p>REGIDOR 1 SUPLENTE</p>
				<br>
	    	<ul>
	    		<li>Ing Químico Administrador</li>
	    		<li>Empresario del sector agropecuario enfocado a la producción de granos básicos y carne de bovino para consumo nacional
	    		y hortalizas para la exportación</li>
	    	</ul>
	    	<br>
	    	<p class="objetivo">OBJETIVO</p>
				<br>
	    	<p>Participar en encontrar soluciones integrales y permanentes para mejorar la calidad del agua de nuestros vasos
	    	de captación y almacenamiento de este vital líquido. Colaborar buscando personal especializado mejorado para mejorar
	    	las vialidades y el tránsito de vehículos en nuestra ciudad.</p>
    	</div>


    </article>

    <article class="article">
    	<div class="imagen"><img src="http://www.magdaperaza.mx/cabildos/R-2-S-OLGA-FRNACISCA-PEREZ-ESPINOSA-IMG_4369.png"></div>
    	<div class="texto"><h4>Francisca Pérez Espinosa</h4>
				<br>
    		<p>REGIDOR 2 SUPLENTE</p>
				<br>
	    	<ul>
	    		<li>Secretaria general de la delegación DI-VI-3 de jubilados y pensionados de Tampico.</li>
	    		<li>Profesora Jubilada.</li>
	    	</ul>
	    	<br>
	    	<p class="objetivo">OBJETIVO</p>
				<br>
	    	<p>Difundir activamente los proyectos a favor del medio ambiente entre la ciudadanía Tampiqueña.</p>

    	</div>
    </article>

    <article class="article">
    	<div class="imagen"><img src="http://www.magdaperaza.mx/cabildos/R-4-S-MARIA-DE-LA-LUZ-MAR-ESTRADA-IMG_4420.png"></div>
    	<div class="texto"><h4>María de la Luz Mar Estrada </h4>
				<br>
    	<p>REGIDOR 4 SUPLENTE</p>
			<br>
	    	<ul>
	    		<li>Contador Privado</li>
	    		<li>Gestora Social.</li>
	    	</ul>
	    	<br>
	    	<p class="objetivo">OBJETIVO</p>
				<br>
	    	<p>Ir de la mano con la gente que lo necesite, en especial con los niños con leucemia y cáncer</p>

    	</div>
    </article>

    <article class="article">
    	<div class="imagen"><img src="http://www.magdaperaza.mx/cabildos/R-5-S-ELIAS-CARLOS-HOLGUIN-IMG_6991.png"></div>
    	<div class="texto"><h4>Elías Carlos Holguín</h4>
				<br>
	    	<p>REGIDOR 5 SUPLENTE</p>
				<br>
	    	<ul>
	    		<li>Ingeniero Indistrial</li>
	    		<li>Profesionista y líder sindical del sector petroquímico.</li>
	    	</ul>
	    	<br>
	    	<p class="objetivo">OBJETIVO</p>
				<br>
	    	<p>Participación activa en la solución de problemas en los servicios municipales, con honestidad, humildad y honradez.</p>
    	</div>
    </article>

    <article class="article">
    	<div class="imagen"><img src="http://www.magdaperaza.mx/cabildos/R-8-S-KAREN-MERYBET-ROIZ-MARTINEZ-IMG_6997.png"></div>
    	<div class="texto"><h4>Karen Merybeth Roiz Martínez</h4>
				<br>
	    	<p>REGIDOR 8 SUPLENTE</p>
				<br>
	    	<ul>
	    		<li>Enfermera del sector privado.</li>
	    		<li>Comerciante</li>
	    	</ul>
	    	<br>
	    	<p class="objetivo">OBJETIVO</p>
				<br>
	    	<p>Implementar el bienestar social e impulsar a los jóvenes emprendedores.</p>
    	</div>
    </article>

    <article class="article">
    	<div class="imagen"><img src="http://www.magdaperaza.mx/cabildos/R-9-S-URCISIO-SALVADOR-MARQUEZ-IMG_6978.png"></div>
    	<div class="texto"><h4>Urcisio Salvador Márquez</h4>
				<br>
    		<p>REGIDOR 9 SUPLENTE</p>
				<br>
	    	<ul>
	    		<li>Empresario en el rubro del diseño de interiores.</li>
	    		<li>Ebanista.</li>
	    	</ul>
	    	<br>
	    	<p class="objetivo">OBJETIVO</p>
				<br>
	    	<p>Gestionar el apoyo de las diferentes dependencias del H. Ayuntamiento de Tampico. Embellecer los parques y jardines de nuestra ciudad para generar una mejor imagen urbana a la ciudadanía y los turistas.</p>
    	</div>
    </article>

     <article class="article">
    	<div class="imagen"><img src="http://www.magdaperaza.mx/cabildos/R-10-S-MARTHA-ALICIA-GARCIA-MARTINEZ-IMG_7030.png"></div>
    	<div class="texto"><h4>Martha Alicia García Martínez</h4>
				<br>
	    	<p>REGIDOR 10 SUPLENTE</p>
				<br>
	    	<ul>
	    		<li>Empresaria</li>
	    		<li>Gestora Social</li>
	    	</ul>
	    	<br>
	    	<p class="objetivo">OBJETIVO</p>
				<br>
	    	<p>Impulsar a las mujeres a superarse en lo personal y profesional.</p>
    	</div>
    </article>

     <article class="article">
    	<div class="imagen"><img src="http://www.magdaperaza.mx/cabildos/R-12-S-GLADIS-ISABEL-ROJAS-RODRIGUEZ-IMG_4371.png"></div>
    	<div class="texto"><h4>Gladis Isabel Rojas Rodríguez</h4>
				<br>
	    	<p>REGIDOR 12 SUPLENTE</p>
				<br>
	    	<ul>
	    		<li>Lic. en Administración de empresas.</li>
	    		<li>Funcionaria Pública</li>
	    		<li>Gestora social.</li>
	    		<li>Participación activa en las funciones del ayuntamiento.</li>
	    	</ul>
	    	<br>
	    	<p class="objetivo">OBJETIVO</p>
				<br>
	    	<p>Desempeñar mi participación como regidora con honradez y eficacia brindando servicios de excelencia a la ciudadanía.</p>
    	</div>
    </article>
</div>



<?php get_footer(); ?>
