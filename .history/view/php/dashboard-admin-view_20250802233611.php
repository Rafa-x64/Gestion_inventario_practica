<?php
require("./controller/dashboardAdminC.php");
?>
<!--hacer el dashboard del admin y agregar una opcion para agregar un empleado-->
<h1>este es el dashboard del admin</h1>

<!--recordar que solo se hashea la contraseña al guardarse en la base de datos, y al iniciar 
sesion se encripta la contraseña y se guarda en sesion (para cuando se valla a hacer el 
inicio de sesion), cuando una empresa se registra se dirige al dashboard del admin con los 
datos del formulario encriptados (sin contraseña hash) y guardados en sesion. lo que se guarda
en la bd si es hasheado(crear metodo para deshashear en el inicio de seison de un usuario)-->

<?php
echo "<br>" . "datos desencriptados de la sesion" . "<br>";
echo "<h1>$_SESSION</h1>";
print_r(dashboardAdminC::desencriptar_sesion());
?>