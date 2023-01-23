<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variaveis</title>
</head>
<body>
    <h1>Variaveis</h1>
    <div>
    <?php
       /*OPERADORES MATEMÁTICOS
       # SOMA = +
       # SUBT.= -
       # MULTIPLICACAO = *
       # DIVISAO = /
       # POTENCIACAO = ^
       */

        echo("<h2>BRINCANDO COM VALORES E MEDIAS</h2>");
        $n1 = 7; #n1 coleta nota 1
        $n2 = 7; #n2 Coleta nota 2
        $media = (( $n1 + $n2) / 2); #media calcula a média

        echo("A nota 1 foi $n1<br>"); #echo apresenta informações
        echo("A nota 2 foi $n2<br>");
        echo("A Media do aluno foi $media<br>");
        $resultado = ($media >= 7)? "APROVADO" :"REPROVADO";
        echo("O ALUNO ESTÁ $resultado <br><br>");


        #TRABALHANDO CONCATENAÇÃO
        echo("TRABALHANDO CONCATENAÇÃO<br>");
        $nome = "Michael";
        $sobrenome = "Toniolo";
        $nickname = "Mz3ro";
        $anonasc = 1992;
        
        /* asçlkdçlaskd
        askçdçlaskd
        askdaskljd
        */
        echo("Meu nome é $nome $sobrenome e meu nickname é $nickname<br> Eu tenho ". (2023 - $anonasc) ." de idade");
        
        
        echo("<br><br>");

        echo("<h3>CONTROLE DE VALIDAÇÃO</h3>");
        #Este é um if convencional
        /*
        CONDICIONAIS
        IGUALDADE ==
        DIFERENÇA !=
        MAIOR QUE >
        MENOR QUE <
        MAIOR IGUAL >=
        MENOR IGUAL <=
        IDENTICO ===
        OPERADOR E &&
        OPERADOR OU ||
        */
        $valor1 = 2;
        $valor2 = 2;
        if ($valor1 > $valor2){
            echo("<br>Valor 1 é maior");
        }
        else{
            echo("<br>Valor 2 é maior");
        }

        #Este é um if PHP
        $valorresultado = ($valor1 === $valor2)? "<br>VALOR 1 É IDENTICO AO VALOR 2" : "<br>VALOR É DIFERENTE DE VALOR 2";
        echo($valorresultado);


        /*
        FAÇA UM EXERCÍCIO QUE VALIDE A IDADE PARA O TIRO DE GUERRA.
        NECESSÁRIO VALIDAR IDADE E SE É MASCULINO OU FEMININO ('M' OU 'F')
        */

    ?>
    </div>
    
</body>
</html>