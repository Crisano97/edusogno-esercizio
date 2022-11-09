<?php 
    //SE HO UTENTE E SUCCESSO COME VARIABILI DI SESSIONE, DISTRUGGO LA SESSIONE E RENDIRIZZO ALLA PAGINA INDEX
    session_start();
    if(isset($_SESSION['user']) && isset($_SESSION[ 'success'])){
        session_destroy();
        header("Location: index.php");
    } else {
        header("Location: login.php");
    }
?>