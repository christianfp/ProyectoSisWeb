<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="utf-8">

		<!-- Always force latest IE rendering engine (even in intranet) & Chrome Frame
		Remove this if you use the .htaccess -->
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

		<title>pestanas</title>
		<meta name="description" content="">
		<meta name="author" content="satur">

		<meta name="viewport" content="width=device-width; initial-scale=1.0">

		<!-- Replace favicon.ico & apple-touch-icon.png in the root of your domain and delete these references -->
		<link rel="shortcut icon" href="/favicon.ico">
		<link rel="apple-touch-icon" href="/apple-touch-icon.png">
	</head>
	<style>
		.contenedor {
			position: relative;
			width: 1000px;
			height: 1700px;
		}
		i {font-size:40px; background-color: white;}
		.cabecera {
			display: inline-block;
			text-decoration: none;
			padding: 10px;
			border: 2px solid;
			position: relative;
			color: black;
			border-top-left-radius: 5px;
			border-top-right-radius: 5px;
			transform: translateY(2px);
			z-index: 2;
		}
		.pestana {
			position: absolute;
			border: 2px solid;
			height: 100%;
			visibility: hidden;
			opacity: 0;
			transition: visibility 1s, opacity 1s;
		}
		
		.p-activa {
			visibility: visible;
			opacity: 1;
		}
		.c-activa {
			border-bottom-color: white;
		}
		
		p{
			text-align: justify;
			padding: 10px;
		}
	</style>
	<script>
	function mostrarPestana(n){
		var pestanas = document.getElementsByClassName("pestana");
		var cabecera = document.getElementsByClassName("cabecera");
		for(i = 0; i<pestanas.length; i++){
			if(pestanas[i].className.includes("p-activa")){
				pestanas[i].className = pestanas[i].className.replace("p-activa", "");
				cabecera[i].className = cabecera[i].className.replace("c-activa", "");
				break;
			}
		}
		pestanas[n].className += " p-activa";
		cabecera[n].className += " c-activa";
	}
	</script>
	<body>	
		<i>Ingenieria de Sistemas</i>
		<div class="contenedor">
		<a href="#" class="cabecera c-activa" onclick="mostrarPestana(0);">Por que estudiar la carrera</a>
			<div class="pestana p-activa">
				<p>
				
					<i>Por que estudiar la carrera</i>

					<h1>Estudiando Ingenieria de Sistemas aseguras tu futuro:</h1>
					<h1>Los profesionales mas requeridos a nivel mundial son y seran los Ingenieros de Sistemas.</h1>
					<h1>Existe una tendencia de empresas extranjeras (norteamericanas y europeas, entre otras) de contratar Ingenieros de Sistemas bolivianos, por tanto, el mercado laboral no tiene fronteras.</h1>
					<h1>Puedes emprender creando tu propia empresa con una inversion muy pequeña.</h1>
					
					<i>Campos de accion</i>

					<h1>Desarrollo de software para telefonos moviles, tablets y Ordenadores</h1>
					<h1>Programacion de video juegos</h1>
					<h1>Desarrollo de aplicaciones para Web</h1>
					<h1>Ingenieria de calidad</h1>
					<h1>Gerencia de Tecnologias de Informacion</h1>
					<h1>Redes de Computadoras</h1>
					<h1>uditoria y Seguridad informatica</h1>

					<i>Mision</i>
					<h1>Desarrollar actividades de formacion superior, extension e investigacion en ciencias y tecnologia, que respondan a las necesidades de la sociedad. Estas actividades, estaran dirigidas a crear una comunidad de profesionales en el area de informatica y sistemas, con bases cientificas y actualizados en las tecnologias de informacion, con principios eticos solidos y valores cristianos, que apliquen sus conocimientos en beneficio de la sociedad, para lograr una sociedad mas justa, solidaria y respetuosa del hombre y la naturaleza.</h1>

					<i>Vision</i>
					<h1>Gozar de un pleno reconocimiento, a nivel nacional e internacional, por la calidad de los profesionales formados en Ingenieria de Sistemas, y por la pertinencia e impacto social de las actividades de extension e investigacion desarrolladas en el area.</h1>

					<i>Perfil Profesional</i>
					<h1>El Ingeniero de Sistemas de la Universidad Catolica Boliviana es un profesional innovador, emprendedor, capaz de trabajar en equipos multidisciplinarios, con solidas bases cientificas, competente en el desarrollo y gestion de sistemas que satisfagan las necesidades de organizaciones y la sociedad aplicando Tecnologias de la Informacion y Comunicacion, sustentados en principios eticos y valores del evangelio.</i>				</p>
			</div>
		<a href="#" class="cabecera" onclick="mostrarPestana(1);">Datos Generales</a>
			<div class="pestana">
				<h1></h1>
				<i>Datos generales</i>

				<h1>Titulo otorgado: Licenciatura en Ingenieria de Sistemas</h1>
				<h1>Duracion: 9 semestres</h1>
				<h1>Nº de materias: 49</h1>

				<i>Modalidades de titulacion</i>
				<h1>Tesis de Grado</h1>
				<h1>Proyecto de Grado</h1>
				<h1>Trabajo Dirigido</h1>
				<h1>Excelencia Academica<h1>
				<i>Objetivos que persigue la carrera</i>
				<h1>Formar profesionales  capacitados en tecnologias de la informacion para resolver problemas de sistematizacion de informacion en organizaciones publicas o privadas.</h1>
			</div>
		<a href="#" class="cabecera" onclick="mostrarPestana(2);">Plan de Estudios</a>
			<div class="pestana">
				<img src="imagenes/plan.jpg" width="100%" />
			</div>
		<a href="#" class="cabecera" onclick="mostrarPestana(3);">Requisitos de inscripcion</a>
			<div class="pestana">
				<h1></h1>
				<i>Requisitos de inscripcion</i>

				<h1>1. Fotocopia legalizada del diploma de bachiller. Provisionalmente por un semestre, fotocopia de la libreta de sexto de secundaria legalizada por el colegio, pudiendo prorrogarse excepcionalmente este plazo por causas justificadas y debidamente acreditadas.</h1>
				<h1>2. Fotocopia simple de la cedula de identidad vigente.</h1>
				<h1>3. Certificado de nacimiento original computarizado.</h1>
				<h1>4. Tres fotografias 4 por 4 a color con fondo celeste o plomo claro.</h1>
				<h1>5. Cumplir y aprobar los procedimientos de ingreso a la Universidad</h1>
			</div>
		</div>
	</body>