
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


#Comprobacion que se esta recibiendo el atributo edad desde el url
#y si no, lo asigna directamente con variable estatica
$edad = comprobarParametro("edad");


$textoFinal = "$texto, el cuenta con una estatura de ".$altura." cm <br>"; 

echo $textoFinal;


#Metodo GET
echo "<hr>";
echo "Mi edad es ".$edad."<br>";

#Condiciones

if($edad >= 18){
    echo "Eres mayor de edad<br>";
}else{
    echo "Eres menor de edad<br>";
}

#Funcion de variable especifica
function comprobarEdad(){
    if(isset($_GET["edad"])){
        $edad = $_GET["edad"];
    }else{
        $edad = 21;
    }
    return $edad;
}

#Funcion con parametro indefinido
function comprobarParametro($parametro){
    if(isset($_GET[$parametro])){
        $valor = $_GET[$parametro];
    }else{
        $valor = "Texto por defecto";
    }
    return $valor;
}


#Arrays
$personas = ["Mauri", "Alan", "Gerson", "Toño"];

echo "Imprimiendo el indice 2 de un array Personas: ";
echo $personas[2]."<br>";

?>



<h4>Listado</h4>
<ul>
    <?php
        #Bucle
        foreach($personas as $nombre){
            echo "<li>$nombre</li>";
        }

    ?>
</ul>