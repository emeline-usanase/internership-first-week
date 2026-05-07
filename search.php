<?php include 'connect.php'; ?>

<!DOCTYPE html>
<html>
<head>
    <title></title>
    <style>
            a {
    display: inline-block;
    text-decoration: none;
    margin: 5px;
}
    </style>
</head>
<body>

    <h2>Search Visitor</h2>

    <form method="GET">
        <input type="text" name="search" placeholder="Enter visitor name..." required>
        <button type="submit">Search</button>
    </form>
<?php
if(isset($_GET['search'])){
    $search = $_GET['search'];

    $sql = "SELECT * FROM visitors WHERE name LIKE '%$search%'";
    $result = $conn->query($sql);

    if($result->num_rows > 0){
        echo "<table class='styled-table'>
        <tr>
            <th>Name</th>
            <th>Phone</th>
            <th>Purpose</th>
            <th>time_in</th>
            <th>time_out</th>
        </tr>";

        while($row = $result->fetch_assoc()){
            echo "<tr>
                    <td>{$row['name']}</td>
                    <td>{$row['phone']}</td>
                    <td>{$row['purpose']}</td>
                    <td>{$row['time_in']}</td>
                    <td>{$row['time_out']}</td>
                  </tr>";
        }

        echo "</table>";
    } else {
        echo "<p class='no-data'>No visitor found</p>";
    }
}
?>
<button type="submit" name="submit">
<a href="dashboard.php" class="back"> Back to Dashboard</a>
</button>

</body>
</html>