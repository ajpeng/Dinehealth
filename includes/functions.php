<?php
	function confirm_query($result_set) {
		if (!$result_set) {
			die("Database query failed.");
		}
	}

	function implodeAllData(){
		if(isset($_POST["ESTABLISHMENT_NAME"])){
            global $connection;
            $ESTABLISHMENT_NAME = $_POST["ESTABLISHMENT_NAME"];
            $safe_estb_name_id = mysqli_real_escape_string($connection, $ESTABLISHMENT_NAME);
            $query = "SELECT * FROM Dinesafe ";
            $query .= "WHERE ESTABLISHMENT_NAME = ";
            $query .= "'{$safe_estb_name_id}'";
            //$query .= "LIMIT 1";
            $dine_set = mysqli_query($connection ,$query);
            confirm_query($dine_set);
            while ($dine = mysqli_fetch_assoc($dine_set)){
            	$result = implode(" | " ,$dine);
            	$result .= "<br/>";
            	$result .= "<br/>";
            return $result;
	}
?>