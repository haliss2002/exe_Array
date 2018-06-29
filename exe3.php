<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
</head>
<body>
<?php
$nota = array();

$nota[] = $_POST['a'];
$nota[] = $_POST['b'];
$nota[] = $_POST['c'];
$nota[] = $_POST['d'];
$nota[] = $_POST['e'];
$nota[] = $_POST['f'];
$nota[] = $_POST['g'];
$nota[] = $_POST['h'];
$nota[] = $_POST['i'];
$nota[] = $_POST['j'];
$nota[] =	$_POST['multi'];

for($x = 0; $x < count($nota)-1; $x++){
    echo $nota[$x]." x ".$nota[10]." = ".$nota[$x]*$nota[10]."<br>";
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