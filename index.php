<?php

//enlaso los archivos php
require_once "functions.php";

//genero un numero aleatorio
$num_aletorio = rand(0, 100);


echo "____________________________________________________________________________________________";
echo "<br>_________________________________________________________________________";
echo "___________________________________________<br><br>";
echo "Entregable 1º :<br>";
echo "- - - - - - - - - - - <br>";
echo "Instituto San Pablo 9112 º<br>";
echo "_ _ _ _ _ _ _ _ _ _ _ _ _ _ <br><br><br>";
echo "Profesor: Nicolás Rotili San Pedro <br>";
echo "Materia: Desarrollo de Sistema Web 3º Sistemas <br>";


//mestro en pantalla el numero del ejercicio
echo "_________________________________________________________________________";
echo "___________________________________________";
echo "<br><br> Ejercicio 1º <br>";
echo "--------------<br>";
echo "Consigna_ <br> <br>Generar una función que reciba un valor aleatorio entre 1 y 100, luego mostrar el valor y un mensaje que informe si es menor a 50, mayor a 50 o igual a 5<br><br>";

//llamo funcion
mayor_menor_igual($num_aletorio);

//mestro en pantalla el numero del ejercicio
echo "<br>_________________________________________________________________________";
echo "___________________________________________";
echo "<br><br> Ejercicio 2º <br>";
echo "--------------<br>";
echo "Consigna_ <br> <br>Generar una funcion que reciba un valor aleatorio y diga a que mes corresponde. Los meses deben estar almacenados en un array y retornar el valor correspondiente utilizando su índice. Por ej: si la función recibe el valor 5, deberá mostrar MAYO. <br><br>";

//declaro variable y le asignó un valor aleatorio
$numero_mes = rand(1, 12);



//llamo funcion
$mes_muestro = nombre_mes($numero_mes);

//muestro el numero del meses
echo "Numero de mes: $numero_mes <br>";

echo $mes_muestro."<br>";


//muestro en pantalla el numero del ejercicio
echo "<br>_________________________________________________________________________";
echo "___________________________________________";
echo "<br><br> Ejercicio 3º <br>";
echo "--------------<br>";
echo "Consigna_ <br> <br>Generar una función que reciba 2 valores distintos y aleatorios entre 1 y 100. Mostrar todos los números entre ellos 2, en forma ascendente y descendente.<br><br>";

//numero rando 1
$primer_numero = rand(1, 100);

//numero rando 2
$segundo_numero = rand(1, 100);

//muestro el primer numero
echo "Primer numero: ".$primer_numero."<br> Segundo numero: ".$segundo_numero ;

//espacio en la pagina
echo "<br><br>";

//llamo funcion
numeros_entre($primer_numero, $segundo_numero);

//muestro en pantalla el numero del ejercicio
echo "<br>_________________________________________________________________________";
echo "___________________________________________";
echo "<br><br> Ejercicio 4º <br>";
echo "--------------<br>";
echo "Consigna_ <br> <br>Generar 3 funciones distintas, cada una deberá recibir 2 valores. Luego deberá mostrar por pantalla la tabla respecto a uno de los números recibidos y como límite de la multiplicación, el otro número. Es decir que si se pasa el 2 y 4, deberá ejecutarse y mostrar la tabla del 2 hasta el múltiplo 4. Son 3 funciones, porque hay una debe usar la estructura for, otra do-while y la última while.<br><br>";


//numero aleatorio para el multiplicador
$mul = rand(1, 20);

//numero aleatorio para el limite
$limte = rand(10, 100);

//muestno en pantalla los puntos suspensivos, por estetica
echo " .....................................................<br>";
//llamo a las 3 funcines
multiplicacion_limite_for($mul, $limte);echo "........................";
echo "<br><br>  .....................................................<br>";
multiplicacion_limite_dowhile($mul, $limte);echo "........................";
echo "<br><br>  .....................................................<br>";
multiplicacion_limite_while($mul, $limte);echo "........................";
echo "<br><br>  .....................................................<br>";

//muestro en pantalla el numero del ejercicio
echo "<br>_________________________________________________________________________";
echo "___________________________________________";
echo "<br><br> Ejercicio 5º <br>";
echo "--------------<br>";
echo "Consigna_ <br> <br>Generar una función que simule el tiro de un dado 100 veces. Luego mostrar cuantas veces salió cada valor.<br><br>";

//llamo funcion
dado_100_veces();

//muestro en pantalla el numero del ejercicio
echo "<br>_________________________________________________________________________";
echo "___________________________________________";
echo "<br><br> Ejercicio 6º <br>";
echo "--------------<br>";
echo "Generar una función que simule el tiro de una ruleta, luego mostrar el número que salió con la columna y docena que pertenece. Como plus, si se desafian, el color que tiene.<br><br>";

//llamo funcion
tiro_ruleta();

//imprimo espacios al final de la pagina, por estetica
echo "<br>_________________________________________________________________________";
echo "___________________________________________<br><br><br>";

    

?>


