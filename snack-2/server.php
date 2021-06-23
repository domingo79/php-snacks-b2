<?php
$query = $_GET['invitato'];

$invitati = ['Domenico', 'Carmen', 'Alessandra'];

var_dump($query);

if (in_array($query, $invitati)) {
    echo $_GET['invitato'] . ', Benvenuto al party!';
} else {

    echo $_GET['invitato'] . ', non sei in lista.';
}
