<?php
$host = "localhost";
$username = "root";
$password = "";
$database = "main_blood_bank";

$connection = mysqli_connect($host, $username, $password, $database);

// Check connection
if (!$connection) {
    die("Connection failed: " . mysqli_connect_error());
}

// echo $result;

// while ($row=mysqli_fetch_array($result)){
//     echo $row["person_name"]. "<br>";
// }


if (isset($_POST['delete'])) {
    $donor_id = $_POST["donor_id"];


    $query = "DELETE FROM donors WHERE donor_id='$donor_id'";
    $result = mysqli_query($connection, $query);

    header("Location: donor_list.php");

}

?>