<?php 


class Graficadora
{

	public function __construct()
	{
		$this->rows=0;
		$this->columns=0;
		$this->char='';
	}

	public function drawTable($rows, $columns, $char) {
	
	    $table = '<table border=1>';
	
	    for ($i=0; $i < $rows; $i++) {
	        $table .= $this->drawRow($columns, $char);
	    }
	
	    $table .= '</table>';
	    return $table;
	
	}

	private function drawRow($columns, $char){
    	
    	$tr = '<tr>';
    	for ($i=0; $i < $columns; $i++) {
        	$tr .= "<td>$char</td>";
    	}
    	
    	$tr .= '</tr>';
    	return $tr;
	}


}

/*
$filas = $_GET['filas'];
$columnas = $_GET['columnas'];
$char = $_GET['char'];
*/


$filas = $_GET['filas'];
$columnas = $_GET['columnas'];
$char = $_GET['char'];

$obj = new Graficadora();
echo $obj->drawTable($filas,$columnas,$char);
