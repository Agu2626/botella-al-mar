<?php

/*Ejercicio 1

Generar una función que reciba un valor aleatorio entre 1 y 100, luego mostrar el valor y un mensaje que informe si es menor a 50, mayor a 50 o igual a 50.
*/

//declaro variable y le asignó un valor aleatorio
$num = rand(0, 100);



//defino la funcion
function mayor_menor_igual($num){

 //muesntro en pantalla
    echo "El numero aleatorio es: $num <br><br>";

//uso el if para ver si igual a 50
if ($num == 50){
    echo "El numero es igual a cincuenta";

//uso el elseif para ver si mayor a 50
}elseif($num > 50){

    echo "El numero es mayor a cincuenta";

//uso el else para ver si menor a 50 
}else{
    echo "El numero es menor a cincuenta";
}


}


//-----------------------------------------------------------------------------
/*Ejercicio 2

Generar una funcion que reciba un valor aleatorio y diga a que mes corresponde. Los meses deben estar almacenados en un array y retornar el valor correspondiente utilizando su índice. Por ej: si la función recibe el valor 5, deberá mostrar MAYO.
*/

//Defino la funcion
function nombre_mes($numero_mes){

    //Creo y lleno el array
    $meses = array("parchecito","Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre");

        
    //retorno el nombre del mes
    return $meses[$numero_mes];
   
    

}

//-----------------------------------------------------------------------------

/*Ejercicio 3
Generar una función que reciba 2 valores distintos y aleatorios entre 1 y 100. Mostrar todos los números entre ellos 2, en forma ascendente y descendente.*/


//con bandera controlo si hay numeros entre el primer y segundo numero
$bandera = 0; 

//declaro la funcion
function numeros_entre($primer, $segundo) {
    
    //declaro variables (contror el acendente y decendente)
    $inicio = 0;
    $resta = 0;

    //uso este if para "ver" si hay numero entre el primer y segundo numero
    //y para hacer la resta de mayor a menor numero
    if ($primer < $segundo){
        //hago la resta
        $resta = $segundo - $primer;
        
        
    }elseif ($primer < $segundo){
        //hago la resta
        $resta = $primer - $segundo;
        

    }

    
    
    
    //corroboro que los numeros no sean iguales, y que por lo menos alla un numero entre ellos
    if ($primer == $segundo or $resta == 1){//se podria simplificar
        $bandera = 0;//
        
        //veo si cuales mayor
    }elseif ($primer < $segundo){

        //si bandera es igual a 1, entoces hay numero estre el 1er y 2do
        $bandera = 1;

        //calculo la distancia del intervalo (para contra el For)
        $distancia = $segundo - $primer;

        //lo uso para calcular el primer numero del acendente
        $inicio = $primer;

        //lo uso para calcular el primer numero del decendente
        $final = $segundo;

         //veo si cuales mayor (por descarte)
    }else{

        //si bandera es igual a 1, entoces hay numero estre el 1er y 2do
        $bandera = 1;

        //calculo la distancia del intervalo (para contra el For)
        $distancia = $primer - $segundo ;

        //lo uso para calcular el primer numero del acendente
        $inicio = $segundo;

        //lo uso para calcular el primer numero del decendente
        $final = $primer;

        
    }
    
    
    //si hay distacia entre los numeros hago...
  if ($bandera != 0){

        //muestro titulo
      echo "Ascendente<br>";

      //entra al For
    for ($i=1; $i <$distancia  ; $i++) { 
        
        //Muestro el 1er numero del intervalo, sumado inicio + i (Ascendente)
        echo "(   ".$inicio + $i.")     .  ";
    }

    //espacio
    echo"<br><br><br>";

        //muestro titulo
    echo "Descendente<br>";

    //entra al For
 for ($i=1; $i <$distancia  ; $i++) { 
        //Muestro el 1er numero del intervalo, sumado final + i (Descendente)
        echo "[     ".$final - $i."]             _   ";
    }

  }else{
    //le digo que no hay numeros entre el intervalo (en pantalla)
    echo "No hay ningun numero, entre el primer numero y el segundo";


  }

}


/*Ejercicio 4
Generar 3 funciones distintas, cada una deberá recibir 2 valores. Luego deberá mostrar por pantalla la tabla respecto a uno de los números recibidos y como límite de la multiplicación, el otro número. Es decir que si se pasa el 2 y 4, deberá ejecutarse y mostrar la tabla del 2 hasta el múltiplo 4. Son 3 funciones, porque hay una debe usar la estructura for, otra do-while y la última while.*/


