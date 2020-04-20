<form method="post">
    <input type="text" name="adress">
    <input type="submit" name="acao" value="Enviar!">
</form>

<?php
if (isset($_POST['acao'])){
    //requisição para o google utilizandoi file get contents
    $url = urlencode($_POST['adress']);
    $str = file_get_contents('http://maps.googleapis.com/maps/api/geocode/json?address='.$url.'&sensor=false');
  
        
    $endereco = json_decode($str);
   

   echo $endereco->results[0]->address_components[0]->short_name;

}
/*key=AIzaSyCqV9gGA5nMEyreJAjDSfr7P21qL2VRBEw*/
?>

