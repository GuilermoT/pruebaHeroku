<html>
<head>
    <meta charset="UTF-8">
</head>
<body>
    <center>
        <h1>Tabla de multiplicar</h1>
        <form action="index.php" method="GET">
            <input type="number" name="cajaNumero" required>
            <input type="submit" value="Crear tabla">
        </form>

<?php

if (isset($_GET['cajaNumero']))
{
    $numeroingresado = $_GET['cajaNumero'];
    echo "<table border='1'><br>";
    echo "<h3>Tabla del $numeroingresado </h3>";

    for($i=1; $i <=12; $i++)
    {

    $valor = $i*$numeroingresado;
    echo "<tr>";
    echo "<td> $i X $numeroingresado </td>";
    echo "<td>$valor</td>";
    echo "</tr>";
    }

    echo "</table>";

}
?>
    </center>
</body>
</html>
