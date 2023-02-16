<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="get" >
numero1: <input type="text" name= "numero1"><br>
numero2: <input type="text" name= "numero2"><br>
numero1: <input type="text" name= "numero3"><br>
<button type="submit">testar></button>
    </form>
    <?php
    $menor = $_GET['numero1'];
    $meio = $_GET['numero2'];
    $maior = $_GET['numero3'];
    
    if($meio< $menor){
$temp = $menor;
$menor = $meio;
$meio = $temp;
    }
    if($maior< $menor){
        $temp = $menor;
        $menor = $maior;
        $maior = $temp;
            }
            if($maior< $meio){
                $temp = $meio;
                $meio = $maior;
                $maior = $temp;
                    }
                    echo "$menor < $meio < $maior";
                    ?>
                
</body>
</html>