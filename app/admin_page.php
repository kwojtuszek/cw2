<?php
require_once dirname(__FILE__).'/../config_credit.php';
include _ROOT_PATH.'/app/security/keeper.php';
?>

<html lang = pl xml:lang = pl>
<head>
    <meta charset="utf-8"/>
    <title> Strona Administratora </title>
    <link rel = "stylesheet" href = "https://unpkg.com/purecss@2.0.5/build/pure-min.css">
</head>
<body>

<div style = "width: 90%; margin: 2em auto;">
    <a href = "<?php print(_APP_ROOT); ?> /app/calc_credit.php" class = "pure-button pure-button-active"> Powrót </a>
    <a href = "<?php print(_APP_ROOT); ?> /app/security/logout.php" class = "pure-button pure-button-active"> Wyloguj </a>
</div>

<?php if ($role != 'admin') { ?>
<div style = "width: 85%; margin: 3em auto;">
    <p> Ta strona jest widoczna tylko dla Admina! </p>
</div>

<?php } else { ?>
<div style = "width: 85%; margin: 3em auto;">
    <p> Witaj Adminie oto twoja super stronka :) </p>
</div>
<?php } ?>

</body>
</html>