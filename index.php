<?php
$paragrafo = "Ma vattela a pia n'derculo";

$badword = "n'derculo";
$newParagrafo = str_replace($badword, "****",$paragrafo);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1> <?php echo $paragrafo; ?></h1>
    <h3>lunghezza: <?= strlen($paragrafo)?></h3>
    <h1> <?php echo $newParagrafo; ?></h1>
    <h3>lunghezza: <?= strlen($newParagrafo)?></h3>
</body>
</html>