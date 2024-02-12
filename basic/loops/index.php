<?php 
    // while
    // identicos ao Javascript {
        $number = 0;
        while($number < 10) {
            echo "Esse é o número: $number do While";
            echo '<br>';
            $number++;
        }
        echo '<br><br>';
        // forLoop 
        $limite = 10;
        for($i = 0; $i < $limite;  $i++) {
            echo "Esse é o número: $number do ForLoop";
            echo '<br>';
            $number++;
        };
    // }

    echo '<br><br>';
    
    // o "do" é um tipo de while roda o código e depois faz a verificação para ter certeza
    // se irá continuar a ação ou não
    do {
        echo "Renderização do Do. Number: $number";
        echo '<br>';
        $number++;
    }while($number <= 30);
?>