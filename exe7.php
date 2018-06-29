<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
</head>
<body>
<?php
$nota1 = array();
$nota2 = array();
$nota3 = array();
$nota4 = array();
$nota5 = array();
$nota6 = array();
$nota7 = array();
$nota8 = array();
$nota9 = array();
$nota10 = array();

$nota1[] = $_POST['a'];
$nota1[] = $_POST['b'];
$nota1[] = $_POST['c'];
$nota1[] = $_POST['d'];

$nota2[] = $_POST['e'];
$nota2[] = $_POST['f'];
$nota2[] = $_POST['g'];
$nota2[] = $_POST['h'];

$nota3[] = $_POST['i'];
$nota3[] = $_POST['j'];
$nota3[] = $_POST['k'];
$nota3[] = $_POST['l'];

$nota4[] = $_POST['m'];
$nota4[] = $_POST['n'];
$nota4[] = $_POST['o'];
$nota4[] = $_POST['p'];

$nota5[] = $_POST['q'];
$nota5[] = $_POST['r'];
$nota5[] = $_POST['s'];
$nota5[] = $_POST['t'];

$nota6[] = $_POST['u'];
$nota6[] = $_POST['v'];
$nota6[] = $_POST['w'];
$nota6[] = $_POST['x'];

$nota7[] = $_POST['y'];
$nota7[] = $_POST['z'];
$nota7[] = $_POST['aa'];
$nota7[] = $_POST['bb'];

$nota8[] = $_POST['cc'];
$nota8[] = $_POST['dd'];
$nota8[] = $_POST['ee'];
$nota8[] = $_POST['ff'];

$nota9[] = $_POST['gg'];
$nota9[] = $_POST['hh'];
$nota9[] = $_POST['ii'];
$nota9[] = $_POST['jj'];

$nota10[] = $_POST['kk'];
$nota10[] =  $_POST['ll'];
$nota10[] =  $_POST['mm'];
$nota10[] =  $_POST['nn'];

for($x = 0; $x < 10; $x++){
    echo $nota($x)[0]." ".$nota($x)[2]."<br>";
}
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