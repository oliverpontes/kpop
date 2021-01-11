<?php

//meu código PHP vem aqui

$pg = isset($_GET['pg']);

if ($pg) {
    //verdadeiro
    switch ($_GET['pg']) {

        case 'plugin1':

            include_once './paginas/plugin1.php';


            break;

        case 'plugin2':

            include_once './paginas/plugin2.php';


            break;

        case 'plugin3':

            include_once './paginas/plugin3.php';


            break;

        case 'plugin4':

            include_once '';

            break;

        case 'plugin5':
            //incluir a página contato
            include_once '';


            break;








        default:
            //Página de Erro.
            echo 'Página não encontrada';
            break;
        //fim do switch
    }
} else {
    //Falso não encontra a GET
    include_once './paginas/plugin1.php';
    include_once './paginas/plugin2.php';
    include_once './paginas/plugin3.php';
//    echo 'ERROR 404!!'; 
}
?>