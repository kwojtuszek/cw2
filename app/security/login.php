<?php
require_once dirname(__FILE__).'/../../config_credit.php';

function getLogAndPass(&$form) {
    $form['login'] = isset($_REQUEST ['login']) ? $_REQUEST ['login'] : null;
	$form['pass'] = isset($_REQUEST ['pass']) ? $_REQUEST ['pass'] : null;
}

function validateLogAndPass(&$form, &$messages) {
    if ( ! (isset($form['login']) && isset($form['pass']))) {
		return false;
	}

	if ( $form['login'] == "") {
		$messages [] = 'Nie podano loginu';
	}
	if ( $form['pass'] == "") {
		$messages [] = 'Nie podano hasła';
	}

	if (! empty($messages)) return false;

	if ($form['login'] == "admin" && $form['pass'] == "admin") {
		session_start();
		$_SESSION['role'] = 'admin';
		return true;
	}
	if ($form['login'] == "user" && $form['pass'] == "user") {
		session_start();
		$_SESSION['role'] = 'user';
		return true;
	}
	$messages [] = 'Niepoprawny login lub hasło';
	return false; 
}

$form = array();
$messages = array();

getLogAndPass($form);
if (! validateLogAndPass($form, $messages)) {
    include _ROOT_PATH.'/app/security/login_view.php';
} else {
    header("Location: "._APP_URL);
}