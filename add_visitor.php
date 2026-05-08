<?php include 'connect.php'; ?>

<!DOCTYPE html>
<html>
<head>
    <title>Add Visitor</title>
      <link rel="stylesheet" href="style.css">
</head>
<body>

<h2>Register Visitor</h2>
<div class="form-container">
    <form method="POST">

        <label>Name</label>
        <input type="text" name="name" required>

        <label>Phone</label>
        <input type="text" name="phone" required>

        <label>Purpose</label>
        <input type="text" name="purpose" required>

        <button type="submit" name="submit" class="save-btn">
            Save Visitor
        </button> <br> <br> 
        <a href="dashboard.php" class="back-btn">
          Back to Dashboard
        </a>
    </form>

</div>
    
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
</body>
</html>