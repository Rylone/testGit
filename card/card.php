<?php
include "../config.inc.php";





switch ($_GET["action"]) {
    /*****************************
     * * Ad to card
     * * Ajoute les elements au panier
     * * On controle l'existance des variable idProduct... 
     *****************************/        
    case "addtocard": 
     
          $okAjout = true;
          if(empty($_POST["idProduct"])){
               $okAjout = false;
          }
          if(empty($_POST["nameProduct"])){
               $okAjout = false;
          }
          if(empty($_POST["priceProduct"])){
               $okAjout = false;
          }    
          if(empty($_POST["quantityProduct"])){
               $okAjout = false;
          }
          if($okAjout){
               $tabPanier = [
                    "idProduct" => $_POST["idProduct"],
                    "nameProduct" => $_POST["nameProduct"],
                    'priceProduct' => $_POST['priceProduct'],
                    'quantityProduct' => $_POST['quantityProduct']
          ];
          $_SESSION["cadie"][]= $tabPanier;
          header("Location: ".DIRFOLDER_WS );
          
          
        /****************************************************
         * * On redirige si elle existe pas vers index.php
         ****************************************************/
       }else{
            header("Location: ".DIRFOLDER_WS."index.php?error=1" );
       }
       break;
        /*****************************
         * * Remove to card
         * * Supprime les elements du panier
         *****************************/  
    case "removetocard":


     

          break;
        /*****************************
         * * empty card
         * * Panier vide
         *****************************/  
    case "emptycard":
            
            break;
  default:;
    }
    // var_dump($_SESSION["cadie"])  ;
?>