<?php
 
 class persegi {
  var $localSisi = 0;
  
  function setSisi($sisi) {
  	$this->localSisi = $sisi;
  }
  
  function luasPersergi() {
    $luasPersegi = $this->localSisi * $this->localSisi;
    return $luasPersegi;
   }

   function kelilingPersegi() {
    $kelilingPersegi = $this->localSisi * 4;
    return $kelilingPersegi;
 }
}

 

  $persegi1 = new persegi();
  $persegi2 = new persegi();
  
  $persegi1->setSisi(4);
  $persegi2->setSisi(10);
  
  
  echo 'Luas Persegi: '. $persegi2->luasPersergi() . '<br>Keliling Persegi: '.$persegi1->kelilingPersegi();
?>