<?php
	session_start();
	if(isset($_SESSION['usuario'])){
		if($_SESSION['usuario']['UserType'] != "User"){
			header("Location: ../Admin/");
		}
	} else {
		header('Location: ../../');
	}
?>

<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Corpus Lingüisticos D.E</title>
	<meta name = "viewport" content="width=device-width, user-scalable=no, initial-scalable=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" type="text/css" href="../../css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../../css/estilosMSVD.css">
	<link rel="stylesheet" type="text/css" href="../../Icons/fonts.css">
	<script language="Javascript"> document.oncontextmenu = function(){return false} </script>
</head>
<body>

	<div class="container">
		<header>
			<nav class="navbar navbar-default navbar-fixed-top">
				<div class="container-fluid">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-m">
							<span class="sr-only">Menú</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<a href="#" class="navbar-brand">Corpus Lingüistico D.E</a>
					</div>
					<div class="collapse navbar-collapse" id="navbar-m">
						<ul class="nav navbar-nav">
							<li><a href="index.php"><span class="icon-home"></span>Inicio</a></li>
							<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"><span class="icon-folder-video"></span>Corpus LSM<span class="icono-menu icon-chevron-small-down"></span></a>
								<ul class="dropdown-menu">
									<li><a href="CorpusLSM.php#entrevista_noe">Entrevista a Noe</a></li>
									<li><a href="CorpusLSM.php#entrevista_oscar">Entervista a Oscar</a></li>
								</ul>
							</li>
							<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"><span class="icon-archive"></span>Corpus VFMR<span class="icono-menu icon-chevron-small-down"></span></a>
								<ul class="dropdown-menu">
									<li><a href="CorpusVFMR.php#entrevista1">Entrevista 1 - Octubre 2009</a></li>
									<li><a href="CorpusVFMR.php#entrevista2">Entrevista 2 - 10 Agosto 2015</a></li>
									<li><a href="CorpusVFMR.php#entrevista3">Entrevista 3 - 10 Agosto 2015</a></li>
									<li><a href="CorpusVFMR.php#entrevista4">Entrevista 4 - 10 Agosto 2015</a></li>
									<li><a href="CorpusVFMR.php#entrevista5">Entrevista 5 - 10 Agosto 2015</a></li>
									<li><a href="CorpusVFMR.php#entrevista6">Entrevista 6 - 03 Diciembre 2016</a></li>
									<li><a href="CorpusVFMR.php#entrevista7">Entrevista 7 - 29 Enero 2017</a></li>
								</ul>
							</li>
							<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"><span class="icon-archive"></span>Corpus MSVD<span class="icono-menu icon-chevron-small-down"></span></a>
								<ul class="dropdown-menu">
									<li><a href="CorpusMSVD.php#entrevista1">Entervista 1 - 22 Enero 2017</a></li>
									<li><a href="CorpusMSVD.php#entrevista2">Entrevista 2 - 04 Marzo 2017</a></li>
								</ul>
              </li>
              <li><a href="corpusVF.php"><span class="icon-folder"></span>Corpus VF</a></li>
              <li><a href="CorpusDPO.php"><span class="icon-folder"></span>Corpus DPO</a></li>
							<li><a href="Aportaciones.php"><span class="icon-open-book"></span>Producci�n Cientifica</a></li>
							<li><a href="../logout.php"><span class="icon-log-out"></span>Cerrar Sesi�n</a></li>
						</ul>
					</div>
				</div>
			</nav>
		</header>
	</div>

	
<section> <article class="titulo"> 
<h1>CORPUS DPO (Desafiliación Punta Oriente)</h1>
</article> <article class="MSVD"> 
<hr class="division" size="4" color="#6914OF" />
<p class="pad-top">Este corpus contiene 30 entrevistas del tema desafiliación académica femenina de nivel medio superior en mujeres residentes de la colonia punta oriente, en el estado de Chihuahua, México.<br>
</p>
<p class="pad-buttom">Las participantes tienen un perfil como el siguiente: sujetos de sexo femenino, rangos de edades de 18 a 20 años, nivel socioeconómico bajo, residentes de la Colonia Punta Oriente al sur Oriente de la Ciudad de Chihuahua en el Estado de Chihuahua, México; cuentan con secundaria terminada, bachillerato trunco, estados civiles mayormente solteras con un promedio de 1 hijo.</p>
<hr class="division" size="4" color="#6914OF" />
</article> <article class="acceso_rapido"> 
<div class="row"> 
  <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6"> <a href="#entrevista1"><span class="icon-sound">Ir 
    a Entrevista 1</span></a> </div>
  <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6"> <a href="#entrevista2"><span class="icon-sound">Ir 
    a Entrevista 2</span></a></div>
  <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6"> <a href="#entrevista3"><span class="icon-sound">Ir 
    a Entrevista 3</span></a> </div>
  <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6"> <a href="#entrevista4"><span class="icon-sound">Ir 
    a Entrevista 4</span></a> </div>
  <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6"> <a href="#entrevista5"><span class="icon-sound">Ir 
    a Entrevista 5</span></a> </div>
  <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6"> <a href="#entrevista6"><span class="icon-sound">Ir 
    a Entrevista 6</span></a> </div>
  <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6"> <a href="#entrevista7"><span class="icon-sound">Ir 
    a Entrevista 7</span></a> </div>
  <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6"> <a href="#entrevista8"><span class="icon-sound">Ir 
    a Entrevista 8</span></a> </div>
    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6"> <a href="#entrevista9"><span class="icon-sound">Ir 
    a Entrevista 9</span></a> </div>
    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6"> <a href="#entrevista10"><span class="icon-sound">Ir 
    a Entrevista 10</span></a> </div>
    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6"> <a href="#entrevista11"><span class="icon-sound">Ir 
    a Entrevista 11</span></a> </div>
    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6"> <a href="#entrevista12"><span class="icon-sound">Ir 
    a Entrevista 12</span></a> </div>
    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6"> <a href="#entrevista13"><span class="icon-sound">Ir 
    a Entrevista 13</span></a> </div>
    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6"> <a href="#entrevista14"><span class="icon-sound">Ir 
    a Entrevista 14</span></a> </div>
    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6"> <a href="#entrevista15"><span class="icon-sound">Ir 
    a Entrevista 15</span></a> </div>
    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6"> <a href="#entrevista16"><span class="icon-sound">Ir 
    a Entrevista 16</span></a> </div>
    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6"> <a href="#entrevista17"><span class="icon-sound">Ir 
    a Entrevista 17</span></a> </div>
    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6"> <a href="#entrevista18"><span class="icon-sound">Ir 
    a Entrevista 18</span></a> </div>
    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6"> <a href="#entrevista19"><span class="icon-sound">Ir 
    a Entrevista 19</span></a> </div>
    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6"> <a href="#entrevista20"><span class="icon-sound">Ir 
    a Entrevista 20</span></a> </div>
    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6"> <a href="#entrevista21"><span class="icon-sound">Ir 
    a Entrevista 21</span></a> </div>
    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6"> <a href="#entrevista22"><span class="icon-sound">Ir 
    a Entrevista 22</span></a> </div>
    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6"> <a href="#entrevista23"><span class="icon-sound">Ir 
    a Entrevista 23</span></a> </div>
    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6"> <a href="#entrevista24"><span class="icon-sound">Ir 
    a Entrevista 24</span></a> </div>
    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6"> <a href="#entrevista25"><span class="icon-sound">Ir 
    a Entrevista 25</span></a> </div>
    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6"> <a href="#entrevista26"><span class="icon-sound">Ir 
    a Entrevista 26</span></a> </div>
    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6"> <a href="#entrevista27"><span class="icon-sound">Ir 
    a Entrevista 27</span></a> </div>
    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6"> <a href="#entrevista28"><span class="icon-sound">Ir 
    a Entrevista 28</span></a> </div>
    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6"> <a href="#entrevista29"><span class="icon-sound">Ir 
    a Entrevista 29</span></a> </div>
    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6"> <a href="#entrevista30"><span class="icon-sound">Ir 
    a Entrevista 30</span></a> </div>

</div>
</article> 
<article class="entrevista_1" id="entrevista1"> 
<h2>Entrevista 01</h2>
<div class="row"> 
 
</div>
<br />
<p><b>Ficha técnica: </b></p>

