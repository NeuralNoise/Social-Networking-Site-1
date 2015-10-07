<?php
/*
if($_FILES["file"]["error"] > 0) {
  echo "Error: " . $_FILES["file"]["error"] . "<br>";
} else {
  echo "Upload: " . $_FILES["file"]["name"] . "<br>";
  echo "Type: " . $_FILES["file"]["type"] . "<br>";
  echo "Size: " . ($_FILES["file"]["size"] / (1024*1024)) . " MB<br>";
  echo "Stored in: " . $_FILES["file"]["tmp_name"];
}
*/

define('PIC_MAX_SIZE',(5*1024*1024));
define('VIDEO_MAX_SIZE',(200*1024*1024));
define('DOCS_MAX_SIZE',(5*1024*1024));
define('MB',(1024*1024));
$flag="false";
//PICTURE//
$Pic_allowedExts = array("gif", "jpeg", "jpg", "png");
$Pictemp = explode(".", $_FILES["file"]["name"]);
$Pic_extension = end($Pictemp);


//Video
$Vid_allowedExts = array("avi", "mp4", "mp3", "3gp","flv","movie","mpeg","video","wav","wmv");
$Vidtemp = explode(".", $_FILES["file"]["name"]);
$Vid_extension = end($Vidtemp);

//Documents//
$Docs_allowedExts = array("txt", "pdf", "php", "css","doc","docx","msg","pages","dat","tar","xml","octet-stream","exe","7z","rar","tar.gz","c","java","class","cpp","sh");
$Docstemp = explode(".", $_FILES["file"]["name"]);
$Docs_extension = end($Docstemp);


//Picture

if ((($_FILES["file"]["type"] == 'image/gif')|| ($_FILES["file"]["type"] == "image/jpeg")|| ($_FILES["file"]["type"] == "image/jpg")|| ($_FILES["file"]["type"] == "image/png"))
&& ($_FILES["file"]["size"] < (PIC_MAX_SIZE)) && in_array($Pic_extension, $Pic_allowedExts))

 {
  if ($_FILES["file"]["error"] > 0)
  {
    echo "Error: " . $_FILES["file"]["error"] . "<br>";
  } 
  else 
  {
    echo "Upload: ".$_FILES["file"]["name"]."<br>";
    echo "Type: ".$_FILES["file"]["type"]."<br>";
    echo "Size: ".($_FILES["file"]["size"] / MB)." MB<br>";
    echo "Stored in: ".$_FILES["file"]["tmp_name"];
	$flag="true";
	
	if (file_exists("upload/".$_FILES["file"]["name"]))
      {
      echo $_FILES["file"]["name"] . " already exists. ";
      }
    else
      {
      move_uploaded_file($_FILES["file"]["tmp_name"],"upload/".$_FILES["file"]["name"]);
      echo "<br>Stored in: " . "upload/".$_FILES["file"]["name"];
      }
  }
 }
 
//VIDEO//
else  
if ((($_FILES["file"]["type"] == "video/avi")|| ($_FILES["file"]["type"] == "video/mp4")|| ($_FILES["file"]["type"] == "video/3gp")|| ($_FILES["file"]["type"] == "audio/mp3")|| ($_FILES["file"]["type"] == "video/wmv")
|| ($_FILES["file"]["type"] == "video/flv")|| ($_FILES["file"]["type"] == "movie/mpeg")|| ($_FILES["file"]["type"] == "video/video")||($_FILES["file"]["type"] == "audio/wav"))
&& ($_FILES["file"]["size"] < (VIDEO_MAX_SIZE)) && in_array($Vid_extension, $Vid_allowedExts))

 {
  if ($_FILES["file"]["error"] > 0)
  {
    echo "Error: " . $_FILES["file"]["error"] . "<br>";
  } 
  else 
  {
    echo "Upload: ".$_FILES["file"]["name"]."<br>";
    echo "Type: ".$_FILES["file"]["type"]."<br>";
    echo "Size: ".($_FILES["file"]["size"] / MB)." MB<br>";
    echo "Stored in: ".$_FILES["file"]["tmp_name"];
	$flag="true";
	if (file_exists("upload/".$_FILES["file"]["name"]))
      {
      echo $_FILES["file"]["name"] . " already exists. ";
      }
    else
      {
      move_uploaded_file($_FILES["file"]["tmp_name"],"upload/".$_FILES["file"]["name"]);
      echo "<br>Stored in: " . "upload/".$_FILES["file"]["name"];
      }
  }
 }

//Documents//
else
if ((($_FILES["file"]["type"] == "text/plain")|| ($_FILES["file"]["type"] == "application/pdf")||($_FILES["file"]["type"] == "application/class")||($_FILES["file"]["type"] == "application/octet-stream")||($_FILES["file"]["type"] == "application/cpp")||($_FILES["file"]["type"] == "application/sh")||($_FILES["file"]["type"] == "application/exe")||($_FILES["file"]["type"] == "text/css")
|| ($_FILES["file"]["type"] == "application/msword")||($_FILES["file"]["type"] == "application/c"))||($_FILES["file"]["type"] == "application/xml")||($_FILES["file"]["type"] == "application/rar")||($_FILES["file"]["type"] == "application/7z")||($_FILES["file"]["type"] == "application/vnd.oasis.opendocument.text")
&& ($_FILES["file"]["size"] < (DOCS_MAX_SIZE)) && in_array($Docs_extension, $Docs_allowedExts))

 {
  if ($_FILES["file"]["error"] > 0)
  {
    echo "Error: " . $_FILES["file"]["error"] . "<br>";
  } 
  else 
  {
    echo "Upload: ".$_FILES["file"]["name"]."<br>";
    echo "Type: ".$_FILES["file"]["type"]."<br>";
    echo "Size: ".($_FILES["file"]["size"] / MB)." MB<br>";
    echo "Stored in: ".$_FILES["file"]["tmp_name"];
	$flag="true";
	if (file_exists("upload/".$_FILES["file"]["name"]))
      {
      echo $_FILES["file"]["name"] . " already exists. ";
      }
    else
      {
      move_uploaded_file($_FILES["file"]["tmp_name"],"upload/".$_FILES["file"]["name"]);
      echo "<br>Stored in: " . "upload/".$_FILES["file"]["name"];
      }
  }
 }
 else echo "Invalid File!";
 ?>

<html>
<head>
<title>"UPLOAD" RESULT
</title>
</head>
<p></p>
<form method="get" action="home.php">
<input type="submit" name="submit" value="Back to Home">
</form>
</html>