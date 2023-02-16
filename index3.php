<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="get">
nota1: <input type="text" name= "nota1"><br>
nota2: <input type="text" name= "nota2"><br>
<button type="submit">testar</button>
</form>
<?php
$nota1 = $_GET['nota1'];
$nota2 = $_GET['nota2'];
$media = ($nota1 + $nota2) /2;
echo "media: $media <br>";
if ($media <7)
echo"reprovado";
elseif ($media == 10)
echo "aprovado com honra e merito";
else 
echo"aprovado";
?>
    </body>
</html>