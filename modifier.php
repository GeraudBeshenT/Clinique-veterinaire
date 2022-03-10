<!DOCTYPE html>
<html lang = "fr">    
    <head>
        <title>INSERTION DANS LA TABLE :</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../css/bootstrap.css" type="text/css"/>
    </head>
    <body>
        <?php
        // connexion bdd
            try
            {
                $idcon = new PDO("mysql:host=127.0.0.1;dbname=test",
                        "root","");
            } 
            catch (PDOException $except) 
            {
                echo"Echec de la connexion",$except->getMessage();
            }
            $Nom = $_GET['Nom'];
            $Prenom = $_GET['Prenom'];
            $J = $_GET['J'];
            $M = $_GET['M'];
            $A = $_GET['A'];
            $H = $_GET['H'];
            $min = $_GET['min'];
        ?>
        <!-- formulaire modif -->
        <div class="container">
            <div class="jumbotron">
                <h1 class="display-4 text-center"> Modification </h1>
                <form method="POST" action="Annuler_modif.php">
                    <fieldset class="form-group">
                            <div class="row">
                                <div class="col">
                                    <label for="Nom"> Nom :</label>
                                    <input type="text" class="form-control" name="nom" value="<?php echo $Nom ?>"/>
                                </div>
                                <div class="col">
                                    <label for="Prenom"> Prenom :</label>
                                    <input class="form-control" type="text" name="prenom" value="<?php echo $Prenom ?>"/>
                                </div>
                            </div><br>
                            <div class="row">
                                <div class="col-sm-2">
                                    <label for="J">Jour</label><br>
                                    <input type="text" class="form-control" id="J" name="J" value="<?php echo $J ?>">
                                </div>
                                <div class="col-sm-2">
                                    <label for="M">Mois</label><br>
                                    <input type="text" class="form-control" id="M" name="M" value="<?php echo $M ?>">
                                </div>
                                <div class="col-sm-4">
                                    <label for="A">Année</label><br>
                                    <input type="text" class="form-control" id="A" name="A" value="<?php echo $A ?>">
                                </div>
                                <div class="col-sm-2">
                                    <label for="H">Heure</label><br>
                                    <input type="text" class="form-control" id="H" name="H" value="<?php echo $H ?>">
                                </div>
                                <div class="col-sm-2">
                                    <label for="min">minute</label>
                                    <input type="text" class="form-control" id="min" name="min" value="<?php echo $min ?>">
                                </div>
                            </div>
                                </div><br>
                                <!-- Confirmer annuler -->
                    <fieldset class="form-group">
                        <div class="row">
                            <legend class="col-sm-3 pt-0">Confirmer ou annuler</legend>
                            <div class="col-sm-9">
                                <button type="submit" name="action" class="btn btn-dark">Confirmer modification</button>
                                <button type="submit" name="action" class="btn btn-dark">Annuler</button>
                            </div>
                        </div>
                    </fieldset>
                </form>
            </div>
        </div>
    </body>
</html>