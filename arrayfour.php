/*Created by Jeff Anjinson*/

<?php
  $gilas = array ('Tenorio','David','Fonacier','Velasco');
  $gilas[3] = "Memorial";
  $notincluded = $gilas[3];
  $gilas[] = "Velasco";
  
  echo "<p>" . $notincluded . "</p>";
  print_r ($gilas);
  echo "<br/>";
  $pos = 2;
  echo $gilas[$pos+1];
  foreach ($gilas as $value)
    echo $value . "<br/>";
    //function call explodeit  
    explodeit($gilas);
    //create function 
  function explodeit ($gilas, $sinag = "2")
  { 
  	$gilas2 = implode (",",$gilas);
  	echo $gilas2;
  	echo $sinag;
  }  ;
?>
