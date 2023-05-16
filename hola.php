<?php
$mateo = 6;
$juan = 5;  //Asi se define una variable
$suma = 4;
echo "Hola mundo";
echo $mateo;
define("MAMA","Gabriela");

echo '<br>' . MAMA;     
$prueba =  $mateo + $juan;
$suma /= $juan;
echo $suma ; 
echo ($mateo>$juan ?  "SIIIIII" :  "Alrevez"); //ternario (igual que JS)
if ($mateo>$juan) {     //Condicional igua que JavaScript
    echo "mateo es mayor que juanc";
}else{
    echo "looool";
}

switch($prueba){
    case 30:
        echo " <br> es 30";
        break;
    case 11:
        echo " es 11";
        break;
    default:
        echo "no es ninguno";
}
while ($a <= 10) {      #Bucle while (Igual que JS)
    echo $a++ . '<br>';
}
$b = 1;
do {
    $b +=1;
    echo "hola mundo <br>";

} while ($b <= 10);

for ($i=0; $i <= 10 ; $i++) {  #Bucle for (Igual a JS)
    echo "esto es un for " . $i . ' veces <br>';
}
?>   