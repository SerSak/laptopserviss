<?php
session_start();

if (!isset($_SESSION['lang']))
    $_SESSION['lang'] = "lv";
else if (isset($_GET['lang']) &&  $_SESSION['lang'] != $_GET['lang'] && !empty($_GET['lang'])) {
    if ($_GET['lang'] == "lv")
        $_SESSION['lang'] = "lv";
    else if ($_GET['lang'] == "ru")
        $_SESSION['lang'] = "ru";
}


$curr_lang = $_SESSION['lang'];


require_once "langs/" . $_SESSION['lang'] . ".php";
