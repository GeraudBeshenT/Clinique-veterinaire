<!DOCTYPE html>
<html lang = "fr">    
    <head>
        <title>INSERTION DANS LA TABLE :</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/bootstrap.css" type="text/css"/>
    </head>
    <body>
        <?php
            require_once("connexion_PDO.php");
            if($idcon)
            {
                $requete = "SELECT * FROM veterinaire";
                $result = $idcon -> query($requete);
                if(!$result)
                {
                    $mes_erreurs = $idcon -> errorinfo() ;
                    echo "Lecture impossible, code ",$idcon -> errorcode();
                            $mes_erreurs[2];
                }
                else
                {
                    $nbpersonnes = $result->rowCount();
                    echo "<h3> Liste de toutes ses personnnes </h3>";
                    echo "<h4> Il y a $nbpersonnes personnnes </h4>";
                    echo "<div class='container'>";
                        echo"<table class='table table-dark table-hover'>";
                            echo"<thead class='thead-light'>
                                <tr>
                                    <th> Nom de famille </th>
                                    <th> Prénom</th>
                                    <th> Telephone </th>
                                    <th> Adresse </th>
                                    <th> Code_Postal </th>
                                    <th> Ville </th>
                                    <th> Email </th>
                                    <th> Animal </th>
                                    <th> Desscriptif </th>
                                    <th> J </th>
                                    <th> M </th>
                                    <th> A </th>
                                    <th> H </th>
                                    <th> min </th>
                                    <th> Action (Modifier / Supprimer)</th>
                                </tr>
                            </thead>";
                            echo "<tbody>";
                                while($ligne = $result->fetch())
                                {
                                    echo"<tr>";
                                        echo"<td> <input class='border-info rounded-pill' type = 'text' name='nom' value=",$ligne['Nom']," readonly> </td> ";
                                        echo"<td> <input class='border-info rounded-pill' type = 'text' name='Prenom' value=",$ligne ['Prenom']," readonly></td>";
                                        echo"<td> <input class='border-info rounded-pill' type = 'text' name='mail' value=",$ligne ['mail']," readonly></td>";
                                        echo"<td> <a class='text-white' href=Supprimer_Personnes.php?nom=",
                                            $ligne['Nom'],"&amp;Prenom=",
                                            $ligne['Prenom'],"&amp;Telephone=",
                                            $ligne['Telephone'],"&amp;Adresse=",
                                            $ligne['Adresse'],"&amp;Code_Postal=",
                                            $ligne['Code_Postal'],"&amp;Ville=",
                                            $ligne['Ville'],"&amp;Email=",
                                            $ligne['Email'],"&amp;Animal=",
                                            $ligne['Animal'],"&amp;Descriptif=",
                                            $ligne['Descriptif'],"&amp;J=",
                                            $ligne['J'],"&amp;M=",
                                            $ligne['M'],"&amp;A=",
                                            $ligne['A'],"&amp;H=",
                                            $ligne['H'],"&amp;min=",
                                            $ligne['min'],">
                                        Supprimer </a> ","&nbsp&nbsp",
                                        "<a class='text-white' href=Get_modifier_personne.php?Nom=",
                                            $ligne['Nom'],"&amp;Prenom=",
                                            $ligne['Prenom'],"&amp;Telephone=",
                                            $ligne['Telephone'],"&amp;Adresse=",
                                            $ligne['Adresse'],"&amp;Code_Postal=",
                                            $ligne['Code_Postal'],"&amp;Ville=",
                                            $ligne['Ville'],"&amp;Email=",
                                            $ligne['Email'],"&amp;Animal=",
                                            $ligne['Animal'],"&amp;Descriptif=",
                                            $ligne['Descriptif'],"&amp;J=",
                                            $ligne['J'],"&amp;M=",
                                            $ligne['M'],"&amp;A=",
                                            $ligne['A'],"&amp;H=",
                                            $ligne['H'],"&amp;min=",
                                            $ligne['min'],">
                                        Modifier </a></td>";
                                    echo"</tr>";
                                }
                            echo"</tbody>";
                        echo"</table>";
                    echo"</div>";
                }
                $result -> closeCursor();
                $idcon=NULL;
            }    
        ?>
    </body>
</html>

