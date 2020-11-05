<h1>Primeira Página</h1>
<?php
$nome = "Luarde";
$idade = 24;
$altura = 1.77;
$casado = true;
$alunos = ["João", "Ana", "Paulo"];

if($idade >= 18){
    echo("<h3>Já pode votar em Biden! </h3>");
} else {
    echo("<h3 style='color:red'> Não pode votar ainda</>");
}

echo("<ul>");
echo("<li>" . $alunos[0] . "</li>");
echo("<li>" . $alunos[1] . "</li>");
echo("<li>" . $alunos[2] . "</li>");
echo("</ul>");

$file = fopen("test.txt", "r");

while (! feof($file)){
    $line = fgets($file);
    echo $line . "<br>";
}

fclose($file);

?>