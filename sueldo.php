<!DOCTYPE html>
<html>
 <head>
  <title>ejercicio 01 Sueldo Bruto</title>
 </head>
 <body>
     <form method="post" action="">
         Hijos en colegio:<br> <input type="text" name="hijos"> <br>
         <br>
         total vendido:<br> <input type="text" name="vendido"> <br>
         <br>
         resultado :<br>
         <br>
         <input type="submit" name="resultado" value="Resultado">
</form>
<?php
//Declaracion de variables 

    $numero1=$_POST["hijos"];
    $numero2=$_POST["vendido"];
        $bono=$numero1*50;
        $sbruto=$bono+($numero2*0.075)+600;
        $descuento=$sbruto*0.11;
        
        echo "El bono es  :".$bono."<br>"; 
        echo "El sueldo bruto es :".$sbruto."<br>";
        echo "El descuento es :".$descuento."<br>";

?>
</body>

</html>