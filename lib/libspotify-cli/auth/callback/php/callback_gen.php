<html>
<body>
<?php
$fd1=fopen("../../../config/authorization_code", 'c+');
fwrite($fd1, $_GET["code"]);
fclose($fd1);
?>

<h3>authorization code acquired.</h3>
<h4>If there're some errors shown, use the code below: </h4>
<textarea cols=100 rows=15>
<?php
echo $_GET["code"]
?>
</textarea>

<!--
<pre>
<?php
echo '## URL' . PHP_EOL;
var_dump((isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? 'https' : 'http') . '://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']);
echo PHP_EOL;
?>

<?php
echo '## SSL' . PHP_EOL;
var_dump($_SERVER['HTTPS']);
echo PHP_EOL;
?>

<?php
echo '## HTTP_HOST' . PHP_EOL;
var_dump($_SERVER['HTTP_HOST']);
echo PHP_EOL;
?>

<?php
echo '## REQUEST_URI' . PHP_EOL;
var_dump($_SERVER['REQUEST_URI']);
echo PHP_EOL;
?>

<?php
echo '## SCRIPT_NAME' . PHP_EOL;
var_dump($_SERVER['SCRIPT_NAME']);
echo PHP_EOL;
?>

<?php
echo '## Params' . PHP_EOL;
var_dump($_GET);
echo PHP_EOL;
?>
</pre>
-->
</body>
