<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 1</title>
</head>
<body>
    <form action="" method="post">
    
<label for="">Insira algo</label>
<input type="text" name="Inserido:" id=""> <br>
<input type="submit" value="Enviar">
</form>
</body>
</html>



<?php

function inserir($inserirAlgo){


foreach ($inserirAlgo as $key => $value) {
    echo "Você inseriu - $value <br>"; 
}

}

echo inserir($_POST);


?>