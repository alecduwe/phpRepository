create database TheDuweKingdom;
use TheDuweKingdom;


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

create table Cliente(
idCliente int primary key auto_increment not null,
    Nome varchar(40) not null,
    NomeUsuario varchar(20) not null,
    Senha varchar(16) not null,
    CPF int(9) not null,
    RG int(9) not null)
Engine = InnoDB;

DROP TABLE IF EXISTS `produtos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;

create table Produtos(
idProduto int primary key auto_increment not null,
    NomeProduto varchar (50) not null,
    PrecoVenda double(9,2) not null,
    PrecoCompra double(9,2) not null,
    MargemLucro double(9,2) not null,
    Imagem varchar(200) not null)
Engine = InnoDB;
/*!40101 SET character_set_client = @saved_cs_client */;


create table Marcas(
idMarca int primary key auto_increment not null,
    NomeMarca varchar (40) not null)
Engine = InnoDB; 

create table Categorias(
idCategoria int primary key auto_increment not null,
    Nome varchar (15) not null)
Engine = InnoDB;    

create table Forncedores(
idForncedor int primary key auto_increment not null,
    Nome varchar(40) not null,
    Site varchar(60) not null,
    Contato int (13) not null)
Engine = InnoDB;    



DROP TABLE IF EXISTS `vendas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `vendas` (
  `idvendas` int(11) NOT NULL AUTO_INCREMENT,
  `produtos` varchar(80) DEFAULT NULL,
  PRIMARY KEY (`idvendas`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

LOCK TABLES `produtos` WRITE;
/*!40000 ALTER TABLE `produtos` DISABLE KEYS */;


/*!40000 ALTER TABLE `produtos` ENABLE KEYS */;
UNLOCK TABLES;


LOCK TABLES `vendas` WRITE;
/*!40000 ALTER TABLE `vendas` DISABLE KEYS */;
INSERT INTO `vendas` VALUES (1,''),(2,'1,2,1,2,'),(3,''),(4,''),(5,''),(6,''),(7,''),(8,''),(9,'1,2,1,2,');
/*!40000 ALTER TABLE `vendas` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;




insert into Cliente (nome,NomeUsuario,senha,CPF,RG) values ("Albrecht Martin Duwe","Albrecht","albrecht03","123456789","123456789");
insert into Cliente (nome,NomeUsuario,senha,CPF,RG) values ("Romelia Duwe","Lia","lia03","123456788","123456778");
insert into Cliente (nome,NomeUsuario,senha,CPF,RG) values ("Rentata Duwe","Renata","renata03","123453789","122456789");

insert into Produtos (NomeProduto,PrecoVenda,PrecoCompra,MargemLucro,Imagem) values ("Elder Scrolls Online",60.00,05.00,55.00,"ESO.png");
insert into Produtos (NomeProduto,PrecoVenda,PrecoCompra,MargemLucro,Imagem) values ("Hellblade: Senua's Sacrifice",60.00,05.00,55.00,"Hell Blade Logo.png");
insert into Produtos (NomeProduto,PrecoVenda,PrecoCompra,MargemLucro,Imagem) values ("Call of Duty®: WWII",195.00,30.00,165,"COD WWII.png");
insert into Produtos (NomeProduto,PrecoVenda,PrecoCompra,MargemLucro,Imagem) values ("The Witcher 3: Wild Hunt",55.00,10.00,45.00,"TW III PC.png");
insert into Produtos (NomeProduto,PrecoVenda,PrecoCompra,MargemLucro,Imagem) values ("Gothic® 3",14.00,03.00,11.00,"Gothic_Logo.png");
insert into Produtos (NomeProduto,PrecoVenda,PrecoCompra,MargemLucro,Imagem) values ("The Witcher 2: Assassins of Kings Enhanced Edition",05.00,01.00,04.00,"TW II LOGO.png");
insert into Produtos (NomeProduto,PrecoVenda,PrecoCompra,MargemLucro,Imagem) values ("The Witcher: Enhanced Edition Director's Cut",03.00,005.00,025.00,"The-Witcher-Enhaced-Edition-1-icon.png");
insert into Produtos (NomeProduto,PrecoVenda,PrecoCompra,MargemLucro,Imagem) values ("The Elder Scrolls V: Skyrim Special Edition", 199.00,39.00,160.00,"Skyrim ED.png");
insert into Produtos (NomeProduto,PrecoVenda,PrecoCompra,MargemLucro,Imagem) values ("Star Wars: Battlefront", 49.00,08.00,41.00,"Star Wars Battlefront I.png");
insert into Produtos (NomeProduto,PrecoVenda,PrecoCompra,MargemLucro,Imagem) values ("Star Wars: Battlefront II", 69.00,10.00,59.00,"Star Battlefront II.png");
insert into Produtos (NomeProduto,PrecoVenda,PrecoCompra,MargemLucro,Imagem) values ("The Elder Scrolls V: SKYRIM", 40.00,02.00,38.00,"Skyrim V.png");
insert into Produtos (NomeProduto,PrecoVenda,PrecoCompra,MargemLucro,Imagem) values ("Bio Shock Collection", 40.00,02.00,38.00,"bioShock.png");
insert into Produtos (NomeProduto,PrecoVenda,PrecoCompra,MargemLucro,Imagem) values ("Dark Souls Remastered", 90.00,20.00,70.00,"darksouls.png");



select * from Produtos;
select * from Cliente;






