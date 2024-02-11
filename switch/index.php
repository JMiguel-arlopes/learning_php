<?php 
    // switch
    $name = 'joao';
    switch($name){
        case 'vitinho':
            echo 'meu nome é vitinho';
            break;
        case 'joao':
            echo 'meu nome é João';
            break;
    }
    echo '<br>';

    // Continue:
    // Pila para a próximo item da array,
    // fazendo o código abaixo nn ser processado 
    for($i = 0; $i <= 10; $i++) {
        if($i > 3 && $i < 8) {
            continue;
        }

        echo "o valor de I é: $i <br>"; 
    }
?>