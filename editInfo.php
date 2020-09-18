<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title></title>
</head>
<body>
	<fieldset>
		<legend align="center">Editting Info Form</legend>
		<form action="controller/editInfoController.php?name=<?php echo $_GET['name']?>" method="POST" enctype="multipart/form-data">
		
			<?php
				include_once ("controller/editInfoController.php");
			?>
			
			
			<img  id="oldImage" name="oldImage" src="images/<?php echo $ppic?>" alt="image not found" height="180" width="150"/><br/>
			<input type="file" name="newImage" onchange="document.getElementById('oldImage').src=window.URL.createObjectURL(this.files[0])"/><br />
			
			<label for="name">Name:</label>
			<input type="text" name="name" value="<?php echo $name;?>"/><br/>
			<label for="add">Address:</label>
			<input type="text" name="address" value="<?php echo $address;?>"/><br/>
			<label for="city">City:</label>
			<select name="city" id="">
					<option selected disabled>Choose one</option>
					<option value="DHAKA" <?php if($city=="DHAKA") echo 'selected="selected"'; ?> >DHAKA</option>
					<option value="CHITTAGONG" <?php if($city=="CHITTAGONG") echo 'selected="selected"'; ?>>CHITTAGONG</option>
					<option value="KHULNA" <?php if($city=="KHULNA") echo 'selected="selected"'; ?>>KHULNA</option>
					<option value="RAJSHAHI" <?php if($city=="RAJSHAHI") echo 'selected="selected"'; ?>>RAJSHAHI</option>
					<option value="BORISAL" <?php if($city=="BORISAL") echo 'selected="selected"'; ?>>BORISAL</option>
					<option value="SYLHET" <?php if($city=="SYLHET") echo 'selected="selected"'; ?>>SYLHET</option>
				</select><br/>
			
			<label for="gender">Gender:</label>
			<input type="radio" name="gender" value="male"<?php echo ($gender == "male" ? 'checked="checked"': ''); ?>/>Male
			<input type="radio" name="gender" value="female"<?php echo ($gender == "female" ? 'checked="checked"': ''); ?>/>Female<br/>
			
			<label for="color">Color:</label>
			<input type="checkbox" name="color[]" value="black"<?php $item = explode(',',$color);if(in_array("black",$item))echo'checked="checked"';?>/>BLACK
			<input type="checkbox" name="color[]" value="red"<?php $item = explode(',',$color);if(in_array("red",$item))echo'checked="checked"';?>/>RED
			<input type="checkbox" name="color[]" value="green"<?php $item = explode(',',$color);if(in_array("green",$item))echo'checked="checked"';?>/>GREEN<br/>
			<label for="DOB">DOB:</label>
			<input type="date" name="DOB" value="<?php echo $DOB;?>"/><br/>
			<label for="email">Email:</label>
			<input type="text" name="email" value="<?php echo $email;?>"/><br/>
			<label for="password">Password:</label>
			<input type="password" name="password" value="<?php echo $password;?>"/><br/>
			
			<input type="submit" name="submit" value="update"/>
			
		</form>
	</fieldset>
</body>
</html>