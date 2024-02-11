<!-- funções para arrays -->

<?php 
    // array_merge: junta duas (ou mais) arrays em UMA só. 
    $array1 = ['chave1' => 'valor1'];
    $array2 = ['chave2' => 'valor2'];
    
    $newArray = array_merge($array1, $array2);
    print_r($newArray);


    // array_intersect_key: 
    // ele captura arrays e retorna uma nova array com os itens que possuem a mesma key
    // o valor vai ser sempre equivalente ao valor da array presente no primeiro parâmetro.
    $array1 = ['chave1' => 'primeiraArray', 'chave2' => 'primeiraArray', 'chave3' => 'primeiraArray'];
    $array2 = ['chave1' => 'segundaArray', 'chave3' => 'segundaArray'];
    $array3 = ['chave1' => 'terceiraArray', 'chave2' => 'terceiraArray', 'chave3' => 'terceiraArray'];

    $newArray = array_intersect_key($array1, $array2, $array3);
    print_r($newArray);


    // array_map: 
    // pega uma array e retorna outra, a transforma inserindo uma função nativa do PHP (ou criada por você)
    $arr = ['<p>meu nome é joao</p>', 'vitinho'];
    $changeArray = array_map('strip_tags', $arr);
    print_r($changeArray);
?>