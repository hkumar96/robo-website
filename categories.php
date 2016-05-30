<?php
$dbhost = 'localhost:3036';
$dbuser = 'guest';
$dbpass = 'guest123';

$tag_str = "";
$conn = mysql_connect($dbhost,$dbuser,$dbpass);
if($conn){	
	mysql_select_db('ROBO');
	//echo "Connection made";
	$query = "SELECT category_id,title FROM category";
	$retval = mysql_query($query);
	if($retval){
		// echo "value received";
		
		// print_r(mysql_fetch_assoc($retval));
		// print_r(mysql_fetch_assoc($retval));
		while($row = mysql_fetch_assoc($retval)){
			$tag_str .= "<label class = 'radio-inline'>";
			$tag_str .= "<input type = 'radio' name = 'category' class = 'form-control' ";
			$tag_str .= sprintf("value = '%s'>%s",$row['category_id'],$row['title']);
			$tag_str .= "</label>";
			//echo "tag_str built";
		}
	}
}
$tag_str .= "<label class = 'radio-inline'>";
$tag_str .= "<input type = 'radio' name = 'category' class = 'form-control' value = '-1'>Other</label>";
$tag_str .= "<input type = 'text' name = 'categoryNew' class = 'form-control hidden'>";
mysql_close($conn);
echo $tag_str;
?>