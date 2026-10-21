<?php

echo "<h1>Pedido recibido en Salteneria El Horno</h1>";

//  datos enviados por el formulario
$nombre = $_POST['nombre'];
$correo = $_POST['correo'];
$pedido = $_POST['pedido'];

// Mostrar los datos recibidos
echo "<p>Nombre: " . htmlspecialchars($nombre) . "</p>";
echo "<p>Correo: " . htmlspecialchars($correo) . "</p>";
echo "<p>Pedido: " . htmlspecialchars($pedido) . "</p>";

$productos = [
    "Salteña de pollo - Bs 8",
    "Salteña mixto - Bs 12",
    "Salteña charque - Bs 12",
    "Refresco de mocochinchi - Bs 5"
];

echo "<h2>Nuestra carta</h2>";

foreach ($productos as $producto) {
    echo "<p>" . htmlspecialchars($producto) . "</p>";
}

// Romer Garcia Cineros 
?>