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
	
	    $table = '<table>';
	
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

	$obj = new Graficadora();
    echo $obj->drawTable(2,2,'r');
