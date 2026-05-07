<?php include 'connect.php'; ?>

<!DOCTYPE html>
<html>
<head>
    <title>Daily Report</title>
</head>
<body>

<h2>Today's Visitors</h2>
<table border="1" cellpadding="10">
<tr>
    <th>Name</th>
    <th>Purpose</th>
    <th>Time In</th>
    <th>Time Out</th>
</tr>
</table>

<?php
$today = date("Y-m-d");

$sql = "SELECT * FROM visitors WHERE DATE(time_in) = '$today'";
$result = $conn->query($sql);

while($row = $result->fetch_assoc()){
    echo "<tr>
        <td>{$row['name']}</td>
        <td>{$row['purpose']}</td>
        <td>{$row['time_in']}</td>
        <td>{$row['time_out']}</td>
    </tr>";
}
?>
<a href="index.php" class="back"> Back to Dashboard</a>
</body>
</html>