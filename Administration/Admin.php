<!DOCTYPE html>
<html lang="fr">
<head>
	<title>Admin section</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1,shrink-to-fit=no">
        <link rel="shortcut icon" href="../img/logo.ico" type="text/cgoaccueil.ico" type="image/x-icon" >
        <link rel="stylesheet" href="../css/bootstrap.css">
        <link rel="stylesheet" type="text/css" href="../css/style.css">
</head>
<body style="background: #CCC;">
<!-- menu -->
<nav class="header-menu">
	<ul>
		<li class="Index-html"><a href="../Index.html"> Retour sur le site</a></li>
	</ul>
</nav>

    <?php
    try
    {
        $idcon = new PDO("mysql:host=127.0.0.1;dbname=test",
                "root","");
    }
    catch (PDOException $expect)
    {
        echo"Erreur de connexion à la base de donnée " .$expect->getMessage();
    }
        if($idcon)
        {
            $requete = "SELECT * FROM veterinaire";
            $result = $idcon -> query($requete);
            if(!$result)
            {
                $mes_erreur = $idcon->erreurinfo();
                echo "lecture impossible, code", $idcon->errorcode(),
                        $mes_erreur[2];
            }
            else
            {
                $nbpersonnes =$result->rowCount();
                echo "<h3> Liste de toutes les personnes </h3>";    
                    echo "<table class='table table-dark'>";
                        echo "<thead class='thead-light'>
                                <tr>
                                    <th>Nom</th>
                                    <th>Prénom</th>
                                    <th>Téléphone</th>
                                    <th>Adresse</th>
                                    <th>Code Postal</th>
                                    <th>Ville</th>
                                    <th>Email</th>
                                    <th>Animal</th>
                                    <th>Descriptif</th>
                                    <th>J</th>
                                    <th>M</th>
                                    <th>A</th>
                                    <th>H</th>
                                    <th>min</th>
                                    <th>modifier</th>
                                    <th>supprimer</th>
                                </tr>
                        </thead>";
                        echo "<tbody>";
                        
                            while ($ligne = $result->fetch())
                            {
                                echo "<tr>";
                                echo "<td> ",$ligne['Nom'],"</td>";
                                echo "<td> ",$ligne['Prenom'],"</td>";
                                echo "<td> ",$ligne['Telephone'],"</td>";
                                echo "<td> ",$ligne['Adresse'],"</td>";
                                echo "<td> ",$ligne['Code_Postal'],"</td>";
                                echo "<td> ",$ligne['Ville'],"</td>";
                                echo "<td> ",$ligne['Email'],"</td>";
                                echo "<td> ",$ligne['Animal'],"</td>";
                                echo "<td> ",$ligne['Descriptif'],"</td>";
                                echo "<td> ",$ligne['J'],"</td>";
                                echo "<td> ",$ligne['M'],"</td>";
                                echo "<td> ",$ligne['A'],"</td>";
                                echo "<td> ",$ligne['H'],"</td>";
                                echo "<td> ",$ligne['min'],"</td>";
                                ?>
<td> <a href="../modifier.php">modifier</a></td>
<td> <a href="../Supprimer.php">Supprimer</a></td>
<?php
                                echo "</tr>";
                            }
                        echo "</tbody>";
                    echo "</table>";
                echo"</div>";
            }
            $result->closecursor();
            $idcon=NULL;
        }
    ?>

</body>
</html>