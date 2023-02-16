<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action=""method="get">
digite um caractere: <input type="tex" name="carac">
<br>
<button type="submit">testar</button>
 </form>
 <?php
 $meucaractere =$_GET['carac'];
 if(ctype_digit($meucaractere))
 echo" é digito";
 else 
 echo"nao é digito";
 ?>
</body>
</html>