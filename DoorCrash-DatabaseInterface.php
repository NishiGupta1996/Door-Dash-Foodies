<?php

  // -----------------------------------------------------------------
  // Set connection parameters and create connection
  // -----------------------------------------------------------------
  $host = "127.0.0.1";
  $user = "root";
  $password = "mysql";
  $database = "dbFoodItems";
  $cxn = mysqli_connect($host, $user, $password, $database);
    
  // Test which database request to perform
  switch ($_GET["request"])
  { 
    // ---------------------------------------------------------------
    // Update Food item
    // -Possible errors: Food ID not found
    // ---------------------------------------------------------------
    case "update":
                  
		// Create and submit select query
		$sql = "SELECT * FROM tbFoodItems WHERE FoodItemID=" . $_GET["id"];
		$result = mysqli_query($cxn, $sql);
      
		// Test if query failed
		if($result == false)
			echo "Update query 1 operation FAILED.". $sql;
      
		// Test if ID invalid
		else if (mysqli_num_rows($result) == 0)
			echo "Update operation FAILED. Food ID '" . $_GET["id"] . 
			"' not found.";
          
		else
		{
			while($row = mysqli_fetch_array($result)){
				$quantity = $row['QuantitySold'] + $_GET["quantity"];
				$ordersold = $row['OrdersSold'] + 1;				
			}
			// Create and submit update query
			 $sql = "UPDATE tbFoodItems SET QuantitySold= " . $quantity . ", OrdersSold= " . $ordersold ." WHERE FoodItemID = " . $_GET["id"].";";
			$result = mysqli_query($cxn, $sql);
            
			// Test if query failed$
			if($result == false)
				echo "Update operation FAILED.";
			else				
				echo "Update operation successful. Food Item with Id ", $_GET["id"] . " updated successfully";
                
		}
		break;    
    
    
    // ---------------------------------------------------------------
    // List Food items
    // -Possible errors: none.
    // ---------------------------------------------------------------
    case "list":

      // Create and submit select query
      $sql = "SELECT * FROM tbFoodItems ORDER BY FoodItemID;";
      $result = mysqli_query($cxn, $sql);
      
      // Test if query failed
      if($result == false)
        echo "List operation FAILED.";
      else
      {
        
        // Loop to retrieve data
        while($row = mysqli_fetch_row($result))          
		{ 
			$results[] = $row;
		}

		echo json_encode($results);		
      }
      break;
    
    // ---------------------------------------------------------------
    // Handle unknown request
    // ---------------------------------------------------------------
    default:
      echo "Error: unknown database request.";

  }

?>