//creo la funcion
function multiplicacion_limite_for($mul, $limite){

    
    //muestro que tipo de ciclo
    echo "Con la estructura for:<br>";
    //esterica
    echo ".....................................................<br><br>";
    //muestro los argumentos recibidos
    echo "Numero recibido: ".$mul."<br>";
    echo "Limite: ". $limite."<br><br>";

    //comienza a iterar hasta un numero muy grande (que en principio no llegaria)
    for ($i=1; $i < 1000 ; $i++) { 

            //si el total de la multiplicacion llega al limite(argumento), entoces se entra al condicional
         if ($i * $mul > $limite){
            // se aplica el break, e interrumpe for (para no pasarme del limite)
            break;
        }
        //muestra la tabla del primer argumento enviado
        echo $i." x ".$mul." = ".$i * $mul."<br>"; 

       
    }

}

//creo la funcion
function multiplicacion_limite_dowhile($mul, $limite){


    //muestro que tipo el de ciclo
    echo "Con la estructura do-while:<br>";
    //esterica
    echo ".....................................................<br><br>";
    //muestro los argumentos recibidos
    echo "Numero recibido: ".$mul."<br>";
    echo "Limite: ". $limite."<br><br>";

    //delcaro la variable i
    $i = 1;
    do {
        //muestra la tabla del primer argumento enviado
        echo $i." x ".$mul." = ".$i * $mul."<br>"; 

        // el acomulador suma 1, cada vez q se repite el ciclo 
        $i += 1;

        //si el total de la multiplicacion llega es igual o supera al limite (entoces termina el ciclo)
    }while ($i * $mul <= $limite);

}


function multiplicacion_limite_while($mul, $limite){

    //muestro que tipo el de ciclo
    echo "Con la estructura while:<br>";
    //esterica
    echo ".....................................................<br><br>";
    //muestro los argumentos recibidos
    echo "Numero recibido: ".$mul."<br>";
    echo "Limite: ". $limite."<br><br>";

    //delcaro la variable i
    $i = 1;

    //si el total de la multiplicacion llega es igual o supera al limite (entoces termina el ciclo)
    while ($i * $mul <= $limite) {

         //muestra la tabla del primer argumento enviado
        echo $i." x ".$mul." = ".$i * $mul."<br>";
        
        // el acomulador suma 1, cada vez q se repite el ciclo
        $i += 1;
        
    }
 

}


/*
Ejercicio 5
Generar una función que simule el tiro de un dado 100 veces. Luego mostrar cuantas veces salió cada valor.
*/

//declaro la funcion
function dado_100_veces(){

//uso para tener las seis posiciones que puede salir el dado (esta vacio)
$caras_dado = array();

//uso para contar las cantidad de veces que sale una cada del dado (esta vacio)
$contar_veces = array();

//genero con el ciclo los numeros del 0 al 100, para poder comprar
for ($i=1; $i <=6 ; $i++) { 
    
    //le agregago elementos al array, y los llenos con un numero utilizando la variable $i
    array_push($caras_dado, $i);// va del 1 al 6 (para comparar)

     
    //le agregago elementos al array, y los llenos con el numero cero
    $contar_veces[] = 0 ;// va del 1 al 6 (pero para contar)(creo 6 lugares vacios)
    
   
}


//uso el for para generar y comprar el numero que sale con las 6 posibilidades (y contar las cantidad de veces)
for ($i=0; $i <=99 ; $i++) { 
    
    //genero el numero al alzar (simulo la tirada del dado)
    $azar = rand(1, 6);

    //uso selec, para ver que cara del lado salio, y sumarle uno al array correspodiente con el esa cara
    switch($azar){

        //compara el numero que salio, con la 1er cara, osea el valor 1
        case ($caras_dado[0]):
            
            //le suma uno al array contador, de la cara correspodiente
            $contar_veces[0]++;

            //sale del ciclo
            break;

            //compara el numero que salio, con la 2er cara, osea el valor 2
            case ($caras_dado[1]):
                
            
            //le suma uno al array contador, de la cara correspodiente
            $contar_veces[1]++;
            //sale del ciclo
            break;

        //compara el numero que salio, con la 3er cara, osea el valor 3
            case ($caras_dado[2]):
                
            //le suma uno al array contador, de la cara correspodiente
            $contar_veces[2]++;
            //sale del ciclo
            break;

        //compara el numero que salio, con la 4er cara, osea el valor 4
            case ($caras_dado[3]):
                
            //le suma uno al array contador, de la cara correspodiente
            $contar_veces[3]++;
            //sale del ciclo
            break;

        //compara el numero que salio, con la 5er cara, osea el valor 5
            case ($caras_dado[4]):

            //le suma uno al array contador, de la cara correspodiente
            $contar_veces[4]++;
            //sale del ciclo
            break;

        //compara el numero que salio, con la 6er cara, osea el valor 6         
            case ($caras_dado[5]):
                
            //le suma uno al array contador, de la cara correspodiente
            $contar_veces[5]++;
            break;
            
        }

        

      

    }
     
    //lo use para ver si estaba todo correcto
   //print_r($contar_veces); 

   //lo use para ver la cantidad de veces que se repitio el ciclo
   //echo "i: <br>".$i."<br><br>";

   //sirve para indicarle que cara del dado, salio "x" cantidad de veces
    $j = 1;

    //uso para mostrar el arreglo, recorriendo uno a uno todos los elementos de este , e indicar con $j a la que lado de la cara pertenece
   foreach ($contar_veces as $elementos){
    
    //muestro lado de la cara del dado, uno a uno, e indico cuantas veces salio
    echo "El lado de la cara ".$j." salio: ".$elementos."<br><br>";

    //uso el acomulador para ir incremento, e indicar el lado de la cara del dado
    $j++;


   }

}

