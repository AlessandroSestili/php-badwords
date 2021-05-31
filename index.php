<?php

$phrase = "Oscuro parola magica";
$magicWord = $_GET["magicworld"];

$magicPhrase = str_replace($magicWord, "* * *", $phrase);

$magicPhraseLength = strlen($magicPhrase);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php-badwords</title>
</head>

<body>
    <p><?php echo $phrase ?></p>
    <p><?php echo $magicPhrase ?></p>
    <p><?php echo $magicPhraseLength ?></p>
</body>

</html>