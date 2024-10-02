<?php 
    $word = $_POST["words"];
    $words = explode(" ", $word);

    $bad_word = $_POST['bad_word'];
    $censored_array = str_replace($bad_word, '***', $words);
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
    <p>Hai scritto "<?php echo $word; ?>" e questo è quanto è lungo "<?php echo strlen($word) ?>"</p>
    <p>Questo è quanto hai scritto con la censura "<?php echo $censored; ?>"</p>
</body>
</html>