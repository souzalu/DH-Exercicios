<?php

//função is_array
$nomes = array("Primo"=>"Rodrigo","Vizinho"=> "Felipe","Mãe"=> "Maria","Pai"=> "josé");

//aqui estou perguntando - é um array, e o retorno deve
//ser verdadeiro ou falso.

echo is_array($nomes);// retorno 1,ou seja, é verdadeiro, é um array.
echo "<hr>";

var_dump(is_array($nomes));//retorno true, ou seja, é verdadeiro, é um array.
echo "<hr>";

if(is_array($nomes)){
    echo "É um array";
}else{
    echo "Não é um array";

};
echo "<hr>";

//função in_array - verifica se um determinado valor existe em alguma posição do array.

echo in_array("Rodrigo", $nomes); //estou perguntando se rodrigo existe em $nomes, retorno 1, ou seja, verdadeiro.
echo "<hr>";

if(in_array("Felipe", $nomes)): //se felipe existir no array nomes ... 
    echo "Existe no array";

else:
    echo "Não existe";

endif; 
echo "<hr>";

//função array_keys - retorna um novo array com as chaves do array passado como parametro.

$keys = array($nomes);

print_r($keys);
echo "<hr>";
// função array_values - retorna o valor do array passado por parametro.

$values = array_values($nomes);//apenas mostrou os valores sem os indices
print_r($values);
echo "<hr>";

//função merge - agrega conteudo dos dois arrays

$carros = array("Camaro", "Uno", "Gol");
$motos = array("Pop100", "50cc", "cb1000");


$veiculos = array_merge($carros, $motos);//junta os dois arrays.
print_r($veiculos);
echo "<hr>";

//função array_pop - exclui a ultima posição do array

$carros = array("Camaro", "Uno", "Gol");
print_r($carros);
echo "<br>";
echo array_pop($carros);//mostra o que foi excluido
echo "<br>";
array_pop($carros);
print_r($carros);
echo "<hr>";

//função array-shift - remove a primeira posição do array
$carros = array("Camaro", "Uno", "Gol");
print_r($carros);
echo "<br>";
echo array_shift($carros);//mostra o que foi excluido
echo "<br>";
array_shift($carros);
print_r($carros);
echo "<hr>";

//array_unshift adiciona um ou mais elementos no começo do array

$frutas = array("uva", "laranja","maça");
print_r($frutas);

array_unshift($frutas, "manga", "acerola", "morango");
echo "<br>";
print_r($frutas);
echo "<hr>";


// array_push adicona um ou mais elementos no final do array

$frutas = array("uva", "laranja","maça");
print_r($frutas);

array_push($frutas, "manga", "acerola", "morango");
echo "<br>";
print_r($frutas);
echo "<hr>";

//função array_combine- mescla dois arrays

$keys = array("Campeão", "Vice", "Terceito");
$values = array("Vasco", "Flamengo", "Botafogo");

$times = array_combine($keys, $values);
print_r($times);
echo "<hr>";

//função_sum serve para calcular a soma dos elementos de um array

$soma = array(5,6,10,8);
$total = array_sum($soma);
print_r($total);
echo "<br>";
echo array_sum($soma);
echo "<hr>";


//função explode transforma string em array 

$data = "30/02/2020";
$novadata = explode('/', $data);
print_r($novadata);
echo "<br>";

$frase = "Meu nome não é Bia";
$array = explode(" ", $frase);
print_r($array);
echo "<hr>";

//função implode - transforma array em string

$nomes = array("Rodrigo", "Carlos", "Neusa", "Talita");
$string = implode(" , ", $nomes);
echo $string;