<?php
require_once 'conn.php';
/*
$req = $pdo->prepare("UPDATE cd16_blocs_04 SET "
        . "max =?, "
        . "max_org =?, "
        . "price =?, "
        . "price_half =?, "
        . "price_abn =?, "
        . "price_abn_half =?, "
         . "WHERE name= ? ");

$req->execute([
    $_POST['inputMax'], 
    $_POST['inputMaxOrg'], 
    $_POST['inputPrice'],
    $_POST['inputPriceHalf'], 
    $_POST['inputPriceAbn'], 
    $_POST['inputPriceAbnHalf'], 
    $_POST['inputBloc']
        ]);

*/
header('Location:../blocs_ven.php');
exit();