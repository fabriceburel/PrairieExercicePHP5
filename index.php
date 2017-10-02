<?php
  $prenom ='fabrice';
  $nom = 'burel';

  function mafonction($var1,$var2)
  {
    $var3=$var1.$var2;
    return $var3;
  }
  echo mafonction($prenom,$nom);
?>
