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
p{
    color:FireBrick	;
    font-size:50px;
}
h5{
    color:FireBrick	;
    font-size:20px;
}
table{
    background:Wheat;
    border: 3px ridge;
    font-size:50px;
}
</style>
</head>
<body>
<table border=0>
<tr>    
    <td>votre email est:</td>
    <td>
        <?php
        if(isset($_POST['envoyer'])){
            $email=$_POST['email'];
            if (!preg_match('/^[_a-zA-Z0-9-]+(\.[_a-zA-Z0-9-]+)*@([a-zA-Z0-9-]+\.)+[a-zA-Z]{2,4}$/',$email)) {echo '<p>incorrect ,ressayer</p>';}
            else {echo"<p>correct</p>";}
        }
        ?>
    </td>
<tr>    
    <td>votre mot de passe est :</td>
    <td>
        <?php
        if(isset($_POST['envoyer'])){
            $pass=$_POST['pass'];
            if (!preg_match('#^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*\W).{8,}$#',$pass)) {echo '<p>incorrect ,ressayer</p>';}
            else {echo"<p>correct</p>";}
        }
        ?>
    </td>
</tr>    
<tr>    
    <td>votre authentification est :</td>
    <td>
    <?php
        if(isset($_POST['envoyer'])){

        try {
           
            $myfile = fopen("login.txt", "r") or die("Unable to open file!");
            $real = false;
            $passch = false;
            while (!feof($myfile)) {
                $ligne=fgets($myfile);
                $array=explode("|",$ligne);
                
                if ($array[0] == $email) {
                    $real = true;

                    if ( $array[1] == $pass) {
                        $passch = true;
                    }
                }
            }
            fclose($myfile);
        } catch (\Throwable $th) {
            throw $th;
        }
if ($real) {
                 if ($passch) {
                
                  echo 'auth success';
                } else {
             
                echo 'pass invalide';
                }
            } else {
            
            echo 'login inexistant';
        }
    }






        
       
        ?>
    </td>
</tr>
</table>
</body>
</html>