/*
Ejercicio 6

Generar una función que simule el tiro de una ruleta, luego mostrar el número que salió con la columna y docena que pertenece. Como plus, si se desafian, el color que tiene.
*/

//declaro la funcion
function tiro_ruleta(){

//variable para simular el tiro del dado
$tiro = 0;

//delcaro el array, donde se depositaran los valores de la ruleta
$posiciones = array();

//deposito los valores donde estan los valores de la colimna 1
$columna_1 = array();
//deposito los valores donde estan los valores de la colimna 2
$columna_2 = array();
//deposito los valores donde estan los valores de la colimna 3
$columna_3 = array();

//utilizo para sumar de a 3 en el array $columna_1
$auxiliar = 1;

//utilizo para sumar de a 3 en el array $columna_2
$auxiliar_2 = 2;

//utilizo para sumar de a 3 en el array $columna_3
$auxiliar_3 = 3;

//lleno array con las 36 posciones, mas el cero
for ($i=0; $i <= 36; $i++) { 

    

    //deposito en el array, 0 al 36 en cada posicion correspodiente
    $posiciones[$i] = $i;

    
    // condicional para limitar las columnas(los array) hasta a 34, 35, 36
    if ($i <= 11){

        

        //deposito los valores de la columna
        array_push($columna_1, $auxiliar) ;

        //deposito los valores de la columna
        array_push($columna_2, $auxiliar_2) ;

        //deposito los valores de la columna
        array_push($columna_3, $auxiliar_3) ;

        //use para pobra si estan bien los numeros de las 3 columnas
        //echo " -".$columna_1[$i];
        //echo " -".$columna_2[$i];
        //echo " -".$columna_3[$i];

        //acomulador, suma de 3 para representa la columna 1
         $auxiliar += 3;// llega maximo 34
         //acomulador, suma de 3 para representa la columna 2
         $auxiliar_2 += 3;// llega maximo 35
         //acomulador, suma de 3 para representa la columna 
         $auxiliar_3 += 3;// llega maximo 36

    }
    
}
  
    //simulo el tiro del dado
    $tiro = rand(0, 36);
            
    //imprimo en pantalla el valor que le salio al dado
    echo "<br>El numero que salio en la ruleta es el : ".$tiro."<br><br>";
    
    //recorro todos los elementos de columna_1
    foreach ($columna_1 as $elementos) {
    
        //compara el tiro del dado (la cara que salio) con el array elementos, previamente cargo con todos los valos que compone esta columna_1, ej 1 ,4 ,7 , ect...
    if ($elementos == $tiro) {//si le pongo yo el 13 lo toma
        echo "Pertence a la primer columna.<br>";
    }

       

    //lo uso para terminar la ejecucion de la funcion
    //fue la manera mas practica que encontre para resolverlo
    //ya que me habia olvidado del cero
    if ($tiro == 0){
        //imprimo en pantalla ambas declaracione
        echo "No pertenece a ninguna columna <br>" ;
        echo "y a ninguna docena, tampoco tiene color <br><br><br><br>" ;

        //se termina o sale de la funcion
        exit;
     }
    
}
    
    //recorro todos los elementos de columna_2
  foreach ($columna_2 as $elementos) {
    
    //compara el tiro del dado (la cara que salio) con el array elementos, previamente cargo con todos los valos que compone esta columna_2, ej 2 ,5 ,8 , ect...
    if ($elementos == $tiro) {//si le pongo yo el 13 lo toma

        //imprimo en pantalla a que columna pertence el numero
        echo "Pertence a la segunda columna.<br>";
    }

    

    
}
    //recorro todos los elementos de columna_3
 foreach ($columna_3 as $elementos) {
    
    //compara el tiro del dado (la cara que salio) con el array elementos, previamente cargo con todos los valos que compone esta columna_2, ej 3 ,6 ,9 , ect..
    if ($elementos == $tiro) {//si le pongo yo el 13 lo toma

        //imprimo en pantalla a que columna pertence el numero
        echo "Pertence a la tercera columna<br>";
    }
        
}

    //ultilizo el condicional para ver a que docena pertenece
    //pertenece a la primera decena
    if ($tiro <= 12){

        //imprimo en pantalla a que docena pertenece
        echo "<br>y a la primer docena ";

        //pertenece a la segunda decena
    }elseif ($tiro >= 12 and $tiro <= 24) {

        //imprimo en pantalla a que docena pertenece
        echo "<br>y a la segunda docena ";

        //pertenece a la tercera decena
    }else{

        //imprimo en pantalla a que docena pertenece
        echo "<br>y a la tercera docena ";
    }

    //imprimo espacio
    echo "<br>";

    //calculo el resto, para poder controlar los codicionales siguientes (que son los de los colores)
    $par_impar = $tiro % 2;

    //use para ver que salia
    //echo $par_impar;

    //es para ver los primeros 10 numeros, el color que pertenece,si al rojo o negro
    if ($tiro <= 10 and $par_impar == 0){

        //imprimo en pantalla el color que es
        echo "<br>El color es negro";

        //sigo comprobando a que color pertenece, los primeros 10 numeros
    }elseif ($tiro <= 10 and $par_impar == 1) {

        //imprimo en pantalla el color que es
        echo "<br>El color es rojo";
    }
    

    //es para ver el color desde 11 al 12
    if ($tiro > 10 and $tiro <= 12 and $par_impar == 0){

        //muestro en pantalla el color
        echo "<br>El color es rojo";

        //sigo comparando para ver si pertenece a este color
    }elseif ($tiro > 10 and $tiro <= 12 and $par_impar == 1) {

        //muestro en pantalla el color
        echo "<br>El color es negra";
    }

    //es para ver desde del 13 al 18, el color que pertenece, si al rojo o negro
    if ($tiro > 12 and $tiro <= 18 and $par_impar == 0){

        //muestro en pantalla el color
        echo "<br>El color es rojo";

    //sigo vericando el color al que pertenece
    }elseif ($tiro >= 12 and $tiro <= 18 and $par_impar == 1) {
        
        //muestro en pantalla el color
        echo "<br>El color es negro";
    }


     //es para los numeros del 19 al 27, el color que pertenece, si al rojo o negro
    if ($tiro > 19 and $tiro <= 27 and $par_impar == 0){

        //muestro en pantalla
        echo "<br>El color es negro";

        //sigo comparando
    }elseif ($tiro >= 19 and $tiro <= 27 and $par_impar == 1) {

        //muestro en pantalla
        echo "<br>El color es rojo";
    }

    //este condicional es solo para el numero 28 (osea numero que le salio al dado en ele tiro)(me parecio la manera mas sencilla de resolver el proble)
    if ($tiro == 28) {

        //muestro en pantalla
        echo "<br>El color es negro";
    }
    

      //es para los numeros (tiros del dado) del 29 al 34, el color que pertenece, si al rojo o negro
    if ($tiro > 28  and $par_impar == 0){

        //muestro en pantalla
        echo "<br>El color es rojo";

        //sigo comparando
    }elseif ($tiro > 28 and $par_impar == 1) {

        //muestro en pantalla
        echo "<br>El color es negro";
    }

    

 
}


?>