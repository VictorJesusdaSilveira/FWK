<?php
$texto = "Aula de frameworks";
$texto2 = "Aula de frameworks para web";
$texto3 = "Aula de Frameworks";
$texto4 = "Victor tem 17 anos";
$texto5 = "maracuja";
$texto6 = "gosto de maracuja";
$numero = "45 99911-0001";

$res = preg_match("/computador/", "computador");
var_dump($res);

//usando o caractere popular . por exemplo "/c.mputadores/", o ponto significa qualquer caractere então pode ser camputador, cbmputador ccmputador e assim por diante
$res1 = preg_match("/c.mputador/", "cFmputador"); //vai funcionar até pq o . retorna qualquer caractere, então ele pode retornar cFmputador
var_dump($res1);

//usando o caractere popular * por exemplo "/go*/" ele irá retornar g, go, goo como verdadeiro, ele representa zero ou mais repetições, então como ele está dps do "o" ele está verificando o "o" e assim ele verificou se tem repetição ou não
$res2 = preg_match("/go*l/", "gooooool");//vai funcionar até pq ele verifica se tem repetição ou não, então mesmo se fosse "gol" ou "gl" funcionaria
var_dump($res2);


//usando o caractere popular + por exemplo "/go+/" ele irá retornar go, goo, gooo e ele não irá retornar g, ele representa um ou mais, então como ele está verificando a letra o, a palavra terá de ter ao menos um o
$res3 = preg_match("/go+/", "goooo");
var_dump($res3);

//usando o caractere popular ^ por exemplo "/^gol/" ele irá determinar o início da string, já o "/gol$/" ele irá determinar o final da string e os dois juntos "/^gol$/" ele irá determinar o início e o fim da string

//irá pegar a palavra entre parênteses e colocará em um vetor, onde a posição 0 será a frase completa e a posição 1 será a palavra que queremos capturar, o parênteses serve para captura
preg_match("/Aula de (frameworks)/", $texto, $vet);
var_dump($vet);


//nesse caso ele irá retornar um vetor com 3 posições, posição 0 retornando a frase inteira, posição 1 retornando a palavra frameworks e a posição 2 retornando a palavra web
preg_match("/Aula de (frameworks) para (web)/", $texto2, $vet2);
var_dump($vet2);

//ainda irá retornar frameworks ainda, pois essa estrutura ([a-z]+) retorna qualquer combinação de letrar em minúsculo
preg_match("/Aula de ([a-z]+)/", $texto, $vet3);
var_dump($vet3);

//ainda irá retornar frameworks ainda, pois essa estrutura ([A-Z]+) retorna qualquer combinação de letras em maiúsculo
preg_match("/Aula de ([A-Z]+)/", $texto3, $vet4);
var_dump($vet4);


preg_match("/([a-zA-Z]+)/", $texto4, $vet5);
var_dump($vet5);

/*Verificações: 
    \d = qualquer número
    \D = tudo que não for número
    \w = qualquer palavra
    \W = tudo que não for número 
    \s = espaço

    estrutura = [0-9] \d (se coloca depois da expressão)
*/


/*Quantificadores:
    {5} exatamente 5 vezes
    {2, 4} entre 2 e 4 vezes

*/    

preg_match("/^\d{2} \d{5}-\d{4}$/", $numero, $vet6);
var_dump($vet6);

//Alternativas: | significa o "ou"
preg_match("/maracuja|banana/", $texto5, $vet6);
var_dump($vet6);

preg_match("/gosto de (maracuja|banana)/", $texto6, $vet7);
var_dump($vet7);


//grupos não capturantes (só servem para agrupar, verificar se existe sem colocar no vetor) e este é o caractere ?:  exemplo:
//preg_match("/cachorro (?:quente|frio)/")


//.* pega o máximo de caracteres possíveis 

//.? pega o mínimo de caracteres possíveis


/*Regex SQL real:
    "/CREATE TABLE `(.*?)`\((.*?)\)\s* ENGINE=/"s

*/


?>
