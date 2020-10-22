<?php 
for($i=1;$i<=20;$i++){
	$nota=rand(1,20);
	echo "A nota do aluno <span style='color:#0000cc'>".$i.
	"</span> é <span style='color:#0000cc'>".$nota. "</span> <br>";
if($nota <8){
	echo "o aluno <span style='color:#ff0000'>reprovou<br></span>";
}

elseif ($nota <8 && $nota >9.4) {
echo "o aluno <span style='color:#0000ff'>o aluno foi admitido a exame<br></span>";
}
elseif ($nota >9.5 && $nota <20) {
echo "o aluno <span style='color:#00ff00'> aprovou<br></span>";

}
echo "<br>";
}
 ?>