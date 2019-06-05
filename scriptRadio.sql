CREATE DATABASE  IF NOT EXISTS `radiovaio` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `radiovaio`;
-- MySQL dump 10.13  Distrib 8.0.16, for Win64 (x86_64)
--
-- Host: localhost    Database: radiovaio
-- ------------------------------------------------------
-- Server version	5.7.24

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
 SET NAMES utf8 ;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `noticia1`
--

DROP TABLE IF EXISTS `noticia1`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `noticia1` (
  `idnoticia1` int(11) NOT NULL AUTO_INCREMENT,
  `titulo1` varchar(250) NOT NULL,
  `lead1` varchar(250) NOT NULL,
  `cuerpo1` varchar(500) NOT NULL,
  `estado1` tinyint(4) NOT NULL,
  PRIMARY KEY (`idnoticia1`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `noticia1`
--

LOCK TABLES `noticia1` WRITE;
/*!40000 ALTER TABLE `noticia1` DISABLE KEYS */;
INSERT INTO `noticia1` VALUES (1,'Se viene el GTA 6','Fanaticos especulan que su trailer sera lanzado en la E3 de este mes','Mucho se ha especulado sobre este juego, lo ultimo de rockstar en los gta fue eso del 2013 con el gta V, muchos\nesperan que este nuevo GTA 6 sea una revolucion totalmente nueva en la industria. ',1),(2,'Mujer Vegana muere por ataque de pumas en el sur de chile','un ironico y macabro suceso, una mujer de 30 años vegana pro-vida murio por ataque de pumas en torres del paine','Mujer fue atacada por pumas durante un asado de lechugas en el sur de chile, se indaga que el olor extraño de una lechuga\nasada fue el que atrajo a los pumas a la fogata donde estaba esta mujer de 23 años identificada con inicales L.O.L.F, \nse presume que fueron al menos 6 pumas con hambre. ',1),(3,'Supuesto chupacabras fue visto \nen concepcion','Varios testigos vieron a un extraño ser a eso de las 22:00 pm en el parque ecuador','Era una tarde tranquila el pasado martes en el parque ecuador, cuando varios civiles vieron a un extraño ser pasear\nentre los cerros y arboles en el famoso parque, varios de ellos huyeron y otros entre el caos tomaron fotos, pero\nlos celulares de estos eran pesimos, una coincidencia muy lamentable. ',1),(4,'“Shingeki no Kyojin” destronó a “Breaking Bad” y “Game of Thrones” con el capítulo mejor valorado en IMDb','El capítulo más reciente del anime, que mezcla un entramado político con la lucha por la supervivencia de la humanidad contra misteriosos titanes, se convirtió en uno de los episodios más valorados en la historia de las series según el popular sitio.','El anime es uno de los productos culturales más divisorios. Suele generar un fuerte rechazo entre quienes lo ven como simples dibujos animados o un fanatismo desatado en su legión defensores. Mientras algunos no tiene valor artístico alguno, otros lo ponen a la par del cine.\n',2),(5,'Arturo vidal choco de nuevo! ','a menos de 1 mes para la copa america, al King se le ocurrio tomar agua ardiente segun el comento. ','Un accidente automovilisto involucro de nuevo a arturo vidal, ayer jueves en la medianoche fue encontrado en la carretera\nvespucio sur, donde fue hayado por 2 jovenes que igual manejaban en estado de ebriedad. Estos hicieron una llamada a carabineros y todos se fueron detenidos.',2);
/*!40000 ALTER TABLE `noticia1` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2019-06-02 23:45:19
