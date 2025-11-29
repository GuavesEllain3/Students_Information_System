<?php 
include 'db.php';
$id = $_GET['id'];
$result = mysqli_query($conn, "SELECT * FROM students WHERE id=$id");
$data = mysqli_fetch_assoc($result);
if (isset($_POST['update'])) {
    $fullname = $_POST['fullname'];
    $course = $_POST['course'];
    $year = $_POST['year'];
    $email = $_POST['email'];
    $age = $_POST['age'];
    $address = $_POST['address'];

    mysqli_query($conn, "UPDATE students SET fullname='$fullname', email='$email', age=$age, address='$address', course='$course', year_level='$year' WHERE id=$id");
    header("Location: index.php");
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Edit Student</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
</head>
<body class="bg-light">
<div class="container mt-4">
    <h2>Edit Student</h2>
    <form method="POST">
        <div class="mb-3">
            <label>Fullname</label>
            <input type="text" name="fullname" class="form-control" value="<?= $data['fullname']; ?>" required>
        </div>
        <div class="mb-3">
            <label>Course</label>
            <input type="text" name="course" class="form-control" value="<?= $data['course']; ?>" required>
        </div>
        <div class="mb-3">
            <label>Year Level</label>
            <input type="text" name="year" class="form-control" value="<?= $data['year_level']; ?>" required>
        </div>
        <div class="mb-3">
            <label>Email</label>
            <input type="email" name="email" class="form-control" value="<?= $data['email']; ?>" required>
        </div>

        <div class="mb-3">
            <label>Age</label>
            <input type="number" name="age" class="form-control" value="<?= $data['age']; ?>" required>
        </div>

        <div class="mb-3">
           <label>Address</label>
           <input type="text" name="address" class="form-control" value="<?= $data['address']; ?>" required>
        </div>
        <button name="update" class="btn btn-warning">Update</button>
        <a href="index.php" class="btn btn-secondary">Back</a>
    </form>
</div>
</body>
</html>