<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
</head>
<body>
<?php

$nome = array();

$nome[] = "Jubiscleison";
$nome[] = "Jorginho";
$nome[] = "Casa Grande";
$nome[] = "Arnaldo";
$nome[] = "Cesar";
$nome[] = "Coelho";
$nome[] = "Hominineymar";
$nome[] = "Ronaldo";
$nome[] = "Caio";
$nome[] = "Ribeiro";

$nota = array();

$nota[] = 9;
$nota[] = 8;
$nota[] = 7;
$nota[] = 3;
$nota[] = 6;
$nota[] = 4;
$nota[] = 8;
$nota[] = 8;
$nota[] = 7;
$nota[] = 3;
$a=0;
$b=0;
echo "Média da sala: ".($nota[0]+$nota[1]+$nota[2]+$nota[3]+$nota[4]+$nota[5]+$nota[6]+$nota[7]+$nota[8]+$nota[9])/10 ;
while ($b >= 10) {	
if ($nota[$a]>=$nota[$b]){
$b++;	
}
elseif ($nota[$a]<$nota[$b]){
$a++;	# code...
}
}
echo "<br>";
echo "Melhor Aluno: ".$nome[$a];	

/*
//varrendo com sizeof
for($x = 0; $x < sizeof($nome); $x++){
    echo "$nome[$x] <br>";
}

//varrendo usando count
for($x = 0; $x < count($nome); $x++){
    echo "$nome[$x] <br>";
}


//varrendo com while
$x = 0;
while($x < sizeof($nome)){
    echo "$nome[$x] <br>";
    $x++;
}


// foreach simples
foreach($nome as $value){
    echo "$value <br>";
}

// foreach com indice
foreach($nome as $value => $conteudo){
    echo "$value - $conteudo <br>";
}



*/
?>
</body>
</html>
