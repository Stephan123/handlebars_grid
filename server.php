<?php

$params = $_REQUEST;

$response = array();

$i = $params['page'] * $params['pageSize'];
$j = ($params['page'] + 1) * $params['pageSize'];

$k = 0;
for($i; $i < $j; $i++){
    $response[$k]['Name'] = "Name ".$i;
    $response[$k]['Price'] = $i.".00";
    $response[$k]['Quantity'] = "Quantity ".$i;

    $k++;
}

echo json_encode($response);