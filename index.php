<?php
require_once('connection.php');

session_start();

$query = "SELECT id,name FROM users ORDER BY name ASC";
$result = $conn->query($query);

// echo $query;
// echo "<br>";

if (!isset($_SESSION['username'])) {
    $_SESSION['message'] = "Session Timeout";
    header('location: ../login.php');
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    if ($_SESSION['username']) {
        echo 'Hello '.$_SESSION['username'];
        echo '<br>';
    }
    if ($_SESSION['success']) {
        echo $_SESSION['success'];
        echo '<br>';
    }
    ?>
    <a href="logout.php" style="padding: 10px;"><button>Logout</button></a>
    <table style="border:1px solid black; padding: 10px;">
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
                        echo $row["name"];
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