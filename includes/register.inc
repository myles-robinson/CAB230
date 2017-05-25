
<?php

    if (isset($_POST['submit'])) {
        global $database;
        try {

            // Collect input values
            $firstname = $_POST['first_name'];
            $lastname = $_POST['last_name'];
            $email = $_POST['email'];
            $password = $_POST['password'];

            // Validate user input
            validate_first_name($firstname);
            validate_last_name($lastname);
            validate_email($email);

            // Count if there are any errors found
            if (count($errors) === 0) {
                // Create salt
                $saltHash = md5(uniqid());
                $salt = substr($saltHash, 0, 20);

                // Concat salt to password and hash using sha1
                $password =  sha1($password . $salt);

                //Check if account already exists
                $query = "SELECT user_id FROM members WHERE email = :email";
                $stmt = $database->prepare($query);
                $stmt->bindParam(':email', $email);
                $stmt->execute();

                if ($stmt->rowCount() > 0) {
                  echo "<br><br><br><center><h2>Email has already been registered with an account. Please <a href='../parkfindr/login.php'>login</a> instead.</h2></center>";
                } else {
                  // Create and prepare query
                  $query = "INSERT INTO members (first_name, last_name, email, password, salt)
                  VALUES (:first_name, :last_name, :email, :password, :salt)";

                  // Prepare the statement to prevent SQL injections
                  $stmt = $database->prepare($query);

                  // Bind parameters
                  $stmt->bindParam(':first_name', $firstname);
                  $stmt->bindParam(':last_name', $lastname);
                  $stmt->bindParam(':email', $email);
                  $stmt->bindParam(':password', ($password));
                  $stmt->bindParam(':salt', $salt);

                  // Execute the query
                  $stmt->execute();
                  header("location: ../parkfindr/login.php");
                }

            } else {
                echo "<br><br><br><center><h2>Please ensure all fields are the correct format. First and last name must not contain numbers.</h2></center>";
            }
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }
