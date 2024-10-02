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
    <p>Hai scritto "<?php echo $word; ?>" ed è lunga "<?php echo strlen($word) ?>"</p>
    <p>Questo è quanto è rimasto dopo la censura "<?php echo $censored; ?>"</p>
</body>
</html>