<!-- Exemplos de objetos
Um objeto contém exatamenter a mjesma estrutura e as propriedades de uma classe, no entento sua estrutura é din^Çamica, seus atributos podem mudar de valor durante a execução do programa e podemos declarar diversos objetos oriundos de uma mesma classe. -->

<?php
//incluindo a classe que criada na pasta 'Classes'
include("class.php");

//Instanciando um novo objeto 
$carro0 = new carro();

//Atribuindo valores aos atributos 
$carro0->ano    ="2012";
$carro0 -> modelo   = "Co4 VTR";
$carro0 -> cor  = "Preto";
$carro0 -> fabricante   = "Citroen";
$carro0 -> status   = "Disponivel";

//Instanciando um novo objeto 

$carro1 = new carro();

//Atribuindo valores aos atributos
$carro1->ano        ="2014/20215";
$carro1 -> modelo      = "Corcel 2";
$carro1 -> cor         = "Amarelo";
$carro1 -> fabricante      = "Ford";
$carro1 -> status       = "Indisponivel";


//Instanciando um novo objeto 
$carro2 = new carro();

//Atribuindo valores aos atributos 
$carro2->ano    ="2023";
$carro2 -> modelo   = "Creta";
$carro2 -> cor  = "Preto";
$carro2 -> fabricante   = "Hyunday";
$carro2 -> status   = "Disponivel";

//Instanciando um novo objeto 
$carro3 = new carro();

//Atribuindo valores aos atributos 
$carro3->ano    ="2023";
$carro3 -> modelo   = "Lamborghini Urus ";
$carro3 -> cor  = "Azul";
$carro3 -> fabricante   = "Lamborghini";
$carro3 -> status   = "Disponivel";


//Instanciando um novo objeto 
$carro4 = new carro();

//Atribuindo valores aos atributos 
$carro4->ano    ="2022";
$carro4 -> modelo   = "Ferrari Purosangue ";
$carro4 -> cor  = "Prata";
$carro4 -> fabricante   = "Ferrari";
$carro4 -> status   = "Disponivel";


//Instanciando um novo objeto
$carro5 = new carro();

//Atribuindo valores aos atributos
$carro5->ano ="2021";
$carro5 -> modelo = "Tesla Model 3";
$carro5 -> cor = "Verde";
$carro5 -> fabricante = "Tesla";
$carro5 -> status = "Disponivel";

//Instanciando um novo objeto
$carro6 = new carro();

//Atribuindo valores aos atributos
$carro6->ano ="2020";
$carro6 -> modelo = "BMW i8";
$carro6 -> cor = "Branco";
$carro6 -> fabricante = "BMW";
$carro6 -> status = "Disponivel";

//Instanciando um novo objeto
$carro7 = new carro();

//Atribuindo valores aos atributos
$carro7->ano ="2019";
$carro7 -> modelo = "Mercedes-Benz SLS AMG";
$carro7 -> cor = "Preto";
$carro7 -> fabricante = "Mercedes-Benz";
$carro7 -> status = "Disponivel";

//Instanciando um novo objeto
$carro8 = new carro();

//Atribuindo valores aos atributos
$carro8->ano ="2018";
$carro8 -> modelo = "Audi R8";
$carro8 -> cor = "Vermelho";
$carro8 -> fabricante = "Audi";
$carro8 -> status = "Disponivel";

//Instanciando um novo objeto
$carro9 = new carro();

//Atribuindo valores aos atributos
$carro9->ano ="2017";
$carro9 -> modelo = "Porsche 911";
$carro9 -> cor = "Branco";
$carro9 -> fabricante = "Porsche";
$carro9 -> status = "Indisponivel";


//Imprimindo na tela do usuário o valor do objeto (carro0) acima:
echo "Carro". $carro0 -> status . ":<br/><br/>";

echo "Fabricante de carro:" . $carro0 -> fabricante . "<br/>
                 Modelo:". $carro0 -> modelo . "<br />
                de cor :" . $carro0 -> cor . "<br />
                Ano :" .$carro0-> ano . "<br/> <hr>" ; 

//imprimindo na tela do usuário os valores do objeto (carro1) acima:
echo "Carro" . $carro1 -> status . ": <br/><br/>";

echo "Fabricante do carro:". $carro1 -> fabricante . "<br/>
Modelo:". $carro1-> modelo . "<br/>
de Cor:" . $carro1-> cor. "<br/>
Ano:" . $carro1 -> ano . "<br /><hr>";


//imprimindo na tela do usuário os valores do objeto (carro2) acima:
echo "Carro" . $carro2 -> status . ": <br/><br/>";

echo "Fabricante do carro:". $carro2 -> fabricante . "<br/>
Modelo:". $carro2-> modelo . "<br/>
de Cor:" . $carro2-> cor. "<br/>
Ano:" . $carro2 -> ano . "<br /><hr>";


//imprimindo na tela do usuário os valores do objeto (carro3) acima:
echo "Carro" . $carro3 -> status . ": <br/><br/>";

echo "Fabricante do carro:". $carro3 -> fabricante . "<br/>
Modelo:". $carro3-> modelo . "<br/>
de Cor:" . $carro3-> cor. "<br/>
Ano:" . $carro3 -> ano . "<br /><hr>";


//imprimindo na tela do usuário os valores do objeto (carro4) acima:
echo "Carro" . $carro4 -> status . ": <br/><br/>";

echo "Fabricante do carro:". $carro3 -> fabricante . "<br/>
Modelo:". $carro4-> modelo . "<br/>
de Cor:" . $carro4-> cor. "<br/>
Ano:" . $carro4 -> ano . "<br /><hr>";


//imprimindo na tela do usuário os valores do objeto (carro5) acima:
echo "Carro" . $carro5 -> status . ": <br/><br/>";

echo "Fabricante do carro:". $carro5 -> fabricante . "<br/>
Modelo:". $carro5-> modelo . "<br/>
de Cor:" . $carro5-> cor. "<br/>
Ano:" . $carro5 -> ano . "<br /><hr>";


//imprimindo na tela do usuário os valores do objeto (carro6) acima:
echo "Carro" . $carro6 -> status . ": <br/><br/>";

echo "Fabricante do carro:". $carro6 -> fabricante . "<br/>
Modelo:". $carro6-> modelo . "<br/>
de Cor:" . $carro6-> cor. "<br/>
Ano:" . $carro6 -> ano . "<br /><hr>";


//imprimindo na tela do usuário os valores do objeto (carro7) acima:
echo "Carro" . $carro7 -> status . ": <br/><br/>";

echo "Fabricante do carro:". $carro7 -> fabricante . "<br/>
Modelo:". $carro7-> modelo . "<br/>
de Cor:" . $carro7-> cor. "<br/>
Ano:" . $carro7 -> ano . "<br /><hr>";

//imprimindo na tela do usuário os valores do objeto (carro8) acima:
echo "Carro" . $carro8 -> status . ": <br/><br/>";

echo "Fabricante do carro:". $carro8 -> fabricante . "<br/>
Modelo:". $carro8-> modelo . "<br/>
de Cor:" . $carro8-> cor. "<br/>
Ano:" . $carro8 -> ano . "<br /><hr>";


//imprimindo na tela do usuário os valores do objeto (carro9) acima:
echo "Carro" . $carro9 -> status . ": <br/><br/>";

echo "Fabricante do carro:". $carro9 -> fabricante . "<br/>
Modelo:". $carro9-> modelo . "<br/>
de Cor:" . $carro9-> cor. "<br/>
Ano:" . $carro9 -> ano . "<br /><hr>";

?>