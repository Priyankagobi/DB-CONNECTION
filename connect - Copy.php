<?php
if(isset($_POST["pb"]))
{

  // echo'<pre>';
  exit;
  Echo "First Name : " . $_POST["FirstName"];
  Echo "<br>";
  Echo "Last Name : " . $_POST["LastName"];
  Echo "<br>";
  Echo "Email : " . $_POST["email"];

  $conn = new mysqli("localhost", "root", "", "testing");
  $sql = "INSERT INTO hash(firstname,lastname,email,password) values('" . $_POST["FirstName"] . "','" . $_POST["LastName"] . "' ,'" . $_POST["email"] ."' ,'" . $_POST["password"] ."')";
  $conn->query($sql);
  $conn->close();
}