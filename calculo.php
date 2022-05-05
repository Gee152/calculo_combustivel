<?php



if ($_POST) {

    $distancia = $_POST['distancia'];
    $auto = $_POST['auto'];
    $preco = $_POST['preco'];

    $msg = "";
   
    if (is_numeric($distancia) && is_numeric($auto) && is_numeric($preco)) {

        if (($distancia > 0) && ($auto > 0) && ($preco > 0)) {

            $cal = ($distancia/$auto) * $preco;
            $cal = number_format($cal,2,',','.');

            $msg.= "Para pecorrer a distancia de ".$distancia." KM ". " é de R$: ".$cal;
            
        } else {
            $msg.= "Para realizar o cálculo, no campo distancia, autonimia e preço deve ser maior que zero!";
        }
    } else {

        $msg.= "Para ajudar com o cálculo insira os valores maiores do que zero!";
        }

} else {
    $msg.= "Campos obrigatorio não preenchido!";
    }

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css.css">
</head>
<body>
    <main>
        <div class="painel">
            <h2>Resultado do consumo</h2>
            <div class="conteudo-painel">
                <?php
                echo $msg;
                ?>
            </div>
            <a href="index.php" class="botao">Voltar</a>
        </div>
    </main>
</body>
</html>