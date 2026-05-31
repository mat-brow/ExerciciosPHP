<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Exercícios</title>
    <link rel="stylesheet" href="index.css">
</head>
<body>

<div class="container">
    <h1>Lista de Exercícios</h1>

    <!-- Exercício 1 -->
    <div class="box">
        <h2>1. Tabuada</h2>
        <h3>Apresentará a tabuada respectiva do número digitado abaixo.</h3>
        <form method="post">
            <input type="number" name="tabuada" placeholder="Digite um número" required>
            <button type="submit" name="btnTabuada">Mostrar</button>
        </form>

        <?php
        if(isset($_POST['btnTabuada'])) {
            $num = $_POST['tabuada'];

            echo "<div class='resultado'>";
            for($i = 1; $i <= 10; $i++) {
                echo "$num x $i = " . ($num * $i) . "<br>";
            }
            echo "</div>";
        }
        ?>
    </div>

    <!-- Exercício 2 -->
    <div class="box">
        <h2>2. Valor com desconto</h2>
        <h3>Cálculo de um valor com desconto a partir do preço inicial e da porcentagem informada.</h3>
        <form method="post">
            <input type="number" step="0.01" name="preco" placeholder="Preço" required>
            <input type="number" step="0.01" name="desconto" placeholder="Desconto (%)" required>
            <button type="submit" name="btnDesconto">Calcular</button>
        </form>

        <?php
        if(isset($_POST['btnDesconto'])) {
            $preco = $_POST['preco'];
            $desconto = $_POST['desconto'];

            $valorDesconto = ($preco * $desconto) / 100;
            $final = $preco - $valorDesconto;

            echo "<div class='resultado'>Valor final: R$ $final</div>";
        }
        ?>
    </div>

    <!-- Exercício 3 -->
    <div class="box">
        <h2>3. Média do aluno</h2>
        <h3>Recebe quatro notas estudantis e calcula a média delas. Retornando se o aluno foi reprovado ou aprovado.
            A aprovação se dá a partir da média 5.</h3>
        <form method="post">
            <input type="number" step="0.1" name="n1" placeholder="Nota 1" min="1" max="10" required>
            <input type="number" step="0.1" name="n2" placeholder="Nota 2" min="1" max="10" required>
            <input type="number" step="0.1" name="n3" placeholder="Nota 3" min="1" max="10" required>
            <input type="number" step="0.1" name="n4" placeholder="Nota 4" min="1" max="10" required>
            <button type="submit" name="btnMedia">Verificar</button>
        </form>

        <?php
        if(isset($_POST['btnMedia'])) {
            $media = ($_POST['n1'] + $_POST['n2'] + $_POST['n3'] + $_POST['n4']) / 4;

            if($media >= 5) {
                $resultado = "Aprovado";
            } else {
                $resultado = "Reprovado";
            }

            echo "<div class='resultado'>Média: $media <br> $resultado</div>";
        }
        ?>
    </div>

    <!-- Exercício 5 -->
    <div class="box">
        <h2>5. Soma dos quadrados</h2>
        <h3>Cada número será respectivamente transformado em quadrado, então os três quadrados serão somados.</h3>
        <form method="post">
            <input type="number" name="q1" placeholder="Número 1" required>
            <input type="number" name="q2" placeholder="Número 2" required>
            <input type="number" name="q3" placeholder="Número 3" required>
            <button type="submit" name="btnQuadrados">Calcular</button>
        </form>

        <?php
        if(isset($_POST['btnQuadrados'])) {
            $q1 = $_POST['q1'];
            $q2 = $_POST['q2'];
            $q3 = $_POST['q3'];

            $soma = ($q1 * $q1) + ($q2 * $q2) + ($q3 * $q3);

            echo "<div class='resultado'>Resultado: $soma</div>";
        }
        ?>
    </div>

    <!-- Exercício 6 -->
    <div class="box">
        <h2>6. Salário líquido</h2>
        <h3>Recebe o salário bruto de um funcionário e calcula seu salário líquido (a partir do cálculo de 10% de gratificação,
            porém, pagamento de 20% de imposto de renda).</h3>
        <form method="post">
            <input type="number" step="0.01" name="salario" placeholder="Salário bruto" required>
            <button type="submit" name="btnSalario">Calcular</button>
        </form>

        <?php
        if(isset($_POST['btnSalario'])) {
            $salario = $_POST['salario'];

            $gratificacao = $salario * 0.10;
            $imposto = $salario * 0.20;

            $liquido = $salario + $gratificacao - $imposto;

            echo "<div class='resultado'>Salário líquido: R$ $liquido</div>";
        }
        ?>
    </div>

    <!-- Exercício 7 -->
    <div class="box">
        <h2>7. Média aritmética</h2>
        <h3>Recebe quatro notas de um aluno e calcula sua média aritmética. Considerando os níveis: 
            "Aprovado"(nota satisfatória), "Exame"(nota recuperável) ou "Retido"(nota insuficiente).
        </h3>
        <form method="post">
            <input type="number" step="0.1" name="m1" placeholder="Nota 1" required>
            <input type="number" step="0.1" name="m2" placeholder="Nota 2" required>
            <input type="number" step="0.1" name="m3" placeholder="Nota 3" required>
            <input type="number" step="0.1" name="m4" placeholder="Nota 4" required>
            <button type="submit" name="btnSituacao">Verificar</button>
        </form>

        <?php
        if(isset($_POST['btnSituacao'])) {
            $media = ($_POST['m1'] + $_POST['m2'] + $_POST['m3'] + $_POST['m4']) / 4;

            if($media >= 6) {
                $situacao = "Aprovado";
            }
            else if($media < 3) {
                $situacao = "Retido";
            }
            else {
                $situacao = "Exame";
            }
            echo "<div class='resultado'>Média: $media <br> $situacao</div>";
        }
        ?>
    </div>

    <!-- Exercício 8 -->
    <div class="box">
        <h2>8. Maior e menor número</h2>
        <h3>Recebe três números diferentes e devolve qual o maior e menor dentre eles.</h3>
        <form method="post">
            <input type="number" name="a" placeholder="Número 1" required>
            <input type="number" name="b" placeholder="Número 2" required>
            <input type="number" name="c" placeholder="Número 3" required>
            <button type="submit" name="btnMaiorMenor">Mostrar</button>
        </form>

        <?php
        if(isset($_POST['btnMaiorMenor'])) {
            $numeros = [$_POST['a'], $_POST['b'], $_POST['c']];

            echo "<div class='resultado'>";
            echo "Maior número: " . max($numeros) . "<br>";
            echo "Menor número: " . min($numeros);
            echo "</div>";
        }
        ?>
    </div>

    <!-- Exercício 9 -->
    <div class="box">
        <h2>9. Soma dos ímpares</h2>
        <h3>Apresenta a soma dos números ímpares presentes no intervalo entre o valor inicial e valor final
            digitados abaixo.</h3>
        <form method="post">
            <input type="number" name="inicio" placeholder="Valor inicial" required>
            <input type="number" name="fim" placeholder="Valor final" required>
            <button type="submit" name="btnImpares">Somar</button>
        </form>

        <?php
        if(isset($_POST['btnImpares'])) {
            $inicio = $_POST['inicio'];
            $fim = $_POST['fim'];
            $soma = 0;

            for($i = $inicio; $i <= $fim; $i++) {
                if($i % 2 != 0) {
                    $soma += $i;
                }
            }
            echo "<div class='resultado'>Soma dos ímpares: $soma</div>";
        }
        ?>
    </div>

    <!-- Exercício 10 -->
    <div class="box">
        <h2>10. Par ou ímpar</h2>
        <h3>Informa se o número digitado é par ou ímpar.</h3>
        <form method="post">
            <input type="number" name="parImpar" placeholder="Digite um número" required>
            <button type="submit" name="btnParImpar">Verificar</button>
        </form>

        <?php
        if(isset($_POST['btnParImpar'])) {
            $num = $_POST['parImpar'];

            if($num % 2 == 0) {
                $texto = "Par";
            } else {
                $texto = "Ímpar";
            }
            echo "<div class='resultado'>$texto</div>";
        }
        ?>
    </div>

    <!-- Exercício 11 -->
    <div class="box">
        <h2>11. Calculadora</h2>
        <h3>Calculadora contendo as quatro equações básicas: soma, subtração, multiplicação e divisão.</h3>
        <form method="post">
            <input type="number" step="0.01" name="valor1" placeholder="Valor 1" required>
            <input type="number" step="0.01" name="valor2" placeholder="Valor 2" required>

            <select name="operador">
                <option value="+">+</option>
                <option value="-">-</option>
                <option value="*">*</option>
                <option value="/">/</option>
            </select>

            <button type="submit" name="btnCalc">Calcular</button>
        </form>
        <?php
        if(isset($_POST['btnCalc'])) {
            $v1 = $_POST['valor1'];
            $v2 = $_POST['valor2'];
            $op = $_POST['operador'];
            $resultado = 0;

            switch($op) {
                case '+':
                    $resultado = $v1 + $v2;
                    break;
                case '-':
                    $resultado = $v1 - $v2;
                    break;
                case '*':
                    $resultado = $v1 * $v2;
                    break;
                case '/':
                    $resultado = $v1 / $v2;
                    break;
            }
            echo "<div class='resultado'>Resultado: $resultado</div>";
        }
        ?>
    </div>
</div>
</body>
</html>