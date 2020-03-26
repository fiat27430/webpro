<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link type="text/css" rel="stylesheet" href="cform.css">
    <title>Document</title>
</head>

<body>

<table>
    <tr>
    <th>In hospital</th>
    <th>Deaths</th>
    <th>Discharged</th>
    <th>Total</th>
    </tr>
    <?php
    $conn = mysqli_connect("localhost", "root", "", "company");
    // Check connection
    if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    }
    $sql = "SELECT id, username, password FROM login";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
    echo "<tr><td>" . $row["hospital"]. "</td><td>" . $row["Deaths"] . "</td><td>". $row["Discharged"] . "</td><td>". $row["Total"]. "</td></tr>";
    }
    echo "</table>";
    } else { echo "0 results"; }
    $conn->close();
    ?>
</table>

</body>

</html>



<?php
        $county = $_POST["county"];
        echo "<p>County : $county";
    ?>