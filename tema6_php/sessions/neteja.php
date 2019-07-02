<?php 
    session_start();
    
    //treu una de les variables de sessio
    unset($_SESSION['nom']);

    // session_destroy(); //destrueix totes les variables de sessio.