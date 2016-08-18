<?php 
$rota = parse_url("http://".$SERVER[HTTP_HOST].$SERVER[REQUEST_URI]);
echo $rota;
?>