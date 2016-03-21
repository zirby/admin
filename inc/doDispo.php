<?php
require_once 'conn.php';
$jour=$_GET['jour'];
// transformation du jour 
switch ($jour) {
    case "ven":
        $jourReserv="VEN04";
        break;
    case "sam":
        $jourReserv="SAM05";
        break;
    case "dim":
        $jourReserv="DIM06";
        break;
}
function updBloc($bl, $jr){
    $Ubloc = strtoupper(str_replace("_", " ", $bl));
    echo $Ubloc." + ".$jr."<br />";
    $reqReserv = $pdo->prepare("SELECT SUM(nbplaces) as splaces, SUM(nbplaces_half) as splaces_half FROM cd16_reservations WHERE (bloc=? AND jour =? AND supprime_le IS NULL) OR (bloc=? AND jour='ABN3J' AND supprime_le IS NULL)");
    //$reqReserv->execute();
    $reqReserv->execute(array($Ubloc, $jr, $Ubloc));
    $resReserv = $reqReserv->fetch();
    print_r($resReserv);
    print("<br />");
    return true;
}
$req = $pdo->prepare("SELECT * FROM cd16_blocs_".$jour );
$req->execute();

while($res = $req->fetch()){
    $Ubloc = strtoupper(str_replace("_", " ", $res->name));
    $reqReserv = $pdo->prepare("SELECT SUM(nbplaces) as splaces, SUM(nbplaces_half) as splaces_half FROM cd16_reservations WHERE (bloc=? AND jour =? AND supprime_le IS NULL) OR (bloc=? AND jour='ABN3J' AND supprime_le IS NULL)");
    $reqReserv->execute(array($Ubloc, $jourReserv, $Ubloc));
    $resReserv = $reqReserv->fetch();
    // pour reservation countrytickets
    echo $res->max." - ".$resReserv->splaces." + ".$resReserv->splaces_half." = ";
    $valeur = intval($res->max) - intval($resReserv->splaces) - intval($resReserv->splaces_half);
    echo $valeur."<br/>";
    // je update le bloc de places
    $reqUpdate=$pdo->prepare("UPDATE cd16_blocs_".$jour." SET places=? WHERE name=?" );
    $reqUpdate->execute([$valeur, $res->name ]);
}