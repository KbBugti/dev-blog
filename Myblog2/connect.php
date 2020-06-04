<?php 

$servername = "localhost";
$username = "root";
$password = "root";
$dbname   = "connect";


// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// if($conn){
//     echo("Connected");
// }

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}


if (isset($_POST['submit'])) {
    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $gender = $_POST['gender'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $paragraph = $_POST['paragraph'];
    $number = $_POST['number'];


    // DATABASE Connection
    if (!empty($firstName) || !empty($lastName) || !empty($gender) || !empty($email) || !empty($password) || !empty($paragraph) || !empty($number)) {
        $SELECT = "SELECT * FROM contact_list WHERE (email = '$email' OR firstName = '$firstName' OR lastName = '$lastName')"; 
        $result = $conn->query($SELECT);

        if ($result->num_rows > 0){
            // echo("This email is already used...");


              // output data of each row
  while($row = $result->fetch_assoc()) {
      if($row["firstName"] == $firstName){
          echo("First name ".$row['firstName']." is already used....");
      }

        if($row["lastName"] == $lastName){
            echo("Last ".$row['flastName']." is already used....");
        }

        if($row["email"] == $email){
            echo("This ".$row['email']." is also already used....");
        }

  }
        }else{
            $INSERT = "INSERT INTO contact_list (firstName, lastName, gender, email, password, paragraph, number)
            VALUES('$firstName', '$lastName', '$gender', '$email', '$password', '$paragraph', '$number')";
            
    
    
            if ($conn->query($INSERT) === TRUE) {
                echo "New record created successfully";
              } else {
                echo("Error: " . $INSERT . "<br>" . $conn->error);
              }
        }

        }  
}


?>
