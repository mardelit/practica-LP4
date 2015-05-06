<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
     
    </head>
    <body>
        <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <div align="center"><br><br><br><br>
            <div> 
            Nombre 
            <input type="text" name="nombre" id="nombre" required></div> <br>
            <div> 
            Fecha De Nacimiento  
            <input type="date" name="fecha" id="fecha" required></div> <br>
            <div> Lugar De Nacimiento
                <select name="lugar" id="lugar"><option required >Seleccionar</option >
                    <option>San Martin</option>
                    <option>Lima</option>
                    <option>Trujillo</option>
                    <option>Huancayo</option>
            
           </select>
            </div><br>
             <div> Region &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="region" id="region" required></div> <br>
            <div> <input type="submit" name="boton" id="boton" value="Aceptar"></div>
                        
        </div>
        </form>      
    
 </body>
    <?php
 
if(isset($_POST['boton']))
{
$n=$_POST['nombre'];
$f=$_POST['fecha'];
$l=$_POST['lugar'];
$r=$_POST['region'];
$fecha_actual = date('Y-m-d')-$f; 

echo '<div align="center">';
echo '<br> El eltudiante &nbsp; &nbsp;'.$n.' Tiene la Edad de &nbsp; &nbsp;'.$fecha_actual .' <br>y Nacio en el Departamento de &nbsp;'.$l,'<br>Pertenece a la region de &nbsp; &nbsp;'.$r;
echo '</div>';  
}
 
?>
 
 
 
</html>
