<?php 
    // interprete como um objeto que, quando não definida sua key, ele põe o index de criação na key
    $arr[0]['sla'] = 1;
    $arr[0]['name'] = 'joao';
    $arr[0][] = 2;
    // ou seja:
    // $arr = [0 => ['sla' => 1, 'name' => 'joao', 0 => 2]];
    print_r($arr)
?> 
 