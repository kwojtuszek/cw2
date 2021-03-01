<?php
require_once dirname(__FILE__).'/../config_credit.php';

include _ROOT_PATH.'/app/security/keeper.php';

function getVariables(&$variables) {
    $variables['x'] = isset($_REQUEST['x']) ? $_REQUEST['x'] : null;
    $variables['y'] = isset($_REQUEST['y']) ? $_REQUEST['y'] : null;
    $variables['z'] = isset($_REQUEST['z']) ? $_REQUEST['z'] : null;
}

function validate(&$variables, &$messages) {
    if (! (isset($variables['x']) && isset($variables['y']) && isset($variables['z']))) {
        return false;
    }

    if ($variables['x'] == "") {
        $messages [] = "Nie podano wysokości kredytu.";
    }
    if ($variables['y'] == "") {
        $messages [] = "Nie podano wartości oprocentowania.";
    }
    if ($variables['z'] == "") {
        $messages [] = "Nie podano okresu kredytowania.";
    }

    if (! empty($messages)) return false;
    
    if (! is_numeric($variables['x'])) {
        $messages [] = "Wysokość kredytu nie jest liczbą!";
    }
    if (! is_numeric($variables['y'])) {
        $messages [] = "Oprocentowanie nie jest liczbą!";
    }
    if (! is_numeric($variables['z'])) {
        $messages [] = "Okres kredytowania nie jest liczbą!";
    }

    if (! empty($messages)) return false;
    else return true;
}  


function calculate(&$variables, &$messages) {
    $x = intval($variables['x']);
    $y = floatval($variables['y']);
    $z = intval($variables['z']);

    $variables['result'] = (($y/100 * $x) + $x) / ($z*12);
}

$variables = array();
$messages = array();

getVariables($variables);
if (validate($variables, $messages)) {
    calculate($variables, $messages);
}

include 'credit_view.php';