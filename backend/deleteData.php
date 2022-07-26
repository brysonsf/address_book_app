<?php
  $host = "localhost:3036";
  $username   = "bryson";
  $password   = "&35!@0jOb49v";
  $dbname     = "users";
  $con = mysqli_connect($host, $user, $password,$dbname);

  // Check connection
  if (!$con) {
   die("Connection failed: " . mysqli_connect_error());
  }

  $sel = mysqli_query($con,"select * from contact");
  $data = array();

  while ($row = mysqli_fetch_array($sel)) {
  // no image right now
   $data[] = array("fname"=>$row['fname'],"lname"=>$row['lname'],"email"=>$row['email'],"phone"=>$row['phone']);
  }
  echo json_encode($data);
