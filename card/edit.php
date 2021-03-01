<?php

?>

<br>
<br>

<?php if(isset($_GET["error"])){ ?>
    <div class="alert alert-danger" role="alert">
  Erreur de saisi ! remplissez tout le formulaire
</div>
<?php } ?>  

<form   class="row g-3" method="POST" action= <?php echo DIRFOLDER_WS."card/card.php?action=addtocard";?> >
 
    <div class="form-floating mb-3">
        <input type="text" class="form-control" name='idProduct' placeholder="1234">
        <label for="floatingInput">Id Product</label>
    </div>
    <div class="form-floating mb-3">
        <input type="text" class="form-control" name='nameProduct' placeholder="1234">
        <label for="floatingInput">Name Product</label>
    </div>
    <div class="form-floating mb-3">
        <input type="text" class="form-control" name='priceProduct' placeholder="1234">
        <label for="floatingInput">Price Product</label>
    </div>
    <div class="form-floating mb-3">
        <input type="text
        " class="form-control" name='quantityProduct' placeholder="1234">
        <label for="floatingInput">Quantity Product</label>
    </div>


    <div class="col-auto">
        <button type="submit" class="btn btn-primary mb-3">Ajouter</button>
    </div>
</form>   