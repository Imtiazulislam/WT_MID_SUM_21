<?php
	
	
$username="";
$err_username="";
$password="";
$err_password="";
$gender="";
$err_gender="";
$profession="";
$err_profession="";
$hobbies=[];
$err_hobbies="";
	
	
$hasError=false;
	
$array= array("Teaching","Business","Service","Nothing");
	
function hobbyExist($hobby){
	global $hobbies;
	foreach($hobbies as $h){
	if($h == $hobby) return true;
		}
		return false;
	}
	
	
	if(isset($_POST["submit"])){
		if(empty($_POST["username"])){
			$hasError = true;
			$err_name="Please type user name";
		}
		else if(strlen($_POST["username"]) <= 2){
			$hasError = true;
			$err_username="Username needs to be more than 2 character";
		}
		else{
			$username = $_POST["username"];
		}
		if(!isset($_POST["gender"])){
			$hasError = true;
			$err_gender="Gender input please";
		}
		else{
			$gender = $_POST["gender"];
		}
		if(!isset($_POST["hobbies"])){
			$hasError = true;
			$err_hobbies="Hobbies Required";
		}
		else{
			$hobbies = $_POST["hobbies"];
		}
		if (!isset($_POST["profession"])){
			$hasError = true;
			$err_profession="Profession Required";
		}
		else{
			$profession = $_POST["profession"];
		}
		
		
		
		if(!$hasError){
			echo "<h1>You have submitted the form</h1>";
			
			echo $_POST["username"]."<br>";
			echo $_POST["password"]."<br>";
			echo $_POST["gender"]."<br>";
			echo $_POST["profession"]."<br>";
			
			$arr = $_POST["hobbies"];

			foreach($arr as $e){
				echo "$e<br>";
			}
		}
		
	
	}
	
?>
<html>
	<head></head>
	<body>
		<form action="" method="post">
		<fieldset>
			<table>
				
				<tr>
					<td>Username</td>
					<td>: <input type="text" name="username" placeholder="Username">  </td>
					<td><span> <?php echo $err_username;?> </span></td>
				</tr>
				<tr>
					<td>Password</td>
					<td>: <input type="password" name="password" placeholder="Password">  </td>
					<td><span> <?php echo $err_password;?> </span></td>
				</tr>
				<tr>
					<td>Gender</td>
					<td>: <input type="radio" value="Male" <?php if($gender=="Male") echo "checked"; ?> name="gender"> Male <input name="gender" <?php if($gender=="Female") echo "checked"; ?> value="Female" type="radio"> Female </td>
					<td><span> <?php echo $err_gender;?> </span></td>
				</tr>
				<tr>
					<td>Profession</td>
					<td>: <select name="profession">
						<option disabled selected>---Select---</option>
						<?php
							foreach($array as $p){
								if($p == $profession) 
									echo "<option selected>$p</option>";
								else
									echo "<option>$p</option>";
							}
						?>
						</select>
					</td>
					<td><span> <?php echo $err_profession;?> </span></td>
				</tr>
				<tr>
					<td>Hobbies</td>
					<td>: <input type="checkbox" name="hobbies[]" <?php if(hobbyExist("Movies")) echo "checked";?> value="Movies"> Movies 
					<input type="checkbox" name="hobbies[]" <?php if(hobbyExist("Music")) echo "checked";?> value="Music"> Music<br>
					<input type="checkbox" name="hobbies[]" <?php if(hobbyExist("Sports")) echo "checked";?> value="Sports"> Sports
					</td>
					<td><span> <?php echo $err_hobbies;?> </span></td>
				</tr>
				
				<tr>
					<td colspan="2" align="center"><input type="submit" name="submit" value="Submit"></td>
					
				</tr>
			</table>
			
			
			
		</fieldset>
		</form>
	</body>
</html>