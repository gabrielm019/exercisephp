<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<form action="" method="get">

Digite um número: <input type="number" name= "number"><br>
<button type="submite">Testar</button>
</form>
<?php

$numero = $_GET['number'];

if ($numero % 2 ==0)

print "$numero é par";

else

print"$numero é impar";
?>

</body>
</html>