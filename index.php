<table align = "center" border = '1' width = "100%">

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
