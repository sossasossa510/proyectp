<?php
    include ("bd.php");
    $con = conectar();

    /* debo declarar una variable por cada campo de la tabla*/

   
    $id = $_POST['id'];
    $usuario = $_POST['usuario'];
    $contraseña= $_POST['contraseña'];
    
    

    $sql="INSERT INTO`registro` VALUES(' $id','$usuario', $contraseña)";
    $query=mysqli_query($con,$sql);

    if($query)
    {
        header("location:registrarse.php");
    }
?>
