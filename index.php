<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Censura Paragrafo</title>
</head>

<body>
    <div class="wrapper">
        <div class="container">
        <h1>Censura Paragrafo</h1>
        <form action="censura.php" method="post">
            <label for="paragrafo">Inserisci il paragrafo:</label>
            <textarea id="paragrafo" name="paragrafo" rows="10" cols="50"></textarea><br><br>
            <label for="parola">Inserisci la parola da censurare:</label>
            <input type="text" id="parola" name="parola" size="20"><br><br>
            <input type="submit" value="Invia">
        </form>
        </div>
    </div>
</body>

</html>