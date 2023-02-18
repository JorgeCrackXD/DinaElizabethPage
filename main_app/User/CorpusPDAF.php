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
							<li><a href="Aportaciones.php"><span class="icon-open-book"></span>Producción Cientifica</a></li>
							<li><a href="../logout.php"><span class="icon-log-out"></span>Cerrar Sesión</a></li>
						</ul>
					</div>
				</div>
			</nav>
		</header>
	</div>

	
<section> <article class="titulo"> 
<h1>CORPUS PDAF (Perspectivas docentes sobre desafiliación académica femenina)</h1>
</article> <article class="MSVD"> 
<hr class="division" size="4" color="#6914OF" />
<p class="pad-top">Este corpus contiene 4 entrevistas cuyo tópico se suscribe en perspectivas que tienen docentes trabajadoras del nivel medio superior y cuyas estudiantes se han desafiliado académicamente de éste nivel.<br>
</p>
<p class="pad-buttom">La investigación fue realizada en el estado de Chihuahua, México.</p>
<p class="pad-buttom">Las participantes tienen un perfil como el siguiente: personal académico y administrativo adscritos a institución que imparten programas de educación media superior de la Ciudad de Chihuahua en el Estado de Chihuahua, México.</p>
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
  

</div>
</article> 
<article class="entrevista_1" id="entrevista1"> 
<h2>Entrevista 01</h2>
<div class="row"> 
 
</div>
<br />
<p><b>Ficha técnica: </b></p>

<p>Sujeto de sexo femenino, 33 años de edad, casada, docente de plantel medio superior, imparte las materias de física, química y matemáticas.</p>
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
<tr><td>KFC</td><td>Cadena de restaurante Kentucky Fried Chicken</td></tr>
<tr><td>Wendy’s</td><td>Cadena de restaurantes especializada en hamburguesas. </td></tr>
</table>
<br>
<br />
<p>
1.- ¿Con cuanta frecuencia sus alumnas se ausentan de las materias que usted imparte?<br><br />
    <b>R= Son poco faltistas, casi no faltan. En mi experiencia en el bachilleres 21, son pocas las veces que se ausentan, es decir, de los 5 días de la semana faltan 1 o 2, pero para la materia se nota, o sea por ejemplo yo doy la materia los 5 días y normalmente no me falta nadie entonces esas niñas, que me toca identificar, son niñas que están dentro del plantel pero no entran. 
    </b><br><br/>
1.2. ¿Este número puede variar de un semestre a otro o diría que son bastante constantes?<br><br />
    <b>R= Si cambia. En el semestre agosto – diciembre es muy común toparse los alumnos faltistas pues son las alumnas que están más por obligación, si existe una situación que no les parece dejan de asistir a la materia, de entregar tareas; en el semestre de enero a junio ya se hace un filtro de esos alumnos, es muy poco probable que algún alumno sea malo en todas las materias, pero en el caso de que un alumno fuera malo en todas las materias normalmente no regresan a las clases. 
    Es muy notorio quienes son las alumnas que no regresarán en enero, pues cuentan con actitudes que demuestran su desinterés por las materias, cuando llega el cambio de semestre y por ejemplo se fueron 5 hombres y 1 mujer lo mas normal es que los hombres retomen sus estudios mientras que la mujer rara vez regresa al mismo plantel a continuar con sus estudios. 
    </b><br><br/>
2.- ¿En qué momento nota que la alumna ha dejado de asistir a la clase, es decir, que ella no regresará a la Institución Académica?<br><br />  
<b>R= Normalmente a mí me ha pasado son varios días de inasistencia, por lo menos una semana, y cuando le preguntas a los compañeros ellos dicen “ya no quiere”, situación que se ha normalizado mucho por los compañeros, pues ellos asumen que es normal y si ya no quiere regresar pues no hay nada que se pueda hacer por su compañera.
 Por ejemplo, en el caso del plantel cuatro, donde también soy docente, las alumnas que deciden dejar la escuela normalmente buscan apoyo para continuar, ya sea en maestros, administrativos o sus mismos compañeros, mientras que en el plantel 21 lo normal es que ellas se vallan a buscar la manera de generar un ingreso para su casa, las que si salen embarazadas normalmente si siguen estudiando. 
