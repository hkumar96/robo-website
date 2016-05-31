<?php
	include 'dbconn.php';
	if ($conn) {
		mysql_select_db($dbname);
		$query = "SELECT category_id,title FROM category";
		$category_list = mysql_query($query,$conn);
		$result = "";
		while($row = mysql_fetch_assoc($category_list)){
			$cat_id = $row['category_id'];
			$cat_title = $row['title'];
			$query =sprintf("SELECT file_name,location,description FROM file WHERE category_id = {$cat_id}");
			$tut_lists = mysql_query($query,$conn);
			$result .= "<div class = 'row'>\n";
			$result .= "<div class = 'col-md-12'>\n";
			$result .=  "<h1 class='arrow'>{$cat_title}</h1>\n";
			$result .= "</div>\n</div>\n<div class = 'row'>\n";
			while ($tut = mysql_fetch_assoc($tut_lists)) {
				$tut_name = $tut['file_name'];
				$tut_loc = $tut['location'];
				$tut_desc = $tut['description'];
				$result .= "<div class='col-md-4 wp4'>\n<a href='{$tut_loc}'>\n";
				$result .= "<h2>{$tut_name}</h2>\n";
				$result .= "<p>{$tut_desc}</p>\n";
				$result .= "</a>\n</div>\n";
			}
			$result .= "</div>\n";
		}
	}

?>