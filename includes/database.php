<?php
echo('aaa');

$db = mysqli_connect('maria_lemp', 'chan', '961421180', 'appsalon');



if (!$db) {
    echo "Error: No se pudo conectar a MySQL.";
    echo "errno de depuración: " . mysqli_connect_errno();
    echo "error de depuración: " . mysqli_connect_error();
    exit;
}