</b><br><br/>
3.- ¿Normalmente tiene contacto con las mujeres que han abandonado la escuela?<br><br />
<b>R= Si, hay una niña en el plantel ella se sentía incapacitada para estudiar el programa educativo, es decir, sentía que no contaba con las capacidades para concluir el bachilleres, y causo baja en 3er semestre y hace poco me agregó a Facebook y haí noté que trabaja en un Wendy’s. 
</b><br><br/>
4.- ¿Conoce los motivos por los cuales deciden desafiliarse del programa educativo?<br><br />
<b>R= Este semestre tuve una niña que de plano no le interesa la escuela, pero con una modificación al reglamento se salvó, pero ella no tiene interés en concluir la escuela; pero lo mas normal es que tengan problemas económicos en su casa, la verdad la mayoría de los alumnos son de recursos bajos, de hecho, en esta situación han dejado la escuela para ponerse a trabajar, o es normal que me pidan permisos para no asistir a la clase virtual porque se interpone con su horario laboral. 
</b><br><br/>
5.- ¿La institución educativa cuenta con apoyos para que estas mujeres regresen a la escuela? ¿En qué consisten?<br><br />
<b>R= No sé si apoyo como incentivos, pero el departamento de orientación es muy bueno, dan seguimientos, buscan mediar entre los docentes y el padre de familia, siempre están buscando ayudar a los alumnos; por ahí no tienen pretexto si es una carencia económica o familiar siempre hay apoyo incluso al inicio de este semestre se apadrino a algunos alumnos por ejemplo los maestros apoyaban un niño para ayudarlo para continuar con sus estudios durante la pandemia.  
</b><br><br/>
6.- ¿Qué apoyos considera usted que serían de utilidad para que las mujeres no se desafilien del programa educativo que es impartido en la institución donde usted se desempeña actualmente?<br><br /> 
<b>R= Yo creo que primero que nada la información, o sea abrirles el panorama. Su entorno su contexto próximo está muy arraigado en un estilo de vida donde no es necesario superarse por ejemplo pueden cortar el pelo o atender la tiendita y ya la hice, o sea no quieren o no necesitan más, a lo mejor si tuvieran contacto con otras personas, que conocieran que hay interactivas.
Por ejemplo, la niña que sale embarazada, que sepa que no por eso se tiene que dedicar a su casa que sepa que hay apoyo que le puedan ayudar. Yo la verdad creo que el apoyo económico no es suficiente, pero más que nada el cambio de mentalidad. 
Normalmente ese conformismo que tienen las niñas de “mientras me caso”, hay un montón de niñas estudiando en lo que se encuentran un abogado un esto o aquello en lo que se casan para mejorar la condición de vida. 
</b><br><br/>
7.- ¿Conoce la opinión de otras alumnas sobre las mujeres que se han desafiliado?<br><br />
<b>R= En ese sentido te puedo decir que las niñas se apoyan mucho, no me ha tocado que, de las alumnas que yo he atendido, que hagan comentarios despectivos. Algunas incluso son muy feministas buscan siempre el apoyar, obvio tienen sus ataques de niñas de secundarias. Pero por ejemplo en las redes sociales están muy activas en el tema de “no juzgues, notas esa situación”. Por ejemplo, de lo que puedo ver si tú te das cuenta que una niña causó baja ella sigue teniendo contactos con sus compañeras de clase del bachilleres, no fue un detonante para que terminara su amistad, claro todavía están chicas. 
</b><br><br/>
8.- ¿Recuerda algún caso particular de alguna mujer que abandonó el programa académico?<br><br /> 
<b>R= Había una niña, hace como 2 o 3 años ella batallaba mucho con la materia, y en general con la escuela, ella causó baja en 5to semestre entonces pues si fue como que, pobre no, y después entró a trabajar en el KFC, y ella no regresó en el siguiente semestre, no sé si terminó en escuela particular, pero su vida es muy confusa en redes sociales. 
Yo a ella la conocí cuando estaba en segundo semestre, pero ella no quería estar ahí, ella quería estar en CEDART, pero sus papás no la dejaban entonces ella buscaba darce de baja, en 2 semestre causó la primera baja y regresó al plantel en 5to semestre. 
También una amiga de ella, ella era apática, no le interesaba mucho, la segunda vez que volvió a entrar si le vi un poquito más de ganas, pero no fueron suficientes. 
</b><br><br/>
9.- ¿Ha tenido contacto con alguna exalumna que se hubiera desafiliado prematuramente del programa académico? ¿Cuál fue la situación que enfrentó una vez que tomó esa decisión?<br><br /> 
<b>R= Por ejemplo estas niñas del wendys y del KFC, de alguna manera estoy segura que ellas tenían visualizado otro desarrollo en su vida, pero pues terminaron trabajando ahí debido a que no tenían la manera de conseguir un trabajo. 
</b><br><br/>
10.-¿Que tipos de cambios se deberían de hacer, ya sea en la institución educativo o como combatiría esto de la desafiliación académica?<br><br /> 
<b>R= Pues con una situación integral, necesitan diferentes incentivos, el caso es que lo que más te abre el panorama es compartir experiencias con otras, darte cuenta que el mundo no es igual para todo. Crear situaciones para todos, explicándoles que existen los servicios del estado, dándose cuenta mediante talleres que las situaciones de vida pueden ser muy similares y que se han afrontado de otra manera por otras mujeres. 
Aprender a ver desde otra perspectiva la misma situación, con pláticas para conocer que se puede conseguir, que no es un sueño el que estudies una carrera o no es muy lejano ser abogada, por ejemplo, y ver esas historias de éxito de mujeres para que vean las posibilidades y que es posible.
Talleres para que aprendan cosas que les ayuden a ser más independientes que no se le cierre el mundo pensando que necesitan un marido, ser consciente de que puedes ser independientes. Tal vez talleres de grupo para conocer otras situaciones y incluso esos talleres que ayuden a las mujeres a superarse, grupos de apoyo para mujeres, con el objetivo de explicar que las situaciones no deben de ser naturalizadas.
</b><br><br/>
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

