<?php

$name=htmlspecialchars($_POST["name"]);
$organization=htmlspecialchars($_POST["organization"]);
$email=htmlspecialchars($_POST["email"]);
$keyword1=htmlspecialchars($_POST["keyword1"]);
$keyword2=htmlspecialchars($_POST["keyword2"]);

if($name && $email && $keyword1 && $keyword2){

  //mail("jsybran@clemson.edu","MOLIERE Query",$name);
  $serverName = "sbxmysql.clemson.edu";
  $username = "jsybran";
  $password = "V*AEsJl|ah)i";
  $dbname = "jsybran";
  $conn = new mysqli($serverName, $username, $password, $dbname);

  if($conn->connect_error){
    echo("AN ERROR HAPPENED");
    die("Conn failed" . $conn->connect_error);
  }
  $sql = "INSERT INTO `MoliereQuery`(`Name`, `Organization`, `Email`, `Keyword 1`, `Keyword 2`) VALUES ('$name','$organization', '$email', '$keyword1', '$keyword2')";
  $conn->query($sql);
  $conn->close();
}
else{
  echo "Must supply Name, E-Mail, and two keywords.";
  }
?>
