<?php
    global $errors;

    global $database;

    // Create query with WHERE statement
    $parkName = $_GET['park'];

    //Get park ID
    $query = "SELECT id FROM parks WHERE parks.Name = :name";

    // Prepare the statement to prevent SQL injections
    $stmt = $database->prepare($query);
    $stmt->bindParam(':name', $parkName);

    // Execute the query
    $stmt->execute();

    $parkId = $stmt->fetch()[0];

    //Get street
    $query = "SELECT Street FROM parks WHERE id = :id";
    $stmt = $database->prepare($query);
    $stmt->bindParam(':id', $parkId);
    $stmt->execute();
    $_SESSION['street'] = $stmt->fetch();

    if(isset($_POST['submit'])){
      //Insert Review
      $starRating = $_POST['Rating'];
      $textReview = $_POST['reviewText'];
      $userId =  $_SESSION['user_id'][0];

      $query = "INSERT INTO reviews (user_id, park_id, description, rating)
      VALUES (:user_id, :park_id, :textReview, :rating)";

      // Prepare the statement to prevent SQL injections
      $stmt = $database->prepare($query);

      // Bind parameters
      $stmt->bindParam(':user_id', $userId);
      $stmt->bindParam(':park_id', $parkId);
      $stmt->bindParam(':textReview', $textReview);
      $stmt->bindParam(':rating', $starRating);

      // Execute the query
      $stmt->execute();
    }


    try {
        // Get reviews for park
        // Prepare the statement to prevent SQL injections
        $query = "SELECT * FROM reviews WHERE park_id = :id";

        $stmt = $database->prepare($query);
        $stmt->bindParam(':id', $parkId);

        // Execute the query
        $stmt->execute();

        if ($stmt->rowCount() > 0) {
          //Save results
          $_SESSION['reviews'] = $stmt->fetchAll();
        }
        else{
          $_SESSION['reviews'] = 'NONE';
        }

    } catch (PDOException $e) {
        die($e->getMessage());
    }
