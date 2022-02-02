<?php

// TODO n'oubliez pas de créer votre classe dans le dossier classes.

include './classes/StrUtils.php';

$myStr = new StrUtils("php is awesome !", "bold", "italic", "underline", "capitalize");

echo $myStr->getBold()."<br><br>";
echo $myStr->getItalic()."<br><br>";
echo $myStr->getUnderline()."<br><br>";
echo $myStr->getCapitalize()."<br><br>";
echo $myStr->uglify()."<br><br>";