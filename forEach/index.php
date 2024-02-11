<!-- forEach -->
<?php 
    // fazer array com números e com chave=>valor (como um dicionário)
    $arr = ['keyNameJM' => 'João', 'keyNameVitor' => 'Vitinho', 'monkey', 'branch'];

    foreach($arr as $key => $value) {
        echo "essa é a key: $key";
        echo '<br>';
        echo "esse é o value: $value";
        echo '<br><br>';
    };

    // obs: Pode fazer o forLoop convencional, porém ela só irá interagir com os itens sem chaves definidas
    // apenas aquelas que são definidos como itens de uma array convencional (por meio do index do item)
    // ex:
    $sizeArray = count($arr);
    for($i = 0; $i < $sizeArray; $i++) {
        echo $arr[$i];
        // apenas 'monkey' e 'branch' foram renderizados, o restante da erro 
    }
    

?>