<p>Sujeto de sexo femenino, 29 años de edad, casada, docente de plantel medio superior, imparte las materias de geografía, química e inglés.</p>
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
<tr><td>Super</td><td>Tienda minorista de abarrotes.</td></tr>
</table>
<br>
<br />
<p>
 1.- ¿Con cuanta frecuencia sus alumnas se ausentan de las materias que usted imparte? <br><br />
<b>R= Es muy frecuente, si se tienen clases 5 veces a las semanas las alumnas faltarían de 1 a dos veces por semana. 
</b><br><br/>
1.2 ¿Este número puede variar de un semestre a otro o diría que son bastante constantes? <br><br />
<b>R= Si varía, es más común que no falten en el semestre agosto diciembre que en el de enero junio´.
</b><br><br/>
1.3 ¿Conoce los motivos que las lleva a no asistir a clase?<br><br />
<b>R= Normalmente ellas faltan porque tienen un problema en su entorno familiar, o un problema económico y que por ese motivo no puedan costear la ida a la escuela y el tercer es que existe una alta tasa de embarazo adolescente, con ese orden de importancia. 
</b><br><br/>
2.- ¿En qué momento nota que la alumna ha dejado de asistir a la clase, es decir, que ella no regresará a la Institución Académica?<br><br /> 
<b>R= Llevamos un control de faltas de asistencia diaria, al momento que la alumna cuenta con tres faltas seguidas la directora se hace cargo de ir a la casa de la alumna. Normalmente la visita se desarrolla de una manera armoniosa, con la muchacha diciendo que regresará a la escuela, pero lo normal es que no pase.
</b><br><br/>
2.1 ¿Regresan a visitarla en otra ocasión?<br><br />
<b>R= No, solo se hace una visita donde se trata de mediar la situación y ofrecer apoyos para que regrese a estudiar, pero normalmente no regresan. Yo pienso que cuando han tomado la decisión de irse de la escuela es muy complicado hacerlas cambiar de opinión.  
</b><br><br/>
3.- ¿Normalmente tiene contacto con las mujeres que han abandonado la escuela? <br><br />
<b>R= No, normalmente cuando una alumna se desafilia de la institución es raro volverlas a ver
</b><br><br/>
4.- ¿Conoce los motivos por los cuales deciden desafiliarse del programa educativo? <br><br />
<b>R= Hemos notado que existen tres motivos por los cuales las alumnas deciden abandonar sus estudios, la primera son los problemas familiares que ellas presentan en sus hogares, lo segundo son los problemas económicos lo que les impide poder llegar a la institución o pagar la colegiatura de la misma, en tercer lugar, tenemos el embarazo, cuando una alumna resulta embarazada ellas deciden desafiliarse para cuidar a su bebé. Es más normal que se desafilien durante los primeros meses de embarazo, 3 o 4 meses.
</b><br><br/>
5.- ¿La institución educativa cuenta con apoyos para que estas mujeres regresen a la escuela? ¿En qué consisten?<br><br /> 
<b>R= Si, la escuela cuenta, en caso de los problemas familiares se cuenta con ayuda psicológica en una institución estatal, para los problemas económicos se les da la facilidad, un crédito por así llamarlo para de alguna manera continuar asistiendo a clase y en el caso del embarazo se habla con la familia por si existe la posibilidad de que apoyen a la futura madre mientras esta termina sus estudios. Sin embargo, estos apoyos raramente son utilizados
</b><br><br/>
6.- ¿Qué apoyos considera usted que serían de utilidad para que las mujeres no se desafilien del programa educativo que es impartido en la institución donde usted se desempeña actualmente? <br><br />
<b>R= Concientizar a los jóvenes de la importancia del estudio para su futuro y como este le abrirá más puertas en el ámbito laboral
</b><br><br/>
7.- ¿Conoce la opinión de otras alumnas sobre las mujeres que se han desafiliado?<br><br />
<b>R= Realmente es raro que las alumnas comenten sobre alumnas que hayan abandonado la escuela
</b><br><br/>
8.- ¿Recuerda algún caso particular de alguna mujer que abandonó el programa académico? <br><br />
<b>R= Recuerdo el de una chica de segundo semestre que abandonó sus estudios porque su novio la embarazó, en este caso ambos alumnos abandonaron la escuela para trabajar en una zapatería, después se descubrió que el novio se fue y dejó a la chica sola con el bebé y la carga económica que éste representa.
</b><br><br/>
9.- ¿Ha tenido contacto con alguna exalumna que se hubiera desafiliado prematuramente del programa académico? Y en caso afirmativo ¿Cuál fue la situación que enfrentó una vez que tomó esa decisión? <br><br />
<b>R= No, la verdad no he tenido la oportunidad de volver a tener contacto con alguna de estas alumnas, de hecho, del tiempo antes de la pandemia, cuando podíamos salir libremente, nunca tuve la oportunidad de toparme con ellas en alguna parte. 
Ya vez que a veces va uno al super y ahí te topas a la gente, pero este no ha sido el caso con ninguna de las alumnas.
</b><br><br/>
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
<tr><td>Soda</td><td>Refresco gaseoso.</td></tr>
<tr><td>Burrito</td><td>Alimento compuesto de un tortilla de harina rellena de algún guisado.</td></tr>
<tr><td>Guardería</td><td>Espacio dedicado al cuidado de infantes. </td></tr>
</table>
<br>
<br />
<p>
1.- ¿Con cuanta frecuencia sus alumnas se ausentan de la escuela? <br> 
<b>R= La frecuencia que observamos en el plantel era del 70% de las alumnas, yo creo de acuerdo a su contexto, no se sentían tan motivadas, tenían problemas familiares o si no tenían dinero para ir a la escuela o para comprar los materiales. Era como una base no iban porque no iban a entregar el trabajo o igual mamá y papá trabajaban y no se cercioraban si iban o no a la escuela y ya se quedaban ellas en casa.
</b><br><br>
1.1 ¿Los papás no estaban muy presentes?<br> 
<b>R= Se daba mucho que no había mucha atención de los padres, la mayoría trabajaban en maquiladoras y si eran citados a la escuela no atendían el llamado, pues por los horarios de las maquiladoras ya que una falta era perder casi el 40% del sueldo; entonces los papás no estaban muy atentos a sus hijos por las jornadas largas de trabajo.
</b><br><br>
1.2 ¿Este número puede variar de un semestre a otro o diría que son bastante constantes?<br> 
<b>R= Sí yo notaba un poco más de ausentismo en el semestre enero – junio. Como que estaban un poco más motivados los que iniciaban en agosto y ya cuando iban al segundo o cuarto yo notaba poco más de ausentismo, como que perdían la motivación. 
</b><br><br>
2.- ¿En qué momento nota que la alumna ha dejado de asistir a la clase, es decir, que ella no regresará a la Institución Académica?<br>  
<b>R= Cuando dejaban de ir dos o tres días entonces del departamento de orientación les llamaban y decían que iban a ir y ya no llegaban, había veces que tenían que cuidar al hermano pequeño y ya por eso no iban, entonces como cuidaban hermanos ya no iban, ahí empezamos a detectar ya debido a las llamadas y no asistían y cuando iban a visitarlas y nos dábamos cuenta que tenían una situación económica complicada. 
En esos casos se trataba de buscar apoyo por ejemplo en la cafetería se les daba alimentos que consistían en un burrito y una soda, pero normalmente nomás duraban un semestre
Había muchas hijas de madres solteras y era donde más se veían afectadas pues cuidaban a la casa y a los hermanos, entonces se tenían que quedar haciendo labores domésticas y por ese motivo ya no llegaban a clase. 
</b><br><br>
3.- ¿Normalmente tiene contacto con las mujeres que han abandonado la escuela? <br> 
<b>R= Se les hacían más llamadas a ver que pasó o porque no había ido y ya después nos dábamos cuenta que eran laboralmente activas, ya no se volvían a hacer visitas, pero seguimientos sí, ahí te dabas cuenta que estaban trabajando, pero durante las llamadas se les daba la oportunidad de continuar la escuela, adaptando horarios, pero realmente nunca regresaban a las clases. 
</b><br><br>
4.- ¿Conoce los motivos por los cuales deciden desafiliarse del programa educativo? <br> 
<b>R= Problemas económicos, pues no contaban con útiles, materiales o dinero para pagar el trasporte.
Falta de atención de los padres, no había apoyo o motivación de las figuras paternas para seguir estudiando.
Comienzan con el tabaco y van buscando drogas muy fuertes También la drogadicción pues comienzan a tener más interés en estar en posibilidades de conseguir dinero para solventar sus gastos y pues eso las lleva a conocer otro tipo de personas que tienen el mismo interés en las drogas, normalmente cuando se encuentran en esta situación eso las aleja del entorno académico. 
Los cuidados domésticos como la casa, la limpieza, hacer comida y hermano menores la orientan a otro tipo de actividades que hacen que se demerite la educación académica. 
Embarazo adolescente yo creo era el primer factor, a pesar de eso llegábamos a un acuerdo para continuar, pero ellas decidían ya no regresar sobre todo cuando nacía el bebé por los cuidados pues la escuela no contaba con una guardería aparte la mamá tenía que trabajar. 
</b><br><br>
5.- ¿La institución educativa cuenta con apoyos para que estas mujeres regresen a la escuela? ¿En qué consisten? <br> 
<b>R= Fíjate que era parte del departamento de orientación, se buscaban becas o maneras de que regresen.
Por ejemplo, las becas de gobierno, se les pasaba la información o la beca con la cafetería que les daban su burrito y su soda para que siguieran estudiando.
Esa beca fue mucho apoyo porque a veces no llevaban más que lo del camión y pues de esa manera pues ya podían comer algo dentro del plantel. 
También en la colegiatura al momento de inscribirse si había mucha necesidad se les hacia un descuento del 100%, se le hacia una entrevista y se aplica un estudio socioeconómico para conocer los ingresos y egresos, si veíamos que eran más egresos pues se le ayudaba con un porcentaje de beca, esta beca iba del 60 al 100%.
</b><br><br>
6.- ¿Qué apoyos considera usted que serían de utilidad para que las mujeres no se desafilien del programa educativo que es impartido en la institución donde usted se desempeña actualmente? <br> 
<b>R= Yo diría que una beca económica que se gestionara y un programa que nos tocó implementar “como ser el mejor amigo de mi hija adolescente” donde uno de los padres acudía los sábados para poder trabajar en conjunto, docentes, alumna y papá yo creo que esa parte sería muy importante pues teníamos 600 alumnos y solo llegaban 10 papás, pues aquí ya se veía el impacto que los papás no se involucran en la educación de los hijos
Mucha motivación al joven, por ejemplo, en el caso de las mujeres adolescentes contaran con una guardería dentro del plantel para que pudieran tener un espacio para sus hijos para que ella los pudiera apoyar. 
</b><br><br>
7.- ¿Conoce la opinión de otras alumnas sobre las mujeres que se han desafiliado?<br> 
<b>R= Si se escuchaba en los pasillos, “hay no quiso porque se fue a trabajar” o “ya no quiere” pero muchas veces se escuchaban críticas, pero como íbamos a la visita nos dábamos cuenta o siempre se le etiquetaba de embarazada siendo que estaba en otra situación. 
</b><br><br>
8.- ¿Recuerda algún caso particular de alguna mujer que abandonó el programa académico? <br> 
<b>R= Si me tocó presencial con una alumna en su casa había violencia familiar y en una de las ocasiones llegó llorando al departamento pues el papá había golpeado a la mamá y ella tenía que proteger a la mamá y a los hermanos y ella llamaba a la policía motivo por lo cual ella se culpaba. Ella llego sangrando a la escuela pues había brincado la barda porque el papá quería explotar la casa y ella brinca la barda y llega a la escuela a solicitar apoyo y pues nos llamó mucho la atención pues iba con sangre y raspada, ella no sabía cómo la había brincado y le dimos atención médica y se le canalizó a psicología a un departamento que apoya violencia familiar en chihuahua, lo bueno es que si terminó la escuela porque la acompañamos todo el proceso, pero toda la escuela apoyó, docentes, administrativos y pues siempre estuvimos muy al pendiente de ella. A ella la recuerdo mucho porque ella sentía mucha seguridad en el plantel.  
</b><br><br>
9.- ¿Ha tenido contacto con alguna exalumna que se hubiera desafiliado prematuramente del programa académico? ¿Cuál fue la situación que enfrentó una vez que tomó esa decisión? <br> 
<b>R= Si me las he topado en los centros comerciales a algunas me da mucho gusto porque algunas si siguieron estudiando, pero también hay tristeza cuando ya se las topa uno con dos hijos. Pero me he topado de las dos, quienes interrumpieron la escuela para hacer su propia familia
Pero de cualquier forma me da mucho gusto verlas a las dos.
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

