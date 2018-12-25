<?php

function drawTable($rows, $columns, $char)
{
    $table = '<table border=1>';
    for ($i=0; $i < $rows; $i++) {
        $table .= drawRow($columns, $char);
    }
    return $table .= '</table>';
}


function drawRow($columns, $char)
{
    $tr = '<tr>';
    for ($i=0; $i < $columns; $i++) {
        $tr .= "<td>$char</td>";
    }
    return $tr .= '</tr>';
}

/*
$filas = $_GET['filas'];
$columnas = $_GET['columnas'];
$char = $_GET['char'];
*/
$rows    = filter_input(INPUT_GET, 'rows', FILTER_SANITIZE_STRING);
$columns = filter_input(INPUT_GET, 'columns', FILTER_SANITIZE_STRING);
$char    = filter_input(INPUT_GET, 'char', FILTER_SANITIZE_STRING);
