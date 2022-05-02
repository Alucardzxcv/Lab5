<!DOCTYPE html>
<html>
 <head>
  <title>ejercicio 01 Sueldo Bruto</title>
 </head>
 <body>
     <form method="post" action="">
         Precio de Gaseosa:<br> <input type="text" name="precio"> <br>
         <br>
         Cantidad de gaseosas:<br> <input type="text" name="cantidad"> <br>
         <br>
         resultado :<br>
         <br>
         <input type="submit" name="resultado" value="Resultado">
</form>
<?php
//Declaracion de variables 

    $costo=$_POST["precio"];
    $cantidad=$_POST["cantidad"];
        $nprecio=$costo-$costo*0.05;
        $compra=$nprecio*$cantidad;
        $dscto=$compra*0.07;
        $caramelos=$cantidad*2;
        
        echo "El nuevo precio es :".$nprecio."<br>"; 
        echo "El importe de compra es :".$compra."<br>";
        echo "El descuento es de  :".$dscto."<br>";
        echo "Cantidad de caramelos  :".$caramelos."<br>";

?>
</body>

</html>