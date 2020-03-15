<?php

$a = 10;
$b = 5;

if($a>$b){
    echo "O maior número é $a";
}else{
    echo "O maior número é $b";
};
echo "<hr>";

$x = 1;
$y = 5;

$resultado = mt_rand($x , $y);
if(($resultado == 3 ) or ($resultado == 5)){
    echo "O número aleatório é $resultado";
}else{
    echo "O número não é 3 ou 5 ";
};
echo "<hr>";

$n1 = 1;
$n2 = 100;
$numero = mt_rand($n1, $n2);
if($numero > 50){
    echo "O número é maior que 50";
}else{
    echo "O número é menor que 50";
};
echo "<hr>";

$n3 = 0;
$n4 = 100;
$numero = mt_rand($n3, $n4);
if(($numero > 50) and ($numero / 2)){
    echo "O número cumpri a condição";
}else{
    echo "O número não cumpri a condição";
};
echo "<hr>";
if(($numero > 50) and ($numero / 2) and  ($numero == 0)){
    echo "O número cumpri a condição";
}else{
    echo "O número não cumpri a condição";
};
echo "<hr>";

$quantidadeDeAlunos = 5;

if($quantidadeDeAlunos){
    echo "true";
}else{
    echo "false";
}
echo "<hr>";

$numero = 5;

if($numero % 5){
    echo "O número é par";
}else{
    echo "O número é impar";
}
echo "<br>";
echo ($numero %5) ? "O número é par" : "O número é impar";
echo "<hr>";


$nun1 = 0;
$nun2 = 8;
$falhaNoUpload= mt_rand($nun1,$nun2);

switch($falhaNoUpload):
    case "0":
        echo "Upload com sucesso!";
    break;

    case "1":
        echo "O arquivo enviado excede o limite definido na diretiva upload_max_filesize do php.ini.";
    break;

    case "2":
        echo "O arquivo excede o limite definido em MAX_FILE_SIZE no formulário HTML.";
    break;

    case "3":
        echo "O upload do arquivo foi feito parcialmente.";
    break;

    case "4":
        echo "Nenhum arquivo foi enviado.";
    break;

    case "5":
        echo "** Não existe mais um código 5** :)";
    break;

    case "6":
        echo "Pasta temporária ausente";
    break;

    case "7":
        echo "Falha em escrever o arquivo em disco. ";
    break;

    case "8":
        echo "Uma extensão do PHP interrompeu o upload do arquivo. ";
    break;

endswitch;
echo "<hr>";

$n5 = 1;
$n6 = 5;
$tipoDeUsuario = mt_rand($n5 , $n6);

switch($tipoDeUsuario):
    case "1":
        echo "Administrador";
    break;

    case "2":
        echo "Editor";
    break;

    case "3":
        echo "Autor";
    break;

    case "4":
        echo "Colaborador";
    break;

    case "5":
        echo "Assinante";
    break;

endswitch;
echo "<hr>";

$x1 = 1;
$y1 = 100;
$result1 = mt_rand($x1 , $y1);
$result2 = mt_rand($x1 , $y1);

if($result1 >= $result2){
    echo "$result1 é maior ou igual";

}else{
    echo "Não atende as condições";
}







