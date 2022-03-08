<?php 
require_once("./includes/header.php"); 
require_once("./includes/classes/VideoUploadData.php");
require_once("./includes/classes/VideoProcessor.php");

if(!isset($_POST["uploadButton"])) {
  echo "No file send to page";
  exit();
}

// 1) create file upload data
$videoUploadData = new VideoUploadData(
  $_FILES["fileInput"], 
  $_POST["titleInput"], 
  $_POST["descriptionInput"],
  $_POST["privateInput"],
  $_POST["categoryInput"],
  "DUMMY ID");

// 2) Process video data (upload)
$videoProcessor = new VideoProcessor($con);
$wasSuccessful = $videoProcessor->upload($videoUploadData);
// 3) Check if upload was successful

?>