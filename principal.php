<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link
    rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/bulma@1.0.2/css/bulma.min.css">
  <link rel="style.css">

<body>

  <div class="block">

  </div>
  <div class="block">
    <div class="box">

    <h1>PHP BASICO</h1>
      <ul>
        <ol>Operadores con String</ol>
        <ol></ol>
        <ol></ol>
        <ol></ol>
        <ol></ol>
        <ol></ol>
        <ol></ol>
        <ol></ol>

      </ul>


      <h6>Formulario</h6>
      <hr>
      <form method="POST" action="">
        <label for="numero">Ingresar Numero</label>
        <input type="number" name="numero" id="numero">
        <button type="submit">ENVIAR</button>


      </form>

      <hr>
      <?php

      include "./OperadoresLogicos.php";

      
      //   Lucio andre arizaca carrion

      if (isset($_GET["fruta"])) {
        echo $_GET["fruta"] . "</br>";
      }


      if (isset($_GET["precio"])) {
        echo $_GET["precio"];
      }

      echo $_POST["numero"];


      $ol =new OperadoresLogicos;
      $ol ->operadores();
      $ol ->saludar();
      ?>


    </div>

  </div>
  <div class="block">

  </div>











</body>

</html>