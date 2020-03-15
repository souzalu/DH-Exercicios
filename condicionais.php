<?php

$numero1 = 10;
$numero2 = 15;

//o if está verificando se variavel numero é igual a 10
//mas como não é igual a 10 está executando o else.
if($numero1 ==10)://se o numero for igual a 10
    echo "É igual a 10";
else:
    echo "É diferente de 10";
endif;

echo "<br>";

if($numero2 ==10)://se o numero for igual a 10
    echo "É igual a 10";
else:
    echo "É diferente de 10";
endif;

echo "<br>";

// incluir mais uma condição com o else if
if($numero1 ==50)://se o numero for igual a 10
    echo "É igual a 10";
elseif($numero1 <= 9):
    echo "É menor ou igual a 9";
else:
    echo "É diferente de 10";
endif;

echo "<hr>";

$media = 7;
// operador ternario ? representa o if e : para representar o else
echo ($media >=7) ? "Aprovado!" : "Reprovado!";

echo "<hr>";

// switch parece o if else

$cor = "amarelo";
// caso a cor seja igual a vermelho imprimir echo, caso não seja, ler case seguinte.
//precisa do break para finalizar cada case
switch($cor):
    case "vermelho":// os :pontos é a mesma coisa que {}
        echo "Sua cor preferida é o vermelho";
    break;

    case "verde":
        echo "Sua cor preferida é o verde";
    break;

    case "azul";
    echo "Sua cor preferida é o azul";
break;

default:
echo "Sua cor preferida não é vermelho, verde ou azul é $cor";

endswitch;
echo "<hr>";



