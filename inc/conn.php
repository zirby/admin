<?php
$pdo = new PDO('mysql:dbname=countrytickets_;host=countrytickets.eu.mysql', 'countrytickets_', 'py9TjAmt');
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
