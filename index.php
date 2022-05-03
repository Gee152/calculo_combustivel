<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Media combustivel</title>
    <link rel="stylesheet" href="css.css">
</head>
<body>
    <main>
        <div class="painel">
            <h2>Instrução</h2>
            <div class="conteudo-painel">
                <p>Vamos calcular o valor gasto de combustivel com relação a distancia pecorrida.</p>
                <p>Esse programa só contará o consumo médio com relação entre distancia, consumo médio do seu veiculo e o preço do combustivel.</p>
                <p>Não esqueça de fazer revisão, calibrar os pneus pois isso auxiliará no seu consumo!</p>
            </div>
        </div>

        <div class="painel">
            <h2>Cálculo do valor (R$) do consumo</h2>
            <div class="conteudo-painel">
                <form action="calculo.php" method="POST">

                    <label for="distancia">Distancia em KM a ser percorrida</label>
                    <input type="number" step=".01" class="campoTexto" name="distancia" required/>
                    <br/>

                    <label for="auto">Consumo de combustivel do veículo (KM/L)</label>
                    <input type="number" step=".01" class="campoTexto" name="auto" required/>
                    <br/>

                    <label for="preco">Informe o preço do combustivel</label> 
                    <input type="number" step=".01" class="campoTexto" name="preco" required/> 
                    <br/>

                    <button class="botao" type="submit">Calcular</button>
                    
                </form>
            </div>
        </div>
    </main>
</body>
</html>