<?php
include('./dbDetails.php');

$student_name = $_POST['student_name'];
$parent_name = $_POST['parent_name'];
$class_of_student = $_POST['class_of_student'];
$phone_number = $_POST['phone_number'];
$email = $_POST['email'];
$school_name = $_POST['school_name'];

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO `padhhigh`(`s_name`, `p_name`, `class`, `phone_no`, `email`, `school_name`) VALUES ('$student_name','$parent_name','$class_of_student','$phone_number','$email','$school_name')";

if ($conn->query($sql) === TRUE) {
  echo '<script>
  alert("We will catch you as early as we receive the message");
  window.location.href = "../index.html";
  </script>';
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
