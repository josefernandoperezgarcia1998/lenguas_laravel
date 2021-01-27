<?php
$mysqli = new mysqli("localhost", "root", "", "lenguas");
if ($mysqli -> connect_error){
	echo "Fallo En La Conexión!!!: (" .$mysqli -> connect_error .")" . $mysqli -> connect_error;
}
echo $mysqli -> host_info . "\n";
echo "La Conexión Se Completó Satisfactoriamente!!!"

?>