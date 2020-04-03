<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exercice 4</title>
    <style>
h2{
    text-align: center;
    color:teal;
}

</style>
</head>
<body>
    
<h3>la validation de votre connexion :</h3>


<?php
        
           if(isset($_POST['envoyer'])){
            $jour=$_POST['j'];
            $mois=$_POST['m'];
            $annee=$_POST['a'];
            echo 'la date saisie est : '.$jour.'/'.$mois.'/'.$annee."<br />";
            if(checkdate ($mois ,$jour ,$annee )){
                echo 'la date saisie <font color=green>est validee </FONT>';
            }
            else
                echo" l'annee $annee est bisextile :<font color=red> date invalide</FONT> "; 
        }
        ?>
            
</body>
</html>