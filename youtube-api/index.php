<?php

//AIzaSyBlffvTGGzdoJlbFoxULzj6rYYohYPP8FU
require('vendor/autoload.php');

$youtube  =  new  Madcoda \ Youtube \ Youtube ( array ( ' key '  =>  'AIzaSyDHPNQxozOzQSZ-djvWGOBUsHkBUoT_qH4' )); 
$video  =  $youtube -> getVideoInfo ( ' rie-hPVJ7Sw ' );

print_r($video);



?>