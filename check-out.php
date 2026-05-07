<?php include 'connect.php'; ?>

<!DOCTYPE html>
<html>
<head>
    <title>Check Out</title>
</head>
<style>
    a {
    display: inline-block;
    padding: 10px;
    text-decoration: none;
    margin: 5px;
}
</style>
<body>

<h2>Check-Out Visitor</h2>

<form method="POST">
    Visitor ID: <input type="number" name="id" required>
    <button type="submit" name="checkout">Check Out</button>
</form>

<?php
if(isset($_POST['checkout'])){
    $id = $_POST['id'];
    $time_out = date("Y-m-d H:i:s");

    $sql = "UPDATE visitors SET time_out='$time_out' WHERE id=$id";

    if($conn->query($sql)){
        echo "Checked out successfully!";
    } else {
        echo "Error!";
    }
}
?>
<button type="submit" name="submit">
<a href="dashboard.php" class="back"> Back to Dashboard</a>
</button>
</body>
</html>