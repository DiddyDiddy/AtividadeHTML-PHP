<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 3</title>
</head>
<body>
    <form action="" method="post">
    
<label for="">Qual é sua fruta favorita:</label>

<select name="fruta" id="">
            <option value=""></option>
            <option value="Maça">Maçã</option>
            <option value="Banana">Banana</option>
            <option value="Abacaxi">Abacaxi</option>
            <option value="Morango">Morango</option>
            <option value="Nenhuma das acima">Nenhuma das acima</option>
        </select><br>


<input type="submit" value="Enviar">
</form>
</body>
</html>



<?php

foreach ($_POST as $key => $value) {
    echo "Sua fruta favorita é - $value <br>"; 
}

?>