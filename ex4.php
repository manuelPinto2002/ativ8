<?php 
$pararloop=20;
//este for é executado indefinidamente
for ($numero=0; ; $numero++) { 
if ($numero == $pararloop) {
	//este break obriga a terminar o circlo for
	break;
}
echo $numero."<br>";
}
 ?>