<?php

    if (isset($_POST['submit'])) {
        global $database;
        try {

            // Collect input values
            $subrub = $_POST['suburbs'];
            $parkname = $_POST['parkname'];
            $rating = $_POST['rating'];

            // Count if there are any errors found
            if (count($errors) === 0) {

                // Create and prepare query
                $query = "SELECT * from parks where suburb=':subrub'";

                // Prepare the statement to prevent SQL injections
                $stmt = $database->prepare($query);

                // Bind parameters
                $stmt->bindParam(':suburb', $suburb);
                $stmt->bindParam(':parkname', $parkname);
                $stmt->bindParam(':rating', $rating);

                // Execute the query
                $stmt->execute();

                if ($stmt->rowCount() > 0) {
                  //Return results
                }
            } else {
                print_r($errors);
            }
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }
