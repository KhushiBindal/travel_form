<?php
$insert = false;
error_reporting(E_ALL);
ini_set('display_errors', '1');

if(isset($_POST['name'])){
    // Set connection variables
    $server = "localhost";
    $username = "root";
    $password = "";

    // Check for database connection
    $con = mysqli_connect($server, $username, $password);

    // Check for connection success
    if(!$con){
        die("Connection to current database failed due to " . mysqli_connect_error());
    }
    // echo "Successfully connected ro the database";

    // Collect post variables
    $name= $_POST['name'];
    $age= $_POST['age'];
    $email= $_POST['email'];
    $contact= $_POST['contact'];
    $class= $_POST['class'];
    $section= $_POST['section'];
    $desc= $_POST['desc'];

    $sql="INSERT INTO `travel`.`trip` ( `Name`, `Age`, `Email`, `Contact`, `Class`, `Section`, `Additional`, `Date`) VALUES ('$name', '$age', '$email', '$contact', '$class', '$section', '$desc', current_timestamp());";
    // echo $sql;

    // Execute the query
    if($con->query($sql)==true){
        // echo "Successfully inserted";

        // Flag for successful connection
        $insert= true;
    }else{
        echo "Error: $sql <br> $con->error";
    }

    // Close the database connection
    $con->close();
}
?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Welcome to travel form</title>
    <link rel="stylesheet" href="index.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@1,600&family=Poppins:wght@200&display=swap"
      rel="stylesheet"
    />
  </head>

  <body>
    <img src="bg.jpeg" alt="bg" class="bg" />
    <div class="container">
      <h2>Welcome to my first php mini project</h2>
      <h3>Fill in the form</h3>
      <p>Enter your details and submit this form to confirm your trip.</p>
      <?php
      if($insert==true){
      echo "<p class='submitform'>Thankyou for submitting the form </p>";
      }
      ?>
      <form action="index.php" method="post">
        <input
          type="text"
          name="name"
          id="name"
          placeholder="Enter your name"
        />
        <input type="number" name="age" id="age" placeholder="Enter your age" />
        <input
          type="email"
          name="email"
          id="email"
          placeholder="Enter your email"
        />
        <input
          type="number"
          name="contact"
          id="contact"
          placeholder="Enter your contact number"
        />
        <!-- <input type="radio" name="gender" id="male" /> Male
        <input type="radio" name="gender" id="female" /> Female
        <input type="radio" name="gender" id="transgender" /> Transgender -->
        <input
          type="text"
          name="class"
          id="class"
          placeholder="Enter your class"
        />
        <input
          type="text"
          name="section"
          id="section"
          placeholder="Enter your section"
        />
        <textarea
          name="desc"
          id="desc"
          cols="20"
          rows="10"
          placeholder="Enter anything you wnat to say..."
        ></textarea>
        <button class="btn">Submit</button>
        <button class="btn">Reset</button>
      </form>
    </div>
    <script src="index.js "></script>
  </body>
</html>


<!--  //////////////-->