<?php  
    $text = 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Natus iure necessitatibus perspiciatis
        deserunt ratione repellendus adipisci itaque, inventore exercitationem officia voluptatibus saepe.
        Eius dolore deleniti sint sapiente consequatur saepe veritatis!
        Tempore, saepe eaque iure quos temporibus exercitationem cupiditate quas excepturi provident
        officia inventore tenetur optio voluptatem maxime. Praesentium, nam reiciendis.
        Labore exercitationem tempora earum facilis illum dolores odit iusto nulla?';

    // substr: recortar um trecho da string
    // $newText = substr($text, 0, 20);
    // echo $newText;

    // explode: transforma a string em array usando uma referencia. Ex: " " (spacebar)
    $newArray = explode(' ', $text);
    print_r($newArray);

    echo '<br> <br>';
    
    // implode: transforma uma array em string usando uma referência. Ex: " " (spacebar)
    $newString = implode(' ', $newArray);
    echo $newString;

    echo '<br> <br>';

    $exemple = '<h1>um titulo em HTML</h1>';

    // strip_tags: retira as funções e código HTML da string.
    echo strip_tags($exemple);

    echo '<br> <br>';

    // htmlentities: mostra as tags e código HTML ao invés de renderizá-lo.
    echo htmlentities($exemple);
?>