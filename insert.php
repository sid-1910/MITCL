<?php

//logo
	$imgData1 =addslashes(file_get_contents($_FILES['teamLogo']['tmp_name1']));
	$imageProperties1 = getimageSize($_FILES['teamLogo']['tmp_name1']);
	
	$sql = "INSERT INTO players(imageType1 ,teamLogo)
	VALUES('{$imageProperties['mime']}', '{$imgData1}')";
	$current_id = mysql_query($sql) or die("<b>Error:</b> Problem on Image Insert<br/>" . mysql_error());
	if(isset($current_id)) {
		echo "teamLogo Inserted";
		header("Location: ");
	}
}
}