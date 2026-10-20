<?php

echo "<h1>Pedido recibido en Salteneria El Horno</h1>";

// Recibir los datos enviados por el formulario
$nombre = $_POST['nombre'];
$correo = $_POST['correo'];
$pedido = $_POST['pedido'];

// Mostrar los datos recibidos
echo "<p>Nombre: " . htmlspecialchars($nombre) . "</p>";
echo "<p>Correo: " . htmlspecialchars($correo) . "</p>";
echo "<p>Pedido: " . htmlspecialchars($pedido) . "</p>";

// Ejemplo de arreglo y recorrido con foreach
$productos = [
    "Salteña de pollo - Bs 6",
    "Docena de salteñas - Bs 65",
    "Refresco de mocochinchi - Bs 5"
];

echo "<h2>Nuestra carta</h2>";

foreach ($productos as $producto) {
    echo "<p>" . htmlspecialchars($producto) . "</p>";
}

// Romer Garcia Cineros 
?>