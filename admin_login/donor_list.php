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

$query = "SELECT * FROM donors";
$result = mysqli_query($connection, $query);

// echo $result;
include("./header.php");
while ($row = mysqli_fetch_array($result)) {
    
        


    echo '<tr>
    <td>' . $row["donor_id"] . '</td>
    <td>' . $row["first_name"] . '</td>
    <td>' . $row["district"] . '</td>
    <td>' . $row["mob_no"] . '</td>
    <td>' . $row["blood_group"] . '</td>
    <td>
        <form action="delete.php" method="POST">
            <input type="hidden" name="donor_id" value="' . $row["donor_id"] . '">
            <button type="submit" name="delete" style="background-color: red; /* Green */
                border: none;
                color: white;
                padding: 7px 16px;
                text-align: center;
                text-decoration: none;
                display: inline-block;
                font-size: 16px;">Delete</button>
        </form>
    </td>
</tr>';

}
include("./footer.php");


?>


