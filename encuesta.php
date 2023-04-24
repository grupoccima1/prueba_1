<?php
$cuestionario = 1;
$pregunta = [1,2,3,4,5,6,7,8,9,10,11,12,13] ;
$valor1= isset($_POST['Pregunta1']) ? $_POST['Pregunta1'] : '';
$valor2= isset($_POST['Pregunta2']) ? $_POST['Pregunta2'] : '';
$valor3= isset($_POST['Pregunta3']) ? $_POST['Pregunta3'] : '';
$valor4= isset($_POST['Pregunta4']) ? $_POST['Pregunta4'] : '';
$valor5= isset($_POST['Pregunta5']) ? $_POST['Pregunta5'] : '';
$valor6= isset($_POST['Pregunta6']) ? $_POST['Pregunta6'] : '';
$valor7= isset($_POST['Pregunta7']) ? $_POST['Pregunta7'] : '';
$valor8= isset($_POST['Pregunta8']) ? $_POST['Pregunta8'] : '';
$valor9= isset($_POST['Pregunta9']) ? $_POST['Pregunta9'] : '';
$valor10= isset($_POST['Pregunta10']) ? $_POST['Pregunta10'] : '';
$valor11= isset($_POST['Pregunta11']) ? $_POST['Pregunta11'] : '';
$valor12= isset($_POST['Pregunta12']) ? $_POST['Pregunta12'] : '';
$txt_textarea= isset($_POST['txt_textarea']) ? $_POST['txt_textarea'] : '';


try {
  /*   $conexion = new PDO("mysql:host=localhost; port=33065; dbname=bernal", "root", ""); */
    $conexion = new PDO("mysql:host=localhost;port=36;dbname=bbbme11_bernal", "bbbme11_ccima", "GBUD0G2j6N*7");
    $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
   /*  foreach ((array) $calidad as $valor); */
    //    Insercion de checkbox 
    $checkbox = $_POST['checkbox'];
    foreach ($checkbox as $item){
        $pdo = $conexion->prepare('INSERT INTO medios(cuestionario, pregunta, valor) VALUES(?, ?, ?)');
        $pdo->bindParam(1, $cuestionario);
        $pdo->bindParam(2, $pregunta[1]);
        $pdo->bindParam(3, $item);// manda a guardar el elemento iterado 
        $pdo->execute() or die(print($pdo->errorInfo()));
   }
  
    //Pregunta 1
    $pdo = $conexion->prepare('INSERT INTO respuesta(cuestionario, pregunta, valor) VALUES(?, ?, ?)');
    $pdo->bindParam(1, $cuestionario);
    $pdo->bindParam(2, $pregunta[0] );
    $pdo->bindParam(3, $valor1);
    $pdo->execute() or die(print($pdo->errorInfo()));
    
    //Pregunta 2
    $pdo = $conexion->prepare('INSERT INTO respuesta(cuestionario, pregunta, valor) VALUES(?, ?, ?)');
    $pdo->bindParam(1, $cuestionario);
    $pdo->bindParam(2, $pregunta[1]);
    $pdo->bindParam(3, $valor2);
    $pdo->execute() or die(print($pdo->errorInfo()));
    
    // Pregunta 3
    $pdo = $conexion->prepare('INSERT INTO respuesta(cuestionario, pregunta, valor) VALUES(?, ?, ?)');
    $pdo->bindParam(1, $cuestionario);
    $pdo->bindParam(2, $pregunta[2]);
    $pdo->bindParam(3, $valor3);
    $pdo->execute() or die(print($pdo->errorInfo()));
    
    // Pregunta 4
    $pdo = $conexion->prepare('INSERT INTO respuesta(cuestionario, pregunta, valor) VALUES(?, ?, ?)');
    $pdo->bindParam(1, $cuestionario);
    $pdo->bindParam(2, $pregunta[3]);
    $pdo->bindParam(3, $valor4);
    $pdo->execute() or die(print($pdo->errorInfo()));

    //Pregunta 5
    $pdo = $conexion->prepare('INSERT INTO respuesta(cuestionario, pregunta, valor) VALUES(?, ?, ?)');
    $pdo->bindParam(1, $cuestionario);
    $pdo->bindParam(2, $pregunta[4]);
    $pdo->bindParam(3, $valor5);
    $pdo->execute() or die(print($pdo->errorInfo()));
   

    //Pregunta 6
    $pdo = $conexion->prepare('INSERT INTO respuesta(cuestionario, pregunta, valor) VALUES(?, ?, ?)');
    $pdo->bindParam(1, $cuestionario);
    $pdo->bindParam(2, $pregunta[5]);
    $pdo->bindParam(3, $valor6);
    $pdo->execute() or die(print($pdo->errorInfo()));
   
    //Pregunta 7
    $pdo = $conexion->prepare('INSERT INTO respuesta(cuestionario, pregunta, valor) VALUES(?, ?, ?)');
    $pdo->bindParam(1, $cuestionario);
    $pdo->bindParam(2, $pregunta[6]);
    $pdo->bindParam(3, $valor7);
    $pdo->execute() or die(print($pdo->errorInfo()));

    //Pregunta 8
    $pdo = $conexion->prepare('INSERT INTO respuesta(cuestionario, pregunta, valor) VALUES(?, ?, ?)');
    $pdo->bindParam(1, $cuestionario);
    $pdo->bindParam(2, $pregunta[7]);
    $pdo->bindParam(3, $valor8);
    $pdo->execute() or die(print($pdo->errorInfo()));

     //Pregunta 9
     $pdo = $conexion->prepare('INSERT INTO respuesta(cuestionario, pregunta, valor) VALUES(?, ?, ?)');
     $pdo->bindParam(1, $cuestionario);
     $pdo->bindParam(2, $pregunta[8]);
     $pdo->bindParam(3, $valor9);
     $pdo->execute() or die(print($pdo->errorInfo()));
    
     //Pregunta 10
     $pdo = $conexion->prepare('INSERT INTO respuesta(cuestionario, pregunta, valor) VALUES(?, ?, ?)');
     $pdo->bindParam(1, $cuestionario);
     $pdo->bindParam(2, $pregunta[9]);
     $pdo->bindParam(3, $valor10);
     $pdo->execute() or die(print($pdo->errorInfo()));
    
    //Pregunta 11
    $pdo = $conexion->prepare('INSERT INTO respuesta(cuestionario, pregunta, valor) VALUES(?, ?, ?)');
    $pdo->bindParam(1, $cuestionario);
    $pdo->bindParam(2, $pregunta[10]);
    $pdo->bindParam(3, $valor11);
    $pdo->execute() or die(print($pdo->errorInfo()));
     
    //Pregunta 12
    $pdo = $conexion->prepare('INSERT INTO respuesta(cuestionario, pregunta, valor) VALUES(?, ?, ?)');
    $pdo->bindParam(1, $cuestionario);
    $pdo->bindParam(2, $pregunta[11]);
    $pdo->bindParam(3, $valor12);
    $pdo->execute() or die(print($pdo->errorInfo()));
   
    //Pregunta 13
    $pdo = $conexion->prepare('INSERT INTO mensaje(pregunta, texto) VALUES(?, ?)');
    $pdo->bindParam(1, $pregunta[12]);
    $pdo->bindParam(2, $txt_textarea);
    $pdo->execute() or die(print($pdo->errorInfo()));
    header('Location: gracias.php');

} catch(PDOException $error) {
    echo $error->getMessage();
    die();
}

?>