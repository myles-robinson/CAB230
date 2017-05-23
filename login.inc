<?php
  global $errors;
  if(isset($_POST['submit']))
    {
      global $database;

      try{
        // Collect input values
        $email = $_POST['email'];
        $password = $_POST['password'];
        $query = "SELECT salt FROM members WHERE email = :email";
        $stmt = $database->prepare($query);
        $stmt->bindParam(':email', $email);
        $stmt->execute();
        $saltArray = $stmt->fetch();
        $salt = ($saltArray['salt']);
        $password =  sha1($password . $salt);
        $query = "SELECT user_id, first_name FROM members WHERE email = :email AND password = :password";
        $stmt = $database->prepare($query);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':password', $password);
        $stmt->execute();


        if($stmt->rowCount() > 0){
          $_SESSION['loggedIn'] = true;
          $_SESSION['user_id'] = $stmt->fetch()['user_id'];
          $_SESSION['user_first_name'] = $stmt->fetch()['first_name'];
          header("location: ./index.php");

        }
        else{
          echo "<br><br><br><center><h2>Username or password incorrect, please try again</h2></center>";
        }
      }catch (PDOException $e) {
          die($e->getMessage());
      }
    }
?>
