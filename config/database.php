<?php

/*
 * Construction d'un objet PDO représentant la connexion à la base de données.
 *
 * Le premier argument est un Data Source Name (DSN) représentant où est-ce qu'il
 * faut se connecter. Une adresse IP ou un nom de domaine peut être spécifié.
 *
 * /!\ Tout le DSN doit être écrit en minuscules et sans espaces.
 *
 */

// Paramétrage de la liaison PHP <-> MySQL, les données sont encodées en UTF-8.


$pdo = new PDO('mysql:host=home.3wa.io:3307;dbname=pa-166_cohensac_osteo', 'cohensac', '01bc0e74YWQyZWYwNGFiNTJiNjExZTBiODk3ODk4501d7986');
                //le hosting *// Paramétrage de la liaison PHP <-> MySQL, les données sont encodées en UTF-8.
$pdo->exec('SET NAMES UTF8');
