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


if (isset($_POST['submit'])) {
    $district = $_POST["district"];
    $blood_group = $_POST["blood_group"];


    $query = "SELECT * FROM donors WHERE blood_group = '$blood_group' AND district = '$district'";
    $result = mysqli_query($connection, $query);

    if (mysqli_num_rows($result) > 0) {
        include("./header.php");
        // Iterate through the result and display the details
        while ($row = mysqli_fetch_assoc($result)) {
            echo '
                <div class="row">
                    <div class="col-lg-12">
                        <div class="row">
                            <div class="col-lg-3">
                                <div class="type">
                                    <h2>' . $row['blood_group'] . '</h2>
                                </div>
                            </div>
                            <div class="data col-lg-6">
                                <h4>Name: ' . $row['first_name'] . '</h4>
                                <h4>Phone: ' . $row['mob_no'] . '</h4>
                            </div>
                            
                        </div>
                    </div>
                </div>
            ';
        }
        include("./footer.php");
    } else {
        include("./header.php");

        echo '
        <div class="row">
            <div class="col-lg-12">
                <div class="row">
                    
                    <div class="data col-lg-6" style="text-align:center;">
                        <h4>No record found</h4>
                    </div>
                    
                </div>
            </div>
        </div>
    ';        include("./footer.php");

    }

}

?>