<p>Sujeto de sexo femenino, 35 años de edad, soltera, docente de plantel medio superior, imparte las materias de física e inglés.
</p>
<br/>

<br />

<p>
1.- ¿Con cuanta frecuencia sus alumnas se ausentan de las materias que usted imparte? ¿Este número puede variar de un semestre a otro o diría que son bastante constantes?<br>  
<b>R= Bueno en las materias que yo imparto, hago la aclaración, son secuencias en una de ellas tengo 3 horas por semana y en la otra 5 por semana y yo noto que mis alumnas se ausentan de 1 a dos veces por semana.
</b><br><br>
1.2 ¿Considera que es un ausentismo alto?<br> 
<b>R= Me parece que es un ausentismo alto, en el caso de 5 horas por semanas considero que 1 hora no tiene tanto impacto como en una materia de mayor carga horario, pero si a eso le sumas que normalmente las mismas alumnas faltan todas las semanas pues ahí se hace un rezago en la materia aparte que se requiere 20% para poder presentar el examen final ordinario.
</b><br><br>
1.3 ¿Qué tan alto es la incidencia de Reprobación?<br> 
<b>R= Varía mucho según la materia, en las materias de físicas tengo un 5% de reprobación y en las materias de inglés si sube bastante a un 20%.
</b><br><br>
1.4 ¿A qué se debe que el índice de reprobación sea más alto en la materia de inglés? <br> 
<b>R= Yo se lo atribuyo al turno vespertino, en el turno matutino siempre, siempre tienen una respuesta más comprometida, yo imparto inglés en la tarde y noto más ausentismo.
</b><br><br>
2.- ¿En qué momento nota que la alumna ha dejado de asistir a la clase, es decir, que ella no regresará a la Institución Académica? <br> 
<b>R= Bueno nosotros cuando percibimos que una alumna está faltando primero reportamos a orientación ya ellos se encargan de hacer las llamadas para ver si hay una situación en especial y ya cuando nos enteramos que no va a volver es porque ya se dio todo el proceso y nos avisa la dirección.
</b><br><br>
2.1 ¿Qué tan frecuente se da este fenómeno?<br> 
<b>R= Una vez al semestre uno en cada turno.
</b><br><br>
3.- ¿Normalmente tiene contacto con las mujeres que han abandonado la escuela? <br> 
<b>R= No realmente no, a veces me las he topado casualmente pero no tengo un contacto como tal
</b><br><br>
4.- ¿Conoce los motivos por los cuales deciden desafiliarse del programa educativo? <br> 
<b>R= Si pues en general son chicas que reportan, que tienen una relación de pareja y a lo mejor se van a ir con el novio o algunas se les dificulta porque son las que atienden su hogar ya que los padres trabajan 
</b><br><br>
4.1 ¿Cuál de esos motivos es el más frecuente?<br> 
<b>R= Mas frecuente es la relación de pareja.
</b><br><br>
4.2 ¿En qué semestres se da esta situación?<br> 
<b>R= En cualquier semestre no es un semestre en específico. Lo normal es que exista un desinterés al momento de tener pareja
Si se observa cuando tienen novio y comienza a descuidar sus estudios, he tenido alumnas brillantes o comprometidas y si se observa que dejan de cumplir con sus obligaciones, podría ser porque le están dedicando más tiempo a la pareja. 
</b><br><br>
5.- ¿La institución educativa cuenta con apoyos para que estas mujeres regresen a la escuela? ¿En qué consisten? <br> 
<b>R= Pues no, un apoyo un apoyo para las jóvenes solo tenemos a disposición por parte de orientación.
</b><br><br>
5.1 ¿Conoce a qué nivel socioeconómico pertenecen sus alumnas?<br> 
<b>R= Se observa muy bajo más bien en turno vespertino, no sabemos porque sucede este fenómeno a pesar de que se colocan de manera aleatorio, son chicas que frecuentemente batallan por el dinero para pagar el transporte para ir a la escuela, en turno de la mañana si hay un nivel socioeconómico bajo, pero no tan crítico, a veces no tienen la capacidad económica para materiales y libro de texto. 
El plantel cuenta con una biblioteca con textos de cada materia, pero no son los libros de la materia.
</b><br><br>
6.- ¿Qué apoyos considera usted que serían de utilidad para que las mujeres no se desafilien del programa educativo que es impartido en la institución donde usted se desempeña actualmente?<br> 
<b>R= Pues yo he observado que se desafilian casi siempre las que tienen una necesidad de apoyo psicológico y tal vez quizás terapéutica y eso es algo que el plantel no dispone, a nivel central se cuenta con el servicio pero es muy poca la capacidad para tender a los jóvenes ya que hablamos de muchos planteles y es una sola persona la que atiende, creo yo que ese apoyo sería de mucha utilidad.
Hay algunos apoyos que se tramitan como becas alimenticias, apoyo para libros, en los casos de situación económica complicada, pero es raro que el alumno lo solicite. 
 </b><br><br>
