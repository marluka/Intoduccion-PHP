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

  /* CLASE 08 */

  $job = [
    'PHP Developer',
    'Python Dev',
    'Devops'
  ];

  var_dump($job);
?>