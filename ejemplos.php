<?php

/* CLASE 06 */

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

  $job = [
    'PHP Developer',
    'Python Dev',
    'Devops'
  ];

  var_dump($job);

  /* CLASE 09: Condicionales y Ciclos */

  $var1 = 1;

  if ($var1 > 2) {
    echo 'es mayor que 2';
  } else {
    echo 'no es mayor que 2';
  }

  
  
?>