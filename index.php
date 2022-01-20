<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        echo "<h2>Variables y conatantes</h2>";
        define("DATO","dato de ej");
        echo "la constante dato es ".DATO;
        $numero=5;
        $numero++;
        echo "<p>el numero es ".$numero."</p>"; //resultado es 6
        echo "<p>el numero es ".$numero++."</p>"; //resultado es 6, pero si ponermos ++$numero el resultado será 7
        echo "<hr>";
        echo "<h2>Operadores</h2>";
        $numero1=10;
        $numero2=14;
        if($numero1>=$numero2){
            echo "<p>el primer numero es mayor</p>";
        }
        else{
            echo "<p>el segundo numero es mayor</p>";
        }
        $aprobado=true;
        if(!$aprobado){
            echo "<p>has aprobado</p>";
        }
        else{
            echo "<p>has suspendido</p>";
        }
        $nota="8";
        if($nota==8){ // si ponemor $nota===8 sale el segundo resultado, porque el tipo de dato no noicide
            echo "<p>notable 8</p>";
        }
        else{
            echo "<p>tu nota no es un 8</p>";
        }
        echo "<hr>";
        echo "<h2>Estructuras de contol</h2>";
        for ($i=0; $i<=10; $i++){    //no hacer bucles con for
            echo $i." - ";
        }
        echo "<br>";
        $a=0;
        while($a<=10){
            echo $a++." - ";
        }
    ?>
</body>
</html>