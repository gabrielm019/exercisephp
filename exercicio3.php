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
        Nota 1: <input type="text" name="nota1"><br>
        Nota 2: <input type="text" name="nota2"><br>
        <button type="submit">Testar</button>
    </form>
    <?php
    $nota1 = $_GET['nota1'];
    $nota2 = $_GET['nota2'];
    $media = ($nota1 + $nota2) / 2;
    
    print "Média: $media <br>" ;

    if ($media < 7)
    print "Reprovado";
    elseif ($media ==10)
    print "Aprovado com Honra ao mérito";
    else
    print"Aprovado";
    ?>
</body>
</html>