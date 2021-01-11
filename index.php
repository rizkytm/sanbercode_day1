<?php

spl_autoload_register(function ($class_name) {
    include $class_name . '.php';
});

$el = new Elang('elang_3');
$har = new Harimau('harimau_1');

echo $el->getInfoHewan();
echo '<br><br>';
echo $har->getInfoHewan();
echo '<br><br>';
echo $el->atraksi();
echo '<br><br>';
echo $har->atraksi();
