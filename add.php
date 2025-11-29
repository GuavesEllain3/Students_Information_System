<?php
include 'db.php';
if (isset($_POST['save'])) {
    $fullname = $_POST['fullname'];
    $course = $_POST['course'];
    $year = $_POST['year'];
    $email= $_POST['email'];
    $address = $_POST['address'];

    mysqli_query($conn, "INSERT INTO students(fullname, email, age, address, course, year_level) VALUES ('$fullname','$email','$age','$address','$course','$year')");
    header("Location: index.php");
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Add Student</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
</head>
<body class="bg-light">
<div class="container mt-4">
    <h2>Add Student</h2>
    <form method="POST">
        <div class="mb-3">
            <label>Fullname</label>
            <input type="text" name="fullname" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Course</label>
            <input type="text" name="course" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Year Level</label>
            <input type="text" name="year" class="form-control" required>
        </div>
         <div class="mb-3">
            <label>Email</label>
            <input type="email" name="email" class="form-control" required>
        </div>

        <div class="mb-3">
             <label>Age</label>
             <input type="number" name="age" class="form-control" required>
        </div>

        <div class="mb-3">
              <label>Address</label>
              <input type="text" name="address" class="form-control" required>
        </div>
        <button name="save" class="btn btn-success">Save</button>
        <a href="index.php" class="btn btn-secondary">Back</a>
    </form>
</div>
</body>
</html>