<?php
/*******************************************
 * * On demarre la session 
 * * Definie des constantes
 * * qui aide a la navigation
 *******************************************/
    session_start() ;
    define("DIRFOLDER_FS" , $_SERVER['DOCUMENT_ROOT'].'/') ;
    define("DIRFOLDER_COMMUN" , DIRFOLDER_FS.'commun/') ;
    define("DIRFOLDER_WS" , '/') ;
    
?>