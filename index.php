<?php
    // éléments utils
    include 'config.inc.php' ;

    include DIRFOLDER_COMMUN.'headerHtml.php' ;
     
    /********************************************
     * *    Module by Get
     * *
     ********************************************/
    
/*
   switch ($_GET['mod']) {
        case "list":
            include DIRFOLDER_FS.'card/list.php' ;
           
            break;
        case "edit":
            include DIRFOLDER_FS.'card/edit.php' ;
            break;
      default:
            include DIRFOLDER_FS.'accueil.php' ;

    }*/
   
    include DIRFOLDER_FS.'card/edit.php' ;
    include DIRFOLDER_FS.'card/list.php' ;

    include DIRFOLDER_COMMUN.'footerHtml.php' ;
?>
