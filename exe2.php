<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
</head>
<body>
<?php
$nota = array();

$nota[] = -9;
$nota[] = 8;
$nota[] = 7;
$nota[] = 3;
$nota[] = 6;
$nota[] = 4;
$nota[] = 8;
$nota[] = -8;
$nota[] = -8;
$nota[] = 9;
$a=0;
$b=0;
$c=0;
$z=0;
$w=0;
$y=0;
$f=0;
$g=0;
$par = 0; $impar = 0;
for($i = 0; $i < count($nota); $i++) {
if(($nota[$i]%2)==0 ) 
{ $par++; } 
else { $impar++; }
}
echo "quantidade de numeros pares é ".$par;
echo "<br>quantidade de numeros impares é ".$impar;

$a = 0; $b = 0;
for($x = 0; $x < count($nota); $x++) {
if($nota[$x]<0 ) 
{ $a++; } 
else { $b++; }
}
echo "<br>quantidade de numeros positivos é ".$a;
echo "<br>quantidade de numeros negativos é ".$b; 	
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