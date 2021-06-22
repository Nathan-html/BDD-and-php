<?php
//donnés priver ( mots de passe / nom de la BDD / nom du serveur ect... )
include("./bdd/settings.php");

//création de la BDD si elle n'existe pas
$sql = "CREATE DATABASE IF NOT EXISTS $dbname";
include("./bdd/tryandcatch/connServ.php");

//création des tables de la BDD si elle n'existe pas
$sql = "CREATE TABLE IF NOT EXISTS category(
            idCategory INT(11) NOT NULL,
            nom VARCHAR(255) NOT NULL,
            idParent INT(11) NOT NULL
        )";
include("./bdd/tryandcatch/connDb.php");
$sql = "CREATE TABLE IF NOT EXISTS customer(
            idCustomer INT(11) NOT NULL,
            name VARCHAR(255) NOT NULL,
            firstname VARCHAR(255) NOT NULL,
            email VARCHAR(255) NOT NULL
        )";
include("./bdd/tryandcatch/connDb.php");
///////////////////////////////////////////
//      ERREUR de syntaxe a revoir       //
///////////////////////////////////////////
// $sql = "CREATE TABLE IF NOT EXISTS order(
//             idOrder INT(11) NOT NULL,
//             date VARCHAR(255) NOT NULL,
//             idCustomer INT(11) NOT NULL
//         )";
// include("./bdd/tryandcatch/connDb.php");
$sql = "CREATE TABLE IF NOT EXISTS product(
            idProduct INT(11) NOT NULL,
            idCategory INT(11) NOT NULL,
            title VARCHAR(50) NOT NULL,
            description text NOT NULL,
            price INT(11) NOT NULL COMMENT 'prix pour 100G en cts',
            pictureFront VARCHAR(255) NOT NULL,
            pictureBack VARCHAR(255) NOT NULL
        )";
include("./bdd/tryandcatch/connDb.php");
$sql = "CREATE TABLE IF NOT EXISTS product_order(
            idProduct INT(11) NOT NULL,
            idOrder INT(11) NOT NULL,
            qty INT(11) NOT NULL
        )";
include("./bdd/tryandcatch/connDb.php");