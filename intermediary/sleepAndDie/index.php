<!-- sleep e die -->

<?php 
    // sleep atrasa o código de ser executado baseado em segundos.
    sleep(1);
    echo 'olá! <br>';

    // die "mata" a execução do código e todas as linhas seguintes não são processadas
    $name = 'joão';
    if($name == 'jojo') {
        echo 'passou no IF <br>';
    } else {
        echo die('matou o próximo código (parou de ser processado)<br>');
    }   

    echo 'O Die não foi ativado!!'
?>