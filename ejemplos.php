<?php

/* ********** CLASE 06 ********** */

  $name = 'Marly Mejia';

  /* Muestra información sobre una variable */
  var_dump($name); 

  $lastName = 'Mejia';
  
  /* Comillas simples: no reconoce variables dentro de las comillas. */
  echo 'Marly $lastName <br/>'; 
  
  /* hay q concatenarlas con el operador de concatenación (.) */
  echo 'Marly '.$lastName.'<br/>';

  /* Comillas dobles: si interpreta variables dento
    No hace falta el operador de concatenación */
  echo "Marly $lastName <br/>";
  

  /* CLASE 08: Arreglos */

  echo '<br/><br/>';
  echo '<hr>';

  $job = [
    'PHP Developer',
    'Python Dev',
    'Devops'
  ];

  var_dump($job);

  /* CLASE 09: Condicionales y Ciclos */

  echo '<br/><br/>';
  echo '<hr>';

  $var1 = 1;

  if ($var1 > 2) {
    echo 'es mayor que 2';
  } else {
    echo 'no es mayor que 2';
  }

  echo '<br/><br/>';
  echo '<hr>';

  /* ********** CLASE 10: EJERCICIOS ********** */
  
  echo '<br/>';
  echo 'Ejercicio 1.';
  echo '<br/><br/>';

  $arreglo = 
  [
    'keyStr1' => 'lado',
    0 => 'ledo',
    'keyStr2' => 'lido',
    1 => 'lodo',
    2 => 'ludo'
  
  ];

  foreach ($arreglo as $key => $value) {
    echo $value.', ';  
  }
  echo '<br/>decirlo al revés lo dudo.<br/>';

  $reversed = array_reverse($arreglo);

  foreach ($reversed as $key => $value) {
    echo $value.', ';  
  }
  echo '<br/>¡Qué trabajo me ha costado!<br/>';
  

  echo '<br/>';
  echo 'Ejercicio 2.';
  echo '<br/><br/>';
  

  $paises =
  [
    'Venezuela' => ['Valencia', 'Barquisimeto', 'Mérida'],
    'España' => ['Sevilla', 'Madrid', 'Barcelona'],
    'Colombia' => ['Bogota', 'Cartagena', 'Medellin'],
    'Portugal' => ['Lisboa', 'Oporto', 'Evora'],
    'Polonia' => ['Cracovia', 'Varsovia', 'Lublin']
  ];

  foreach ($paises as $key => $value) {

    echo '<strong>'.$key.': </strong>';
    for ($i=0; $i < count($value) ; $i++) { 
      echo $value[$i].' ';
    }
    echo '<br/>'; 
  }

  echo '<br/>';
  echo 'Ejercicio 3.';
  echo '<br/><br/>';

  $valores = [23, 54, 32, 67, 34, 78, 98, 56, 21, 34, 57, 92, 12, 5, 61];

  sort($valores);

  echo '<strong>Los 3 números más bajos son: </strong><br/>';
  for ($i=0; $i < 3 ; $i++) { 
    echo $valores[$i].', ';
  }

  echo '<br/><strong>Los 3 números más altos son: </strong><br/>';
  for ($i=count($valores)-1; $i > count($valores)-4 ; $i--) { 
    echo $valores[$i].', ';
  }


  echo '<br/><br/>';
  echo '<hr>';



  /* ********** CLASE 14: EJERCICIOS ********** */

  echo '<br/>';
  echo 'Ejercicio 1.';
  echo '<br/><br/>';

  $a = 2;
  $b = 3;

  echo "$b$a" + $b;
  echo '<br/>';
  echo $b*($a+$b);

  echo '<br/>';
  echo 'Ejercicio 2.';
  echo '<br/><br/>';
 
  // if ($valor > 5 && $valor < 10) {
  //   # code...
  // }

  // if ($valor >= 5 && $valor < 10) {
  //   # code...
  // }

?>