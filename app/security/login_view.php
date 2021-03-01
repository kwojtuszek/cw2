<!DOCTYPE HTML>
<html xmlns = "http://www.w3.org/1999/xhtml" lang = pl xml:lang = pl>
<head>
    <meta charset="utf-8"/>
    <title> Logowanie </title>
    <link rel = "stylesheet" href = "https://unpkg.com/purecss@2.0.5/build/pure-min.css">
</head>
<body>

<div style = "width: 85%; margin: 3em auto;">

<form action = "<?php print(_APP_ROOT); ?> /app/security/login.php" method = "post" class = "pure-form pure-form-aligned">
    <legend>Logowanie</legend>
    <fieldset>
        <div class="pure-control-group">
            <label for = "id_login"> Login: </label>
            <input id = "id_login" type = "text" name = "login"/>
        </div>
        <div class="pure-control-group">
            <label for = "id_pass"> Password: </label>
		    <input id = "id_pass" type = "password" name = "pass"/>
        </div>
        <div class="pure-controls">    
            <button type = "submit" class = "pure-button pure-button-primary"> Submit</button>
        </div>
    </fieldset>
</form>

<?php
if (isset($messages)) {
	if (! empty($messages)) {
        echo '<ol style="margin: 20px; padding: 10px 10px 10px 30px; border-radius: 5px; background-color: #f55; width:400px;">';
		foreach ( $messages as $key => $msg ) {
			echo '<li>'.$msg.'</li>';
		}
		echo '</ol>';
	}
}
?>

</div>

</body>
</html>