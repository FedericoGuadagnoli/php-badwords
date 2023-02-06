<?php
$text = $_GET['text'];
$badword= $_GET['badword'];

$replaced_badword = str_replace($badword, '***', $text);
?>

<h1>Paragrafo originale</h1>
<p><?php echo $text ?></p>

<h1>Paragrafo censurato</h1>
<p><?php echo $replaced_badword?></p>