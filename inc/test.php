<?php
require_once 'conn.php';

$req = $pdo->prepare("SELECT SUM(nbplaces) as splaces, SUM(nbplaces_half) as splaces_half FROM cd16_reservations WHERE (bloc=? AND jour =? AND supprime_le IS NULL) OR (bloc=? AND jour='ABN3J' AND supprime_le IS NULL)");
    //$req->execute();
    //$reqReserv->execute(array($Ubloc, $jr, $Ubloc));
    $req->execute([ "BLOC A","VEN04", "BLOC A"]);
    $res = $req->fetch();
    print_r($res);

