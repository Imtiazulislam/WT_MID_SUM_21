<?php
    
    $char="'#','?'";
    
    $num="1,2,3,4,5,6,7,8,9,0";
    
    $marray=array("Jan","Feb","Mar","Apr","May","Jun","Jul","Aug","Sep","Oct","Nov","Dec");
   
    $date = array();
    foreach(range(1, 31) as $i) {
    $date[] = "$i";}

    $year = array();
    foreach(range(1971, 2021) as $i) {
    $year[] = "$i";}

    $name="";
    $err_name="";

    $uname="";
    $err_uname="";

    $pswrd="";
    $err_pswrd="";

    $conpswrd="";
    $err_cpswrd="";

    $email="";
    $err_email="";

    $number="";
    $err_num="";

    $month="";
    $bdate="";
    $byear="";

  
    $gender="";
	$err_gender="";

    $qstn=[];
    $err_qstn="";

    $bio="";
	$err_bio="";

    $adrs="";
    $err_adrs="";
    
    $code="";
    $err_code="";

    $city="";
    $err_city="";

    $State="";
    $err_state="";

    $zip="";
    $err_zip="";




    $hasError=false;

    function qstnExist($mark){
		global $qstn;
		foreach($qstn as $q){
			if($q == $mark) return true;
		}
		return false;
	}

    if(isset($_POST["submit"])){
		
        if(empty($_POST["name"])){
			$hasError = true;
			$err_name="Name Required";
		}

        else{
			htmlspecialchars($_POST["name"]);
            $name=$_POST["name"];
		}

        if(empty($_POST["uname"])){
			$hasError = true;
			$err_uname="User name Required";
		}
		else if(strlen($_POST["uname"]) <= 6){
			$hasError = true;
			$err_uname=" User name must contain at least Six character";
		}
        
        else if(strrpos($_POST["uname"], ' ') !== false){
			$hasError = true;
			$err_uname="User name can not contain space";
		}
		else{
			htmlspecialchars($_POST["uname"]);
            $uname = $_POST["uname"];
		}

        if(empty($_POST["pswrd"])){
			$hasError = true;
			$err_pswrd="You did not enter any password";
		}
        else if(strlen($_POST["pswrd"]) <= 8){
			$hasError = true;
			$err_pswrd="Password must contain Eight character";
		}
        else if(strpos($_POST["pswrd"],$char)!==false){
			$hasError = true;
			$err_pswrd="Password must contain '#' or '?'";
		}
        else if((ctype_upper($_POST["pswrd"]))==true){
			$hasError = true;
			$err_pswrd="Password must contain one Uppercase";
		}
        else if((ctype_lower($_POST["pswrd"]))==true){
			$hasError = true;
			$err_pswrd="Password must contain one Lowercase";
		}
        else if(strpos($_POST["pswrd"],$num)!==false){
			$hasError = true;
			$err_pswrd="Password must contain one Number";
		}
        
        else{
			htmlspecialchars($_POST["pswrd"]);
            $pswrd = $_POST["pswrd"];
		}

        if(empty($_POST["conpswrd"])){
			$hasError = true;
			$err_cpswrd="Confirm Password Required";
		}
        else if(strcmp($_POST["pswrd"],$_POST["conpswrd"])==false){
			$hasError = true;
			$err_cpswrd="Password must Match";
		}
        else{
			htmlspecialchars($_POST["conpswrd"]);
            $conpswrd = $_POST["conpswrd"];
		}

        if(empty($_POST["email"])){
			$hasError = true;
			$err_email="Email Required";
		}

        else if (!stristr($_POST["email"],"@") OR !stristr($_POST["email"],".")){
            $hasError = true;
			$err_email="Put Correct Email address";
        }
        else{
			htmlspecialchars($_POST["email"]);
            $email = $_POST["email"];
		}

        if(empty($_POST["number"])){
			$hasError = true;
			$err_num="Phone Required";
		}

        else if ((is_numeric($_POST["number"]))!==true){
            $hasError = true;
			$err_num="Input Correct Phone";
        }
        else{
			htmlspecialchars($_POST["number"]);
            $number = $_POST["number"];
		}

        if(empty($_POST["code"])){
			$hasError = true;
			$err_num="Code Required";
		}

        else if ((is_numeric($_POST["code"]))!==true){
            $hasError = true;
			$err_code="Input Correct Code";
        }
        else{
			htmlspecialchars($_POST["number"]);
            $code=$_POST["number"];
		}

        if(!isset($_POST["gender"])){
			$hasError = true;
			$err_gender="Gender Required";
		}
		else{
			htmlspecialchars($_POST["gender"]);
            $gender = $_POST["gender"];
		}

        if(!isset($_POST["qstn"])){
			$hasError = true;
			$err_qstn="Required";
		}
		else{
			htmlspecialchars($_POST["qstns"]);
            $qstn=$_POST["qstns"];
		}
        if(empty($_POST["bio"])){
			$hasError = true;
			$err_bio = "Bio Required";
		}
		else{
			htmlspecialchars($_POST["bio"]);
            $bio = $_POST["bio"];
            
		}

        if(empty($_POST["adrs"])){
			$hasError = true;
			$err_adrs = "Full Address Required";
		}
		else{
			htmlspecialchars($_POST["adrs"]);
            $adrs = $_POST["adrs"];
		}

        if(empty($_POST["city"])){
			$hasError = true;
			$err_city = "City  Required";
		}
		else{
			htmlspecialchars($_POST["city"]);
            $city = $_POST["city"];
		}

        if(empty($_POST["state"])){
			$hasError = true;
			$err_state = "State Required";
		}
		else{
			htmlspecialchars($_POST["state"]);
            $state = $_POST["state"];
		}

        if(empty($_POST["zip"])){
			$hasError = true;
			$err_zip = "Zip/Postal Required";
		}
		else{
			htmlspecialchars($_POST["zip"]);
            $zip = $_POST["zip"];
		}

      



        if(!$hasError){
			echo "<h2>Submitted Info</h2>";
			echo $_POST["name"]."<br>";
            echo $_POST["uname"]."<br>";
            echo $_POST["pswrd"]."<br>";
            echo $_POST["conpswrd"]."<br>";
            echo $_POST["email"]."<br>";
            echo $_POST["number"]."<br>";
            echo $_POST["code"]."";
            echo $_POST["phone"]."<br>";
            echo $_POST["adrs"]."";
            echo $_POST["city"]."";
            echo $_POST["state"]."";
            echo $_POST["zip"]."<br>";
            echo $_POST["gender"]."<br>";
            echo $_POST["qstn"]."<br>";
            echo $_POST["bio"]."<br>";
        }
    }





