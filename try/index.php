<?php
	echo '<pre>';
	print_r($_POST);
	print_r($_FILES);
	echo '<pre>';


?>



<form method="post" action="" enctype="multipart/form-data">
	Name<input type="text" name="student_name"/>
	<br/>
	Fee paid<input type="checkbox"name="fee_paid" value="1"/>
	<br/>
	Faculty:<select name="faculty">
				<option value="EE">Engineering</option>
				<option value="MG">Management</option>
				<option value="Hm">Humanities</option>
			</select>
			<br/>
	UserType:	<input type="radio" name="U_type"value="admin"/>Admin
				<br/>
				<input type="radio" name="U_type"value="staff"/>Staff
				<br/>
				<input type="radio" name="U_type"value="teacher"/>Teacher
				<br/>
	<input type="file" name="document"/>
	
	
	
	<input type="submit" value="send"/>





</form>