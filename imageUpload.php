
<HTML>
<HEAD>
<TITLE>Upload profile</TITLE>
<link href="imageStyles.css" rel="stylesheet" type="text/css" />
</HEAD>
<BODY>
<center>
<form name="frmImage" enctype="multipart/form-data" action="" method="post" class="frmImageUpload">
<label>Upload data:</label><br/>

Name: <input name="name" type="text" class="inputFile" /><br><br>
Year: <input name="year" type="number" class="inputFile" /><br><br>
Base Price: <input name="baseP" type="int" class="inputFile" /><br><br>
Player Picture: <input name="userImage" type="file" class="inputFile" /><br><br>
About: <input type="text" name="disp" class="inputFile"><br><br>

<input type="submit" value="Submit" class="btnSubmit" /><br><br>
</form>
</center>
</div>
</BODY>
</HTML>

<?php
if(count($_FILES) > 0) {
if(is_uploaded_file($_FILES['userImage']['tmp_name'])) {
	mysql_connect("localhost", "root", "");
	mysql_select_db ("mitcl");


$name=$_POST['name'];
$year=$_POST['year'];
$baseP=$_POST["baseP"];
$disp=$_POST['disp'];

	$imgData =addslashes(file_get_contents($_FILES['userImage']['tmp_name']));
	$imageProperties = getimageSize($_FILES['userImage']['tmp_name']);
	
	$sql = "INSERT INTO players(imageType ,imageData, name, year, basePrice, disp)
	VALUES('{$imageProperties['mime']}', '{$imgData}','$name','$year','$baseP', '$disp')";
	$current_id = mysql_query($sql) or die("<b>Error:</b> Problem in Insert<br/>" . mysql_error());
	if(isset($current_id)) {
		echo "profile uploaded";
		header("Location: ");
	}
}
}
?>