7.- ¿Conoce la opinión de otras alumnas sobre las mujeres que se han desafiliado?<br> 
<b>R= Si hay comentarios, en el caso de las jóvenes que me ha tocado ver que se van por una relación con el novio si he escuchado como “pues si ya se veía que se quería ir con el novio” o “yo creo que tiene hijos” pero no siempre, he tenido jóvenes que un día ya no regresan, en ese caso más que comentarios se ve como que no se esperaban que eso iba a suceder. 
Y generalmente son chicas muy serias y entonces es inesperado.
</b><br><br>
8.- ¿Recuerda algún caso particular de alguna mujer que abandonó el programa académico? <br> 
<b>R= Si tengo el caso de una alumna que de hecho ella desde que llegó a primer semestre, como estos casos que desde primero se notaba que podría irse antes de tiempo, llego a tercero y ahí reprobó materias y fue dada de baja un semestre y luego regreso embarazada y se volvió a ir y luego en 5to regresó pero se volvió a ir porque el papá de su bebé se suicidó y ella entro en depresión. Ella vivía con el muchacho.
</b><br><br>
9.- ¿Ha tenido contacto con alguna exalumna que se hubiera desafiliado prematuramente del programa académico? ¿Cuál fue la situación que enfrentó una vez que tomó esa decisión? <br> 
<b>R= No sinceramente, no tengo contacto con las chicas que no continúan. En ocasiones si nos comparten profes que llegan a saber o el mismo departamento de orientación, pues a veces los alumnos regresan a saludar y comparten que están en el sistema abierto. Pero solo sabemos de los que ingresan al sistema abierto, si esto no sucede pues no volvemos a saber de ellos. 
</b><br><br>
10. ¿Le gustaría agregar algo más?<br> 
<b>R= Antes de entrar al plantel estuve en una secundaria pública federal, yo impartía la misma materia y les ponía ejemplos en trayectorias, y recuerdo mucho que todos mis grupos les mencioné un ejemplo ubicándolos en la glorieta de Pancho Villa y los chicos no la ubicaban, ellos no salen de su colonia, ellos solo conocían su colonia de Bodega Aurrera hacia su colonia, a lo mucho Soriana Fuentes Mares, pero parecía que ir a ese lugar era todo un evento. 
También escuché a una maestra en una ocasión que fueron a hacerle publicidad al plantel y ella hizo la misma observación que notaba que los jóvenes no salían de su colonia, porque ella está pegada, como que toda su infancia no sale de ahí, y llegan a irse a la maquila a trabajar pues ya nunca jamás salieron de su colonia. 
</b><br><br>
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