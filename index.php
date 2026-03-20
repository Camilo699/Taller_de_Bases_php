<?php include 'conexion.php'; ?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Verificación de Tienda</title>
</head>
<body>

    <h1>Panel de Control: Tienda</h1>

    <h2>Lista de Productos</h2>
    <table border="1">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Precio</th>
                <th>Stock</th>
            </tr>
        </thead>
        <tbody>
            <?php
            // La consultas
            $stmt = $pdo->query("SELECT nombre, precio, stock FROM productos");
            
            while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                echo "<tr>";
                echo "<td>" . $row['nombre'] . "</td>";
                echo "<td>" . $row['precio'] . "</td>";
                echo "<td>" . $row['stock'] . "</td>";
                echo "</tr>";
            }
            ?>
        </tbody>
    </table>

    <h2>Nuestros Clientes</h2>
    <ul>
        <?php
        $stmtC = $pdo->query("SELECT nombre, email FROM clientes");
        
        while ($cliente = $stmtC->fetch(PDO::FETCH_ASSOC)) {
            echo "<li>" . $cliente['nombre'] . " - " . $cliente['email'] . "</li>";
        }
        ?>
    </ul>

</body>
</html>