<?php
    echo 'hello';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bad Words</title>
</head>
<body>
    <form action="bad_words.php" method="GET">
        <input type="text" name="words" placeholder="Inserisci una parola">
        <input type="text" name="bad_word" placeholder="Inserisci la parola da censurare">
        <button>Invia</button>
    </form>
</body>
</html>