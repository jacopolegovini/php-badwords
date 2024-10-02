<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bad Words</title>
</head>
<body>
    <p>Questo è quanto hai scritto <?php echo $_POST["word"]; ?></p>
    <p>Questo è quanto hai scritto con la censura <?php echo $_POST["bad_word"]; ?></p>
</body>
</html>