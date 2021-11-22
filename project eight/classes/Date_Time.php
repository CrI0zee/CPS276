<?php
require_once 'Pdo_methods.php';
date_default_timezone_set('America/Detroit');
class Date_Time extends Pdomethods
{
   
	
	
	public function addNote(){
        $pdo = new  Pdomethods();
        
        $sql = "INSERT INTO TableB(dateCol, Notes) VALUES(:dates, :Notes)";
		$dates = strtotime($_POST['dates']);
        $bindings = [
            [':dates', $dates,'int'],
			[':Notes', $_POST['Notes'], 'str']
		];
		
		$result = $pdo->otherBinded($sql, $bindings);

		
    }

	public function createTable($records)
	{
		
		$table = "<table>";
		
		foreach($records as $row)
		{
			$table .= "<tr>";
			$table .= "<td>{$row['dateCol']}</td>";
			$table .= "<td>{$row['Notes']}</td>";
			$table .= "</tr>";
		}
		$table .= "</table>";
		return $table;
	}

    public function getNote(){
        $pdo = new Pdomethods();
		$newD1 = strtotime($_POST['begDate']);
		$newD2 = strtotime($_POST['endDate']);
		$sql = "SELECT * FROM TableB WHERE dateCol BETWEEN ':new1' AND ':new2' ORDER BY dateCol DESC";
		$bindings = [
            [':new1', $newD1,'int'],
			[':new2', $newD2,'int']
		];

		
		$records = $pdo->selectBinded($sql,$bindings);

		if($records == 'error'){
			return 'There has been and error processing your request';
		}
		else {
			if(count($records) != 0){
				return $this->createTable($records);	
			}
			else {
				return "no dates found";
				
			}
		}
    }
}
















?>