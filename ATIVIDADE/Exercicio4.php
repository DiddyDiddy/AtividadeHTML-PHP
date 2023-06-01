<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 4</title>
</head>
<body>
    <form action="" method="post">
    
<label for="">Preencha a caixa</label> <br>
<input type="checkbox" name="Caixa" id="">


<input type="submit" value="Enviar">


</form>
</body>
</html>



<?php

echo validacaixa($_POST);

function validacaixa($dados)
{
    $cont = 0;

    if (isset($dados['Caixa'])) {
        
        foreach ($dados as $key => $value) {
    
            if ($value == "") {
                $cont = $cont + 1;
            }
        }

    } else {
        return 'Preencha a caixa';
    }

    if ($cont > 0) {
        return 'A caixa não foi preenchida corretamente';
    } else {
        return 'A caixa foi preenchida com sucesso';
    }
}

?>