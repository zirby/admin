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
$req = $pdo->prepare("SELECT * FROM cd16_blocs_".$jour );
$req->execute();

while($res = $req->fetch()){
    // pour reservation countrytickets
    $Ubloc = strtoupper(str_replace("_", " ", $res->name));
    echo $Ubloc." + ".$jourReserv."<br />";
    $reqReserv = $pdo->prepare("SELECT SUM(nbplaces) as splaces, SUM(nbplaces_half) as splaces_half FROM cd16_reservations WHERE (bloc=? AND jour =? AND supprime_le IS NULL) OR (bloc=? AND jour='ABN3J' AND supprime_le IS NULL)");
    $reqReserv->execute([$jourReserv, $Ubloc, $jourReserv]);
    $resReserv = $reqReserv->fetch();
    print_r($resReserv);
    print("<br />");
        //var_dump($resReserv);
        //die();
        //echo $resReserv->splaces." + ".$resReserv->splaces_half."<br />";
        $valeur = intval($res->max) - intval($resReserv->splaces) - intval($resReserv->splaces_half);
    /*}else{
        $valeur = intval($res->max);
    }*/
    // je update le bloc de places
    //$reqUpdate=$pdo->prepare("UPDATE cd16_blocs_".$jour." SET places=? WHERE name=?" );
    //$reqUpdate->execute([$valeur, $res->name ]);
}