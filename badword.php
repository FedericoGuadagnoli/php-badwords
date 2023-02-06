<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bad-Words</title>
    <link rel="stylesheet" href="style/style.css">
</head>
<body>
    
</body>
</html>


<?php
$text = $_GET['text'];
$badword = $_GET['badword'];
$lengText = 'La lunghezza del testo è ';

$replaced_badword = str_replace($badword, '***', $text);
?>

<div>
    <h1>Paragrafo originale</h1>
    <p><?php echo $text?></p>
    <span><?php echo $lengText . strlen($text)?></span>
</div>

<hr>

<div>
    <h1>Paragrafo censurato</h1>
    <p><?php echo $replaced_badword?></p>
    <span><?php echo $lengText . strlen($replaced_badword)?></span>
</div>
<hr>