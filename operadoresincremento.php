<?php

//operadores de incremento e decremento
//serve para somar ou subtrair em + 1 ou -1 numero ou string


$valor = 20;

//pré-incremento
echo ++$valor; // incrementou e depois retornou o valor 21.

echo"<br>";

//pós-incremento
echo $valor++; //retorna o valor e depois incrementa. 21 + 1 = 22
echo"<br>";
echo $valor;

echo "<hr>";

//pré-decremento
echo --$valor; // diminuiu e depois retornou o valor 21.

echo"<br>";

//pós-decremento
echo $valor--; //retorna o valor e depois diminuir. 21 - 1 = 20
echo"<br>";
echo $valor;