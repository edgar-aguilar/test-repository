<?php 
reverseString("aekcor FevD lE","e");

function reverseString($string,$letraIncidente) {      
$tamano_string=strlen($string);
$new_string_reverse="";
$incidencias=0;
for($i=0; $i<=$tamano_string;$i++){
$letra=substr($string,$tamano_string-$i,1);
$new_string_reverse=$new_string_reverse.$letra;
if(strtolower($letra)==strtolower($letraIncidente)){
  $incidencias++;
}
}
echo $new_string_reverse." letra :".$letraIncidente." incidencias :".$incidencias; 
} 
?>
