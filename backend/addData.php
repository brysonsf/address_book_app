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


  $data = array();
// need to get data from front end
  while () {
  // no image right now
   $data[] = array("fname"=>$row['fname'],"lname"=>$row['lname'],"email"=>$row['email'],"phone"=>$row['phone']);
  }
  
  $sel = mysqli_query($con,"INSERT" +
   $data[fname] + " AS fname into `user-contact_schema`.users;");

  $sel = mysqli_query($con,"INSERT" +
   $data[lname] + " AS lname into `user-contact_schema`.users;");
  $sel = mysqli_query($con,"INSERT" +
   $data[email] + " AS email into `user-contact_schema`.users;");
  $sel = mysqli_query($con,"INSERT" +
   $data[phone] + " AS phone into `user-contact_schema`.users;");
  echo json_encode($data + " added to db.");
