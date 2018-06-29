<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
</head>
<body>
<?php
$nota = array();

$nota[1] ="Janeiro";
$nota[] ="Fevereiro";
$nota[] ="Março";
$nota[] ="Abril";
$nota[] ="Maio";
$nota[] ="Junho";
$nota[] ="Julho";
$nota[] ="Agosto";
$nota[] ="Setembro";
$nota[] ="Outubro";
$nota[] ="Novembro";
$nota[] ="Dezembro";
$a=$_POST['a'];

echo $nota[$a];
/*=
//varrendo com sizeof
for($x = 0; $x < sizeof($nome); $x++){
    echo "$nome[$x] <br>";
}

varrendo usando count
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