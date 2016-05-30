<?php
if(isset($_POST["upload"])) {
  //define file size limit in MB's
  define(FILE_SIZE_LIMIT, 2);
  
  $file_name = $_FILES['tut_file']['name'];
  $file_type = $_FILES['tut_file']['type'];
  $file_size = $_FILES['tut_file']['size'];
  

  $file_ext = strtolower(end(explode('.',$file_name)));

  $allowedExtensions = array('png','jpg','jpeg','ppt','pptx','odp','otp','odg','ppsx','pdf','odt','ott','fodt','docx','doc');
  $uploaddir = '/var/www/html/example.com/HalcyonDaysTemplate/uploads/';
  $uploadfile = $uploaddir . $file_name;

  $isCorrect = true;
  $isUploaded = false;

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

  if ($isCorrect) {
    if (move_uploaded_file($_FILES['tut_file']['tmp_name'], $uploadfile)) {
        $message =  "File was successfully uploaded.\n";
        $isUploaded = true;
    } else {
        $message = "Problem uploading file. Please contact web-admin.\n";
    }
  }
  if ($isUploaded) {
  	$dbhost = "localhost:3036";
  	$dbuser = "guest";
  	$dbpass = "guest123";
  	$dbname = "ROBO";

  	$conn = mysql_connect($dbhost,$dbuser,$dbpass);

  	if($conn){
  		mysql_select_db($dbname);
      // $message .= "connection succesfull";
      // $message .= $_POST['category'];
      if($_POST['category'] == '-1'){
        $category_name = $_POST['categoryNew'];
        $category_name = stripslashes($category_name);
        $category_name = mysql_real_escape_string($category_name);
        $cat_query  = sprintf("INSERT INTO category (title) VALUES ('%s')",$category_name);
        mysql_query($cat_query,$conn);
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

      $category_id = intval($category_id);
      $title = $_POST['title'];
      $title = stripslashes($title);
      $title = mysql_escape_string($title);
      

      // $message .= $query;
      // $retval = mysql_query($query,$conn);

      if(isset($_POST['desc'])){
        $description = $_POST['desc'];
        $description = stripslashes($description);
        $description = mysql_real_escape_string($description);
        $query = sprintf("INSERT INTO file (file_name,size,location,category_id,user_name,description) VALUES ('%s',$file_size,'%s',$category_id,'%s','%s'); ",$title,$uploadfile,$login_session,$description);
        } else{
          $query = sprintf("INSERT INTO file (file_name,size,location,category_id,user_name) VALUES ('%s',$file_size,'%s',$category_id,'%s'); ",$title,$uploadfile,$login_session);
        }
        $retval = mysql_query($query,$conn);

        
      // $message .= mysql_error();
      
  	}
    mysql_close($conn);
  }
}
?>