<!DOCTYPE html>
<html>
    <head>
        <title>INSERTION DANS LA TABLE :</title>
        <meta charset="UTF-8">
    </head>
    <body>
        <!-- Connexion BDD -->
       <?php
            try
            {
                $idcon = new PDO("mysql:host=127.0.0.1;dbname=veterinaire",
                        "root","");
            } 
            catch (PDOException $except) 
            {
                echo"Echec de la connexion",$except->getMessage();
            }

            if($_POST['Nom'] != "" &&
                $_POST['Prenom'] != "" &&
                $_POST['Telephone'] != "" &&
                $_POST['Adresse'] != "" &&
                $_POST['Code_Postal'] != "" &&
                $_POST['Ville'] != "" &&
                $_POST['Email'] != "" &&
                $_POST['Animal'] != "" &&
                $_POST['Descriptif'] != "" &&
                $_POST['J'] != "" &&
                $_POST['M'] != "" &&
                $_POST['A'] != "" &&
                $_POST['H'] != "" &&
                $_POST['min'] != "")
            {
                // liaison marqueurs valeurs
                $Nom = $_POST['Nom'];
                $Prenom = $_POST['Prenom'];
                $Telephone = $_POST['Telephone'];
                $Adresse = $_POST['Adresse'];
                $Code_Postal = $_POST['Code_Postal'];
                $Ville = $_POST['Ville'];
                $Email = $_POST['Email'];
                $Animal = $_POST['Animal'];
                $Descriptif = $_POST['Descriptif'];
                $J = $_POST['J'];
                $M = $_POST['M'];
                $A = $_POST['A'];
                $H = $_POST['H'];
                $min = $_POST['min'];

                // Insertion des données dans la table véto
                $requete ="INSERT INTO veterinaire
                            VALUES('$Nom','$Prenom','$Telephone','$Adresse','$Code_Postal','$Ville','$Email','$Animal','$Descriptif', '$J', '$M', '$A', '$H', '$min')";
                $result = $idcon->query($requete);
                if($result)
                {
                    echo"<script type='text/javascript'>
                            alert('Insertion Réussi')
                            window.history.back();
                        </script>";
                }
                else
                {
                    echo"<script type='text/javascript'>
                            alert ('Problème d'insertion')
                            window.history.back();
                          </script>";
                }
                echo"<script type='text/javascript'>
                      window.history.back();
                     </script>";

            }
            else
            {
                    echo"<script type='text/javascript'>
                            alert('Veuillez Remplir tous les champs');
                         window.history.back();
                         </script>";
            }
        ?>
    </body>
</html>