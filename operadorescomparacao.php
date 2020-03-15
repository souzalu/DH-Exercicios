<?php

if (10 == 10) :
    echo "positivo";
else :
    echo "negativo";
endif;
echo "<br>";

if (10 == "10") :
    echo "positivo";
else :
    echo "negativo";
endif;
echo "<br>";

if (10 != 10) :
    echo "positivo";
else :
    echo "negativo";
endif;
echo "<br>";

if (10 === "10") ://verifica se 10 é identico a "10"
    echo "positivo";
else :
    echo "negativo";
endif;
echo "<br>";

if (10 !== 11) ://verifica se 10 é identico a "10"
    echo "positivo";
else :
    echo "negativo";
endif;
echo "<br>";

if (10 <> "11") ://sinal de diferente
    echo "positivo";
else :
    echo "negativo";
endif;
echo "<br>";

if (10 <30) :
    echo "positivo";
else :
    echo "negativo";
endif;
echo "<br>";

if (10 >=30) :
    echo "positivo";
else :
    echo "negativo";
endif;
echo "<br>";

//só pode retornar 3 valores
// se o lado esquerdo for menor vair retornar -1, se forem igual retorna 0 e seo 
//lado direito for maior retorna 1.


var_dump(20<=>2);
var_dump(20<=>30);
var_dump(20<=>20);