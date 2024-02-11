<!-- arrays -->

<?php
    // 1° forma:
    $names = array('João ', 'Vitinho ', 'Monkey');

    // 3° forma:
    // mais nova
    $names = ['João ', 'Vitinho ', 'monkey'];
    

    // 3° forma:
    // obs: Esse insere o item na última posição registrada pelo array. 
    // Caso ele não tenha "declarado" anteriormente, ele cria o array e o põe como 1° item.
    $names[] = 'João Miguel ';
    $names[] = 'Vitinho ';
    $names[] = 'Monkey';

    // 4° forma:
    $names[0] = 'João Miguel ';
    $names[1] = 'Vitinho ';
    $names[2] = 'monkey ';

    // 5° forma (MUITA ATENÇÃO NELA POIS FUNCIONA COMO DICIONÁRIO EM OUTRAS LINGUAGENS)
    $informacao['name'] = 'João';
    // ou
    $informacao = ['name' => 'João'];
    
    echo $informacao['name'];
    echo $names[0];
    echo $names[1];
    echo $names[2];
?>