<?php
	function confirm_query($result_set) {
		if (!$result_set) {
			die("Database query failed.");
		}
	}

	function implode_all_data(){
		if(isset($_POST["ESTABLISHMENT_NAME"])){
            global $connection;

            $ESTABLISHMENT_NAME = $_POST["ESTABLISHMENT_NAME"];
            $safe_estb_name = mysqli_real_escape_string($connection, $ESTABLISHMENT_NAME);
            //$query = "SELECT INSPECTION_ID AND ESTABLISHMENT_NAME AND STATUS FROM Dinesafe ";
						$query = "SELECT ESTABLISHMENT_NAME , INSPECTION_DATE , SEVERITY FROM Dinesafe ";
            $query .= "WHERE ESTABLISHMENT_NAME LIKE ";
            $query .= "'%{$safe_estb_name}%'";
            //$query .= "LIMIT 1";
            $dine_set = mysqli_query($connection ,$query);
            confirm_query($dine_set);
            $result = "";
            while ($dine = mysqli_fetch_assoc($dine_set)){
            	$result .= implode(" &nbsp " ,$dine);
            	$result .= "<hr>";

            }
            return $result;

        }
	}

	function get_inspection_id(){
		global $connection;
		$ESTABLISHMENT_NAME = $_POST["ESTABLISHMENT_NAME"];
		$safe_estb_name = mysqli_real_escape_string($connection, $ESTABLISHMENT_NAME);
		$query = "SELECT inspection_id FROM dinesafe WHERE ESTABLISHMENT_NAME LIKE '%{$safe_estb_name_id}%'";
		$result_set = mysqli_query($connection, $query);

		$result = "";
		while ($dine = mysqli_fetch_assoc($result_set)){
			$result .= implode("",$dine);
			$result .= "<hr>";
		}
		return $result;
	}

	function show_details(){
		if(isset($_POST["ESTABLISHMENT_NAME"])){
            global $connection;
            $ESTABLISHMENT_NAME = $_POST["ESTABLISHMENT_NAME"];
            $safe_estb_name_id = mysqli_real_escape_string($connection, $ESTABLISHMENT_NAME);
            $query = "SELECT INFRACTION_DETAILS FROM Dinesafe ";
            $query .= "WHERE ESTABLISHMENT_NAME = ";
            $query .= "'{$safe_estb_name_id}'";
            //$query .= "LIMIT 1";
            $dine_set = mysqli_query($connection ,$query);
            confirm_query($dine_set);
						$counter = 0;
            while ($dine = mysqli_fetch_assoc($dine_set)){
								${$counter};
            	}
						return $result;
        }
	}

	function find_fine($INSPECTION_ID){
		global $connection;
	}

?>
