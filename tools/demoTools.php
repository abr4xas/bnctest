<?php
function createHash($data){
    $validation = hash('sha256', utf8_encode($data));
    return $validation;
}

function proSession($val,$Masterkey){
    $wk = decrypt($val,$Masterkey);
    $wk = json_decode($wk,true);
    $wk = $wk['WorkingKey']; 
    $_SESSION['WorkingKey'] = $wk;
}


function gPost($gurl,$jsonSolicitud){
    $ch = curl_init($gurl);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $jsonSolicitud);
    curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $result = curl_exec($ch);
    curl_close($ch);
    return $result;
}



function refere(){
    //20220831090831
    $fecha = date('Y-m-d h:i:s', time());
    $fecha = strval($fecha);
    $fecha = str_replace("-","",$fecha);
    $fecha = str_replace(":","",$fecha);
    $fecha = str_replace(" ","",$fecha);
    $result = $fecha;
    return $result;
}
?>