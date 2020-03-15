<?php

/*operadores logicos - permite fazer comparações entre expressões
e (&& ou and) retorna verdadeiro quando as duas expressões são verdadeiras
ou (|| ou or) retorna verdadeiro quando uma das expressoes for verdadeira.
ou exclusivo (xor) retorna verdadeiro quando uma das expressões for verdadeira, se mais de uma for verdadeira retorna falso
negação (!)
*/

$idade = 25;
$nome = "Rodrigo";

if (($idade == 25) && ($nome == "Rodrigo")):
    echo "É verdadeiro";
else:
    echo "É Falso";
endif;
echo"<br>";

if (($idade == 26) or ($nome == "Rodrigo")):
    echo "É verdadeiro";
else:
    echo "É Falso";
endif;
echo"<br>";

if (($idade == 25) xor ($nome == "Rodrigo")):
    echo "É verdadeiro";
else:
    echo "É Falso";
endif;
echo"<br>";

if (!($idade == 25) and ($nome == "Rodrigo")):
    echo "É verdadeiro";
else:
    echo "É Falso";
endif;
echo"<br>";
