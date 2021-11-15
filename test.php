<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "test27/09/2021";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";

$query = "SELECT id,name FROM users ORDER BY id ASC";
$result = $conn->query($query);
?>

<!DOCTYPE html>
<html lang="en">
<body>
    <table style="border:1px solid black">
        <thead>
            <th>Bil</th>
            <th>Name</th>
        </thead>
        <tbody>
            <?php
            while ($row = $result->fetch_assoc()) {
            ?>
                <tr>
                    <td>
                        <?php
                        echo $row["id"];
                        ?>
                    </td>
                    <td>
                        <?php
                        echo $row["name"]
                        ?>
                    </td>
                </tr>
            <?php
                
            }
            ?>
        </tbody>
    </table>

    
</body>
</html>