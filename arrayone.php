<?php
  $gilas = array ( "pointguard" => 'Tenorio',
                  "offguard" => 'David',
                  "offguard" => 'Fonacier',
                  "safeguard" => 'Velasco');
  $notincluded = $gilas["safeguard"];
  echo $notincluded;
  $pos = 2;
  echo $gilas["pointguard"];
  while (list($key, $value) = each($gilas))
  {
  	echo "<dt>$key</dt>";
  	echo "<dt>$value</dt>";
  }
?>
