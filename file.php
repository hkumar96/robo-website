<?php

if(isset($_POST["upload"])) {
  include 'dbconn.php';
  //define file size limit in MB's
  define(FILE_SIZE_LIMIT, 2);

  if(!isset($_FILES['tut_file']['name'])){
    $message = "File not selected";
    $isCorrect = false;
    return;
  }
  $file_id = 0;
  $file_name = $_FILES['tut_file']['name'];
  $file_type = $_FILES['tut_file']['type'];
  $file_size = $_FILES['tut_file']['size'];
  

  $file_ext = strtolower(end(explode('.',$file_name)));

  $allowedExtensions = array('png','jpg','jpeg','ppt','pptx','odp','otp','odg','ppsx','pdf','odt','ott','fodt','docx','doc');
  $uploaddir = '/var/www/html/example.com/HalcyonDaysTemplate/uploads/';

  $isCorrect = true;
  $isUploaded = false;
  $message = "";

  if(!isset($_POST['category'])){
    $isCorrect = false;
    $message = "File not uploaded.Select a category!";
  }
  if(!isset($_POST['title'])){
    $isCorrect = false;
    $message = "File not uploaded. Enter a title!";
  }

  if(!in_array($file_ext, $allowedExtensions)){
    $isCorrect = false;
    $message = "File does not has a valid extension\n";
  }

  if($file_size > FILE_SIZE_LIMIT*1024*1024){
    $isCorrect = false;
    $message = "File exceeds size limit(2MB)\n";
  }
  if($conn){
    //$message = "connected to database";
    mysql_select_db($dbname);
    $query = "SELECT file_id FROM file ORDER BY file_id DESC LIMIT 1;";
    $retval = mysql_query($query,$conn);
    //$message = "{$retval}";
    if($retval){
      $row = mysql_fetch_assoc($retval);
      $file_id = (int)$row['file_id'];
      //$message = "$file_id";
    }
  } else{
    $isCorrect = false;
    $message = "Cannot connect to database";
  }

  if($conn){
    if($_POST['category'] == '-1'){
      $category_name = $_POST['categoryNew'];
      $category_name = stripslashes($category_name);
      $category_name = mysql_real_escape_string($category_name);
      // $cat_query  = sprintf("SELECT title FROM category WHERE title = '%s'",$category_name);
      // $retval = mysql_query($cat_query,$conn);
      // if($retval){
      //   $isCorrect = false;
      //   $message = "Already exists";
      // }
      $cat_query  = sprintf("INSERT INTO category (title) VALUES ('%s')",$category_name);
      if(!mysql_query($cat_query,$conn)){
        $message = "This category already exists.";
        $isCorrect = false;
      }
      $cat_query = sprintf("SELECT category_id FROM category WHERE title = '%s'",$category_name);
      $retval = mysql_query($cat_query,$conn);
      if($retval){
        $row = mysql_fetch_assoc($retval);
        $category_id = $row['category_id'];
        // $message .= "new categoryid is $categoryid";
      }
    } else{
      $category_id = $_POST['category'];
      // $message .= "new categoryid is";
      // $message .= $category_id;
    }

  }

  if ($isCorrect) {
    $file_id += 1;
    $uploadfile = $uploaddir . $file_id . '.' . $file_ext;
    if (move_uploaded_file($_FILES['tut_file']['tmp_name'], $uploadfile)) {
      $message =  "File was successfully uploaded.\n";
      $isUploaded = true;
    } else {
      $message = "Problem uploading file. Please contact web-admin.\n";
    }
  }
  if ($isUploaded) {
  	if($conn){  		
      // $message .= "connection succesfull";
      // $message .= $_POST['category'];

      $category_id = intval($category_id);
      $title = isset($_POST['title'])? $_POST['title'] : "Tutorial";
      $title = stripslashes($title);
      $title = mysql_escape_string($title);
      //$message = $title;
      // $message .= $query;
      // $retval = mysql_query($query,$conn);

      $description = isset($_POST['desc'])? $_POST['desc'] : "--none--";
      $description = stripslashes($description);
      $description = mysql_real_escape_string($description);

      $link = "http://localhost/example.com/HalcyonDaysTemplate/uploads/" . $file_id . '.' . $file_ext;

      $query = sprintf("INSERT INTO file (file_name,size,location,category_id,user_name,description) VALUES ('%s',$file_size,'%s',$category_id,'%s','%s'); ",$title,$link,$login_session,$description);
      $retval = mysql_query($query,$conn);

        
      // $message .= mysql_error();
      
  	}
    mysql_close($conn);
  }
}
?>