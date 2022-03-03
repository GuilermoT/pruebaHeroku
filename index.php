<Doctype html>
    <html>
        <head>
            <meta charset='utf-8' > 
    <title></title>
        </head>
    <body>
        <form action="e6.php" method="post">
            <label>Inserta un número:</label><br>
            <input type="number" id="number" name="number" placeholders="Inserta un número:"/>
            <input type="submit" value="Calcular tabla de multiplicar"/>
        </form>
    </body>




<table align = "center" border = '1' width = "100%">
    </html>
<?php
    function printMultiplicationTable($number){
        for($i = 0; $i <= 10; $i++){
            echo "<tr>";
            $multiplicationTable = ($i * $number);
            echo "<td>$number  x $i =  $multiplicationTable </td>";
            echo "<tr/>";
        }
    }

    $number = $_POST['number'];
    printMultiplicationTable($number);
?>
