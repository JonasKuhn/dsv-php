<?php

$host='localhost';
$base='php_img';
$usuario='root';
$senha='1234';

$mysqli = new mysqli($host,$usuario,$senha,$base);

if(mysqli_connect_errno()){
    trigger_error(mysqli_connect_error());
}

$mysqli->set_charset('utf8');

date_default_timezone_set('America/Sao_Paulo');