<p>Sujeto de sexo femenino, 19 años de edad, nivel socioeconómico bajo, bachiller trunco (cursó hasta segundo semestre), soltera, menor de dos hermanas.</p>
<br/>
<p><b>Notas del diario de campo:</b></p>
<p>Se hace referencia a algunos términos coloquiales cuyo significado se presenta a continuación con la finalidad de entender el sentido del discurso:</p>
<br />
<style type="text/css">
.tftable {font-size:12px;color:#333333;width:100%;border-width: 1px;border-color: #729ea5;border-collapse: collapse;}
.tftable th {font-size:12px;background-color:#acc8cc;border-width: 1px;padding: 8px;border-style: solid;border-color: #729ea5;text-align:left;}
.tftable tr {background-color:#d4e3e5;}
.tftable td {font-size:12px;border-width: 1px;padding: 8px;border-style: solid;border-color: #729ea5;}
.tftable tr:hover {background-color:#ffffff;}
</style>

<table class="tftable" border="1">
<tr><th>Concepto</th><th>Significado</th></tr>
<tr><td>Sara</td><td>Hermana mayor</td></tr>
<tr><td>Malvivientes</td><td>Personas que no se encuentran inscritos a una unidad académica o con un trabajo estable, normalmente pasan el día entre las casas destruidas (tapias) de la localidad utilizando diferentes tipos de drogas y realizando actividades ilícitas como el robo para adquirir más estupefacientes</td></tr>
<tr><td>Íbamos de pinta</td><td>Hace referencia a que no acudía a las clases para salir a pasear con sus compañeros</td></tr>
<tr><td>Cerillito</td><td>Persona que empaqueta las compras que otros realizan</td></tr>
</table>
<br>
<br />
<p>
1. ¿Podría indicar la Colonia donde reside?<br> 
   <b>R= En punta oriente</b><br><br>

2. ¿Cuál es su edad?<br> 
   <b>R= 19</b><br><br>

3. ¿Cuál fue su último grado de estudio?<br> 
   <b>R= 2do semestre de prepa</b><br><br>

4. ¿Cuál fué el motivo de que abandonara sus estudios?<br> 
   <b>R= Pues en mi casa casi no había dinero, pues nomas mi mamá trabaja ahí en la maquila, es operadora y como no tenía apoyo de nadie pues mi papá nos abandonó y aparte los papás de mi mamá, o sea mis abuelitos se enojaron con mi mamá cuando se embarazó de mi hermana mayor porque ellos decían que había destruido su vida teniendo hijos de un drogadicto, así se refieren a mi papá, entonces mi mamá nos tuvo a Sara y a mí con mi papá.
      Sara nomás estudió hasta 2do año de la secundaria, porque ella prefería andar con los malvivientes y pues para mi mamá era muy complicado andarla persiguiendo por que los horarios de trabajo de la maquila son muy largos, entonces yo quería ser diferente y si terminar la escuela pero era mucho dinero el que se necesitaba porque yo tenía que tomar dos camiones para llegar a la escuela y dos de regreso y eso es mucho dinero, aparte siempre me pedían algo en la escuela pues de material y así como las cartulinas o dinero para algún recorrido pues yo no tenía manera de pagar, entonces ese día no iba, o cuando no tenía dinero para pagar el camión pues tampoco iba, entonces así poco a poco dejé de ir, era muy difícil mantenerse ahí si no tenía dinero, o sea si quería pero pues había cosas más importantes. 
      Yo extraño mucho la escuela porque me la pasaba muy bien con todos mis amigos, nos íbamos de pinta, hacíamos fiesta en casa de alguien, comprábamos mucha cerveza, extraño mucho todo eso porque me la pase bien padre, una vez hasta terminamos en “Delicias”.
    </b><br><br> 

4.1. ¿Cómo es que podía pagar un alimento en “Delicias” y lo referente a la escuela no?<br> 
     <b>R= Pues bien fácil! Yo ya sabía que día nos íbamos a ir de fiesta, entonces me iba al Oxxo ese que está allá [señala con la mano a un lado del parque de las banderas] y me ponía de cerillito, pero yo ya sabía que si venía en ropa rabona pues sacaba bastante dinero y con eso me podía ir de fiesta y hasta me quedaba poquito para curarme la cruda. 
        </b><br><br>
4.2. ¿Cómo hacía para adquirir alcohol si usted era menor de edad?<br>  
    <b>R= Pues algunos de los que se juntan con nosotras son mayores de edad, entonces solo les damos el dinero y ellos se encargan.
    </b><br><br>
5.	¿Conoce a alguna mujer de su entorno que también abandonó la educación Media Superior? y ¿Conoce cuáles fueron sus motivos?<br>
    <b>R= Si, conozco muchas, pero ellas la dejaron porque quisieron, porque por ejemplo mi comadre dejó la escuela porque era muy aburrido estar ahí sentada todo el día aprendiendo cosas reborujadas y complicadas ¿tú crees?
    </b><br><br>    
</p>
<br />
<br />
</article> 

<article class="entrevista_2" id="entrevista2"> 
<h2>Entrevista 02</h2>
<div class="row"> 
 
</div>
<br />
<p><b>Ficha técnica: </b></p>

<p>Sujeto de sexo femenino, 20 años de edad, nivel socioeconómico bajo, bachiller trunco (cursó hasta primer semestre), soltera, empleada.</p>
<br/>
<p><b>Notas del diario de campo:</b></p>
<p>Se hace referencia a algunos términos coloquiales cuyo significado se presenta a continuación con la finalidad de entender el sentido del discurso:</p>
<br />
<style type="text/css">
.tftable {font-size:12px;color:#333333;width:100%;border-width: 1px;border-color: #729ea5;border-collapse: collapse;}
.tftable th {font-size:12px;background-color:#acc8cc;border-width: 1px;padding: 8px;border-style: solid;border-color: #729ea5;text-align:left;}
.tftable tr {background-color:#d4e3e5;}
.tftable td {font-size:12px;border-width: 1px;padding: 8px;border-style: solid;border-color: #729ea5;}
.tftable tr:hover {background-color:#ffffff;}
</style>

<table class="tftable" border="1">
<tr><th>Concepto</th><th>Significado</th></tr>
<tr><td>Tianguis</td><td>Mercado sobre ruedas que tiene lugar el sábado y el domingo sobre la avenida principal donde a precios muy económicos es posible conseguir ropa usada.</td></tr>
<tr><td>Clandes</td><td>Venta de cerveza o licores fuera del horario legal establecido con ese fin.</td></tr>
<tr><td>Apendejaron</td><td>Se distrajeron y cometieron un error.</td></tr>
<tr><td>Panzonas</td><td>Mujeres que se embarazarón.</td></tr>
<tr><td>Oxxo</td><td>Tienda de conveniencia de autoservicio.</td></tr>
</table>
<br>
<br />
<p>
1. ¿Podría indicar la Colonia donde reside?<br> 
   <b>R= En punta oriente</b><br><br>

2. ¿Cuál es su edad?<br> 
   <b>R= 20</b><br><br>

3. ¿Cuál fue su último grado de estudio?<br> 
   <b>R= 1er semestre de prepa.</b><br><br>

4. ¿Cuál fué el motivo de que abandonara sus estudios?<br> 
   <b>R= Pues porque era el lugar más aburrido del mundo, había una maestra que me súper odiaba, ella siempre estaba en mi contra y siempre quería que yo reprobara, aparte hablaba mal de mí con los demás maestros para que también me odiaran y me reprobaran, entonces como siempre me reprobaban pues tenía que pagar los exámenes de recuperación y mi papá me dijo que para eso iba a tener que trabajar si quería pagarlos, entonces me fui a trabajar a un Oxxo, yo me dedicaba a poner sodas en el refri y a poner más galletas si se acababan y a poner las cosas que se iban terminando, entonces me empezaron a pagar y pues como en mi casa siempre falta el dinero y mi papá jamás podía comprarme ropa nueva, pura del tianguis ahora yo podía comprarme mis cosas, entonces empecé a trabajar tiempo extra y a ganar más dinero y ahora ganaba más que mi papá, entonces ¿para qué me regresaba a la escuela? Si yo ya tenía un buen sueldo y ya estaba empezando a tener puntos del INFONAVIT y pronto iba a poder comprar mi casa, y me la daban por aquí cerca del Oxxo.
        Lo que más me podía de ya no ir a la escuela eran mis amigas, porque todo hacíamos juntas y a dos de ellas ya no las dejaban juntarse conmigo porque a la mamá de una de ellas le daba mucha envidia que yo tuviera un muy buen trabajo y fuera independiente y su hija pues estaba toda tonta en su casa nomás con sus libros, pues así jamás iba a avanzar.
        Y pues ya ahorita ahorita  ahorita ya no le veo caso a volver a la escuela. ¿apoco tú crees que me podría ir mejor solo por haber terminado la prepa?, si estudiar es un lujo, yo creo que no.
    </b><br><br> 

4.1. ¿Pudo concretar sus planes de comprar una casa tras trabajar en el OXXO? <br> 
     <b>R= Después de un tiempo me despidieron del Oxxo porque se dieron cuenta que vendía clandes que me robaba del refri del Oxxo y me fui a trabajar a la maquila que esta junto a la Equs (parque industrial sur) y pues si me quedo tiempo extra me va bien, y ya mero puedo sacar mi casa. </b><br><br>
4.2. ¿Cómo es su vida afectiva?<br>  
    <b>R= No, no consigo novia es que yo soy lesbiana ¿apoco no se me nota?</b><br><br>
5.	¿Conoce a alguna mujer de su entorno que también abandonó la educación Media Superior? y ¿Conoce cuáles fueron sus motivos?<br>
    <b>R= Pues todas las de la cuadra, ninguna terminó, digo, las que empezaron todas se quedaron en el camino, la mayoría porque se apendejaron y pues salieron panzonas cosa que a mí no me podía pasar porque una mujer no puede embarazar a otra ¿verdad?.</b><br><br>    
</p>
<br />
<br />
</article> 

<article class="entrevista_3" id="entrevista3"> 
<h2>Entrevista 03</h2>
<div class="row"> 
 
</div>
<br />
<p><b>Ficha técnica: </b></p>

<p>Sujeto de sexo femenino, 19 años de edad, nivel socioeconómico bajo, bachiller trunco (cursó hasta segundo semestre), soltera.</p>
<br/>
<p><b>Notas del diario de campo:</b></p>
<p>Se hace referencia a algunos términos coloquiales cuyo significado se presenta a continuación con la finalidad de entender el sentido del discurso:</p>
<br />
<style type="text/css">
.tftable {font-size:12px;color:#333333;width:100%;border-width: 1px;border-color: #729ea5;border-collapse: collapse;}
.tftable th {font-size:12px;background-color:#acc8cc;border-width: 1px;padding: 8px;border-style: solid;border-color: #729ea5;text-align:left;}
.tftable tr {background-color:#d4e3e5;}
.tftable td {font-size:12px;border-width: 1px;padding: 8px;border-style: solid;border-color: #729ea5;}
.tftable tr:hover {background-color:#ffffff;}
</style>

<table class="tftable" border="1">
<tr><th>Concepto</th><th>Significado</th></tr>
<tr><td>Tomar</td><td>Ingerir bebidas embriagantes.</td></tr>
</table>
<br>
<br />
<p>
1. ¿Podría indicar la Colonia donde reside?<br> 
   <b>R= En punta oriente</b><br><br>

2. ¿Cuál es su edad?<br> 
   <b>R= 19</b><br><br>

3. ¿Cuál fue su último grado de estudio?<br> 
   <b>R= 2do semestre de prepa.</b><br><br>

4. ¿Cuál fué el motivo de que abandonara sus estudios?<br> 
   <b>R= Pues en ese tiempo mi papá y mi mamá se la pasaban peleando por todo, enserio por todo, mi papá invitaba todos los fines de semana desde el viernes a sus amigos a tomar y ahí se estaba hasta que amanecía, a veces hasta la policía llegaba, y pues mi mamá se enojaba mucho y lo corría de la casa.
    Mi papá se ponía muy violento, entonces nos la pasábamos con llamadas a la policía, y pues mi mamá no trabaja, nomás mi papá por lo que dependíamos de él para tener dinero, entonces cuando por fin mi papá se fue ya no pude volver a la escuela.
    Aunque la verdad, nunca entendí para que la necesitaba, yo siempre pensé que la escuela era algo que solo la gente de mucho dinero podía tener pero que no significaba nada, o sea si ellos tienen dinero no se trata de lo que se estudiaron, más bien de lo que su papá les deje porque todo mundo sabe que ellos heredan los puestos de gobierno o las empresas del papá por eso tienen dinero, por ese motivo no le vi el caso a seguir estudiando, mejor ya no regrese a la escuela.
    </b><br><br> 

4.1. ¿Extraña algo de la escuela?<br> 
     <b>R= La verdad si, a mis amigas, lo que pasa es que ellas viven lejos de aquí, como a 20 minutos, y por eso ya no las puedo ver tan seguido. Cuando estábamos juntas en la escuela nos divertíamos tanto, siempre nos reíamos o nos contábamos cosas que nos pasaban con los galanes y así y ahora me tengo que conformar con mis amigas de la cuadra.
     </b><br><br>
5.	¿Conoce a alguna mujer de su entorno que también abandonó la educación Media Superior? y ¿Conoce cuáles fueron sus motivos?<br>
    <b>R= Uh! Todas las de la cuadra, unas salieron embarazadas otras de plano no querían, yo la verdad si hubiera tenido un papá influyente o con mucho dinero si hubiera estudiado, nomás pa’ que vean que no soy tonta y al rato que me vieran en mi carrote, ¿te imaginas?
    </b><br><br>    
</p>
<br />
<br />
</article> 

<article class="entrevista_4" id="entrevista4"> 
<h2>Entrevista 04</h2>
<div class="row"> 
 
</div>
<br />
<p><b>Ficha técnica: </b></p>

<p>Sujeto de sexo femenino, 18 años de edad, nivel socioeconómico bajo, bachiller trunco (cursó hasta primero semestre), soltera, aspira trabajar como operadora de producción en la industria manufacturera.
</p>
<br/>
<p><b>Notas del diario de campo:</b></p>
<p>Se hace referencia a algunos términos coloquiales cuyo significado se presenta a continuación con la finalidad de entender el sentido del discurso:</p>
<br />
<style type="text/css">
.tftable {font-size:12px;color:#333333;width:100%;border-width: 1px;border-color: #729ea5;border-collapse: collapse;}
.tftable th {font-size:12px;background-color:#acc8cc;border-width: 1px;padding: 8px;border-style: solid;border-color: #729ea5;text-align:left;}
.tftable tr {background-color:#d4e3e5;}
.tftable td {font-size:12px;border-width: 1px;padding: 8px;border-style: solid;border-color: #729ea5;}
.tftable tr:hover {background-color:#ffffff;}
</style>

<table class="tftable" border="1">
<tr><th>Concepto</th><th>Significado</th></tr>
<tr><td>Desmadre</td><td>Convivencia con los otros alumnos.</td></tr>
<tr><td>Pistiar</td><td>Ingerir bebidas embriagantes.</td></tr>
<tr><td>Bendición</td><td>Bebé.</td></tr>
<tr><td>Mamonas</td><td>Ostentan una actitud de superioridad sobre ella.</td></tr>
<tr><td>Narcos</td><td>Personas al servicio del narcotráfico mediante los cárteles de droga mexicanos.</td></tr>
<tr><td>Muy acá</td><td>Que ostentan una actitud de poder.</td></tr>
<tr><td>Jefa</td><td>Mamá.</td></tr>
<tr><td>Rifa</td><td>Esfuerza.</td></tr>
<tr><td>Domingo 7 </td><td>Embarazada.</td></tr>
<tr><td>Outfit</td><td>Atuendo.</td></tr>
</table>
<br>
<br />
<p>
1. ¿Podría indicar la Colonia donde reside?<br> 
   <b>R= En punta oriente</b><br><br>

2. ¿Cuál es su edad?<br> 
   <b>R= 18 </b><br><br>

3. ¿Cuál fue su último grado de estudio?<br> 
   <b>R= 1er semestre de prepa.</b><br><br>

4. ¿Cuál fué el motivo de que abandonara sus estudios?<br> 
   <b>R= Pues la verdad nunca entendí a qué iba, o sea estaba bien chido el desmadre tuve muchos novios de ahí, hice muchas amigas. Nombre nos íbamos al centro a comer banderillas y luego a la casa de alguien a pistiar, vieras que suave relajo hacíamos. Eso era lo único bueno de la escuela porque que flojera física y química, eran bien aburridas y aparte ni les entendía porque pues yo pensaba: apoco cuando esté en la maquila de operadora me van a pedir que haga ecuaciones, pues que las haga el inge ¿no?, para eso estudió.
   </b><br><br> 

4.1. ¿Aun mantiene contacto con sus compañeras de la escuela? <br> 
     <b>R= La neta no, solo he sabido cosillas de ellas, o sea, por ejemplo, unas están embarazadas o ya tuvieron a su bendición y pues están en su casa siendo señoras, otras pues ahí andan, pero se hicieron bien mamonas pues porque andan con narcos muy acá y pues las poquillas que siguen en la escuela pues ni tiempo tienen por estar estudiando
     </b><br><br>
     4.2. ¿Por qué no regresó a la escuela? <br> 
       <b> R= La verdad un día tome la decisión de no ir, porque fíjate, mi jefa se rifa trabajando todo el día y yo sentadota en la clase de física, pudiendo hacer algo como trabajar para poner pan en la mesa, o sea mejor el día que yo tenga mucho mucho mucho dinero pues me meto a la escuela, ¡y a una de esas de paga he! Como Lasalle o alguna de esas muy finas. 
        </b><br><br>
5.	¿Conoce a alguna mujer de su entorno que también abandonó la educación Media Superior? y ¿Conoce cuáles fueron sus motivos?<br>
    <b>R= Pues de las que te conté, las que salieron con su domingo 7 o las que andaban con sus narquillos, pero pues si yo hubiera andado con un narco de dinero la neta yo si le digo que me piche la escuela ¿apoco no? Y que me compre ropa de marca para que en la escuela fina todas se mueran de envidia con mi outfit.
    </b><br><br>    
</p>
<br />
<br />
</article>

<article class="entrevista_5" id="entrevista5"> 
<h2>Entrevista 05</h2>
<div class="row"> 
 
</div>
<br />
<p><b>Ficha técnica: </b></p>

<p>Sujeto de sexo femenino, 20 años de edad, nivel socioeconómico bajo, bachiller trunco (cursó hasta tercer semestre), unión libre, su situación económica no es favorecedora.
</p>
<br/>
<p><b>Notas del diario de campo:</b></p>
<p>Se hace referencia a algunos términos coloquiales cuyo significado se presenta a continuación con la finalidad de entender el sentido del discurso:</p>
<br />
<style type="text/css">
.tftable {font-size:12px;color:#333333;width:100%;border-width: 1px;border-color: #729ea5;border-collapse: collapse;}
.tftable th {font-size:12px;background-color:#acc8cc;border-width: 1px;padding: 8px;border-style: solid;border-color: #729ea5;text-align:left;}
.tftable tr {background-color:#d4e3e5;}
.tftable td {font-size:12px;border-width: 1px;padding: 8px;border-style: solid;border-color: #729ea5;}
.tftable tr:hover {background-color:#ffffff;}
</style>

<table class="tftable" border="1">
<tr><th>Concepto</th><th>Significado</th></tr>
<tr><td>Al super</td><td>Tienda de autoservicio de abarrotes. Se encuentra sobre la avenida equis, que es la calle principal, frente a ella se encuentra una plaza donde está la tienda Sixty, especializada en ropa juvenil.</td></tr>

</table>
<br>
<br />
<p>
1. ¿Podría indicar la Colonia donde reside?<br> 
   <b>R= En punta oriente</b><br><br>

2. ¿Cuál es su edad?<br> 
   <b>R= 20 </b><br><br>

3. ¿Cuál fue su último grado de estudio?<br> 
   <b>R= 3er semestre de prepa.</b><br><br>

4. ¿Cuál fué el motivo de que abandonara sus estudios?<br> 
   <b>R= Uy! Pues muchas cosas, haz de cuenta que cuando yo estaba en el bachi, porque ¡si fui! Y hasta llegue a 3er semestre ¡he!, en ese tiempo yo vivía con mis papás pero a mi papá le tocó el recorte de personal en la maquila, y mi mamá vendía ropa usada en el tianguis, entonces no teníamos dinero, y todavía yo ¿querer ir a la escuela?, me parecía muy egoísta con ellos. 
Una amiga me comento que estaban contratando en una tienda de ropa, la que está frente al súper ¿si sabes cuál?, entonces fui a ver si me daban trabajo y me contrataron, entonces yo le decía a mi mamá que me iba a la escuela y en realidad me iba a trabajar, como a las 3 semanas le conté la verdad y se enojó mucho conmigo, pero después me apoyó y hasta me echaba lonche para que no gastará en comida mientras trabajaba. 
Entonces seguí trabajando en esa tienda como 1 año, y ahí conocí a Manuel, él era el gerente de la tienda, pues claro que todas querían con él, pero me hizo caso a mí y a pesar de que muchas mujeres lo buscan porque es un súper partido pues él me quiere a mí. Nos fuimos a vivir juntos, rentamos una casa cerca del trabajo y somos muy felices a pesar de las envidiosas, todos los viernes me lleva a comer elotes y los domingos vamos al menudo. 
</b><br><br> 

4.1. ¿No cree que estudiar tenga ventajas?<br> 
     <b>R= ¿Para qué?, mira si me regreso a la escuela tengo que dejar mi trabajo, y descuidaría a Manuel y lo tengo que cuidar de las lagartonas que le andan haciendo ojitos.
     </b><br><br>
4.2. ¿Por qué no regresó a la escuela? <br> 
       <b> R= La verdad no, o sea por ejemplo Manuel tiene ese trabajo porque es hombre y él sí terminó la prepa, pero si yo tuviera la prepa terminada no tendría las mismas posibilidades. 
       </b><br><br>
5.	¿Conoce a alguna mujer de su entorno que también abandonó la educación Media Superior? y ¿Conoce cuáles fueron sus motivos?<br>
    <b>R= Fíjate que era bien, como raro, porque todas las que trabajábamos en el sixty estábamos igual, habíamos dejado el bachi a la mitad, pero la verdad nunca escuche decir a ninguna que estaba arrepentida. Los motivos son muchos unas se embarazaron otras ya no pudieron continuar porque no tenían dinero o porque no les gustó. 
    </b><br><br>    
</p>
<br />
<br />
</article> 

<article class="entrevista_6" id="entrevista6"> 
<h2>Entrevista 06</h2>
<div class="row"> 
 
</div>
<br />
<p><b>Ficha técnica: </b></p>

<p>SSujeto de sexo femenino, 18 años de edad, nivel socioeconómico bajo, bachiller trunco (cursó hasta segundo semestre), soltera, antecedente de violencia familiar.
</p>
<br/>
<p><b>Notas del diario de campo:</b></p>
<p>Se hace referencia a algunos términos coloquiales cuyo significado se presenta a continuación con la finalidad de entender el sentido del discurso:</p>
<br />
<style type="text/css">
.tftable {font-size:12px;color:#333333;width:100%;border-width: 1px;border-color: #729ea5;border-collapse: collapse;}
.tftable th {font-size:12px;background-color:#acc8cc;border-width: 1px;padding: 8px;border-style: solid;border-color: #729ea5;text-align:left;}
.tftable tr {background-color:#d4e3e5;}
.tftable td {font-size:12px;border-width: 1px;padding: 8px;border-style: solid;border-color: #729ea5;}
.tftable tr:hover {background-color:#ffffff;}
</style>

<table class="tftable" border="1">
<tr><th>Concepto</th><th>Significado</th></tr>
<tr><td>Acople</td><td>Conjunto de amigos.</td></tr>
<tr><td>Sustancias</td><td>Drogas.</td></tr>

</table>
<br>
<br />
<p>
1. ¿Podría indicar la Colonia donde reside?<br> 
   <b>R= En punta oriente</b><br><br>

2. ¿Cuál es su edad?<br> 
   <b>R= 18 </b><br><br>

3. ¿Cuál fue su último grado de estudio?<br> 
   <b>R= 2do semestre de prepa.</b><br><br>

4. ¿Cuál fué el motivo de que abandonara sus estudios?<br> 
   <b>R= Pues en mi casa había muchos problemas, mi papá siempre estaba golpeando a mi mamá y mi mamá lo corría y el regresaba, entonces se encontentaban compraban cerveza y otras sustancias para festejar que ya estaban bien, era todo un evento: mi papá llevaba a mi mamá de compras al centro para que esa noche fuera la más bonita de la fiesta, después iban a comer y luego regresaban con todas las compras, invitaban a todo mundo a la fiesta se emborrachaban y terminaban peleando de nuevo, llegaba la policía y a veces mi papá iba detenido. Era como una costumbre familiar, de tanto que pasaba.  
Entonces cada vez que yo les comentaba que necesitaba algo para la escuela, pues el uniforme, o material o pagar la escuela siempre estaban ocupados en otra cosa más importante, como peleando, detenidos, de compras o cosas que les gustaba hacer. Y si yo insistía me decían que no tenían dinero, y que ya estaba yo en edad de empezar a hacer mi vida o irme de la casa.
La última noche que estuve ahí, fue un día de fiesta que terminó como siempre, y yo aproveché la confusión para irme, agarre mis cosas y salí corriendo de mi casa, tenía un miedo, llegue a casa de mi abuelita y mi abuelita me recibió y le conté todo lo que me había pasado, ella me dejó quedarme ahí, y pues busque trabajo y empecé a trabajar, mi abuelita no podía mantenerme, solo me dio un lugar donde vivir mientras yo juntaba dinero, entonces me puse a trabajar y renté un cuartito, donde vivo hoy.
</b><br><br> 

4.1. ¿Tiene contacto con sus papás?<br> 
     <b>R= No, ninguno. 
     </b><br><br>

5.	¿Conoce a alguna mujer de su entorno que también abandonó la educación Media Superior? y ¿Conoce cuáles fueron sus motivos?<br>
    <b>R= Mis compañeras del bachi, creo que ninguna lo terminó, éramos un grupito como de 5 niñas, ya sabes girlpower y no aceptábamos hombres en nuestro acople. Ninguna terminó, al poco tiempo que yo lo deje otra también y así creo que la última se salió en cuarto semestre, se escapó con el novio para vivir con el porque los papás no la dejaban estar con él y ya sabes lo de siempre. 
    </b><br><br>    
</p>
<br />
<br />
</article> 

<article class="entrevista_7" id="entrevista7"> 
<h2>Entrevista 07</h2>
<div class="row"> 
 
</div>
<br />
<p><b>Ficha técnica: </b></p>

<p>Sujeto de sexo femenino, 19 años de edad, nivel socioeconómico bajo, bachiller trunco (cursó hasta tercer semestre), soltera, empleada, considera la educación como una pérdida de tiempo.
</p>
<br/>
<p><b>Notas del diario de campo:</b></p>
<p>Se hace referencia a algunos términos coloquiales cuyo significado se presenta a continuación con la finalidad de entender el sentido del discurso:</p>
<br />
<style type="text/css">
.tftable {font-size:12px;color:#333333;width:100%;border-width: 1px;border-color: #729ea5;border-collapse: collapse;}
.tftable th {font-size:12px;background-color:#acc8cc;border-width: 1px;padding: 8px;border-style: solid;border-color: #729ea5;text-align:left;}
.tftable tr {background-color:#d4e3e5;}
.tftable td {font-size:12px;border-width: 1px;padding: 8px;border-style: solid;border-color: #729ea5;}
.tftable tr:hover {background-color:#ffffff;}
</style>

<table class="tftable" border="1">
<tr><th>Concepto</th><th>Significado</th></tr>
<tr><td>Superior</td><td>Empresa dedicada a la manufactura.</td></tr>
<tr><td>Manuel</td><td>Gerente de la tienda de ropa juvenil Sixty, ubicada en la Avenida Equus y actual pareja de una amiga cercana de la entrevistada.</td></tr>
<tr><td>Bendiciones</td><td>Bebés.</td></tr>
<tr><td>Aurrera</td><td>Bodega Aurrera, tienda de autoservicio.</td></tr>
<tr><td>E5</td><td>Entrevistada 05 de este mismo corpus.</td></tr>
<tr><td>Sixty</td><td>Tienda de ropa juvenil.</td></tr>

</table>
<br>
<br />
<p>
1. ¿Podría indicar la Colonia donde reside?<br> 
   <b>R= En punta oriente</b><br><br>

2. ¿Cuál es su edad?<br> 
   <b>R= 19 </b><br><br>

3. ¿Cuál fue su último grado de estudio?<br> 
   <b>R= 3er semestre de prepa.</b><br><br>

4. ¿Cuál fue el motivo de que abandonara sus estudios?<br> 
   <b>R= Pues la verdad no le veía el caso, ¡es bien cara! O sea, todos los días era de llevar dinero para pagar cosas, o comprar materiales, por ejemplo, yo estaba en eso de dibujo técnico y las reglas y los papeles son súper caros, y la verdad ¿Cuándo lo usas?, por ejemplo, yo veo a mi papá y el jamás ha usado lo de cálculo o peor, lo de historia en el trabajo, mi mamá tampoco, entonces la escuela es una pérdida de tiempo.
   </b><br><br> 

4.1. ¿En que trabajan sus papás?<br> 
     <b>R= Pues mi papá trabaja en la línea de producción de superior y mi mamá es cajera en el Aurrera, ellos nomas tienen la secundaria y la verdad yo no me puedo quejar vivimos muy bien, no nos falta nada, hasta salimos a comer los domingos en la tarde, entonces lo que hice fue buscar trabajo, pero en algo que me guste, por eso me fui a trabajar a la tienda de ropa, donde conocí a E05, y nos hicimos súper amigas y no la pasamos súper padre juntas y tenemos muchas actividades juntas, por ejemplo los viernes en la noche compramos cerveza y ponemos música y platicamos sobre nuestros planes a futuro! Porque tenemos muchos planes, por ejemplo, yo sé que un día voy a ser la gerente de la tienda de ropa donde trabajo, o sea no es que vallan a correr a Manuel, pero él va a conseguir algo mejor y yo me voy a quedar con su puesto porque se mucho del negocio. 
     </b><br><br>
4.2. Para obtener el puesto de Gerente ¿No piden algún grado académico mínimo? <br> 
     <b>R= Pues si la prepa, pero no es importante, yo le he dicho al dueño que eso es solo un papel sin chiste, que cualquier persona puede tener estudios, es bien fácil, pero trabajar esos sí muy pocos, yo me levanto muy temprano y trabajo muchas horas extras.  
     </b><br><br>


5.	¿Conoce a alguna mujer de su entorno que también abandonó la educación Media Superior? y ¿Conoce cuáles fueron sus motivos?<br>
    <b>R= Creo que E05 te dijo que todas las del sixty, pero si todas, pero pocas tienen ganas de seguir avanzando, las demás solo buscan a ver quién las mantiene con sus bendiciones, creen que porque se embarazan del narquillo ya las va a ir bien en la vida. 
    </b><br><br>    
</p>
<br />
<br />
</article>

<article class="entrevista_8" id="entrevista8"> 
<h2>Entrevista 08</h2>
<div class="row"> 
 
</div>
<br />
<p><b>Ficha técnica: </b></p>

<p>Sujeto de sexo femenino, 19 años de edad, nivel socioeconómico bajo, bachiller trunco (cursó hasta segundo semestre), soltera, considera la educación Media Superior innecesaria para su proyecto de vida.
</p>
<br/>
<p><b>Notas del diario de campo:</b></p>
<p>Se hace referencia a algunos términos coloquiales cuyo significado se presenta a continuación con la finalidad de entender el sentido del discurso:</p>
<br />
<style type="text/css">
.tftable {font-size:12px;color:#333333;width:100%;border-width: 1px;border-color: #729ea5;border-collapse: collapse;}
.tftable th {font-size:12px;background-color:#acc8cc;border-width: 1px;padding: 8px;border-style: solid;border-color: #729ea5;text-align:left;}
.tftable tr {background-color:#d4e3e5;}
.tftable td {font-size:12px;border-width: 1px;padding: 8px;border-style: solid;border-color: #729ea5;}
.tftable tr:hover {background-color:#ffffff;}
</style>

<table class="tftable" border="1">
<tr><th>Concepto</th><th>Significado</th></tr>
<tr><td>Oxxo</td><td>Tiene de conveniencia.</td></tr>
<tr><td>Bachi</td><td>Bachilleres, COBACH, Institución de Educación Media Superior del Estado de Chihuahua. </td></tr>
</table>
<br>
<br />
<p>
1. ¿Podría indicar la Colonia donde reside?<br> 
   <b>R= En punta oriente</b><br><br>

2. ¿Cuál es su edad?<br> 
   <b>R= 19 </b><br><br>

3. ¿Cuál fue su último grado de estudio?<br> 
   <b>R= 2do semestre de prepa.</b><br><br>

4. ¿Cuál fue el motivo de que abandonara sus estudios?<br> 
   <b>R= Pues es que no era lo mío, yo iba todos los días, pero no entendía nada de lo que me decían los maestros, aparte ellos siempre me hacían menos como si yo estuviera tonta o algo y pues eso me hacía sentir muy mal, ¿si sabes cómo? A parte de todo lo que me enseñaban en el bachi nada me ayudaba a seguir lo que yo que hacer con mi vida.</b><br><br> 

4.1. ¿Y tiene algún nuevo plan?<br> 
     <b>R= Yo quiero ser artista ¿si sabes cómo? Y pues yo sentía que estar aprendiendo de historia de México o de cálculo pues no me iba a ayudar a cumplir mi sueño, es que enserio dibujo bien bonito ¿quieres ver? [muestra imágenes desde su celular sobre dibujos que ha realizado] ¿verdad que si están bien padres? Esto es lo que yo quiero hacer, pero la verdad es que en México no hay oportunidad, cuando tienes un talento, así como dibujar o el football o bailar pues la neta nadie te lo respeta y te dicen que estudies algo que si valga la pena, entonces les dije a mis padres, pero medio me apoyaron, o sea mi mamá me compro unos colores de esos de blanca nieves pero mi papá no le ve futuro, total que me habían dicho que me iban ayudar a pagar la carrera en bellas artes cuando terminara el bachi, pero a medio semestre de 3er semestre mi hermanito se enfermó y solo se podía pagar una cosa, mi escuela o su enfermedad y pues teníamos que ayudar a mi hermanito, ahora trabajo en el Oxxo ese de ahí.</b><br><br>

5.	¿Conoce a alguna mujer de su entorno que también abandonó la educación Media Superior? y ¿Conoce cuáles fueron sus motivos?<br>
    <b>R= Pues sí, yo creo todas las que estamos en el parque, ¿apoco alguien de aquí si estudio?</b><br><br>    
</p>
<br />
<br />
</article> 

<article class="entrevista_8" id="entrevista9"> 
<h2>Entrevista 09</h2>
<div class="row"> 
 
</div>
<br />
<p><b>Ficha técnica: </b></p>

<p>Sujeto de sexo femenino, 19 años de edad, nivel socioeconómico bajo, bachiller trunco (cursó hasta primer semestre), soltera, madre soltera, considera la educación como lujo, su situación económica no es favorecedora.</p>
<br/>
<p><b>Notas del diario de campo:</b></p>
<p>Se hace referencia a algunos términos coloquiales cuyo significado se presenta a continuación con la finalidad de entender el sentido del discurso:</p>
<br />
<style type="text/css">
.tftable {font-size:12px;color:#333333;width:100%;border-width: 1px;border-color: #729ea5;border-collapse: collapse;}
.tftable th {font-size:12px;background-color:#acc8cc;border-width: 1px;padding: 8px;border-style: solid;border-color: #729ea5;text-align:left;}
.tftable tr {background-color:#d4e3e5;}
.tftable td {font-size:12px;border-width: 1px;padding: 8px;border-style: solid;border-color: #729ea5;}
.tftable tr:hover {background-color:#ffffff;}
</style>

<table class="tftable" border="1">
<tr><th>Concepto</th><th>Significado</th></tr>
<tr><td>Lana</td><td>Dinero.</td></tr>
<tr><td>Pistiando</td><td>Consumiendo bebidas embriagantes.</td></tr>
<tr><td>Tonaya</td><td>Es un tipo de mezcal muy económico que venden en tiendas de conveniencia.</td></tr>
<tr><td>Chance</td><td>Oportunidad.</td></tr>
<tr><td>Malviviente</td><td>Personas que no se encuentran inscritos a una unidad académica o con un trabajo estable, normalmente pasan el día entre las casas destruidas (tapias) de la localidad utilizando diferentes tipos de drogas y realizando actividades ilícitas, como el robo, para adquirir más estupefacientes.</td></tr>
<tr><td>Bachi</td><td>Bachilleres, COBACH, Institución de Educación Media Superior del Estado de Chihuahua. </td></tr>
<tr><td>Al super</td><td>Tienda de autoservicio.</td></tr>
</table>
<br>
<br />
<p>
1. ¿Podría indicar la Colonia donde reside?<br> 
   <b>R= En punta oriente</b><br><br>

2. ¿Cuál es su edad?<br> 
   <b>R= 19 </b><br><br>

3. ¿Cuál fue su último grado de estudio?<br> 
   <b>R= 1er semestre de prepa.</b><br><br>

4. ¿Cuál fue el motivo de que abandonara sus estudios?<br> 
   <b>R= Pues yo si estaba estudiando, iba al bachi todos los días y hacia mi tarea y todo, pero lo que pasó fue que mi mamá me abandonó cuando yo estaba chiquita, me dejó con mi abuelita y se fue, a veces viene a verme pero muy a veces, casi nunca la verdad y no se preocupa por mí, quien me cuida es mi abuelita, ella me da comida y me compra cosas que necesito y pues ella pagaba mi escuela pero cuando entre al bachi subió mucho todo, enserio es bien, bien caro y pues no tenemos dinero.
Mi abuelita trabaja en la maquila, es operadora y pues gana bien poquitito, entonces ya no hubo lana para que yo fuera a la escuela porque aparte con nosotras vive un tío que la verdad nomás se la pasa drogándose y pisteando y cuando nos salimos de la casa él se roba cosas como el horno para ir a cambiarlo por droga o por tonaya. 
Yo le digo a mi abuelita que lo corra, pero dice que no puede porque es su hijo. Entonces como mi abuelita ya no podía darme dinero me tuve que salir de la escuela para meterme a trabajar, pero como yo estaba muy chiquita en ese momento pues trabajaba de lo que sea, le ayudaba a una señora a limpiar su casa, pero me acusó de ladrona y me corrió sin pagarme.
Después empecé a trabajar en el Al súper empacando, pero los que ya tenían más tiempo haciendo eso pues no me daban chance, y así tuve muchos trabajos, al tiempo mi tío se murió de una sobredosis de todo lo que se metía y pues pagar un funeral es bien caro, enserio morirse es carísimo, y tuve que pedir casa por casa para poder ayudar a pagar eso, pero como mi tío era el malviviente de la colonia pues nadie quería ayudarnos, la verdad el velorio fue aquí en el panteón y casi nadie fue. 
Pobrecita me abuelita, pero enserio cuando se murió hasta empecé a vivir más tranquila porque no nos dejaba estar en paz, yo me la pasaba llamando a las patrullas, pero no es cierto que te ayudan, nos ignoraban y yo sí creo que el gobierno se debería de haber hecho cargo de quitarle el vicio o de plano de pagar el entierro ¿apoco no?, si ya pagamos mucho dinero en impuestos.
</b><br><br> 
5.	¿Conoce a alguna mujer de su entorno que también abandonó la educación Media Superior? y ¿Conoce cuáles fueron sus motivos?<br>
    <b>R= Pues yo sé de algunas vecinas, pero no tengo amigas, entonces no sé porque lo hicieron, lo que veo es que son bien ridículas se les cae una uña y ya no quieren ir a la escuela, les pasan cosas bien sin chiste y ya hacen un drama, en cambio yo si he tenido la vida bien difícil, y pues ahorita con mi bebé pues batallo mucho, pero vas a ver que Dios me va a ayudar y un día no voy a tener que andar batallando por qué voy a comer.
    </b><br><br>    
</p>
<br />
<br />
</article> 

<article class="entrevista_8" id="entrevista10"> 
<h2>Entrevista 10</h2>
<div class="row"> 
 
</div>
<br />
<p><b>Ficha técnica: </b></p>

<p>Sujeto de sexo femenino, 20 años de edad, nivel socioeconómico bajo, bachiller trunco (cursó hasta primer semestre), soltera, negocio propio, su situación económica no es favorecedora.
</p>
<br/>
<p><b>Notas del diario de campo:</b></p>
<p>Se hace referencia a algunos términos coloquiales cuyo significado se presenta a continuación con la finalidad de entender el sentido del discurso:</p>
<br />
<style type="text/css">
.tftable {font-size:12px;color:#333333;width:100%;border-width: 1px;border-color: #729ea5;border-collapse: collapse;}
.tftable th {font-size:12px;background-color:#acc8cc;border-width: 1px;padding: 8px;border-style: solid;border-color: #729ea5;text-align:left;}
.tftable tr {background-color:#d4e3e5;}
.tftable td {font-size:12px;border-width: 1px;padding: 8px;border-style: solid;border-color: #729ea5;}
.tftable tr:hover {background-color:#ffffff;}
</style>
<table class="tftable" border="1">
<tr><th>Concepto</th><th>Significado</th></tr>
<tr><td>Agarrados</td><td>Discutiendo.</td></tr>
<tr><td>Pistiando</td><td>Consumiendo bebidas embriagantes.</td></tr>
<tr><td>Magdalena en pena</td><td>Se encontraba en un estado emocional vulnerables con episodios de llanto prolongado.</td></tr>
<tr><td>Mamones</td><td>Requisitosos y conservadores.</td></tr>
<tr><td>Rajar</td><td>Arrepentirse de sus acciones.</td></tr>
</table>
<br>
<br />
<p>
1. ¿Podría indicar la Colonia donde reside?<br> 
   <b>R= En punta oriente</b><br><br>

2. ¿Cuál es su edad?<br> 
   <b>R= 20 años </b><br><br>

3. ¿Cuál fue su último grado de estudio?<br> 
   <b>R= 1er semestre de prepa.</b><br><br>

4. ¿Cuál fue el motivo de que abandonara sus estudios?<br> 
   <b>R= Uy! Pues muchas cosas, haz de cuenta que cuando yo estaba estudiando ahí en el bachi mi mamá y mi papá toda la vida se la pasaban agarrados, pero por todo y pues en la golpeaba, entonces mi mamá decidió que ya no se iba a dejar de mi papá y fue y le puso una demanda ahí donde defienden mujeres, entonces detuvieron a mi papá, pero lo detuvieron cuando estaba con sus amigos pistiando pues se puso al “tú por tú” con los policías y lo golpearon.
Como a los 4 días vino mi abuelita, la mamá de mi papá, parecía Magdalena en pena para que mi mamá le otorgara el perdón a mi papá porque ya lo habían vuelto a golpear en la cárcel, el caso es que mi mamá toda mensa le hizo caso y ahí va.
Cuando mi papá queda libre, vino a la casa y ¿adivina que paso?, casi mata a mi mamá a golpes, entonces como la tuvimos que llevar a un hospital y llamar a la policía volvieron a detener a mi papá y mi mamá volvió a demandar a mi papá, y vieras cuanto gusto me dio que la licenciada le dijo que si se volvía a rajar con la demanda ahora ella iba a ir presa, con eso mi mamá ya no volvió a otorgar el perdón pero nos tuvimos que ir a vivir a un refugio, pero no te puedo decir donde está porque me mandan a la cárcel ¡he!.
Vivimos ahí unos meses y nos ayudaron mucho pero yo ya no regresé a la escuela, porque ya no había dinero para pagar, pero en el refugio me enseñaron a poner uñas como estas [muestra sus manos, cuentan con unas largas uñas de acrílico adornadas con cristales brillantes y algunas flores de naturaleza muerta], así que ahora trabajo de eso, en mi casa tengo un espacio y ahí van mis conocidas a ponerse uñas, dicen que lo hago muy bien pero durante mi servicio se vale fumar y tomar, ya sabes para que se sientan queridas y regresen. 
</b><br><br> 
5.	¿Conoce a alguna mujer de su entorno que también abandonó la educación Media Superior? y ¿Conoce cuáles fueron sus motivos?<br>
    <b>R= ¡Pues imagínate! Pongo uñas y las dejó tomar mientras lo hago, ¿no vas a decir verdad?, pues me llega cada historia, pero pues muchas dejaron de estudiar porque se embarazaron y pues en la escuela no se vale ir embarazada, ya vez como son mamones.
    </b><br><br>    
</p>
<br />
<br />
</article>

<article class="entrevista_8" id="entrevista11"> 
<h2>Entrevista 11</h2>
<div class="row"> 
 
</div>
<br />
<p><b>Ficha técnica: </b></p>

<p>Sujeto de sexo femenino, 19 años de edad, nivel socioeconómico bajo, bachiller trunco (cursó hasta primer semestre), soltera, empleada, su situación económica no es favorecedora.
</p>
<br/>
<p><b>Notas del diario de campo:</b></p>
<p>Se hace referencia a algunos términos coloquiales cuyo significado se presenta a continuación con la finalidad de entender el sentido del discurso:</p>
<br />
<style type="text/css">
.tftable {font-size:12px;color:#333333;width:100%;border-width: 1px;border-color: #729ea5;border-collapse: collapse;}
.tftable th {font-size:12px;background-color:#acc8cc;border-width: 1px;padding: 8px;border-style: solid;border-color: #729ea5;text-align:left;}
.tftable tr {background-color:#d4e3e5;}
.tftable td {font-size:12px;border-width: 1px;padding: 8px;border-style: solid;border-color: #729ea5;}
.tftable tr:hover {background-color:#ffffff;}
</style>
<table class="tftable" border="1">
<tr><th>Concepto</th><th>Significado</th></tr>
<tr><td>Valentinos</td><td>Tienda de ropa para mujer.</td></tr>
<tr><td>Jodidas</td><td>Que tienen poco ingreso académico.</td></tr>
<tr><td>Pollo KFC</td><td>Kentucky Fried Chicken.</td></tr>
<tr><td>Parque</td><td>Parque de las banderas.</td></tr>
</table>
<br>
<br />
<p>
1. ¿Podría indicar la Colonia donde reside?<br> 
   <b>R= En punta oriente</b><br><br>

2. ¿Cuál es su edad?<br> 
   <b>R= 19 años </b><br><br>

3. ¿Cuál fue su último grado de estudio?<br> 
   <b>R= 1er semestre de prepa.</b><br><br>

4. ¿Cuál fue el motivo de que abandonara sus estudios?<br> 
   <b>R= Pues cuando yo estaba estudiando en el bachi, la verdad era bien aburrido, te enseñan cosas que no vienen al caso, y para colmo te ponen examen, y no tienen aplicación útil en la vida, yo lo que necesitaba era que me enseñaran a hacer algo, para empezar a ganar mucho dinero ya. 
Cuando aún iba a la escuela, siempre iba de malas porque no me gustaba ir, aparte que yo siempre estaba sola en mi casa porque mi mamá se iba a trabajar y como nomás vivimos ella y yo solas pues ahí me quedaba, según ella yo tenía que limpiar la casa y hacer comida para cuando ella llegara cansada del trabajo, yo creo ella pensaba que en la escuela uno nomás iba a jugar.
Entonces pues me cansé de todo eso, porque yo estudiaba todo el día y mi mamá trabajaba todo el día y no teníamos dinero nunca, haz de cuenta que no podíamos ni ir a este parque por un elote el sábado en la noche, siempre me tenía que quedar en mi casa y veía como todas salían con sus vestidos bien bonitos y con maquillajes bonitos y yo en mi casa sola como el perro, sin amigas y sin nada que hacer porque nunca teníamos dinero.
Fue cuando tomé la decisión de, en vez de perder el tiempo en la escuela me iba a poner a trabajar, entonces un día que mi mamá se fue a trabajar yo también me salí pero a buscar trabajo, quería algo cerca de mi casa pero que mi mamá no se diera cuenta, entonces agarré el dinero del pasaje y mejor me fui a buscar trabajo más lejos, al centro, y en una tienda de ropa me dieron trabajo, me pagaban $600.00 por semana, era mucho más de lo que yo me imaginé, entonces trabajé la primer semana y me pagaron, pues me fui a comer pollo KFC y me compre una blusa que me encantó en valentinos.
Como mi horario de trabajo se parecía al de la escuela pues mi mamá no se daba cuenta, yo lo que hacía era que salía en uniforme y en la tienda me cambiaba, y cuando me regresaba otra vez uniforme y así le hacía, como era tanto dinero pues no me lo acababa y lo empecé a guardar en la casa en un botecito, la verdad yo le dije a mis amigas de la escuela que me estaba hiendo muy bien, que ya tenía dinero y que ganaba muy bien, hasta las invité a comer un día.
Después mi mamá me descubrió, ella me dijo que sospechaba porque me habían visto y pidió un día de vacaciones y me fue a buscar, no me dijó nada se espero a que yo terminara mi turno, entonces como era día de pago la invité a comer, y le expliqué porque trabajaba y le di la mitad del dinero que tenía guardado y me perdonó, hasta fuimos de compras y nuestra vida mejoró mucho, y si yo hubiera seguido en la escuela seguiríamos jodidas. 
</b><br><br> 
5.	¿Conoce a alguna mujer de su entorno que también abandonó la educación Media Superior? y ¿Conoce cuáles fueron sus motivos?<br>
    <b>R= Pues una amiga esta igual, pero ella se embarazó de un tipo que no valía la pena porque todo mundo sabía que era súper drogadicto y pues la dejó sola con el bebé y para colmo el bebé nació malito, y ahí anda la pobre batallando, primero dejó la escuela porque estaba embarazada después no regresó para poder cuidar a su bebé. </b><br><br>    
</p>
<br />
<br />
</article>

<article class="entrevista_8" id="entrevista12"> 
<h2>Entrevista 12</h2>
<div class="row"> 
 
</div>
<br />
<p><b>Ficha técnica: </b></p>

<p>Sujeto de sexo femenino, 19 años de edad, nivel socioeconómico bajo, bachiller trunco (cursó hasta primer semestre), soltera, empleada, su situación económica no es favorecedora.
</p>
<br/>
<p><b>Notas del diario de campo:</b></p>
<p>Se hace referencia a algunos términos coloquiales cuyo significado se presenta a continuación con la finalidad de entender el sentido del discurso:</p>
<br />
<style type="text/css">
.tftable {font-size:12px;color:#333333;width:100%;border-width: 1px;border-color: #729ea5;border-collapse: collapse;}
.tftable th {font-size:12px;background-color:#acc8cc;border-width: 1px;padding: 8px;border-style: solid;border-color: #729ea5;text-align:left;}
.tftable tr {background-color:#d4e3e5;}
.tftable td {font-size:12px;border-width: 1px;padding: 8px;border-style: solid;border-color: #729ea5;}
.tftable tr:hover {background-color:#ffffff;}
</style>
<table class="tftable" border="1">
<tr><th>Concepto</th><th>Significado</th></tr>
<tr><td>Maquiladora</td><td>Industria dedicada a la manufactura.</td></tr>
</table>
<br>
<br />
<p>
1. ¿Podría indicar la Colonia donde reside?<br> 
   <b>R= En punta oriente</b><br><br>

2. ¿Cuál es su edad?<br> 
   <b>R= 20 años </b><br><br>

3. ¿Cuál fue su último grado de estudio?<br> 
   <b>R= 5to semestre de prepa.</b><br><br>

4. ¿Cuál fue el motivo de que abandonara sus estudios?<br> 
   <b>R= Bueno pues la verdad a mí no me gustó, yo quería otra cosa para mí, pero te voy a platicar como me enteré lo que quería, cuando estaba en el bachi conocí a una muchacha y nos hicimos amigas, ella era de una familia muy ostentosa, y pues seguido me invitaban a su casa, y ¿apoco crees que yo no comprendía las diferencias?, la familia de ella era muy diferente, casi de novela, la mamá se dedicaba a la casa, ella y la hermana estudiaban y el papá salía a trabajar todos los días.
En el tiempo que yo las traté, el papá le cambio el carro a la mamá como dos veces y a ellas nunca les faltaba nada, siempre el celular más nuevo, viajes, ropa y cosas bien padres. En cambio, en mi casa no había nada, mis papás trabajaban ambos todo el día, pero no era suficiente ni para tener carro.
Entonces me di cuenta que yo lo que necesitaba era un hombre así, que me diera todo lo que me merezco y no andar batallando como con mis papás, entonces me di cuenta que mi novio en turno no era opción y lo dejé, entonces me empecé a fijar en hombres que fueran mejor opciones, pero en la escuela solo había compañeros y maestros, entonces dejé la escuela, y me fui a trabajar en la maquila, se me ocurrió porque unas vecinas que ya trabajaban ahí en la maquila me contaban del supervisor y el ingeniero, entonces pensé que sería bueno entrar a trabajar para salir con alguien con un buen puesto que me pudiera mantener y yo ya no tener preocupaciones, entonces lo hice; comencé a trabajar en la maquila y a conocer a todas las personas, y por fin conocía al ingeniero a cargo del lugar donde yo trabajaba, entonces yo necesitaba que él me viera pues éramos muchas obvio con las mismas intenciones.
</b><br><br> 
4.1 ¿Sus compañeras de trabajo manifestaron la intención de relacionarse sentimentalmente con el Ingeniero?<br> 
<b>R= Pues no me dijeron nada, pero era obvio ¡se desmayaban por el!, con él tiempo me enteré que era casado y con familia, pero la verdad eso no me importaba, yo quería mi comodidad.
Con el tiempo nos fuimos conociendo y el comenzó a tener interés en mí y me convertí en su amante, entonces comencé a pedir cosas que se me fueron concediendo hasta que decidí dejar de trabajar y exigirle a él mi lugar como su esposa. Pero no le pareció la idea y me dejó, así que la siguiente vez que lo intenté fui más cuidadosa, con el siguiente duré un tiempo de novia y durante ese tiempo él me hacía muchos regalos, él me llevó a conocer la playa, ¿vez que no necesitaba estudiar?
</b><br><br>
5.	¿Conoce a alguna mujer de su entorno que también abandonó la educación Media Superior? y ¿Conoce cuáles fueron sus motivos?<br>
    <b>R= Pues todas estamos iguales, nadie estudió porque la verdad no tiene caso.</b><br><br>    
</p>
<br />
<br />
</article>

<article class="entrevista_8" id="entrevista13"> 
<h2>Entrevista 13</h2>
<div class="row"> 
 
</div>
<br />
<p><b>Ficha técnica: </b></p>

<p>Sujeto de sexo femenino, 19 años de edad, nivel socioeconómico bajo, bachiller trunco (cursó hasta cuarto semestre), madre soltera, situación económica desfavorecedora, debido a la separación con su pareja regresó a la casa paterna.
</p>
<br/>
<p><b>Notas del diario de campo:</b></p>
<p>Se hace referencia a algunos términos coloquiales cuyo significado se presenta a continuación con la finalidad de entender el sentido del discurso:</p>
<br />
<style type="text/css">
.tftable {font-size:12px;color:#333333;width:100%;border-width: 1px;border-color: #729ea5;border-collapse: collapse;}
.tftable th {font-size:12px;background-color:#acc8cc;border-width: 1px;padding: 8px;border-style: solid;border-color: #729ea5;text-align:left;}
.tftable tr {background-color:#d4e3e5;}
.tftable td {font-size:12px;border-width: 1px;padding: 8px;border-style: solid;border-color: #729ea5;}
.tftable tr:hover {background-color:#ffffff;}
</style>
<table class="tftable" border="1">
<tr><th>Concepto</th><th>Significado</th></tr>
<tr><td>Amor a primera vista</td><td>Sentimiento de enamoramiento instantáneo.</td></tr>
<tr><td>Bachi</td><td>Bachilleres, COBACH, Institución de Educación Media Superior del Estado de Chihuahua.</td></tr>
<tr><td>Humberto</td><td>Novio.</td></tr>
</table>
<br>
<br />
<p>
1. ¿Podría indicar la Colonia donde reside?<br> 
   <b>R= En punta oriente</b><br><br>

2. ¿Cuál es su edad?<br> 
   <b>R= 19 años </b><br><br>

3. ¿Cuál fue su último grado de estudio?<br> 
   <b>R= 4to semestre de prepa.</b><br><br>

4. ¿Cuál fue el motivo de que abandonara sus estudios?<br> 
   <b>R= Pues cuando estaba estudiando en el bachi, conocí a Humberto, enserio nadie me creía, pero fue amor a primera vista, y siempre queríamos estar juntos, él me llevaba a la escuela y pasaba por mí, entonces había veces que prefería irme con él a entrar a la escuela.
Todo el tiempo estábamos juntos y la verdad yo ya no quería ser solo su novia, yo quería que viviéramos juntos, que formáramos una familia, que siempre estuviéramos juntos, entonces de tanto tiempo que estuvimos juntos pues me embaracé, pero la verdad no fue accidente, nosotros queríamos ser padres para que ya nuestros papás no pudieran separarnos. 
</b><br><br> 
4.1 ¿Sus padres no aprobaban la relación con Humberto?<br> 
<b>R= Pues no porque ellos decían que yo me tenía que preocupar por ir a la escuela y por estudiar no por estar de novia con Humberto, entonces pues ya te imaginarás la que se armó cuando fui a decirle a mis papás que estaba embarazada de Humberto, me gritaron de todo, que no contaba con su apoyo que a ver cómo le hacíamos y cosas así.
Pues total que, con el tiempo, empezaron a aceptar un poco a Humberto, para ese momento él ya tenía trabajo y habíamos rentado una casa aquí mismo, entonces nos fuimos a vivir juntos y enserio fuimos muy felices, yo desde que supe que estaba embarazada ya no fui a la escuela ¿para qué?, mejor aprendí a hacer comida, limpiar la casa y empecé a practicar como cuidar bebés con los hijos de mis primas, haz de cuenta que aprendí a ser mujer; pero con el tiempo el dinero que Humberto traía a la casa no alcanzaba, entonces empezamos a tener problemas, porque él siempre venía cansado y pues en la casa no había mucha comida, porque el dinero era poco, y siempre era igual problemas problemas problemas y más problemas hasta que un día me cansé y fui a pedirle ayuda a mi mamá, ella me recibió en la casa, pero me puso una regañada, me dijo cosas como “¿ya te aburriste de jugar a los adultos?”, “¿si sabes que a la niña no la puedes regresar verdad?”, ”si vas a vivir aquí vas a trabajar y a ver dónde te contratan si no terminaste la prepa”.
Pues me topé con una realidad bien difícil, yo siempre pensé que los que ganaban poco era porque no trabajaban, pero no tener la prepa fue lo peor, porque el sueldo más alto que encontré fue de $900.00 por semana, no lo podía creer y Humberto ganaba $2000, éramos ricos y yo no sabía. 
</b><br><br>
4.2 Ahora que ha visto los beneficios de tener la prepa terminada ¿regresará a estudiar? <br> 
<b>R= La verdad no creo, porque ahora mi hijo exige mi tiempo en un 100%, aparte no puedo pagarlo, no tengo ni tiempo ni dinero. La escuela exige tiempo, y yo no tengo tiempo, en los ratos que el bebé se duerme aprovecho para hacer mis obligaciones de la casa, y yo no tengo cabeza para la escuela, soy mala estudiante. </b><br><br>
5.	¿Conoce a alguna mujer de su entorno que también abandonó la educación Media Superior? y ¿Conoce cuáles fueron sus motivos?<br>
    <b>R= Pues como te decía, todas mis primas están igual, todas salieron embarazadas y ninguna estudió. Creo que hay una prima que hasta la fecha no tiene hijos y ya es grande, tiene como 22 años.</b><br><br>    
</p>
<br />
<br />
</article>

<article class="entrevista_8" id="entrevista14"> 
<h2>Entrevista 14</h2>
<div class="row"> 
 
</div>
<br />
<p><b>Ficha técnica: </b></p>

<p>Sujeto de sexo femenino, 19 años de edad, nivel socioeconómico bajo, bachiller trunco (cursó hasta primero semestre), madre soltera, situación económica desfavorecida, no cuenta con apoyo del padre de su hijo.
</p>
<br/>
<p><b>Notas del diario de campo:</b></p>
<p>Se hace referencia a algunos términos coloquiales cuyo significado se presenta a continuación con la finalidad de entender el sentido del discurso:</p>
<br />
<style type="text/css">
.tftable {font-size:12px;color:#333333;width:100%;border-width: 1px;border-color: #729ea5;border-collapse: collapse;}
.tftable th {font-size:12px;background-color:#acc8cc;border-width: 1px;padding: 8px;border-style: solid;border-color: #729ea5;text-align:left;}
.tftable tr {background-color:#d4e3e5;}
.tftable td {font-size:12px;border-width: 1px;padding: 8px;border-style: solid;border-color: #729ea5;}
.tftable tr:hover {background-color:#ffffff;}
</style>
<table class="tftable" border="1">
<tr><th>Concepto</th><th>Significado</th></tr>
<tr><td>Superior</td><td>Empresa dedicada a la manufactura.</td></tr>
<tr><td>Mariano</td><td>Novio.</td></tr>
</table>
<br>
<br />
<p>
1. ¿Podría indicar la Colonia donde reside?<br> 
   <b>R= En punta oriente</b><br><br>

2. ¿Cuál es su edad?<br> 
   <b>R= 19 años </b><br><br>

3. ¿Cuál fue su último grado de estudio?<br> 
   <b>R= 1er semestre de prepa.</b><br><br>

4. ¿Cuál fue el motivo de que abandonara sus estudios?<br> 
   <b>R= La verdad, yo tenía una vida bien complicada, porque vivía en casa con mi mamá, papá y 1 hermano. Mi casa era un campo de guerra, siempre estábamos peleando entre todos, no había día en que no hubiera gritos, era muy difícil estar ahí, y para colmo la casa es muy chica pues siempre nos teníamos que estar viendo, entonces aquí en el parque, porque yo venía con mis amigas todos los días en la noche, conocí a Mariano, entonces como nos llevábamos muy bien, y él me entendía y me escuchaba, y yo me sentía mejor con él que en mi casa, entonces empecé a pasar más tiempo con él, Mariano era más grande que yo, él trabajaba aquí en Superior y le iba muy bien, entonces yo lo comprendía que tenía que trabajar muchas horas porque él es muy bueno en lo que hace y lo necesitan mucho, entonces tenía muy buen sueldo.
Cuando teníamos como dos meses de novios me di cuenta que estaba embarazada y le dije primero que nadie a Mariano, ¿estás de acuerdo que era el más interesado?, el caso es que no pasó lo que yo esperaba, él se enojó mucho conmigo, me gritó tanto, que era una tonta, como pude haberme dejado embarazar, que el solo quería pasar un rato agradable conmigo y lo peor, era casado. 
Yo no podía creer lo que estaba escuchando, pues me fui a mi casa, y durante una semana me la pase como vagabunda, me salía de la casa a caminar y caminar y caminar, no sabía qué hacer, entonces me arme de valor y le dije a mi mamá, mi mamá reaccionó aún peor que Mariano, hasta me pegó, y me corrió de la casa. 
Esos días me quedé en casa de amigas, un día con una otro día con otra hasta que mi mamá me buscó y empezamos a hablar, y pues ya le conté todo, que Mariano resultó ser casado, que no quería nada serio conmigo, al último mi mamá me apoyó y me quedé a vivir en la casa de mis papás y cuando tuve a mi hija, pues me metí a trabajar para mantenerla.
</b><br><br> 
4.1 ¿Regresaría a la escuela?<br> 
<b>R= La verdad no ¿para qué?, desde que me enteré que estaba embarazada dejé de ir, porque las mujeres embarazadas deben aprender a cuidar bebés, no cosas raras como ecuaciones. </b><br><br>

5.	¿Conoce a alguna mujer de su entorno que también abandonó la educación Media Superior? y ¿Conoce cuáles fueron sus motivos?<br>
    <b>R= ¿Te acuerdas que te conté de mis amigas, con las que iba al parque?, solo una de ellas terminó la prepa, las demás la fueron dejando por diferentes motivos, porque no tenían dinero o porque estaban embarazadas, ¿te fijas? Las embarazadas no van a la escuela.
</b>
</p>
<br />
<br />
</article>

<article class="entrevista_8" id="entrevista15"> 
<h2>Entrevista 15</h2>
<div class="row"> 
 
</div>
<br />
<p><b>Ficha técnica: </b></p>

<p>Sujeto de sexo femenino, 20 años de edad, nivel socioeconómico bajo, bachiller trunco (cursó hasta quinto semestre), unión libre, emprendedora. </p>
<br/>
<p><b>Notas del diario de campo:</b></p>
<p>Se hace referencia a algunos términos coloquiales cuyo significado se presenta a continuación con la finalidad de entender el sentido del discurso:</p>
<br />
<style type="text/css">
.tftable {font-size:12px;color:#333333;width:100%;border-width: 1px;border-color: #729ea5;border-collapse: collapse;}
.tftable th {font-size:12px;background-color:#acc8cc;border-width: 1px;padding: 8px;border-style: solid;border-color: #729ea5;text-align:left;}
.tftable tr {background-color:#d4e3e5;}
.tftable td {font-size:12px;border-width: 1px;padding: 8px;border-style: solid;border-color: #729ea5;}
.tftable tr:hover {background-color:#ffffff;}
</style>
<table class="tftable" border="1">
<tr><th>Concepto</th><th>Significado</th></tr>
<tr><td>Bachi</td><td>Bachilleres, COBACH, Institución de Educación Media Superior del Estado de Chihuahua.</td></tr>
<tr><td>Javier</td><td>Pareja y padre de su hijo.</td></tr>
</table>
<br>
<br />
<p>
1. ¿Podría indicar la Colonia donde reside?<br> 
   <b>R= En punta oriente</b><br><br>

2. ¿Cuál es su edad?<br> 
   <b>R= 20 años </b><br><br>

3. ¿Cuál fue su último grado de estudio?<br> 
   <b>R= 5to semestre de prepa.</b><br><br>

4. ¿Cuál fue el motivo de que abandonara sus estudios?<br> 
   <b>R= Pues yo iba a la escuela así normal, todos los días, pero enserio no me gustaba, mis papás me ayudaban y me apoyaban, siempre tenía todo lo que se necesitaba para ir a la escuela, nunca me faltaron materiales ni nada. Pero a mí no me gustaba
Yo la verdad me la pasaba viendo en internet cosas de como decorar la casa, hacer cortinas y la cocina, amo cocinar y lo hago muy bien, de hecho, ahora vendo pasteles mira [me muestra en su celular la propaganda con la que se anuncia en redes sociales ofreciendo servicios de elaboración de pasteles], y vendo mucho enserio. 
Pero bueno, cuando yo dejé la escuela fue porque me embaracé de Javier, ya teníamos un año de novios y yo ya no quería ser nomás la novia, quería ser la esposa con boda y todo, entonces dejé de cuidarme y me embaracé, entonces cuando confirmé el embarazo le dije, y al principio él estaba así tipo, pero somos muy jóvenes nos falta mucho, entonces le dije “o te casas conmigo o te olvidas que tienes hijo, y eso te va a remorder la conciencia toda la vida”
Y me funcionó, fuimos y hablamos con mi mamá y mi papá, se enojaron tanto, pero yo creo que ellos me vieron emocionada y pues ya mejor me apoyaron, entonces Javier consiguió trabajo y rentó una casa por aquí porque no nos queríamos ir de aquí, ¡vivimos tan a gusto!. ¡Entonces mi papá me compró materiales, así tipo tela, esponjas, listones, hilos para que pusiera mi casa bonita, y durante los 9 meses de embarazo, arreglé mi casa, el cuarto de mi bebé me quedó! En la pared pinté su nombre y en el cuarto mío y de Javier dibujé en la pared nuestras iniciales y dibujé flores. Todos los que la conocieron no podían creer que todo lo hubiera hecho sola y embarazada.
Cuando ya vivíamos juntos pues él trabajaba todo el día y yo sola con el bebé, entonces mi mamá me dijo “tu cocinas muy ricos pasteles y los decoras muy bonitos” y yo así de si cierto, entonces hice tres pasteles y los decoré como por rebanadas, y lo subí a Facebook y después los agarré y vine al parque a regalarlos, para que la gente los probara y me diera su opinión. Y ahora vendo muchos. 
</b><br><br> 
5.	¿Conoce a alguna mujer de su entorno que también abandonó la educación Media Superior? y ¿Conoce cuáles fueron sus motivos?<br>
    <b>R= Pues la mayoría de las que conozco, de hecho, un grupo de amigas que nos juntamos a tomar café, somos 4 y ninguna termino la prepa, pero no veo que la necesitemos.</b>
</p>
<br />
<br />
</article>

<article class="entrevista_8" id="entrevista16"> 
<h2>Entrevista 16</h2>
<div class="row"> 
 
</div>
<br />
<p><b>Ficha técnica: </b></p>

<p>Sujeto de sexo femenino, 19 años de edad, nivel socioeconómico bajo, bachiller trunco (cursó hasta tercer semestre), madre soltera, empleada.</p>
<br/>
<p><b>Notas del diario de campo:</b></p>
<p>Se hace referencia a algunos términos coloquiales cuyo significado se presenta a continuación con la finalidad de entender el sentido del discurso:</p>
<br />
<style type="text/css">
.tftable {font-size:12px;color:#333333;width:100%;border-width: 1px;border-color: #729ea5;border-collapse: collapse;}
.tftable th {font-size:12px;background-color:#acc8cc;border-width: 1px;padding: 8px;border-style: solid;border-color: #729ea5;text-align:left;}
.tftable tr {background-color:#d4e3e5;}
.tftable td {font-size:12px;border-width: 1px;padding: 8px;border-style: solid;border-color: #729ea5;}
.tftable tr:hover {background-color:#ffffff;}
</style>
<table class="tftable" border="1">
<tr><th>Concepto</th><th>Significado</th></tr>
<tr><td>Fumar</td><td>Consumo de marihuana.</td></tr>
</table>
<br>
<br />
<p>
1. ¿Podría indicar la Colonia donde reside?<br> 
   <b>R= En punta oriente</b><br><br>

2. ¿Cuál es su edad?<br> 
   <b>R= 19 años </b><br><br>

3. ¿Cuál fue su último grado de estudio?<br> 
   <b>R= 3er semestre de prepa.</b><br><br>

4. ¿Cuál fue el motivo de que abandonara sus estudios?<br> 
   <b>R= Pues me embaracé.</b><br><br> 
   
4.1 ¿Cómo fue que el embarazo le impidió continuar estudiando? <br> 
   <b>R= Pues no te dejan ir embarazada a la escuela, entonces pues dejé de ir cuando me di cuenta que estaba embarazada.</b><br><br>
   
4.2 ¿Hubiera preferido regresar a la escuela? <br> 
   <b>R= La verdad no, enserio que ni iba, yo me juntaba con unos amigos de ahí mismo en la escuela, entonces preferíamos irnos a otro lado, nos gustaba tomar cerveza, fumar, pues fumar, y las fiestas, entonces en ese grupo conocí al papá de mi hijo, y como nos encantaba la fiesta nos entendimos y a los 3 o 4 meses me embaracé de él, él me dijo que no podía tomarme en serio porque como yo siempre andaba en la fiesta era muy probable que me metiera con varios hombres. 
Eso no era verdad, mi mamá siempre me dijo que esto me podía pasar, pero yo pensé que a mí no me pasaba, y ahora con el problema tuve que ir con mi mamá y platicarle, si se enojó mucho, pero me ayudó todo el embarazo para que fuera tranquilo. Después de que nació mi hijo, me ayudó a conseguir un abogado para demandarlo por la pensión y todo eso, pero me metí a trabajar.
</b><br><br>

5.	¿Conoce a alguna mujer de su entorno que también abandonó la educación Media Superior? y ¿Conoce cuáles fueron sus motivos?<br>
    <b>R= Pues todas salimos embarazadas las del grupo que nos íbamos de fiesta, pero todas estamos iguales, ante nos juntábamos a tomar cerveza ahora a comparar juicios de pensión alimenticia. </b>
</p>
<br />
<br />
</article>

<article class="entrevista_8" id="entrevista17"> 
<h2>Entrevista 17</h2>
<div class="row"> 
 
</div>
<br />
<p><b>Ficha técnica: </b></p>

<p>Sujeto de sexo femenino, 20 años de edad, nivel socioeconómico bajo, bachiller trunco (cursó hasta tercer semestre), madre soltera, el padre de su hijo los abandonó.</p>
<br/>
<p><b>Notas del diario de campo:</b></p>
<p>Se hace referencia a algunos términos coloquiales cuyo significado se presenta a continuación con la finalidad de entender el sentido del discurso:</p>
<br />
<style type="text/css">
.tftable {font-size:12px;color:#333333;width:100%;border-width: 1px;border-color: #729ea5;border-collapse: collapse;}
.tftable th {font-size:12px;background-color:#acc8cc;border-width: 1px;padding: 8px;border-style: solid;border-color: #729ea5;text-align:left;}
.tftable tr {background-color:#d4e3e5;}
.tftable td {font-size:12px;border-width: 1px;padding: 8px;border-style: solid;border-color: #729ea5;}
.tftable tr:hover {background-color:#ffffff;}
</style>
<table class="tftable" border="1">
<tr><th>Concepto</th><th>Significado</th></tr>
<tr><td>Dejadas</td><td>Mujeres que fueron abandonadas por su pareja sentimental.</td></tr>
</table>
<br>
<br />
<p>
1. ¿Podría indicar la Colonia donde reside?<br> 
   <b>R= En punta oriente</b><br><br>

2. ¿Cuál es su edad?<br> 
   <b>R= 20 años </b><br><br>

3. ¿Cuál fue su último grado de estudio?<br> 
   <b>R= 3er semestre de prepa.</b><br><br>

4. ¿Cuál fue el motivo de que abandonara sus estudios?<br> 
   <b>R= Pues me embaracé de mi novio.</b><br><br> 
   
4.1 ¿Cuánto tiempo tenía con él? <br> 
   <b>R= Pues tenía 6 meses, o sea, cuando me di cuenta de que estaba embarazada, entonces pues ya le dije y me dijo que no me preocupara que todo iba a estar bien, entonces como me sentí apoyada le dije a mis papás, entonces ellos quisieron hablar con él; fuimos a la casa y mis papás hablaron con los dos y nos dijeron que a partir de ahora la vida se iba a complicar mucho para nosotros, yo la verdad no les creía, entonces decidimos no vivir juntos hasta que naciera el bebé, y me quede en casa de mis papás. Poco a poco él se fue retirando de nosotros, poco a poco dejó de ir a la casa y poco a poco hasta que un día simplemente no supe más de él, ya al tiempo nació mi hija, entonces yo estaba muy deprimida y él regresó a buscarnos que porque no podía vivir sin nosotras, entonces regresó y empezó a hacerse cargo de nuestra hija, pero a los 4 meses se fue porque no era “lo que él esperaba”, ¿que esperaba? Por eso me salí de la prepa.
   </b><br><br>
   
5.	¿Conoce a alguna mujer de su entorno que también abandonó la educación Media Superior? y ¿Conoce cuáles fueron sus motivos?<br>
    <b>R= Si, las vecinas de ahí donde vivo todas estamos iguales, embarazadas y dejadas.</b>
</p>
<br />
<br />
</article>

<article class="entrevista_8" id="entrevista18"> 
<h2>Entrevista 18</h2>
<div class="row"> 
 
</div>
<br />
<p><b>Ficha técnica: </b></p>

<p>Sujeto de sexo femenino, 20 años de edad, nivel socioeconómico bajo, bachiller trunco (cursó hasta segundo semestre), embarazo adolescente, casada.</p>
<br/>
<p><b>Notas del diario de campo:</b></p>
<p>Se hace referencia a algunos términos coloquiales cuyo significado se presenta a continuación con la finalidad de entender el sentido del discurso:</p>
<br />
<style type="text/css">
.tftable {font-size:12px;color:#333333;width:100%;border-width: 1px;border-color: #729ea5;border-collapse: collapse;}
.tftable th {font-size:12px;background-color:#acc8cc;border-width: 1px;padding: 8px;border-style: solid;border-color: #729ea5;text-align:left;}
.tftable tr {background-color:#d4e3e5;}
.tftable td {font-size:12px;border-width: 1px;padding: 8px;border-style: solid;border-color: #729ea5;}
.tftable tr:hover {background-color:#ffffff;}
</style>
<table class="tftable" border="1">
<tr><th>Concepto</th><th>Significado</th></tr>
<tr><td>Chocaba</td><td>Actividad pendiente a realizar, considerada molesta por la entrevistada.</td></tr>
<tr><td>Prepa</td><td>Institución que imparte programas académicos de Educación Media Supeior.</td></tr>
</table>
<br>
<br />
<p>
1. ¿Podría indicar la Colonia donde reside?<br> 
   <b>R= En punta oriente</b><br><br>

2. ¿Cuál es su edad?<br> 
   <b>R= 20 años </b><br><br>

3. ¿Cuál fue su último grado de estudio?<br> 
   <b>R= 4to semestre de prepa.</b><br><br>

4. ¿Cuál fue el motivo de que abandonara sus estudios?<br> 
   <b>R= Pues la razón más fuerte que me embaracé, pero la verdad a mí no me gustaba ir a la escuela, era bien aburrido, los temas eran difíciles de entender y los maestros eran súper nefastos, era un tormento ir todo los días enserio, desde que iba en el camión ya estaba pensando en eso y me chocaba ir, diario era lo mismo, nomás estaba esperando que fuera viernes y la hora de salida para ya poder irme, enserio yo no veía la hora de ya no regresar a ese lugar.
Cuando iba en cuarto semestre me embaracé del que ahora es mi esposo, pero como él era mayor que yo y ya estaba más estable y tenía casa y todo lo tomó bien.
</b><br><br> 
   
4.1 ¿Cuántos años era mayor él?  <br> 
   <b>R= Cinco años, pero ya era estable y le dije y fue con mis papás a ayudarme, entonces me fui a vivir con él, y le pregunté si quería que regresara a la escuela y me dijo que no, entonces esa fue la manera en que dejé de ir a la escuela. </b><br><br>
   
5.	¿Conoce a alguna mujer de su entorno que también abandonó la educación Media Superior? y ¿Conoce cuáles fueron sus motivos?<br>
    <b>R= Si sí conozco, pero por ejemplo ____________ ella también dejó la escuela porque se embarazó, pero ella era muy inteligente, siempre le iba bien y tenía buenas calificaciones, en el caso de ella no veo el caso que la hubiera dejado.</b>
</p>
<br />
<br />
</article>

<article class="entrevista_8" id="entrevista19"> 
<h2>Entrevista 19</h2>
<div class="row"> 
 
</div>
<br />
<p><b>Ficha técnica: </b></p>

<p>Sujeto de sexo femenino, 21 años de edad, nivel socioeconómico bajo, bachiller trunco (cursó hasta primer semestre), madre soltera, el padre de su hijo se encuentra desaparecido.</p>
<br/>
<p><b>Notas del diario de campo:</b></p>
<p>Se hace referencia a algunos términos coloquiales cuyo significado se presenta a continuación con la finalidad de entender el sentido del discurso:</p>
<br />
<style type="text/css">
.tftable {font-size:12px;color:#333333;width:100%;border-width: 1px;border-color: #729ea5;border-collapse: collapse;}
.tftable th {font-size:12px;background-color:#acc8cc;border-width: 1px;padding: 8px;border-style: solid;border-color: #729ea5;text-align:left;}
.tftable tr {background-color:#d4e3e5;}
.tftable td {font-size:12px;border-width: 1px;padding: 8px;border-style: solid;border-color: #729ea5;}
.tftable tr:hover {background-color:#ffffff;}
</style>
<table class="tftable" border="1">
<tr><th>Concepto</th><th>Significado</th></tr>
<tr><td>Narquillo</td><td>Se dedica actividades del crimen organizado.</td></tr>
<tr><td>Troca</td><td>Vehículo.</td></tr>
<tr><td>Bachi</td><td>Bachilleres, COBACH, Institución de Educación Media Superior del Estado de Chihuahua.</td></tr>
<tr><td>Jairo</td><td>Pareja.</td></tr>
<tr><td>Maricela</td><td>Amiga con estudios Medio superior concluido.</td></tr>
</table>
<br>
<br />
<p>
1. ¿Podría indicar la Colonia donde reside?<br> 
   <b>R= En punta oriente</b><br><br>

2. ¿Cuál es su edad?<br> 
   <b>R= 21 años </b><br><br>

3. ¿Cuál fue su último grado de estudio?<br> 
   <b>R= 1er semestre de prepa.</b><br><br>

4. ¿Cuál fue el motivo de que abandonara sus estudios?<br> 
   <b>R= Pues bueno, cuando recién entré al bachi me sentí grande, adulta y que yo ya podía hacer lo que yo quisiera, entonces conocí a Jairo, él era el narquillo de la colonia, siempre traía trocas muy grandes y llamativas y se vestía muy llamativo, siempre lo volteas a ver, siempre traía mucha cerveza y mucho de todo.
El caso es que yo lo conocí en una fiesta y empezamos a hablar, yo no tenía celular y el me regaló uno para poder estar en comunicación, con el tiempo me llevaba a la escuela y luego iba por mí y todo el tiempo lo pasábamos juntos, entonces como a los 4 meses me embaracé de él, y él me dio dinero para que fuera a un doctor a ver como estaba nuestro bebé.
Todo siguió igual durante 4 meses y yo ya quería decirle a mis papás, entonces él me acompañó a decirle a mis papás que yo estaba embarazada y que ya no tenía caso que regresara a la escuela porque Jairo me iba a dar todo y yo iba a vivir bien y no me iba a faltar nada, pero esa reunión familiar salió muy mal y mis papás me corrieron de la casa, esa noche me fui a dormir con él, entonces al día siguiente regresé a la casa y traté de arreglar las cosas con mis papás y medio funcionó pero me pidieron que no dejara la escuela, les dije que sí pero no lo hice la verdad.
Cuando yo tenía 6 meses de embarazo no encontraba a Jairo, llamé y fui a su casa y estaba la troca, y pues lo esperé casi todo el día y nunca llegó, y así pasó una semana sin saber de él, después pasó un mes, después llegó el día del parto y no se apareció y hasta el día de hoy jamás lo he vuelto a ver.
</b><br><br> 
   
4.1 ¿Conoce a la familia de él?  <br> 
   <b>R= La verdad no los conocía porque él me dijo que estaba solo aquí en Chihuahua trabajando, que era de sierra de un pueblito por Urique. 
   </b><br><br>
   
5.	¿Conoce a alguna mujer de su entorno que también abandonó la educación Media Superior? y ¿Conoce cuáles fueron sus motivos?<br>
    <b>R= Pues mis amigas, con las que vine hoy todas estamos iguales, de hecho, tenemos hijos de más o menos la misma edad y creo nomas Maricela terminó la prepa, pero no siguió estudiando para poder ser mamá.
    </b>
</p>
<br />
<br />
</article>

<article class="entrevista_8" id="entrevista20"> 
<h2>Entrevista 20</h2>
<div class="row"> 
 
</div>
<br />
<p><b>Ficha técnica: </b></p>

<p>Sujeto de sexo femenino, 19 años de edad, nivel socioeconómico bajo, bachiller trunco (cursó hasta tercer semestre), madre soltera, empleada, considera que la educación media superior no es necesaria.
</p>
<br/>
<br />

<p>
1. ¿Podría indicar la Colonia donde reside?<br> 
   <b>R= En punta oriente</b><br><br>

2. ¿Cuál es su edad?<br> 
   <b>R= 19 años </b><br><br>

3. ¿Cuál fue su último grado de estudio?<br> 
   <b>R= 3er semestre de prepa.</b><br><br>

4. ¿Cuál fue el motivo de que abandonara sus estudios?<br> 
   <b>R= Pues la verdad sigo sin entender porque tenemos que ir a la escuela si no queremos, por ejemplo, te digo lo que me pasó a mí, yo iba todo el día a la escuela pero no entiendo que de bueno tiene, por ejemplo yo creo y pienso que no la necesito.
Pero la razón que más me ayudó fue el embarazo, cuando me embaracé ya no me forzaban a ir a la escuela, simplemente le decía a mi mamá que me dolía la panza y ya me decía, “no no vallas mejor quédate aquí donde pueda verte y así sé que no te va a pasar nada”. 
Por ejemplo, yo trabajo en una tienda de ropa, y somos 6 las que trabajábamos ahí y dos tienen la prepa terminada y ganamos lo mismo, entonces ¿Cuál era el beneficio?, entonces no le veo el caso yo prefiero así, mejor voy a trabajar donde si me pagan en vez de estar ahí todo el día escuchando cosas que no me sirven, porque ¿apoco tu usas ecuaciones todos los días?
</b><br><br> 
5.	¿Conoce a alguna mujer de su entorno que también abandonó la educación Media Superior? y ¿Conoce cuáles fueron sus motivos?<br>
    <b>R= Pues de las que trabajamos en la tienda, solo dos si terminaron la prepa pero las otras no, pero no se necesita, es más yo no le pediría a mi hijo que lo hiciera. 
    </b>
</p>
<br />
<br />
</article>

<article class="entrevista_8" id="entrevista21"> 
<h2>Entrevista 21</h2>
<div class="row"> 
 
</div>
<br />
<p><b>Ficha técnica: </b></p>

<p>Sujeto de sexo femenino, 21 años de edad, nivel socioeconómico bajo, bachiller trunco (cursó hasta cuarto semestre), madre soltera, empleada.</p>
<br/>
<p><b>Notas del diario de campo:</b></p>
<p>Se hace referencia a algunos términos coloquiales cuyo significado se presenta a continuación con la finalidad de entender el sentido del discurso:</p>
<br />
<style type="text/css">
.tftable {font-size:12px;color:#333333;width:100%;border-width: 1px;border-color: #729ea5;border-collapse: collapse;}
.tftable th {font-size:12px;background-color:#acc8cc;border-width: 1px;padding: 8px;border-style: solid;border-color: #729ea5;text-align:left;}
.tftable tr {background-color:#d4e3e5;}
.tftable td {font-size:12px;border-width: 1px;padding: 8px;border-style: solid;border-color: #729ea5;}
.tftable tr:hover {background-color:#ffffff;}
</style>
<table class="tftable" border="1">
<tr><th>Concepto</th><th>Significado</th></tr>
<tr><td>Bachi</td><td>Bachilleres, COBACH, Institución de Educación Media Superior del Estado de Chihuahua.</td></tr>
<tr><td>Fernando</td><td>Ex pareja y padre del hijo de la mujer entrevistada.</td></tr>
</table>
<br>
<br />
<p>
1. ¿Podría indicar la Colonia donde reside?<br> 
   <b>R= En punta oriente</b><br><br>

2. ¿Cuál es su edad?<br> 
   <b>R= 21 años </b><br><br>

3. ¿Cuál fue su último grado de estudio?<br> 
   <b>R= 4to semestre de prepa.</b><br><br>

4. ¿Cuál fue el motivo de que abandonara sus estudios?<br> 
   <b>R= Pues me pasó que estaba estudiando en el bachi, y como en 2do semestre más o menos conocí a Fernando y estábamos muy enamorados y pues me embaracé, entonces yo seguí en la escuela, así embarazada, pero Fernando se salió de la escuela porque ahora tenía que trabajar para poder pagar todo lo que tenía que ver con el bebé, eso fue como en tercer semestre, o sea en tercer semestre yo tuve a mi bebé, no, no me explique, o sea  en las vacaciones de tercero para pasar a cuarto semestre tuve al bebé.
Antes de que el bebé naciera yo sentía que iba a poder estudiar y cuidarlo porque mi mamá me dijo que ella me iba a ayudar, pero enserio no se puede, o sea yo no dormía en toda la noche, siempre estaba quedándome dormida, siempre estaba bien cansada y la verdad hasta me sentía mal, entonces mejor dejé de ir a la escuela.
Cuando dejé la escuela Fernando se enojó mucho, porque el trato era que yo estudiara y después él iba a estudiar, o sea para poder trabajar y pagar las cosas, pero no enserio que ya no quería, prefería quedarme con mi bebé, lo malo fue que al tiempo comenzamos a tener muchos problemas, porque según él yo nunca hacía nada, y él trabajaba todo el día y pues nos separamos, y me tocó ponerme a trabajar. 
</b><br><br> 

5.	¿Conoce a alguna mujer de su entorno que también abandonó la educación Media Superior? y ¿Conoce cuáles fueron sus motivos?<br>
    <b>R= Pues con las que vine [se refiere al grupo de amigas que acudieron a la entrevista] todas estamos igual, ninguna termino por embarazo.
    </b>
</p>
<br />
<br />
</article>

<article class="entrevista_8" id="entrevista22"> 
<h2>Entrevista 22</h2>
<div class="row"> 
 
</div>
<br />
<p><b>Ficha técnica: </b></p>

<p>Sujeto de sexo femenino, 19 años de edad, nivel socioeconómico bajo, bachiller trunco (cursó hasta tercer semestre), madre soltera.</p>
<br/>
<p><b>Notas del diario de campo:</b></p>
<p>Se hace referencia a algunos términos coloquiales cuyo significado se presenta a continuación con la finalidad de entender el sentido del discurso:</p>
<br />
<style type="text/css">
.tftable {font-size:12px;color:#333333;width:100%;border-width: 1px;border-color: #729ea5;border-collapse: collapse;}
.tftable th {font-size:12px;background-color:#acc8cc;border-width: 1px;padding: 8px;border-style: solid;border-color: #729ea5;text-align:left;}
.tftable tr {background-color:#d4e3e5;}
.tftable td {font-size:12px;border-width: 1px;padding: 8px;border-style: solid;border-color: #729ea5;}
.tftable tr:hover {background-color:#ffffff;}
</style>
<table class="tftable" border="1">
<tr><th>Concepto</th><th>Significado</th></tr>
<tr><td>Desmadre</td><td>Alboroto, fiestas, salidas con amigos, consumo de bebidas embriagantes y tabaco.</td></tr>
<tr><td>Muchos amigos</td><td>Hace referencia a que contaba con varias parejas sexuales sin contar con una relación de noviazgo).</td></tr>
<tr><td>Pistiar</td><td>Ingerir bebidas alcohólicas. </td></tr>
<tr><td>Turno de la tarde </td><td>Horario escolar comprendido de la 1:20pm a las 7:40pm.</td></tr>
<tr><td>Antro</td><td>Club nocturno.</td></tr>
<tr><td>After</td><td>Fiesta, normalmente en una casa, inicia después de las 2am.</td></tr>
<tr><td>Curárnosla</td><td>Ritual donde se pretende eliminar la resaca por consumir bebidas alcohólicas, nórmamele comprende en comer alimentos muy picantes con cerveza. </td></tr>
<tr><td>Cerve</td><td>Bar Drive inn chihuahuense llamado “la cerve”.</td></tr>
<tr><td>No me bajaba</td><td>Durante un tiempo determinado no ha tenido la menstruación.</td></tr>
<tr><td>Al super</td><td>Tienda minorista de abarrotes. </td></tr>
<tr><td>Superior</td><td>Empresa dedicada a la manufactura.</td></tr>
<tr><td>Fernando</td><td>Novio.</td></tr>
<tr><td>H1</td><td>Hija de la mujer entrevistada.</td></tr>
</table>
<br>
<br />
<p>
1. ¿Podría indicar la Colonia donde reside?<br> 
   <b>R= En punta oriente</b><br><br>

2. ¿Cuál es su edad?<br> 
   <b>R= 19 años </b><br><br>

3. ¿Cuál fue su último grado de estudio?<br> 
   <b>R= 3er semestre de prepa.</b><br><br>

4. ¿Cuál fue el motivo de que abandonara sus estudios?<br> 
   <b>R= Pues estaba embarazada, fue un accidente, la verdad es que si me gustaba ir a la escuela y estudiar y todo eso ¿no?, pero también me gustaba mucho la fiesta y el desmadre, entonces pues no quería tener novio ni nada serio, entonces tenía muchos amigos ¿si me entiendes? pero yo pensaba que la vida que tenía al salir de la escuela, no tenía nada que ver con la escuela y que eran cosas separadas.
Cuando salía de la escuela hacía mi tarea para no tener pendientes y ya me iba de fiesta. ¡Hasta tenía una agenda!, los jueves eran en una casa de alguien, y ahí nos juntábamos a pistar, yo estudiaba en el turno de la tarde, el viernes yo salía rápido de la escuela y venía a mi casa a cambiarme y a ponerme bonita porque nos íbamos de antro y luego del antro al after, después el sábado en la tarde íbamos a curárnosla a la cerve y pues ya estando ahí nos quedábamos al antro otra vez.
En esas salidas yo tenía mis amigos con los que iba, después de un tiempo noté que no me bajaba y comencé a preocuparme, entonces ahí en el Alsuper compré una prueba de embarazo la cual salió positiva. Enserio yo no sé en qué momento pasó 
.</b><br><br> 
4.1 ¿Usaba algún tipo de anticonceptivo? <br> 
   <b>R= La verdad no usaba porque yo pensaba que a mí no me iba a pasar, aparte yo no pensaba en eso yo quería divertirme, entonces pues le tuve que decir a mis papás que estaba embarazada pero aparte de eso, les tenía que decir que no sabía ni quien era el papá, ¡pues imagínate como me fue!, entonces ya no quisieron pagarme la escuela, según ellos como un castigo, y me obligaron a trabajar, así embarazada nadie me iba a contratar pues tuve que trabajar limpiando casas, empacando mandado en Aurrera, planchando y cosas así.
Y ahora me hago cargo de mi hija, y pues sigo trabajando, pero en algo un poco más estable, soy operadora en Superior, lo bueno es que conocí a Fernando y él me aceptó con h1, entonces realmente no paso gran cosa, porque mis papás me decían que nadie me iba a querer así con un hijo de “quien sabe quién”.
</b><br><br> 

5.	¿Conoce a alguna mujer de su entorno que también abandonó la educación Media Superior? y ¿Conoce cuáles fueron sus motivos?<br>
    <b>R= Si, si conozco, pues mis amigas, yo creo nadie termino, pero la verdad la situación de ellas estaba fácil, al menos sabían quién era el papá del bebé y a quien echarle la culpa, yo tuve que lidiar con eso sola.
    </b>
</p>
<br />
<br />
</article>

<article class="entrevista_8" id="entrevista23"> 
<h2>Entrevista 23</h2>
<div class="row"> 
 
</div>
<br />
<p><b>Ficha técnica: </b></p>

<p>Sujeto de sexo femenino, 20 años de edad, nivel socioeconómico bajo, bachiller trunco (cursó hasta segundo semestre), madre soltera.</p>
<br/>
<p><b>Notas del diario de campo:</b></p>
<p>Se hace referencia a algunos términos coloquiales cuyo significado se presenta a continuación con la finalidad de entender el sentido del discurso:</p>
<br />
<style type="text/css">
.tftable {font-size:12px;color:#333333;width:100%;border-width: 1px;border-color: #729ea5;border-collapse: collapse;}
.tftable th {font-size:12px;background-color:#acc8cc;border-width: 1px;padding: 8px;border-style: solid;border-color: #729ea5;text-align:left;}
.tftable tr {background-color:#d4e3e5;}
.tftable td {font-size:12px;border-width: 1px;padding: 8px;border-style: solid;border-color: #729ea5;}
.tftable tr:hover {background-color:#ffffff;}
</style>
<table class="tftable" border="1">
<tr><th>Concepto</th><th>Significado</th></tr>
<tr><td>Bachi</td><td>Alboroto, fiestas, salidas con amigos, consumo de bebidas embriagantes y tabaco.</td></tr>
<tr><td>Amarrarse</td><td>Hace referencia a que contaba con varias parejas sexuales sin contar con una relación de noviazgo).</td></tr>
<tr><td>Edgar </td><td>Ingerir bebidas alcohólicas. </td></tr>

</table>
<br>
<br />
<p>
1. ¿Podría indicar la Colonia donde reside?<br> 
   <b>R= En punta oriente</b><br><br>

2. ¿Cuál es su edad?<br> 
   <b>R= 20 años </b><br><br>

3. ¿Cuál fue su último grado de estudio?<br> 
   <b>R= 2do semestre de prepa.</b><br><br>

4. ¿Cuál fue el motivo de que abandonara sus estudios?<br> 
   <b>R= Por embarazo, te cuento que me paso. Yo estaba estudiando en el bachi, y tenía a mi novio de toda la vida, estábamos juntos desde 2do año de secundaria, ¿te imaginas?, entonces ya habíamos empezado a tener relaciones, pero nunca nos habíamos cuidado, porque él decía que no importaba si yo me embarazaba, que incluso le parecía mejor porque así ya estaríamos siempre juntos, y la verdad me gustaba la idea. 
Para segundo semestre del bachi quedé embarazada y yo pensé que era una muy buena noticia y en ese momento, ¡es más! Recuerdo el día que le dije. Me dijo que, porque no me cuidaba, que estaba loca como íbamos a tener un bebé, que él quería hacer otras cosas en vez de tener familia y amarrarse para siempre. Me dejó.
Yo no sabía qué hacer, se supone que me amaba y que quería estar para siempre conmigo, yo ya había visto que esto les había pasado a otras mujeres, pero la verdad que yo pensé que nuestra relación era perfecta y que a mi jamás me iba pasar, pensé que estaríamos siempre juntos y todo eso. 
Durante los primeros meses de embarazo no dije nada en mi casa, de hecho mi ex pareja, se desapareció, jamás me volvió a contestar un mensaje, nada, entonces yo trataba de hacer vida normal, iba a la escuela y todo, pero siempre estaba muy preocupada, entonces cuando cumplí 6 meses de embarazo ya le dije a mis papás, ellos pensaban que Edgar y yo solo habíamos terminado y ya, pues ya les tuve que decir porque terminamos, y todo lo que me dijo.
Mi bebé nació prematuro en junio de ese año, en las vacaciones, pero yo ya no quise regresar a la escuela, porque me daba mucha vergüenza regresar a estudiar siendo madre soltera, cargando con un bebé y un hombre que me abandonó.
</b><br><br> 

5.	¿Conoce a alguna mujer de su entorno que también abandonó la educación Media Superior? y ¿Conoce cuáles fueron sus motivos?<br>
    <b>R= Si, como te decía, a las que les había pasado algo como a mí, pero que yo pensé que no me iba a pasar, yo creo la mayoría de las mujeres con hijos que conozco, tenemos la misma historia.
    </b>
</p>
<br />
<br />
</article>

<article class="entrevista_8" id="entrevista24"> 
<h2>Entrevista 24</h2>
<div class="row"> 
 
</div>
<br />
<p><b>Ficha técnica: </b></p>

<p>Sujeto de sexo femenino, 19 años de edad, nivel socioeconómico bajo, bachiller trunco (cursó hasta cuarto semestre), madre soltera.</p>
<br/>
<p><b>Notas del diario de campo:</b></p>
<p>Se hace referencia a algunos términos coloquiales cuyo significado se presenta a continuación con la finalidad de entender el sentido del discurso:</p>
<br />
<style type="text/css">
.tftable {font-size:12px;color:#333333;width:100%;border-width: 1px;border-color: #729ea5;border-collapse: collapse;}
.tftable th {font-size:12px;background-color:#acc8cc;border-width: 1px;padding: 8px;border-style: solid;border-color: #729ea5;text-align:left;}
.tftable tr {background-color:#d4e3e5;}
.tftable td {font-size:12px;border-width: 1px;padding: 8px;border-style: solid;border-color: #729ea5;}
.tftable tr:hover {background-color:#ffffff;}
</style>
<table class="tftable" border="1">
<tr><th>Concepto</th><th>Significado</th></tr>
<tr><td>Gran partido</td><td>Persona con potencial de ser excelente pareja.</td></tr>
<tr><td>Isela</td><td>Compañera de la escuela interesada en la pareja de la mujer entrevistada.</td></tr>
<tr><td>Fácil</td><td>Termino coloquial para describir a una mujer con la que es sencillo mantener relaciones sexuales.</td></tr>
<tr><td>Bullying</td><td>Acoso escolar proveniente de otros compañeros de clase. </td></tr>
</table>
<br>
<br />
<p>
1. ¿Podría indicar la Colonia donde reside?<br> 
   <b>R= En punta oriente</b><br><br>

2. ¿Cuál es su edad?<br> 
   <b>R= 19 años </b><br><br>

3. ¿Cuál fue su último grado de estudio?<br> 
   <b>R= 4to semestre de prepa.</b><br><br>

4. ¿Cuál fue el motivo de que abandonara sus estudios?<br> 
   <b>R= Un embarazo adolescente, cuando me di cuenta que estaba embarazada no lo podía creer, en la escuela se la pasaban diciéndonos como cuidarnos, como se usa un condón y parece que nunca me habían dicho nada.
Yo me embaracé de un compañero del salón, él era el muchacho más guapo de la escuela, todas querían con él, pero yo era la novia oficial, te digo oficial porque tenía muchas., entonces él decía que si no quería que me dejara yo tenía que acceder a tener relaciones sexuales con él, porque si no, pues se iba con Isela (una de esas mujeres que lo consideraban un gran partido), entonces pues no quería terminar con él, entonces pues acepte, pero a él no le gustaba usar condón porque decía que no se sentía igual, y a mí me daba mucha vergüenza ir a buscar ayuda para cuidarme de otra manera, entonces me embaracé. Cuando le dije que estaba embarazada él me dijo que no era de él, que yo era una fácil y que tenía fama de haberme acostado con este, aquel y el otro por lo tanto él no tenía la certeza de que el bebé fuera suyo.
Todo mundo en la escuela se burlaba de mí, porque él corrió el chisme de que yo era una fácil, que estaba embarazada de no sé quién, entonces yo ya no quise regresar a la escuela, era demasiado el bullying.
</b><br><br> 

5.	¿Conoce a alguna mujer de su entorno que también abandonó la educación Media Superior? y ¿Conoce cuáles fueron sus motivos?<br>
    <b>R= Ahora, que ya no estoy en la escuela tengo amigas de aquí por la casa y he conocido a otras mujeres que tienen una situación como la mía, creo que es muy común.
    </b>
</p>
<br />
<br />
</article>

<article class="entrevista_8" id="entrevista25"> 
<h2>Entrevista 25</h2>
<div class="row"> 
 
</div>
<br />
<p><b>Ficha técnica: </b></p>

<p>Sujeto de sexo femenino, 19 años de edad, nivel socioeconómico bajo, bachiller trunco (cursó hasta tercer semestre), madre adolescente, casada. </p>
<br/>
<p><b>Notas del diario de campo:</b></p>
<p>Se hace referencia a algunos términos coloquiales cuyo significado se presenta a continuación con la finalidad de entender el sentido del discurso:</p>
<br />
<style type="text/css">
.tftable {font-size:12px;color:#333333;width:100%;border-width: 1px;border-color: #729ea5;border-collapse: collapse;}
.tftable th {font-size:12px;background-color:#acc8cc;border-width: 1px;padding: 8px;border-style: solid;border-color: #729ea5;text-align:left;}
.tftable tr {background-color:#d4e3e5;}
.tftable td {font-size:12px;border-width: 1px;padding: 8px;border-style: solid;border-color: #729ea5;}
.tftable tr:hover {background-color:#ffffff;}
</style>
<table class="tftable" border="1">
<tr><th>Concepto</th><th>Significado</th></tr>
<tr><td>Al super</td><td>Tienda minorista de abarrotes.</td></tr>

</table>
<br>
<br />
<p>
1. ¿Podría indicar la Colonia donde reside?<br> 
   <b>R= En punta oriente</b><br><br>

2. ¿Cuál es su edad?<br> 
   <b>R= 19 años </b><br><br>

3. ¿Cuál fue su último grado de estudio?<br> 
   <b>R= 3er semestre de prepa.</b><br><br>

4. ¿Cuál fue el motivo de que abandonara sus estudios?<br> 
   <b>R= Me quedé embarazada, mi novio y yo habíamos comenzado a tener relaciones sexuales hacia poco, entonces no sabíamos muchas cosas, entonces no sabíamos muy bien cómo poner un condón o como comprar pastillas o cualquier otro método, o sea en la escuela me dijeron como cuidarme, pero no como conseguirlos, en realidad, ¿tú sabes usar pastillas?, sigo sin entender cómo saber cuáles necesitas.
Bueno, entonces me embaracé de mi novio, él es mi actual esposo y ahora tenemos otros dos hijos. Mi novio era mayor que yo como 5 años, entonces pues era más estable, trabajaba en el Alsuper, entonces me dijo que se le hacía mejor que me quedara en la casa para cuidar el embarazo, él sacó su casa con el INFONAVIT y nos quedamos a vivir ahí juntos y ya me dedique a la casa, mi mamá me ayudó mucho porque ella me enseñaba a hacer comida, como cambiar un pañal, hasta a coser aprendí.
La verdad si lo pienso aprendí mucho más en esos 9 meses de embarazo que cuando estaba estudiando, bueno cosas qué si sirven, porque es bien importante saber escoger aguacates. 
</b><br><br> 

5.	¿Conoce a alguna mujer de su entorno que también abandonó la educación Media Superior? y ¿Conoce cuáles fueron sus motivos?<br>
    <b>R= Pues mis amigas de la cuadra, todas llegamos embarazadas y sin la prepa terminada, se me hace que ya las conociste ¿verdad?
    </b>
</p>
<br />
<br />
</article>

<article class="entrevista_8" id="entrevista26"> 
<h2>Entrevista 26</h2>
<div class="row"> 
 
</div>
<br />
<p><b>Ficha técnica: </b></p>

<p>Sujeto de sexo femenino, 19 años de edad, nivel socioeconómico bajo, bachiller trunco (cursó hasta cuarto semestre) madre soltera.</p>
<br/>
<p><b>Notas del diario de campo:</b></p>
<p>Se hace referencia a algunos términos coloquiales cuyo significado se presenta a continuación con la finalidad de entender el sentido del discurso:</p>
<br />
<style type="text/css">
.tftable {font-size:12px;color:#333333;width:100%;border-width: 1px;border-color: #729ea5;border-collapse: collapse;}
.tftable th {font-size:12px;background-color:#acc8cc;border-width: 1px;padding: 8px;border-style: solid;border-color: #729ea5;text-align:left;}
.tftable tr {background-color:#d4e3e5;}
.tftable td {font-size:12px;border-width: 1px;padding: 8px;border-style: solid;border-color: #729ea5;}
.tftable tr:hover {background-color:#ffffff;}
</style>
<table class="tftable" border="1">
<tr><th>Concepto</th><th>Significado</th></tr>
<tr><td>Panzona</td><td>Embarazada.</td></tr>

</table>
<br>
<br />
<p>
1. ¿Podría indicar la Colonia donde reside?<br> 
   <b>R= En punta oriente</b><br><br>

2. ¿Cuál es su edad?<br> 
   <b>R= 19 años </b><br><br>

3. ¿Cuál fue su último grado de estudio?<br> 
   <b>R= 4to semestre de prepa.</b><br><br>

4. ¿Cuál fue el motivo de que abandonara sus estudios?<br> 
   <b>R= Pues la verdad a mí no me gustaba, era un lugar muy aburrido, los maestros siempre te tratan mal, te hacen menos, te gritan, te maltratan mucho, y se la pasan explicando temas que la verdad nadie entiende y a nadie le importan, yo no sé porque siguen dando esos temas sin importancia.
Yo siempre le decía a mi mamá: “es que ya no quiero ir”, “no voy a ir”, “mejor me voy a poner a trabajar”, porque la verdad en México no hay posibilidades de conseguir un buen trabajo, nadie te va a pagar bien, no importa que tantos estudios tengas. Tengo una prima que es Licenciada y ni gana tanto, trabaja todo el día, y gana bien poquito ni casa tiene y yo si tengo casa.
Entonces pues como salí panzona por fin me dejaron ya no ir a la escuela y me pude quedar en mi casa, la verdad para mi embarazarme fue lo mejor que pudo haber pasado por que así dejé de ir a la escuela, no podía trabajar, pero ya tenía tiempo para hacer otras cosas, como salir con mis amigas, ver a mi novio que es el papá de mi hijo y pues ahí me estaba en la casa con mi mamá y ella me enseñó a hacer cosas de la casa, digo es más importante saber hacer comida ¿no?
</b><br><br> 

5.	¿Conoce a alguna mujer de su entorno que también abandonó la educación Media Superior? y ¿Conoce cuáles fueron sus motivos?<br>
    <b>R= Pues todas mis primas, nomás estudió la que te platiqué, unas porque ya no quisieron y otras por estar embarazadas, nomás la prima rarita, la que es licenciada.
    </b>
</p>
<br />
<br />
</article>

<article class="entrevista_8" id="entrevista27"> 
<h2>Entrevista 27</h2>
<div class="row"> 
 
</div>
<br />
<p><b>Ficha técnica: </b></p>

<p>Sujeto de sexo femenino, 19 años de edad, nivel socioeconómico bajo, bachiller trunco (cursó hasta tercer semestre) madre soltera.</p>
<br/>
<p><b>Notas del diario de campo:</b></p>
<p>Se hace referencia a algunos términos coloquiales cuyo significado se presenta a continuación con la finalidad de entender el sentido del discurso:</p>
<br />
<style type="text/css">
.tftable {font-size:12px;color:#333333;width:100%;border-width: 1px;border-color: #729ea5;border-collapse: collapse;}
.tftable th {font-size:12px;background-color:#acc8cc;border-width: 1px;padding: 8px;border-style: solid;border-color: #729ea5;text-align:left;}
.tftable tr {background-color:#d4e3e5;}
.tftable td {font-size:12px;border-width: 1px;padding: 8px;border-style: solid;border-color: #729ea5;}
.tftable tr:hover {background-color:#ffffff;}
</style>
<table class="tftable" border="1">
<tr><th>Concepto</th><th>Significado</th></tr>
<tr><td>Modo Jeny Rivera</td><td>Se sentía herida emocionalmente por la ruptura sentimental.</td></tr>
<tr><td>Luis</td><td>Padre biológico del hijo de la mujer entrevistada.</td></tr>
<tr><td>Raúl</td><td>Actual pareja de la mujer entrevistada.</td></tr>
</table>
<br>
<br />
<p>
1. ¿Podría indicar la Colonia donde reside?<br> 
   <b>R= En punta oriente</b><br><br>

2. ¿Cuál es su edad?<br> 
   <b>R= 19 años </b><br><br>

3. ¿Cuál fue su último grado de estudio?<br> 
   <b>R= 3er semestre de prepa.</b><br><br>

4. ¿Cuál fue el motivo de que abandonara sus estudios?<br> 
   <b>R= Pues me embaracé, resultó que yo tenía mi novio, entonces un día tuvimos una discusión muy fuerte y terminamos, entonces yo me sentía muy mal y andaba en modo Jeny Rivera pues me fui con mis amigas a una fiesta y ahí conocí a Luis.
Él y yo comenzamos a tener mucha comunicación por mensajitos y Facebook, entonces salíamos así al parque o a cenar o cosas así, lo normal, entonces cuando yo estaba saliendo con él pues me embaracé de él, pero él se fue y me dejó con el embarazo. Y cuando yo estaba deprimida le mandé mensajes a Raúl, él era mi novio desde el principio y me aceptó embarazada y regresó conmigo, se ha hecho cargo de mi hijo como si fuera de él, entonces me puse a vender cosas para poder pagar lo del embarazo, aunque Raúl trabajaba pues para lo que el ganaba no nos acabalábamos. 
Yo vendía por Facebook, y con eso nos ayudábamos, pero pues mejor me quede en mi casa vendiendo cosas para solventar los gastos, porque ya no podíamos pagar la escuela. 
</b><br><br> 

5.	¿Conoce a alguna mujer de su entorno que también abandonó la educación Media Superior? y ¿Conoce cuáles fueron sus motivos?<br>
    <b>R= Pues mis amigas, nadie terminó porque se embarazaron. 
    </b>
</p>
<br />
<br />
</article>

<article class="entrevista_8" id="entrevista28"> 
<h2>Entrevista 28</h2>
<div class="row"> 
 
</div>
<br />
<p><b>Ficha técnica: </b></p>

<p>Sujeto de sexo femenino, 20 años de edad, nivel socioeconómico bajo, bachiller trunco (cursó hasta segundo semestre),madre soltera.</p>
<br/>
<p><b>Notas del diario de campo:</b></p>
<p>Se hace referencia a algunos términos coloquiales cuyo significado se presenta a continuación con la finalidad de entender el sentido del discurso:</p>
<br />
<style type="text/css">
.tftable {font-size:12px;color:#333333;width:100%;border-width: 1px;border-color: #729ea5;border-collapse: collapse;}
.tftable th {font-size:12px;background-color:#acc8cc;border-width: 1px;padding: 8px;border-style: solid;border-color: #729ea5;text-align:left;}
.tftable tr {background-color:#d4e3e5;}
.tftable td {font-size:12px;border-width: 1px;padding: 8px;border-style: solid;border-color: #729ea5;}
.tftable tr:hover {background-color:#ffffff;}
</style>
<table class="tftable" border="1">
<tr><th>Concepto</th><th>Significado</th></tr>
<tr><td>E18</td><td>Entrevista 18 del presente corpus. </td></tr>
<tr><td>Creel</td><td>Ciudad ubicada en el Estado de Chihuahua.</td></tr>

</table>
<br>
<br />
<p>
1. ¿Podría indicar la Colonia donde reside?<br> 
   <b>R= En punta oriente</b><br><br>

2. ¿Cuál es su edad?<br> 
   <b>R= 20 años </b><br><br>

3. ¿Cuál fue su último grado de estudio?<br> 
   <b>R= 2do semestre de prepa.</b><br><br>

4. ¿Cuál fue el motivo de que abandonara sus estudios?<br> 
   <b>R= Pues lo más importante fue que iba a tener un bebé, pero siempre iba bien obligada, la verdad no le veía el caso, por ejemplo, yo veía a E18 que se había salido de la escuela y trabajaba, y enserio me daba envidia porque ella empezó a tener cosas que me gustaban como celular o ropa bonita.
Nos platicaba de sus fines de semana, donde iba a comer o se compraba tal cosa, una vez en unas vacaciones se fue a Creel, y yo también quería conocer y sentía que en la escuela no estaba llegando a nada, todos me decían que si estudiaba iba a tener un mejor sueldo, pero enserio yo lo quería ya, a parte todo mundo sabe que la escuela no te consigue un mejor sueldo.
Cuando me di cuenta que estaba embarazada y les dije a mis papás ya no tenía que ir a la escuela, entonces mejor me fui a buscar trabajo, yo sé que no se puede, pero si yo no decía que estaba embarazada si me daban, trabajé los primeros 6 meses de embarazo, hasta que se me notó. 
Pero durante el tiempo que trabajé pude comprarme muchas cosas, por fin me compré el celular que yo quería, por fin me compré ropa nueva, y le compre a mi bebé muchas cositas bien bonitas, después de eso ya no me contrataron porque se me notaba, y pues me puse a vender cosas por internet o aquí en el parque, ya vez que se pone un tianguis, pues venía con mis cositas y las vendía
Ya cuando nació mi bebé pues ya vez que luego luego dejan la ropa, pues me venía y la vendía, yo siento que, si yo me hubiera quedado en la escuela ¿Qué le ofrezco a mi bebé? 
</b><br><br> 
4.1 ¿Qué pasó con el papá de su bebé?<br> 
   <b>R= Pues ya vez como son los hombres, obvio me dejó con la carga y no se va a hacer responsable, siempre dice que no me va a dar pensión para que me la gaste en mis cosas, yo creo piensa que su hijo no come.</b><br><br>
5.	¿Conoce a alguna mujer de su entorno que también abandonó la educación Media Superior? y ¿Conoce cuáles fueron sus motivos?<br>
    <b>R= Si, sí conozcó, pero ya las conociste ¿no?, aquí estamos todas.
    </b>
</p>
<br />
<br />
</article>

<article class="entrevista_8" id="entrevista29"> 
<h2>Entrevista 29</h2>
<div class="row"> 
 
</div>
<br />
<p><b>Ficha técnica: </b></p>

<p>Sujeto de sexo femenino, 18 años de edad, nivel socioeconómico bajo, bachiller trunco (cursó hasta primer semestre), doble embarazo adolescente, casada.</p>
<br/>
<p><b>Notas del diario de campo:</b></p>
<p>Se hace referencia a algunos términos coloquiales cuyo significado se presenta a continuación con la finalidad de entender el sentido del discurso:</p>
<br />
<style type="text/css">
.tftable {font-size:12px;color:#333333;width:100%;border-width: 1px;border-color: #729ea5;border-collapse: collapse;}
.tftable th {font-size:12px;background-color:#acc8cc;border-width: 1px;padding: 8px;border-style: solid;border-color: #729ea5;text-align:left;}
.tftable tr {background-color:#d4e3e5;}
.tftable td {font-size:12px;border-width: 1px;padding: 8px;border-style: solid;border-color: #729ea5;}
.tftable tr:hover {background-color:#ffffff;}
</style>
<table class="tftable" border="1">
<tr><th>Concepto</th><th>Significado</th></tr>
<tr><td>Bachi</td><td>Bachilleres, COBACH, Institución de Educación Media Superior del Estado de Chihuahua.</td></tr>
<tr><td>Juan</td><td>Actual pareja de la mujer entrevistada. </td></tr>

</table>
<br>
<br />
<p>
1. ¿Podría indicar la Colonia donde reside?<br> 
   <b>R= En punta oriente</b><br><br>

2. ¿Cuál es su edad?<br> 
   <b>R= 18 años </b><br><br>

3. ¿Cuál fue su último grado de estudio?<br> 
   <b>R= 1er semestre de prepa.</b><br><br>

4. ¿Cuál fue el motivo de que abandonara sus estudios?<br> 
   <b>R= Pues mira, yo ya tenía un bebé, me embarace justo antes de entrar al bachi, cuando tenía como 13 años, y lo tuve a los 14, después de eso entre al bachi pero enserio era bien pesado, el niño y luego la escuela, la tarea y todas esas cosas latosas, nunca he entendido porque te dejan tarea, las clases deberían ser suficientes ¿no?.
Entonces, el papá de mi primer bebé desapareció, yo no sabía nada de él, pero conocí a Juan, él era mayor que yo 10 años, yo tenía 15 y el 25. Me ayudaba con mi hijo y todo, pero bueno cuando ya tenía en el bachi como 2 meses me di cuenta que estaba embarazada de nuevo. Pues esta vez mi mamá reaccionó súper mal, me corrió de la casa con mi hijo, entonces me fui a vivir con Juan ¿estás de acuerdo que él era más estable? Tenía más dinero, pues empezamos a convivir, pero a partir de que me fui pues ya no regresé a la escuela porque tenía ahora aún más obligaciones, tenía que cuidar de mi hijo, embarazo y de mi esposo. 
Todos los días me levantaba a hacer desayuno, y ayudarle a irse a trabajar, después limpiaba la casa, cuidaba al bebé y luego ya tenía que hacer comida, y luego llegaba Juan de trabajar y luego tenía que lavar ropa ¡era mucho!, yo no alcanzaba a ir a la escuela.  
</b><br><br> 

5.	¿Conoce a alguna mujer de su entorno que también abandonó la educación Media Superior? y ¿Conoce cuáles fueron sus motivos?<br>
    <b>R= Si, sí conozco, pues yo creo todas las que vivimos en la cuadra, porque somos como de la misma edad y con hijos, creo que hay una que tiene 3 hijos, pero pues dejaron la escuela porque es más importante hacer las cosas de la casa.
    </b>
</p>
<br />
<br />
</article>

<article class="entrevista_8" id="entrevista30"> 
<h2>Entrevista 30</h2>
<div class="row"> 
 
</div>
<br />
<p><b>Ficha técnica: </b></p>

<p>Sujeto de sexo femenino, 20 años de edad, nivel socioeconómico bajo, bachiller trunco (cursó hasta quinto semestre), casada, empleada.</p>
<br/>
<p><b>Notas del diario de campo:</b></p>
<p>Se hace referencia a algunos términos coloquiales cuyo significado se presenta a continuación con la finalidad de entender el sentido del discurso:</p>
<br />
<style type="text/css">
.tftable {font-size:12px;color:#333333;width:100%;border-width: 1px;border-color: #729ea5;border-collapse: collapse;}
.tftable th {font-size:12px;background-color:#acc8cc;border-width: 1px;padding: 8px;border-style: solid;border-color: #729ea5;text-align:left;}
.tftable tr {background-color:#d4e3e5;}
.tftable td {font-size:12px;border-width: 1px;padding: 8px;border-style: solid;border-color: #729ea5;}
.tftable tr:hover {background-color:#ffffff;}
</style>
<table class="tftable" border="1">
<tr><th>Concepto</th><th>Significado</th></tr>
<tr><td>Bachi</td><td>Bachilleres, COBACH, Institución de Educación Media Superior del Estado de Chihuahua.</td></tr>
</table>
<br>
<br />
<p>
1. ¿Podría indicar la Colonia donde reside?<br> 
   <b>R= En punta oriente</b><br><br>

2. ¿Cuál es su edad?<br> 
   <b>R= 20 años </b><br><br>

3. ¿Cuál fue su último grado de estudio?<br> 
   <b>R= 5to semestre de prepa.</b><br><br>

4. ¿Cuál fue el motivo de que abandonara sus estudios?<br> 
   <b>R= Yo siempre me visualicé como una mujer realizada, con hijos y casada, yo quería eso para mí, pero lo quería ya. Mi novio y yo siempre estábamos viendo casas, y nos imaginábamos como sería nuestra vida juntos. En la casa me la pasaba persiguiendo a mi mamá para que me enseñara a hacer las cosas.
Entonces mi novio y yo jamás usamos un método anticonceptivo porque realmente queríamos un bebé ya, y la verdad duramos muchos, no nos cuidamos por aproximadamente 3 años 
</b><br><br> 
4.1 ¿Es decir, desde que se encontraban en tercero de secundaria no usaban algún método anticonceptivo? <br> 
   <b>R= Si más o menos desde ese momento empecé a tener relaciones sexuales con él, pero sin protección, cuando me embaracé estaba en quinto semestre del bachi, y a penas el primer mes que estuve embarazada, nos fuimos a vivir juntos, realmente la opinión de mis papás no me interesaba mucho, yo quería formar mi familia ya.</b><br><br> 
4.2 ¿Tienes problemas familiares? <br> 
   <b>R=La verdad no, no tengo ninguno, o tenía. Pero yo quería tener familia mi familia propia no ser parte de la familia de mis padres, entonces me fui a vivir con mi novio, rentamos una casa, para eso nos pusimos a trabajar los dos en una maquila. Y la verdad a mí me gustó más ser señora de casa que la escuela. </b><br><br> 

5.	¿Conoce a alguna mujer de su entorno que también abandonó la educación Media Superior? y ¿Conoce cuáles fueron sus motivos?<br>
    <b>R= Sí, mi comadre, nos embarazamos al mismo tiempo, íbamos a la misma escuela y ella es la madrina de mi hija y yo soy la madrina de su hijo. ¡Qué padre!.
    </b>
</p>
<br />
<br />
</article>
</section> <footer> 
<div class="Foot1">
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
					<p>Contacto: </p>
					<p><span class="icon-user"> MES. Dina Elizabeth Cortes Coss</span></p>
					<p><span class="icon-mail"> contacto.ely@gmail.com</span></p>
				</div>
				<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
					<a href="Reglamento.pdf" target="_blank"><span class="icon-open-book"> Terminos y Condiciones</span></a>
				</div>
			</div>
		</div>
	</footer>

	<script type="text/javascript" src="../../js/jquery-3.1.1.min.js"></script>
	<script type="text/javascript" src="../../js/bootstrap.min.js"></script>
	<script type="text/javascript" src="../../js/main.js"></script>
</body>
</html>