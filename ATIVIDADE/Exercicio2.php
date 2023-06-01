<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 2</title>
</head>
<body>
    <form action="" method="post">
    

    <label for="n1">Número 1</label><br>
    <input type="number" name="n1" id="n1"><br>

    <label for="n2">Número 2 </label><br>
    <input type="number" name="n2" id="n2"><br>

    <input type="submit" value="Enviar"> 

</form>
</body>
</html>

<?php

$num1 = $_POST['n1'];
$num2 = $_POST['n2'];

$resultado = $num1 + $num2;

echo "O resultado da soma entre $num1 + $num2 é $resultado";





?>