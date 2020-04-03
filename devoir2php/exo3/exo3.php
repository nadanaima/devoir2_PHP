<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exercice 3</title>
    <style>
    th {
    font-family: monospace;
    border: thin solid #6495ed;
    width: 30%;
    padding: 1px;
    background-color: #D0E3FA;
}
h4{
    text-align: center;
}
</style>
</head>
<body>
    <h4>choisir une date</h4>
    <form method="post" action="traitement.php">
    <table border=0>
        <tr>
            <th>Jour</th>
            <th>Mois</th>
            <th>Année</th>
        </tr>
        <tr>
            <td><input type="number" name="j"min="0" max="31"/></td>
            <td><input type="number" name="m"min="0" max="12"/></td>
            <td><input type="number" name="a" min="1900" max="2020"/></td>
        </tr>
        <tr>
        <td> <input type="submit" value="Envoyer" name="envoyer" /></td>
        </tr>
        
    </table>
    </form>
</body>
</html>