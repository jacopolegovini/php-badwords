<?php 
    $word = $_POST["words"];
    $words_array = explode(" ", $word);

    $bad_word = $_POST['bad_word'];
    $censored_array = str_replace($bad_word, '***', $words_array);
    $censored = implode(' ', $censored_array);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bad Words</title>
</head>
<body>
    <div>
        <h3>Senza censura (lunga: "<?php echo strlen($word) ?>"):</h3>
        <p><?php echo $word; ?></p>
    </div>
    <hr>
    <div>
        <h3>Con censura (lunga: "<?php echo strlen($word) ?>"):</h3>
        <p><?php echo $censored; ?></p>
    </div>
</body>
</html>