<?php include 'connect.php'; ?>

<!DOCTYPE html>
<html>
<head>
    <title>Add Visitor</title>
</head>
<style>
    a {
    display: inline-block;
    text-decoration: none;
    margin: 5px;
}
</style>
<body>

<h2>Register Visitor</h2>

<form method="POST">
    Name: <input type="text" name="name" required><br><br>
    Phone: <input type="text" name="phone" required><br><br>
    Purpose: <input type="text" name="purpose" required><br><br>
    <button type="submit" name="submit">Save</button>
</form>

<?php
if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $purpose = $_POST['purpose'];
    $time_in = date("Y-m-d H:i:s");

    $sql = "INSERT INTO visitors(name, phone, purpose, time_in)
            VALUES('$name','$phone','$purpose','$time_in')";

    if($conn->query($sql)){
        echo "Visitor added successfully!";
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