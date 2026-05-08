
<!DOCTYPE html>
<html>
<head>
    <title>All Visitors</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
<?php
include 'connect.php';

$sql = "SELECT * FROM visitors ORDER BY id ASC";
$result = $conn->query($sql);
?>

<div class="header">
    <h2>All Visitors</h2>
    <a href="dashboard.php" class="back">Back to Dashboard</a>
    <a href="check-out.php" class="checkout">Check-Out Visitor </a> 
</div>

<div class="table-container">

<?php
if($result->num_rows > 0){

    echo "
    <table class='report'>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Phone</th>
            <th>Purpose</th>
            <th>Time In</th>
            <th>Time Out</th>
        </tr>
    ";

    while($row = $result->fetch_assoc()){
        echo "
        <tr>
            <td>".$row['id']."</td>
            <td>".$row['name']."</td>
            <td>".$row['phone']."</td>
            <td>".$row['purpose']."</td>
            <td>".$row['time_in']."</td>
            <td>".$row['time_out']."</td>
        </tr>
        ";
    }

    echo "</table>";

} else {
    echo "<p class='no-data'>No visitors found</p>";
}
?>

</div>

</body>
</html>