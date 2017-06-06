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
            $safe_estb_name_id = mysqli_real_escape_string($connection, $ESTABLISHMENT_NAME);
            //$query = "SELECT INSPECTION_ID AND ESTABLISHMENT_NAME AND STATUS FROM Dinesafe ";
						$query = "SELECT INSPECTION_DATE, INSPECTION_ID , ESTABLISHMENT_STATUS , SEVERITY FROM Dinesafe ";
            $query .= "WHERE ESTABLISHMENT_NAME = ";
            $query .= "'{$safe_estb_name_id}'";
            //$query .= "LIMIT 1";
            $dine_set = mysqli_query($connection ,$query);
            confirm_query($dine_set);
            $result = "";
            while ($dine = mysqli_fetch_assoc($dine_set)){
            	$result .= implode(" | " ,$dine);
            	$result .= "<hr>";

            }
            return $result;

        }
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
