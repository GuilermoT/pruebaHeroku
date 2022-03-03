<?php
    function esPrimo($n){
        $primo = true;
        for($i = 2; $i < $n; $i++){
            if($n % $i == 0){
                $primo = false;
                break;
            }
        }
        return $primo;
    }

    function listaPrimos($n1, $n2){
        $absN1 = abs($n1);
        $absN2 = abs($n2);
        $j = 0;
        $listaPrimos[] = array();

        if($absN1 >= $absN2){
            for($i = $absN2; $i <= $absN1; $i++){
                if(esPrimo($i)){
                    $listaPrimos[$j] = $i;
                    $j++;
                }
            }
        } else{
            for($i = $absN1; $i <= $absN2; $i++){
                if(esPrimo($i)){
                    $listaPrimos[$j] = $i;
                    $j++;
                }
            }
        }
        return $listaPrimos;
    }

    function imprimirArray($arr){
        foreach ($arr as $value) {
            echo "<li>$value</li>";
        }
    }

    $n1 = $_POST['n1'];
    $n2 = $_POST['n2'];
    print("Lista de números primos comprendidos entre " . abs($n1) . " y " . abs($n2) . ":\n");
    imprimirArray(listaPrimos($n1, $n2));
?>