?>



<html>
    <head>
        
    </head>
    <body>
        <form action="" method="post">
            <fieldset>
                <span align="center"><h1>Club Member Registration</h1></span>
                <table border="0" align="center">
                    <tr>
                        <td align="right">Name:</td>
                        <td><input type="text" name="name" value="<?php echo $name; ?>" placeholder=" Enter name"> </td></td>
                        <td><p style="color:red;"> <?php echo $err_name;?> </p></td>
                    </tr>
                    <tr>
                        <td align="right">User Name:</td>
                        <td><input type="text" name="uname" value="<?php echo $uname; ?>" placeholder=" Enter user Name"></td>
                        <td><p style="color:red;"> <?php echo $err_uname;?> </p></td>
                    </tr>
                    <tr>
                        <td align="right">Password:</td>
                        <td><input type="password" name="pswrd" value="<?php echo $pswrd; ?>" placeholder=" Enter password"></td>
                        <td><p style="color:red;"> <?php echo $err_pswrd;?> </p></td>
                    </tr>
                    <tr>
                        <td align="right">Confirm Password</td>
                        <td><input type="password" name="conpswrd" value="<?php echo $conpswrd; ?>" placeholder=" Enter password"></td>
                        <td><p style="color:red;"> <?php echo $err_cpswrd;?> </p></td>
                    </tr>
                    <tr>
                        <td align="right">Email:</td>
                        <td><input type="text" name="email" value="<?php echo $email; ?>" placeholder=" Enter email"></td>
                        <td><p style="color:red;"> <?php echo $err_email;?> </p></td>
                    </tr>
                    <tr>
                        <td align="right">Phone:</td>
                        <td><input type="text" size="2px" name="code" value="<?php echo $code ?>"placeholder="code">- <input type="text" name="number" value="<?php echo $number; ?>" size="11px" placeholder="number"</td>
                        <td><p style="color:red;"> <?php echo $err_num;?> </p></td>
                        <td><p style="color:red;"> <?php echo $err_code;?> </p></td>
                    </tr>
                    <tr>
                        <td align="right">Address:</td>
                        <td><input type="text" name="adrs" value="<?php echo $adrs; ?>" placeholder="Street Address"></td>
                        <td><p style="color:red;"> <?php echo $err_adrs;?> </p></td>
                    </tr>
                    <tr>
                        <td>&nbsp</td>
                        <td><input type="text" size="5px" name="city" vaule="<?php echo $city ?>"placeholder="City">-<input type="text" size="8px"  name="state" vaule="<?php echo $State ?> placeholder="State"></td>
                        <td><p style="color:red;"> <?php echo $err_city;?> </p></td>
                        <td><p style="color:red;"> <?php echo $err_state;?> </p></td>

                    </tr>
                    <tr>
                        <td>&nbsp</td>
                        <td><input type="text"  name="zip" vaule="<?php echo $zip ?>" placeholder="Postal orZip Code"></td>
                        <td><p style="color:red;"> <?php echo $err_zip;?> </p></td>
                    </tr>
                    <tr>
                        <td align="right">Birth Date:</td>
                        <td>
                        <select>
                         
                        <option disabled selected>Day</option>
                        
                        <?php
							foreach($date as $d){
								if($d == $bdate) 
									echo "<option selected>$d</option>";
								else
									echo "<option>$d</option>";
							}
						?>   
                        </select>
                        <select>
                        <option disabled selected>Month</option>
						<?php
							foreach($marray as $m){
								if($m == $month) 
									echo "<option selected>$m</option>";
								else
									echo "<option>$m</option>";
							}
						?>
                        </select>
                        <select>
                        <option disabled selected>Year</option>
                        
                        <?php
							foreach($year as $y){
								if($y == $byear) 
									echo "<option selected>$y</option>";
								else
									echo "<option>$y</option>";
							}
						?>   
                      </select>
                         </td>
                    </tr>
                    <tr>
                        <td align="right">
                            Gender:
                        </td>
                        <td>
                        <input type="radio" value="Male" <?php if($gender=="Male") echo "checked"; ?> name="gender"> Male <input name="gender" <?php if($gender=="Female") echo "checked"; ?> value="Female" type="radio"> Female </td>
                        <td><p style="color:red;"> <?php echo $err_gender;?> </p></td>
                        </td>
                    </tr>
                    <tr>
                        <td align="right">
                            Where did you here <br> about us?
                        </td>
                        <td>
                            <input type="checkbox" name="qstn[]" <?php if(qstnExist("A friend or Colleague")) echo "checked";?> value="A friend or Colleague"> A friend or Colleague<br>
					        <input type="checkbox" name="qstn[]" <?php if(qstnExist("Google")) echo "checked";?> value="Google"> Google<br>
					        <input type="checkbox" name="qstn[]" <?php if(qstnExist("Blog Post")) echo "checked";?> value="Blog Post"> Blog Post<br>
                            <input type="checkbox" name="qstn[]" <?php if(qstnExist("News article")) echo "checked";?> value="News article"> News article<br>
                        </td>
                        <td><p style="color:red;"> <?php echo $err_qstn;?> </p></td>
                    </tr>
                    <tr>
                        <td align="right">
                            Bio:
                        </td>
                        <td>
                        <textarea name="bio" ><?php echo $bio; ?></textarea>
                        </td>
                        <td><p style="color:red;"> <?php echo $err_bio;?> </p></td>
                    </tr>
                    <tr>
                        <td colspan="2" align="center">
                            <input type="submit" name="submit"value="Regsister">
                        </td>
                    </tr>
                </table>
            </fieldset>
        </form>
    </body>
</html>