<?php
require_once dirname(__FILE__).'/../../config_credit.php';

session_start();
session_destroy();

header("Location: "._APP_URL);