-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Versión del servidor:         5.6.16 - MySQL Community Server (GPL)
-- SO del servidor:              Win32
-- HeidiSQL Versión:             8.3.0.4694
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Volcando estructura de base de datos para proyectoeventos
CREATE DATABASE IF NOT EXISTS `proyectoeventos` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `proyectoeventos`;


-- Volcando estructura para tabla proyectoeventos.categorias
CREATE TABLE IF NOT EXISTS `categorias` (
  `idcategoria` int(11) NOT NULL AUTO_INCREMENT,
  `categoria` varchar(15) NOT NULL,
  PRIMARY KEY (`idcategoria`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla proyectoeventos.categorias: ~8 rows (aproximadamente)
/*!40000 ALTER TABLE `categorias` DISABLE KEYS */;
INSERT INTO `categorias` (`idcategoria`, `categoria`) VALUES
	(1, 'Sports'),
	(2, 'Cultural'),
	(3, 'Music'),
	(4, 'Promotions'),
	(5, 'Academic'),
	(6, 'Fashion'),
	(7, 'Social'),
	(8, 'Other');
/*!40000 ALTER TABLE `categorias` ENABLE KEYS */;


-- Volcando estructura para tabla proyectoeventos.comentarios
CREATE TABLE IF NOT EXISTS `comentarios` (
  `idcomentario` int(11) NOT NULL AUTO_INCREMENT,
  `fecha` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `comentario` varchar(300) NOT NULL,
  `idusuario` int(11) NOT NULL,
  `idevento` int(11) NOT NULL,
  PRIMARY KEY (`idcomentario`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla proyectoeventos.comentarios: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `comentarios` DISABLE KEYS */;
/*!40000 ALTER TABLE `comentarios` ENABLE KEYS */;


-- Volcando estructura para tabla proyectoeventos.configuracion
CREATE TABLE IF NOT EXISTS `configuracion` (
  `srcSlide1` varchar(50) DEFAULT NULL,
  `srcSlide2` varchar(50) DEFAULT NULL,
  `srcSlide3` varchar(50) DEFAULT NULL,
  `nombrePagina` varchar(50) DEFAULT NULL,
  `srcLogo` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla proyectoeventos.configuracion: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `configuracion` DISABLE KEYS */;
/*!40000 ALTER TABLE `configuracion` ENABLE KEYS */;


-- Volcando estructura para tabla proyectoeventos.estadisticas
CREATE TABLE IF NOT EXISTS `estadisticas` (
  `idestadisticas` int(11) NOT NULL AUTO_INCREMENT,
  `numvisitas` int(11) NOT NULL,
  `asistencias` int(11) NOT NULL,
  `valoración` int(11) NOT NULL,
  PRIMARY KEY (`idestadisticas`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla proyectoeventos.estadisticas: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `estadisticas` DISABLE KEYS */;
/*!40000 ALTER TABLE `estadisticas` ENABLE KEYS */;


-- Volcando estructura para tabla proyectoeventos.eventos
CREATE TABLE IF NOT EXISTS `eventos` (
  `ideventos` int(11) NOT NULL AUTO_INCREMENT,
  `nombrevento` varchar(50) NOT NULL,
  `fechainicio` date NOT NULL,
  `fechafin` date NOT NULL,
  `horainicio` time NOT NULL,
  `horafin` time NOT NULL,
  `descripcion` varchar(500) NOT NULL,
  `localizacion` varchar(100) NOT NULL,
  `altura` int(11) NOT NULL,
  `latitud` int(11) NOT NULL,
  `precio` int(11) NOT NULL,
  `imagenPrp` varchar(50) DEFAULT NULL,
  `descripcionCorta` varchar(50) DEFAULT NULL,
  `idCategoria` int(11) DEFAULT NULL,
  PRIMARY KEY (`ideventos`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla proyectoeventos.eventos: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `eventos` DISABLE KEYS */;
/*!40000 ALTER TABLE `eventos` ENABLE KEYS */;


-- Volcando estructura para tabla proyectoeventos.noticias
CREATE TABLE IF NOT EXISTS `noticias` (
  `idNoticia` int(11) NOT NULL AUTO_INCREMENT,
  `Titulo` varchar(50) DEFAULT '0',
  `Link` varchar(100) DEFAULT '0',
  `Contenido` varchar(1500) DEFAULT '0',
  PRIMARY KEY (`idNoticia`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla proyectoeventos.noticias: ~15 rows (aproximadamente)
/*!40000 ALTER TABLE `noticias` DISABLE KEYS */;
INSERT INTO `noticias` (`idNoticia`, `Titulo`, `Link`, `Contenido`) VALUES
	(1, 'Las obras de \\"religiÃ³n y muerte\\" de Tim Vermeul', 'http://www.20minutos.com/noticia/12332/0/tim-vermeulen/artista-nueva-york/pintura-funeraria/', '<p>ÃNXEL GROVE</p> <ul><li>Los cuadros del pintor estadounidense que expone en Nueva York mezclan experiencias personales con referencias literarias.</li><li>Su obra es una respuesta visceral y a menudo paradÃ³jica al \\"estricto calvinismo\\" en el que fue educado por su padre, dueÃ±o de una empresa funeraria.</li><li>Vermeulen pinta escenas simbÃ³licas en las que inserta personajes perdidos o en situaciones irracionales.</li></ul><p><img src=\\"http://estaticos.20minutos.com/img2/recortes/2014/04/08/17947-620-282.jpg\\" width=\\"620\\" height=\\"282\\" alt=\\"The Hell Realm\\" /></p><p>Que el pintor <a href=\\"http://www.timothyvermeulen.com\\" target=\\"_blank\\">Tim Vermeulen</a> (1960) enmarque sus cuadros con molduras de <a href=\\"http://es.wikipedia.org/wiki/Pan_de_oro\\" target=\\"_blank\\">pan de oro</a> no es una capricho de artista. <strong>\\"Quiero que parezcan piezas de un altar\\"</strong>, dice este admirador confeso de los maestros flamencos y el arte religioso que creciÃ³ en la funeraria paterna y sufriÃ³ una educaciÃ³n basada en el \\"estricto calvinismo\\" que predica la depravaciÃ³n total de la raza humana tras la caÃ­da de AdÃ¡n y la imposibilidad de salvaciÃ³n individual, ya que somos incapaces de creer en dios por nosotros mismos.</p><p>En uno de los cuadros de Vermeulen,Â <a href=\\"http://www.timothyvermeulen.com/portfolio/TheRealmsofExistence/TheAnimalRealm.html\\" target=\\"_blank\\"><em>The Animal Realm</em></a> (<em>El reino animal</em>), dos perros fornican mientras un'),
	(2, 'Chiwetel Ejiofor, de \\\'12 years a slave\\\', podrÃ­a', 'http://www.20minutos.com/noticia/12300/0/chiwetel-ejifor/villano/nueva-james-bond/', '<p>EP</p> <ul><li>El protagonista de la oscarizada pelÃ­cula suena con fuerza para el proyecto.</li><li>Daniel Craig se meterÃ¡ en la piel, por cuarta vez, al agente secreto 007.</li><li>Sam Mendes volverÃ¡ a ponerse detrÃ¡s de la cÃ¡mara.</li></ul><p><img src=\\"http://estaticos.20minutos.com/img2/recortes/2014/04/07/17921-620-282.jpg\\" width=\\"620\\" height=\\"282\\" alt=\\"El actor Chiwetel Ejiofor.\\" /></p><p>Chiwetel Ejiofor, el actor que dio vida a Solomon Northup en la oscarizada <em>12 years a slave</em>, suena<strong> como uno de los firmes candidatos</strong> para dar vida al nuevo enemigo del agente secreto mÃ¡s famoso del cine.<br /><br /><em>Bond 24</em> es el nombre provisional del nuevo largometraje de James Bond, en el que Daniel Craig darÃ¡ vida por cuarta vez a 007. <strong>Otros actores ya confirmados</strong> en el elenco de la pelÃ­cula son Ben Whishaw, Naomie Harris o Ralph Fiennes, que releva a Judi Dench en el papel de M.<br /><br />El actor Chiwetel Ejiofor comienza a ser uno de los favoritos para encarnar el villano de la nueva entrega, cuya fecha de estreno todavÃ­a se desconoce. Ejiofor es <strong>conocido por su interpretaciÃ³n en la pelÃ­cula <em>12 years a slave,</em></strong> que se alzÃ³ con cuatro premios Oscar en la ceremonia que tuvo lugar el 2 de marzo.<br /><br />A pesar del Ã©xito de taquilla de <em>Skyfall</em>, Sam Mendes habÃ­a rechazado la direcciÃ³n de la siguiente cinta del agente 007 y directores de la talla de Christopher Nolan ya se '),
	(3, 'El nuevo capÃ­tulo de la saga \\\'Star Wars VII\\\' ya', 'http://www.20minutos.com/noticia/12299/0/star-wars/filmando/reparto-completo/', '<p>EUROPA PRESS</p> <ul><li>Disney desleva que el reparto \\"pronto se darÃ¡ a conocer\\".</li><li>Han tenido algunos problemas con el guiÃ³n, que fue reescrito por J.J. Abrams.</li><li>Se estrenarÃ¡ el 18 de diciembre de 2015.</li></ul><p><img src=\\"http://estaticos.20minutos.com/img2/recortes/2014/04/07/17920-620-282.jpg\\" width=\\"620\\" height=\\"282\\" alt=\\"Star Wars\\" /></p><p><strong>Disney Studios</strong> ha revelado que el reparto para el nuevo capÃ­tulo de la saga <a title=\\"MÃ¡s noticias sobre Star Wars\\" href=\\"http://www.20minutos.com/minuteca/star-wars/\\"><em><strong>Star Wars</strong> </em></a>estÃ¡ casi completo e incluso algunas escenas <strong>ya se han comenzado a rodar.</strong></p><p>Alan F. Horn, presidente de Disney, revelÃ³ en una entrevista a<a title=\\"Noticia en Hollywood Reporter\\" href=\\"http://www.hollywoodreporter.com/news/disney-chief-reveals-star-wars-693950\\" target=\\"_blank\\"><em>The Hollywood Reporter</em></a> que el elenco de<em> Star Wars VII</em> <strong>estÃ¡ casi completo y se han empezado a rodar</strong> algunas partes de la pelÃ­cula.</p><p>Los seguidores de la saga han esperado impacientemente detalles sobre la prÃ³xima entrega sobre el universo ideado por George Lucas y Alan F. Horn, presidente de Walt Disney Studios, <strong>dio algunos datos</strong>, como por ejemplo que el reparto ya estÃ¡ casi completo.</p><p> \\"Estamos <strong>trabajando mucho en la puesta en escena y en el guiÃ³n</strong>\\" ha afirmado en la entrevista. Horn tam'),
	(4, 'Marvel tiene previsto un calendario de pelÃ­culas ', 'http://www.20minutos.com/noticia/12298/0/marvel-peliculas/hasta/2028/', '<p>EUROPA PRESS</p> <ul><li>El presidente de Marvel Studios ha asegurado que habrÃ¡ pelÃ­culas de superhÃ©roes de esta franquicia en los prÃ³ximos catorce aÃ±os, por lo menos.</li><li>\\"Las posibilidades son infinitas\\", afirma.</li><li>La clave estÃ¡ en <em>Guardianes de la Galaxia</em>: si tiene Ã©xito, es mÃ¡s que posible que cada uno de los protagonistas tenga su propia pelÃ­cula en solitario.</li></ul><p><img src=\\"http://estaticos.20minutos.com/img2/recortes/2014/04/07/17919-620-282.jpg\\" width=\\"620\\" height=\\"282\\" alt=\\"Â´Los VengadoresÂ´\\" /></p><p><strong>Catorce aÃ±os mÃ¡s de superhÃ©roes en la gran pantalla asegurados</strong>. Esto es lo que tiene pensado <a title=\\"MÃ¡s noticias sobre Marvel\\" href=\\"http://www.20minutos.com/minuteca/marvel\\" target=\\"_blank\\">Marvel </a>que tiene previsto estrenos de pelÃ­culas al menos hasta el aÃ±o 2028.</p><p>AsÃ­ lo revelÃ³ Kevin Feige, presidente de Marvel Studios, que en una entrevista con Bloomberg seÃ±alÃ³ que los planes de la productora, que acaba de lanzar la secuela de <em>CapitÃ¡n AmÃ©rica</em>, s<strong>on tan ambiciosos que tienen la vista puesta en la prÃ³xima dÃ©cada</strong>.</p><p> AsÃ­ lo constata, confiesa Feige, el mapa cronolÃ³gico de estrenos que tiene en su despacho y que, asegura,<strong> llega hasta el aÃ±o 2028</strong>. \\"<strong>Es como mirar por el telescopio Hubble</strong>. Te preguntas quÃ© estarÃ¡ pasando allÃ¡ fuera... casi puedo verlo\\", afirmÃ³ el presidente de Marvel Studios que tambiÃ©n o'),
	(5, 'Anuncian secuela de \\\'Los Goonies\\\' y remakes de \\', 'http://www.20minutos.com/noticia/12297/0/goonies/nueva-pelicula/richard-donner/', '<p>EUROPA PRESS</p> <ul><li>El director deÂ <em>Los Goonies</em>, Richard Donner, ya prepara la secuela de la pelÃ­cula de aventuras de los aÃ±os 80.</li><li>Warner tambiÃ©n se ha puesto manos a la obra para una nueva versiÃ³n de <em>Gremlins.</em></li><li>New Line Cinema, por su parte, quiere devolver al agente Mahoney y toda la pandilla de alocados policÃ­as a la gran pantalla.</li></ul><p><img src=\\"http://estaticos.20minutos.com/img2/recortes/2014/04/07/17917-620-282.jpg\\" width=\\"620\\" height=\\"282\\" alt=\\"Los Goonies\\" /></p><p><a title=\\"MÃ¡s sobre Los Goonies\\" href=\\"http://es.wikipedia.org/wiki/Los_Goonies\\" target=\\"_blank\\"><em>Los Goonies</em></a> la <strong>mÃ­tica cinta de aventuras juveniles</strong> de mediados de los ochenta, tendrÃ¡ secuela cinematogrÃ¡fica. AsÃ­ lo asegurÃ³ el que fue su director, <a title=\\"Ficha del director\\" href=\\"http://www.imdb.com/name/nm0001149/?ref_=fn_al_nm_1\\" target=\\"_blank\\">Richard Donner</a> que finalmente ha decidido resucitar el clÃ¡sico.</p><p> SegÃºn asegurÃ³ el propio Donner, siempre que se reunÃ­a con Steven Spielberg Â—guionista de la pelÃ­culaÂ— para intentar escribir una secuela deÂ <a title=\\"Trailer de Los Goonies\\" href=\\"https://www.youtube.com/watch?v=pWgc8Ute2tU\\" target=\\"_blank\\"><em>Los Goonies</em></a> acababan preguntÃ¡ndose \\"Â¿quÃ© estamos haciendo?\\" y desistÃ­an al comprobar que <strong>era imposible crear algo a la altura de la pelÃ­cula original</strong>. Y aunque la mayorÃ­a del reparto de la cin'),
	(6, 'Muere el veterano actor Mickey Rooney a los 93 aÃ±', 'http://www.20minutos.com/noticia/12291/0/muere-icono/actor-hollywood/mickey-rooney/', '<p>EFE</p> <ul><li>Se convirtiÃ³ en una estrella en los aÃ±os 30 y no parÃ³ de trabajar.</li><li>Rooney se casÃ³ en ocho ocasiones, la primera con Ava Gardner.</li></ul><p><img src=\\"http://estaticos.20minutos.com/img2/recortes/2014/04/07/17907-620-282.jpg\\" width=\\"620\\" height=\\"282\\" alt=\\"Mickey Rooney\\" /></p><p>El veterano actor <strong>Mickey Rooney</strong>, quien fuera una de las estrellas infantiles mÃ¡s famosas de la historia de Hollywood, <strong>ha fallecido</strong> este lunes por causas naturales a los 93 aÃ±os, segÃºn informÃ³ el portal de internet <em>TMZ</em>, que indicÃ³ que la salud del intÃ©rprete se habÃ­a deteriorado desde hacÃ­a tiempo.</p><p>Rooney <strong>rodÃ³ mÃ¡s de 200 largometrajes</strong> en una carrera que comenzÃ³ con seis aÃ±os con un pequeÃ±o papel en el filme mudo <em>Not to Be Trusted</em> (1926). En estos momentos trabajaba en el filme<em> El extraÃ±o caso del doctor Jekyll y Mr. Hyde</em>, segÃºn <em>The Hollywood Reporter</em>.</p><p>Tras conocerse su deceso, el director de <em>Noche en el museo 3</em>, Shawn Levy, confirmÃ³ que el nonagenario actor <strong>habÃ­a rodado algunas secuencias</strong> para esa secuela el mes pasado. \\"Una leyenda, obviamente, pero algo mÃ¡s: agradecido, gentil, vital y cÃ¡lido\\", dijo Levy en un tuit.</p><p>La Ãºltima pelÃ­cula que habÃ­a estrenado en la gran pantalla fue el thriller<strong> <em>The Woods</em> (2012)</strong>.</p><h2>SÃ³lo consiguiÃ³ estatuillas honorÃ­ficas</h2><p>Rooney fue <strong>can'),
	(7, 'CapitÃ¡n AmÃ©rica tiene un estreno con taquilla rÃ', 'http://www.20minutos.com/noticia/12287/0/capitan-america/estreno/taquilla-fin-semana/', '<p>ASSOCIATED PRESS</p> <ul><li>Es la cinta con mÃ¡s ingresos en un estreno en abril</li><li>DebutÃ³ con una recaudaciÃ³n de 96.2 millones de dÃ³lares.</li><li>La pelÃ­cula ha ganado 207,1 millones a nivel internacional.</li></ul><p><img src=\\"http://estaticos.20minutos.com/img2/recortes/2014/03/28/17581-620-282.jpg\\" width=\\"620\\" height=\\"282\\" alt=\\"Chris Evans como CapitÃ¡n AmÃ©rica\\" /></p><p>Es posible que <strong><a title=\\"Noticias sobre Disney\\" href=\\"http://www.20minutos.com/minuteca/disney/\\">Disney</a> y<a title=\\"Noticias sobre Marvel\\" href=\\"http://www.20minutos.com/minuteca/marvel/\\"> Marvel</a></strong> sean uno de los mejores equipos del momento.</p><p> Continuando con el Ã©xito de la franquicia de su superhÃ©roe,<strong><em> CapitÃ¡n AmÃ©rica y el Soldado del Invierno</em></strong> estableciÃ³ un rÃ©cord como la cinta estrenada en abril que mÃ¡s ingresos ha obtenido por taquilla en Estados Unidos y CanadÃ¡.</p><p>La continuaciÃ³n de la historia de los estudios Disney <strong>debutÃ³ con ingresos de 96,2 millones de dÃ³lares</strong>, superando la marca previa establecida en 2011 por <em>Fast Five</em>, en cuyo estreno obtuvo<strong> 86,2 millones de dÃ³lares.</strong></p><p>El fin de semana pasado<em> El Soldado del Invierno</em>, que estelariza Chris Evans como el superhÃ©roe con escudo protector, y Scarlett Johansson (cuya cinta de ciencia ficciÃ³n <em>Under the Skin</em> tambiÃ©n se estrenÃ³ este fin de semana con taquilla de 140.000 dÃ³lares) como la<s'),
	(8, 'Eugenio Derbez es elegido mejor actor en los Premi', 'http://www.20minutos.com/noticia/12273/0/eugenio-derbez/mejor-actor/premios-platino/', '<p>EFE</p> <ul><li>El mexicano ganÃ³ el premio a la mejor interpretaciÃ³n masculina por su papel en la pelÃ­cula \\\'No se aceptan devoluciones\\\'.</li><li>La primera ediciÃ³n de estos galardones se entregaron en la capital de PanamÃ¡.</li><li>Derbez estaba nominado con Ricardo DarÃ­n o Javier CÃ¡mara, entre otros.</li></ul><p><img src=\\"http://estaticos.20minutos.com/img2/recortes/2014/04/06/17888-620-282.jpg\\" width=\\"620\\" height=\\"282\\" alt=\\"Eugenio Derbez\\" /></p><p>El mexicano <a title=\\"MÃ¡s noticias sobre Eugenio Derbez\\" href=\\"http://www.20minutos.com/minuteca/eugenio-derbez\\" target=\\"_blank\\"><strong>Eugenio Derbez</strong></a> obtuvo este domingo el reconocimiento como mejor actor en los <strong>Premios Platino de Cine Iberoamericano.</strong></p><p>Derbez ganÃ³ el premio a la mejor interpretaciÃ³n masculina por su papel en la pelÃ­cula <strong><em>No se aceptan devoluciones</em></strong>, dirigida y escrita por Ã©l mismo.</p><p>La actriz espaÃ±ola Victoria Abril y el actor y empresario chileno Benjamin VicuÃ±a entregaron este premio al <strong>polifacÃ©tico artista mexicano.</strong></p><p>Derbez, con una extensa carrera en la televisiÃ³n mexicana, <strong>arrebatÃ³ el premio</strong> al mejor actor, a los espaÃ±oles Antonio de la Torre y Javier CÃ¡mara, el colombiano VÃ­ctor Prada y el argentino Ricardo DarÃ­n.</p><p>La primera ediciÃ³n de los Premios Platino del Cine Iberoamericano se celebran en el Teatro Anayansi de la capital de PanamÃ¡.</p><p>\\"Existe el Baf'),
	(9, 'Johnny Depp se convierte en un semidios tecnolÃ³gi', 'http://www.20minutos.com/noticia/12268/0/johnny-depp/semidios-tecnologico/transcendence/', '<p>ANTONIO MARTIN GUIRADO / EFE</p> <ul><li>Es la Ã³pera prima de Wally Pfister, el director de fotografÃ­a de Christopher Nolan.</li><li>El actor admite ser un \\\'tipo de la vieja escuela\\\'.</li><li>El filme serÃ¡ estrenado en el 18 de abril.</li></ul><p><img src=\\"http://estaticos.20minutos.com/img2/recortes/2013/06/21/7565-620-282.jpg\\" width=\\"620\\" height=\\"282\\" alt=\\"Johnny Depp\\" /></p><p>El actor estadounidense <a title=\\"MÃ¡s noticias sobre Johnny Depp\\" href=\\"http://www.20minutos.com/minuteca/johnny-depp/\\"><strong>Johnny Depp</strong></a>, que admite ser un \\\'tipo de la vieja escuela\\\', se convierte en un semidi0s tecnolÃ³gico en \\\'Transcendence\\\', la Ã³pera prima de Wally Pfister, el director de fotografÃ­a habitual de Christopher Nolan.<br /><br /> \\"<strong>Ocurren cosas malas</strong> entre la tecnologÃ­a y yo todo el tiempo\\", admitiÃ³ el actor de 50 aÃ±os durante la presentaciÃ³n del filme, de estreno en Estados Unidos el 18 de abril, en un hotel de Beverly Hills.<br /><br />\\"No estoy suficientemente familiarizado. Mi cerebro es de la vieja escuela. <strong>Soy un poco tonto para saber cÃ³mo funcionan</strong> (los aparatos). Cualquier cosa que tengo que emplear con mis pulgares durante un periodo de tiempo me hace sentir estÃºpido, asÃ­ que trato de evitarlo en la medida de lo posible\\", aÃ±adiÃ³ Depp.<br /><br />El intÃ©rprete <strong>encarna al doctor Will Caster,</strong> el principal investigador en el campo de la Inteligencia Artificial, que trabaja p'),
	(10, 'Dos dÃ©cadas del suicidio de Kurt Cobain: la muert', 'http://www.20minutos.com/noticia/12261/0/suicidio/kurt-cobain/20-anos/', '<p>EFE</p> <ul><li>Se cumplen 20 aÃ±os de la muerte de Kurt Cobain, lÃ­der de Nirvana.</li><li>EstÃ¡ considerado uno de los grandes precursores del grunge.</li><li>Su vida personal estuvo marcada por el drama familiar desde pequeÃ±o y por la depresiÃ³n, adicciÃ³n a las drogas y una fama que no querÃ­a ya de adulto.</li><li>FalleciÃ³ pegÃ¡ndose un tiro con una escopeta en su casa a los 27 aÃ±os de edad.</li><li>Vota: <a href=\\"http://listas.20minutos.es/lista/discografia-completa-y-canciones-perdidas-de-nirvana-369078/\\">Â¿CuÃ¡l fue el mejor trabajo de Nirvana?</a></li></ul><p><img src=\\"http://estaticos.20minutos.com/img2/recortes/2014/04/05/17874-620-282.jpg\\" width=\\"620\\" height=\\"282\\" alt=\\"Kurt Cobain\\" /></p><p>\\"Â¿Por quÃ© demonios no te has quedado?\\", gritÃ³ <strong>Courtney Love</strong> en el homenaje celebrado tras la muerte de su marido, el ya mÃ­tico <a title=\\"MÃ¡s noticias sobre Kurt Cobain\\" href=\\"http://www.20minutos.com/minuteca/kurt-cobain\\" target=\\"_blank\\">Kurt Cobain</a>, un hecho que golpeÃ³ al mundo de la mÃºsica hace 20 aÃ±os y que sigue planteando entre muchos de sus admiradores esa misma cuestiÃ³n.</p><p>Con motivo del <strong>aniversario de su fallecimiento</strong>, que se cumple este sÃ¡bado, han sido varias las iniciativas que intentan honrar con mÃ¡s o menos suerte la vida y obra de quien estÃ¡ considerado un icono y figura imprescindible de la mÃºsica de los aÃ±os 90 como gran adalid del grunge y del sentimiento desesperado de la \\\'generac'),
	(11, 'El ilustrador \\\'kitsch\\\' que inventÃ³ el \\"vestido', 'http://www.20minutos.com/noticia/12260/0/mark-ryden/kitsch/vestido-carne-lady-gaga/', '<p>ÃNXEL GROVE</p> <ul><li>El ilustrador de la ternura, la repulsiÃ³n y la nostalgia presenta una exposiciÃ³n de nuevos trabajos para inaugurar una enorme galerÃ­a en Los Ãngeles.</li><li>El \\\'padre\\\' del surrealismo pop vuelve a recrear con su depurada tÃ©cnica de dibujo el pasado de los EE UU cruzÃ¡ndolo con una reflexiÃ³n sobre el buen y el mal gusto.</li><li>Una muÃ±eca de porcelana vestida con filetes, Jesucristo sangrante en un velocÃ­pedo, un caballero atildado extrayendo gusanos bajo las faldas de una seÃ±orita...</li></ul><p><img src=\\"http://estaticos.20minutos.com/img2/recortes/2014/04/05/17873-620-282.jpg\\" width=\\"620\\" height=\\"282\\" alt=\\"Meat Dress, 2012\\" /></p><p>Las obras de <a href=\\"http://www.markryden.com/\\" target=\\"_blank\\">Mark Ryden</a> (OregÃ³n - EU, 1963), considerado el <em>padre</em> Â—segÃºn otros, el <em>abuelo</em>Â— del surrealismo pop o <em>lowbrow</em>, el arte visual de la costa occidental de los EU que, desde finales de los aÃ±os setenta, establece un canon de trabajo basado en el sarcasmo y la reinvenciÃ³n del <em>kitsch</em> (mal gusto), ya no pueden ser simplemente adscritas a un movimiento. Tierno, repulsivo, nostÃ¡lgico y <strong>dueÃ±o de una tÃ©cnica tan refinada como la de un gran maestro clÃ¡sico</strong> Â—admira y dice inspirarse en las pesadillas simbÃ³licas del Bosco y el luminoso neoclasicismo de <a href=\\"http://es.wikipedia.org/wiki/Jean-Auguste-Dominique_Ingres\\" target=\\"_blank\\">Ingres</a>Â—, Ryden estÃ¡ fuera de los'),
	(12, 'Los secretos de Ãºltima sesiÃ³n de fotos de Kurt C', 'http://www.20minutos.com/noticia/12252/0/secretos/ultima-foto/kurt-cobain/', '<p>EFE</p> <ul><li>Youri Lenquette expone en la capital francesa las imÃ¡genes de la sesiÃ³n a la que el cantante de Nirvana se sometiÃ³ con Ã©l.</li><li>El artista insistiÃ³ en posar con una pistola y en una imagen se apunta con ella.</li><li>Dos meses despuÃ©s, muriÃ³ en Seattle tras quitarse la vida de un tiro en la cabeza.</li><li>Dos dÃ©cadas de la muerte que sacudiÃ³ a toda una generaciÃ³n.</li></ul><p><img src=\\"http://estaticos.20minutos.com/img2/recortes/2014/04/05/17863-620-282.jpg\\" width=\\"620\\" height=\\"282\\" alt=\\"Kurt Cobain\\" /></p><p>Dos meses antes de pegarse un tiro en la cabeza en Seattle el 5 de abril de 1994, a los 27 aÃ±os, <a title=\\"MÃ¡s noticias sobre Kurt Cobain\\" href=\\"http://www.20minutos.com/minuteca/kurt-cobain\\" target=\\"_blank\\">Kurt Cobain</a> se sometiÃ³ en ParÃ­s a una Ãºltima y premonitoria sesiÃ³n de fotos en la que el lÃ­der del grupo Nirvana y sÃ­mbolo de su generaciÃ³n <strong>insistiÃ³ en posar apuntÃ¡ndose con una pistola en la sien.</strong></p><p>El fotÃ³grafo francÃ©s Youri Lenquette expone hasta el prÃ³ximo 21 de junio en la parisina galerÃ­a Addict la serie integral de esas imÃ¡genes malditas del mÃºsico que alumbrÃ³ el grunge en <em>The Last Shooting</em> (El Ãºltimo disparo).</p><p>\\"La pistola no era mÃ­a, la trajo Ã©l. Yo estaba tan centrado en sacar adelante la sesiÃ³n que en ningÃºn momento se me ocurriÃ³ preguntarle por quÃ© la tenÃ­a, <strong>ni de dÃ³nde la habÃ­a sacado</strong>. Porque supongo que no podrÃ­a viajar e'),
	(13, 'El grunge, veinte aÃ±os despuÃ©s de Kurt Cobain', 'http://www.20minutos.com/noticia/12233/0/kurt-cobain-cantante/grunge-aniversario-muerte/nirvana/', '<p>CLARA HERNÃNDEZ</p> <ul><li>Tras la muerte de Kurt Cobain, el gÃ©nero ha vuelto poco a poco al lugar donde naciÃ³: el \\\'underground\\\'.</li><li>Dave Grohl (Foo Fighters), Pearl Jam y Mudhoney son de los pocos representantes de la era dorada del movimiento que siguen en activo.</li></ul><p><img src=\\"http://estaticos.20minutos.com/img2/recortes/2014/04/04/17837-620-282.jpg\\" width=\\"620\\" height=\\"282\\" alt=\\"Kurt Cobain\\" /></p><p>Su rostro sigue manifestÃ¡ndose en camisetas de algodÃ³n, calendarios, posters en 3D,Â  imanes para la nevera y portadas de libros. Desde allÃ­, <strong>Kurt Cobain</strong> nos dedica una mirada pensativa salpicada por sombras y mechones lacios. O, bien, ofrece un gesto serÃ¡fico, el de un mesÃ­as bello y virginal al que las drogas no han conseguido aÃºn derribar los pÃ³mulos.</p><p> MÃ¡s allÃ¡ de ese recordatorio en forma de <em>merchandising</em>, el sonido que aquel autor atormentado expandiÃ³ por el planeta a principios de los 90, <strong>el grunge</strong>, ha dejado tras de sÃ­ una estela nostÃ¡lgica y diluida.</p><p>Para Â <strong>Carrie Borzillo</strong>, autora del libro <a title=\\"MÃ¡s informaciÃ³n sobre el libro en la tienda online Popular Libros\\" href=\\"http://www.popularlibros.com/libros/kurt-cobain-la-historia-de-nirvana/672394/978-84-480-1858-0/?afiliado=44\\" target=\\"_blank\\"><em>Kurt Cobain. La historia de Nirvana</em></a> (Libros CÃºpula), el legado de Cobain y de su formaciÃ³n,<strong> Nirvana</strong>, sigue presente en aque'),
	(14, 'GarcÃ­a MÃ¡rquez, hospitalizado por una infecciÃ³n', 'http://www.20minutos.com/noticia/12211/0/gabriel-garcia-marquez/hospital-mexico/infeccion-pulmonar/', '<p>NOTIMEX / ASSOCIATED PRESS / EFE</p> <ul><li>EstÃ¡ en el Instituto Salvador ZubirÃ¡n de la Ciudad de MÃ©xico.</li><li>EstÃ¡ siendo tratado con antibiÃ³ticos y pronto podrÃ­a recibir el alta.</li><li>Tiene 87 aÃ±os de edad.</li></ul><p><img src=\\"http://estaticos.20minutos.com/img2/recortes/2014/04/03/17817-620-282.jpg\\" width=\\"620\\" height=\\"282\\" alt=\\"Las MaÃ±anitas a Gabo\\" /></p><p>El escritor colombiano <a title=\\"MÃ¡s noticias sobre Gabriel GarcÃ­a MÃ¡rquez\\" href=\\"http://www.20minutos.com/minuteca/gabriel-garcia-marquez/\\"><strong>Gabriel GarcÃ­a MÃ¡rquez</strong> </a>ha sido internado en un hospital de la Ciudad de MÃ©xico por una infecciÃ³n pulmonar y deshidrataciÃ³n. Las autoridades han confirmado que el nobel estÃ¡ respondiendo bien al tratamiento y pronto podrÃ­a recibir el alta.</p><p>GarcÃ­a MÃ¡rquez ingresÃ³ el lunes pasado por un cuadro de <strong>deshidrataciÃ³n y un proceso infeccioso pulmonar</strong> y de vÃ­as urinarias.</p><p>Una vez que complete los antibiÃ³ticos que se le han recetado, se valorarÃ¡ si puede recibir el alta.</p><p>\\"Le van a<strong> prescribir antibiÃ³ticos</strong>, como a cualquiera de nosotros cuando nos enfermamos\\", comentÃ³ por su parte Gonzalo, hijo del escritor.</p><h2>Mensaje del presidente</h2><p>El autor de <strong><em>Cien AÃ±os de Soledad</em></strong>, vive desde hace varias dÃ©cadas en la capital mexicana. El pasado 6 de marzo reapareciÃ³ ante la prensa fuera de su casa al cumplir 87 aÃ±os y escuchÃ³ <em>Las MaÃ±anit'),
	(15, 'Celebran con una retrospectiva el 90Âº cumpleaÃ±os', 'http://www.20minutos.com/noticia/12203/0/co-westerik-pintor/retrospectiva/90-aniversario/', '<p>HELENA CELDRÃN</p> <ul><li>El artista holandÃ©s distorsiona la perspectiva y juega con las proporciones.</li><li>Una exposiciÃ³n ilustra la capacidad de Westerik para distanciarse del cuerpo humano y mostrarlo desde puntos de vista incÃ³modos.</li></ul><p><img src=\\"http://estaticos.20minutos.com/img2/recortes/2014/04/03/17793-620-282.jpg\\" width=\\"620\\" height=\\"282\\" alt=\\"Â´Gramophone playerÂ´, 1971\\" /></p><p>Sin formar parte de movimientos ni de escuelas; reticente a etiquetar su arte y alejado de la vida pÃºblica; desde que iniciÃ³ su carrera en los aÃ±os cuarenta, <a href=\\"http://www.westerik.nl/\\" target=\\"_blank\\">Co Westerik</a> (La Haya- Holanda, 1924) <strong>ha ido por libre</strong>.</p><p>No se ha dejado intimidad por modas ni ha sentido la necesidad de llamar la atenciÃ³n con teorÃ­as o declaraciones a pesar de ser un artista multipremiado en su paÃ­s.<br /><br />Con sus obras transmite una sensaciÃ³n de incomodidad incluso cuando las escenas son alegres, poÃ©ticas y cotidianas.</p><p>Un primer plano de <strong>una galleta mojÃ¡ndose en el cafÃ©</strong> o un grupo de niÃ±os jugando en la calle son asombrosos vehÃ­culos para comunicar tristeza, aislamiento, inestabilidad, dolor, muerte... Para lograr su fin no le importa distorsionar la perspectiva o jugar con las proporciones: tiene la certeza de que lo importante en sus cuadros no es lo que se ve claramente, sino <strong>lo que surge de manera espontÃ¡nea en quien los mira</strong>. <br /><br />Con moti');
/*!40000 ALTER TABLE `noticias` ENABLE KEYS */;


-- Volcando estructura para tabla proyectoeventos.subcategorias
CREATE TABLE IF NOT EXISTS `subcategorias` (
  `idsubcategorias` int(11) NOT NULL AUTO_INCREMENT,
  `nombresubcategoria` varchar(15) NOT NULL,
  `idcategorias` int(11) NOT NULL,
  PRIMARY KEY (`idsubcategorias`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla proyectoeventos.subcategorias: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `subcategorias` DISABLE KEYS */;
/*!40000 ALTER TABLE `subcategorias` ENABLE KEYS */;


-- Volcando estructura para tabla proyectoeventos.usuarios
CREATE TABLE IF NOT EXISTS `usuarios` (
  `email` varchar(50) NOT NULL,
  `nombreusuario` varchar(50) NOT NULL,
  `contrasena` varchar(50) NOT NULL,
  PRIMARY KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla proyectoeventos.usuarios: ~13 rows (aproximadamente)
/*!40000 ALTER TABLE `usuarios` DISABLE KEYS */;
INSERT INTO `usuarios` (`email`, `nombreusuario`, `contrasena`) VALUES
	('DA', 'da', '5ca2aa845c8cd5ace6b016841f100d82'),
	('da2', 'da2', 'cab8098cbff73785c0426ef31776781f'),
	('da22', 'da22', '56f0b280c80a7f15694d4f452e51f67e'),
	('daa\'\'', 'daann\'\'\'', 'd05db030218e727d746e52749bfd1b9e'),
	('dab3', 'dab3', '347614d45ff75b592f4d5acf030cbbdd'),
	('dada', 'dada', 'dada'),
	('dan3', 'dan3', '3244f60d5938412f181fb566654080f4'),
	('danb', 'danb', '4f93350e060e3fd0aefa89adacbf2935'),
	('danbc', 'danbc', '36dfb84c55403dbe693f43481aa72636'),
	('danh', 'danh', '5d5ac8f28d8b61ecc42c739310b1b1bb'),
	('dani', 'dani', 'dani'),
	('dap', 'dap', '30703582f2f532a305c33d25bf8f40d6'),
	('dapp', 'dapp', '6fedff3bab0e74fa675979b1857ebafe');
/*!40000 ALTER TABLE `usuarios` ENABLE KEYS */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
