<?php
//
// A very simple PHP example that sends a HTTP POST to a remote site
//
$endereco =urlencode('itaim');
$curl = curl_init();

curl_setopt($curl, CURLOPT_URL,"http://maps.googleapis.com/maps/api/geocode/json?address='.$endereco.'&key=AIzaSyCqV9gGA5nMEyreJAjDSfr7P21qL2VRBEw");
//curl_setopt($curl, CURLOPT_POST, 1);


// Na vida real vc pode usar passando como array e usar a função http_build_query
//curl_setopt($curl, CURLOPT_POSTFIELDS,http_build_query(array('request' => 'name_return')));

// Receive server response ...
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

$server_output = curl_exec($curl);

curl_close ($curl);

echo $server_output


//Requisição com CURL no server local
/*
$resultado = json_decode($server_output);

echo $resultado->titulo[0];
echo '<br>';
echo $resultado->conteudo[0];
*/
?>

