<?php
session_start();
include("config.php");

//variables
$id = "";
$sem = "";
$year = "";
$name = "";
$date = "";
$remark = "";
$action = "";

//this block is called when button submit is clicked
if($_SERVER["REQUEST_METHOD"] == "POST"){
  //value for add or edit
  $sem = $_POST["sem"];
  $year = $_POST["year"];
  $name =  trim($_POST["name"]);
  $remark = trim($_POST["remark"]);

  //insert the value into activity table
  $sql = "INSERT INTO activity (userID, sem, year, name, remark) 
  VALUES (" . $_SESSION["UID"] . ", " . $sem . ", '". $year . "', '" . $name . "', '" . $remark . "')";

  $status = insertTo_DBTable($conn, $sql);

  if ($status) {
    echo "Form data saved successfully!<br>";
    echo '<a href="my_activities.php">Back</a>'; 
  } else {
    echo '<a href="my_activities.php">Back</a>';
    }
}

//close db connection
mysqli_close($conn);

//function to insert data to database table
  function insertTo_DBTable($conn, $sql){
    if(mysqli_query($conn, $sql)){
      return true;
    } else {
      echo "Error: " . $sql . ":" . mysqli_error($conn) . "<br>";
      return false;
    }
  }

 ?>
