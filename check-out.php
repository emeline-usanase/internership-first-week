<?php include 'connect.php'; ?>

<!DOCTYPE html>
<html>
<head>
    <title>Check Out</title>
</head>
<body>

<h2>Check-Out Visitor</h2>
<div class="form-container">
<form method="POST">
    Visitor ID: <input type="number" name="id" required>
    <button type="submit" name="checkout">Check Out</button>
</form>
</div>
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
<a href="dashboard.php" class="back-btn">
          Back to Dashboard
        </a>

</body>
</html>