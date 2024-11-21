<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link
    rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/bulma@1.0.2/css/bulma.min.css">
  <link rel="style.css" href="style.css">

<body >

  
  <div class="container">
    <div class="box has-background-info"  >

      <h1>PHP BASICO</h1>
      <ul>
        <ol>1.- Operadores con String</ol>
        <ol>2.- Opera Aritmeticos</ol>
        <ol>3.- Tipos de Datos</ol>
        <ol>4.- Operaciones con Array</ol>
        <ol>5.- Condicionales</ol>
        <ol>6.- Ciclos </ol>
        <ol>7.- Salir</ol>
        <ol></ol>

      </ul>

      </br>
      <h6>Formulario</h6>
      <hr>
      <form method="POST" action="">
        <label for="numero">Ingresar Numero</label>
        <input type="number" name="numero" id="numero">
        <button type="submit" class=""> </br>ENVIAR</button>


      </form>

      <hr>
      <?php

      include "./OperadoresLogicos.php";
      include "./OperacionesString.php";
      include "./OperacionesAritmeticos.php";
      include "./OperacionesconArray.php";
      include "./TiposDeDatos.php";
      include "./Condicionales.php";
      include "./Ciclos.php";

      //   Lucio andre arizaca carrion

      if (isset($_GET["fruta"])) {
        echo $_GET["fruta"] . "</br>";
      }


      if (isset($_GET["precio"])) {
        echo $_GET["precio"];
      }

      if (isset($_POST["numero"])) {
        $opcion = $_POST["numero"];
        switch ($opcion) {
          case 1:
            echo "</br>";
            echo "Ingreso al caso numero 1 :"."</br>";
            echo "</br>";
            $os =  new OperacionesString;
            $os->llamarPadre();
            $os->funcionString();
            echo "</br>";
            echo "</br>";
            break;
          case 2:
            echo "Lucio Andre Arizaca Carrion ";
            echo "</br>";
            echo "</br>";
            echo "Ingreso al caso numero 2 :"."</br>";
            echo "</br>";
            $oa =  new OperacionesAritmeticos;
            $oa->saludar();
            
            $oa->funcionString();
            
            break;
          case 3:
            echo "Lucio Andre Arizaca Carrion ";
            echo "</br>";
            echo "</br>";
            echo "Ingreso al caso numero 3 :"."</br>";
            echo "</br>";
            echo "TIPO DE DATOS";
            echo "</br>";
            $tc = new TipodeDatos;
            $tc->funcionString();
            break;
          case 4:
            echo "</br>";
            echo "Ingreso al caso numero 4 :"."</br>";
            echo "</br>";
            echo "</br>";
            echo "OPERACIONES CON ARRAY";
            echo "</br>";
            $opa = new OperacionesconArray;
            $opa->funcionString();
            break;
          case 5:
            echo "</br>";
            echo "Ingreso al caso numero 5 :"."</br>";
            echo "</br>";
            echo "</br>";
            echo "CONDICIONALES";
            echo "</br>";
            $c = new Condicionales;
            $c->funcionString();
            break;
          case 6:
            echo "</br>";
            echo "Ingreso al caso numero 6 :"."</br>";
            echo "</br>";
            echo "</br>";
            echo "CICLOS";
            echo "</br>";
            $c = new Ciclos;
            $c->funcionString();
            break;
          case 7:
            echo "</br>";
            echo "has salido"."</br>";
            echo "</br>";
            
            break;


          
          default:
            echo "</br>";
            echo "Ingrese una opcion valida";
            echo "</br>";
            break;
        }
      }



      $ol = new OperadoresLogicos;
      $ol->operadores();
      $ol->saludar();



      ?>


    </div>

  </div>
 











</body>

</html>