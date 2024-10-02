<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bad Words</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Censura Bad Words</h1>
    <form action="bad_words.php" method="POST">
        <input type="text" name="words" placeholder="Inserisci una parola">
        <input type="text" name="bad_word" placeholder="Inserisci la parola da censurare"><br>
        <button>Invia</button>
    </form>
</body>
</html>