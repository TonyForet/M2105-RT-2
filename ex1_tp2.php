<?php

include './../functions.php';
if(array_key_exists("nom",$_COOKIE))
    header("location;recoAuto.php");//Redirection vers recoAuto
getHeader(true,"Exercice1");
?>
<div class="container">
    <form class="form-inline" method="post" action="ex2Validation.php">
        <fieldset>
            <legend>Connexion</legend>
            <div class="alert alert-info">Saisir votre nom et valider.</div>
            <div class="form-group">
                <input placeholder="Nom..." class="form-control" type="text" name="nom">
                <input class="btn btn-primary" type="submit" value="Valider">
            </div>
            <div class="form-group">
                <label class=""control-label"><input type="checkbox" name="ckRemember">Se souvenir de moi</label>
            </div>
        </fieldset>
    </form>
</div>







<?php
getFooter();