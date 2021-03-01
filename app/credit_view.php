<!DOCTYPE HTML>
<html xmlns = "http://www.w3.org/1999/xhtml" lang = pl xml:lang = pl>
<head>
    <meta charset="utf-8"/>
    <title> Kalkulator Kredytowy </title>
    <link rel = "stylesheet" href = "https://unpkg.com/purecss@2.0.5/build/pure-min.css">
</head>
<body>

<div style = "width: 90%; margin: 2em auto;">
    <a href = "<?php print(_APP_ROOT); ?> /app/admin_page.php" class = "pure-button pure-button-active"> Strona dla Admina </a>
    <a href = "<?php print(_APP_ROOT); ?> /app/security/logout.php" class = "pure-button pure-button-active"> Wyloguj </a>
</div>

<div style = "width: 85%; margin: 3em auto;">

<form action = "<?php print(_APP_URL); ?> /app/calc_credit.php" method="post" class = "pure-form pure-form-aligned">
    <legend> Kalkulator Kredytowy </legend>
    <fieldset>
        <div class="pure-control-group">
            <label for = "id_x"> Wysokość Kredytu: </label>
            <input id = "id_x" type = "text" name = "x" value = "<?php out($variables['x']); ?>"/>
        </div>
        <div class="pure-control-group"> 
            <label for = "id_y"> Oprocentowanie: </label>
            <input id = "id_y" type = "text" name = "y" value = "<?php out($variables['y']); ?>"/>
        </div>
        <div class="pure-control-group">
            <label for = "id_z"> Na ile lat: </label>
            <input id = "id_z" type = "text" name = z value = "<?php out($variables['z']); ?>"/>
        </div>
        <div class="pure-controls">
            <button type = "submit" class = "pure-button pure-button-primary"> Oblicz</button>
        </div>
    </fieldset>
</form>

</div>

<?php
if (isset($messages)) {
    if (! empty($messages)) {
		    echo '<ol style="margin: 20px; padding: 10px 10px 10px 30px; border-radius: 5px; background-color: #f55; width:400px;">';
		    foreach ( $messages as $msg ) {
		    	echo '<li>'.$msg.'</li>';
		    }
		    echo '</ol>';
        }        
}
?>

<?php if (isset($variables['result'])) { ?>
<div style="margin: 1em; padding: 2em; border-radius: 0.5em; background-color: #8f8; width:30em;">
<?php echo 'Miesięczna rata: '.$variables['result']; ?>
</div>
<?php } ?>

</body>
</html>