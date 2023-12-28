
<?php


$conn = new mysqli('localhost','root','','main_blood_bank');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
    }
    if (isset($_POST['submit'])) {
        $email = $_POST["email"];
        $password = $_POST["password"];
    
        $sql = "SELECT * FROM user WHERE email = '$email'";
            $result = mysqli_query($conn, $sql);
            $user = mysqli_fetch_array($result, MYSQLI_ASSOC);
            if ($user) {
                if ($password == $user["pass"]) {
                    session_start();
                    $_SESSION["user"] = "yes";
                    header("Location: admin_dashboard.html");
                    die();
                }else{
                    echo "<div class='alert alert-danger'>Password does not match</div>";
                }
            }else{
                echo "<div class='alert alert-danger'>Email does not match</div>";
            }


    
        // if (mysqli_num_rows($result) > 0) {
        //     // Iterate through the result and display the details
        //     while ($row = mysqli_fetch_assoc($result)) {
        //         echo "Name: " . $row['email'] . "<br>";
        //         echo "Phone: " . $row['pass'] . "<br>";
        //         // Include other details as per your database schema
        //         echo "<hr>";
        //     }
        // } else {
        //     echo "No matching records found.";
        // }
    }

?>
