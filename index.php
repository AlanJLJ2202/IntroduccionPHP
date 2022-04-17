
<?php
#Esto va imprimir:
echo "<h1>My first PHP script!</h1><br>";
print("Probando el print<br><br>");

//Otra manera de comentar

/*
Varias
Lineas
de
Comentarios
*/

#Variables
$nombre = "Alan Lopez";
$texto = "El autor de este script es $nombre";
$altura = 175;
$edad = $_GET["edad"];

$textoFinal = "$texto, el cuenta con una estatura de ".$altura." cm <br>"; 

echo $textoFinal;


#Metodo GET
echo "<hr>";
echo "Mi edad es ".$edad."<br>";

#Condiciones

if($edad >= 18){
    echo "Eres mayor de edad";
}else{
    echo "Eres menor de edad";
}



?>