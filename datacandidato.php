<?php 
echo '<br> Nombre:<br>';
    isset($_POST["nombre"]) ? print $_POST["nombre"]:"";
echo '<br>Apellido:<br>';
    isset($_POST["apellidos"]) ? print $_POST["apellidos"] : "";
echo '<br>Email:<br>';
    isset($_POST["email"]) ? print $_POST["email"]:"";
echo '<br>Telefono:<br>';
    isset($_POST["telefono"]) ? print $_POST["telefono"] : "";   
echo '<br>Nivel de ingles:<br>';
    isset($_POST["ingles"]) ? print $_POST["ingles"]:"";
echo '<br> lenguajes<br>';
    $lenguajes = isset($_POST["lenguajes"]) ? count($_POST["lenguajes"]):"";
    echo $lenguajes;
echo '<br>Nivel de estudio:<br>';
$estudio =  isset($_POST["estudio"]) ? print($_POST["estudio"]):"";





if($lenguajes >= 2 && ($estudio==1)){
    header("Location:basico.php");
}
if($lenguajes >= 4 && ($estudio ==2)){
    header("Location:intermedio.php");
}
if($lenguajes >= 6 && ($estudio ==6)){
    header("Location:avanzado.php");
}
?>


