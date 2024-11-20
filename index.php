<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
      <p> Lucio Arizaca Carrion </p>
    

       <!--etiquetas php -->
       <?php

       
       echo "Inprimiendo en PHP </br>";

       $dato_1 = 1;
       $dato_2 = 100;

       echo "el resultado es " . $dato_1 + $dato_2;

       echo "Incremento". $dato_1+1 ."</br>";

       if ($dato_2 == 2) {
        echo "No es igual";
       }else if ($dato_2 === 100){
        echo "Es igual";
       }

       //    declarar 7 tipos de datos 
       //    Lucio Andre Arizaca Carrion
       $int = 1;
       $numero_decimal = 1.23;
       $objeto= new stdClass();
       $boleano = true;
       $array = array("libros", "cuadernos", "lapiceros");
       $cadena = "Hola, mundo";
       $null =null;
       $emoji = ["😂","😂","😂","😂"];

       
       //    Lucio Andre Arizaca Carrion
       foreach ($emoji as $item){
        echo $item."</br>";
       };

       
       echo "<h2>IMPRIMIENDO TABLAS DEL 1 AL 12"."</br><h2>" ;
       //    Lucio Andre Arizaca Carrion
       $tabla  = array(1,2,3,4,5,6,7,8,9,10,11,12);
       foreach($tabla as $numero){
        echo "<h2><Tabla de  $numero "."</br></h2>";
        $num = array(1,2,3,4,5,6,7,8,9,10,11,12);
        foreach($num as $items){
            echo $numero." x ".$items."=".$numero*$items."</br>";
        }
       }

    
?>
</body>
</html>