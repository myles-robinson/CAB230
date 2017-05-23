<?php
  global $errors;

  if (isset($_POST['submit']))
    {
        global $database;

        try {
            //Create WHERE part of query
            $Where = "WHERE ";

            //If filter value entered, collect value and add to WHERE statement
            if($_POST['Rating'] != 'ANY'){
              $Rating = $_POST['Rating'];
              if($Where != 'WHERE '){
                $Where .= "AND ";
              }
              $Where .= "parks.id = reviews.park_id AND reviews.Rating >= :Rating ";
            }
            if($_POST['Suburb'] != 'ALL'){
              $Suburb = $_POST['Suburb'];
              if($Where != 'WHERE '){
                $Where .= "AND ";
              }
              $Where .= "parks.Suburb = :Suburb ";
            }
            if ($_POST['Name'] != ''){
              $Name = "%";
              $Name .= $_POST['Name'];
              $Name .= "%";
              if($Where != 'WHERE '){
                $Where .= "AND ";
              }
              $Where .= " parks.Name LIKE :Name ";
            }

            // Create query with WHERE statement
            $query = "SELECT DISTINCT * FROM parks ";
            if($_POST['Rating'] != 'ANY'){
              $query .= ",reviews ";
            }
            if($Where != 'WHERE '){
              $query .= $Where;
            }
            // Prepare the statement to prevent SQL injections
            $stmt = $database->prepare($query);

            // Bind valid parameters
            if($_POST['Suburb'] != 'ALL'){
              $stmt->bindParam(':Suburb', $Suburb);
            }
            if ($_POST['Name'] != ''){
              $stmt->bindParam(':Name', $Name);
            }
            if($_POST['Rating'] != 'ANY'){
              $stmt->bindParam(':Rating', $Rating);
            }

            // Execute the query
            $stmt->execute();

            if ($stmt->rowCount() > 0) {
              //Save results
              $_SESSION['results'] = $stmt->fetchAll();
            }
            else{
              $_SESSION['results'] = "NONE";
            }
            //GO TO results page
            header("location: ./results.php");

        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }
