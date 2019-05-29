<?php
if ( !empty($_GET['language']) ) {
    $_COOKIE['language'] = $_GET['language'] === 'en' ? 'en' : 'fr';
} else {
    $_COOKIE['language'] = 'fr';
}
setcookie('language', $_COOKIE['language']);
if ( $_COOKIE['language'] == "en") {
    include("lang/en.php");
 } else {
    include("lang/fr.php");
 }
?>
