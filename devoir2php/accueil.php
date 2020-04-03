<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exercice 4</title>
    <style>
    th {
    font-family: monospace;
    border: thin solid #6495ed;
    width: 30%;
    padding: 1px;
    background-color: #D0E3FA;
}
h2{
    text-align: center;
    color:teal;
    

    }
form{
    text-align: center;
    background-color: #FA8072;
    color: teal;
}

</style>
</head>
<body>
    <h2>connectez vous</h2>
    <form method="post" action="authentification.php">
    <fieldset>
        <label for="login">login:</label>
        <input type="email" name="email" id="email" /></br>
        <label for="pass">mot de passe :</label>
        <input type="password" name="pass" id="pass" /> </br>
        <input type="submit" value="envoyer" name="envoyer" />
        
    </fieldset>
    

    </form>
    
        

    
    </body>
</html>