<?php
header('Access-Control-Allow-Origin: *');


$codes = array("getFifty","halfPrice","sand30","spring30","beach","sunny");
$data = array();

if(in_array(($_GET['promo']), $codes)){
    $data['available'] = true;
    $data['name'] = 'promo';
}
else{
    $data['available'] = false;
}
echo json_encode($data);
?>