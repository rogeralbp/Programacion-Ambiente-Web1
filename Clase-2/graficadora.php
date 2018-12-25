<?php

function drawTable($rows, $columns, $char)
{
    $table = '<table border=1>';
    for ($i=0; $i < $rows; $i++) {
        $table .= drawRow($columns, $char);
    }
    $table .= '</table>';
    return $table;
}


function drawRow($columns, $char)
{
    $tr = '<tr>';
    for ($i=0; $i < $columns; $i++) {
        $tr .= "<td>$char</td>";
    }
    $tr .= '</tr>';
    return $tr;
}


echo drawTable(4, 4, ':)');

/*
$array = [];
$array[] = 1;
$array[] = 2;

array_push($array, "3");

var_dump($array);*/