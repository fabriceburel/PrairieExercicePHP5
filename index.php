<?php
  $firstname = 'fabrice ';
  $name = 'burel';
  function mergestring($string1,$string2)
  {
    $result = $string1 . $string2;
    return $result;
  }
  echo mergestring($firstname,$name);
?>
