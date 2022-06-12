<?PHP
	$isPost=false;
	$username="";
	$password="";
	$gender="";
	$skills="";
	$dept="";
	$address="";
	$birthday="";
	
	
	if(isset($_POST["btnClick"]))
	{
		$isPost=true;
		if($_POST["uname"]!=""){
			$username=$_POST["uname"];
		}
		if($_POST["pass"]!=""){
			$password=$_POST["pass"];
		}
		/* if($_POST["gender"]!=""){
			$gender=$_POST["gender"];
		}

		if($_POST["skills"]!=""){
			$skills=$_POST["skills"];
		}

		*/
		if($_POST["dept"]!=""){
			$dept=$_POST["dept"];
		}
		if($_POST["address"]!=""){
			$address=$_POST["address"];
		}if($_POST["birthday"]!=""){
			$birthday=$_POST["birthday"];
		}
	}
?>

<form action="#" method="POST">
	<br><br>
	Username: <input type="text" id="uname" name="uname">
<?php
	if($isPost==true && $username==""){
		echo "<span style='color:red;'>	Username Required</span>";
	}

?>
	<br><br><br>
	Password: <input type="password" id="pass" name="pass">
<?php
	if($isPost==true && $password==""){
		echo "<span style='color:red;'>	Password Required</span>";
	}

?>

	<br> <br>
	
	Gender: <input type="radio" name="gender" value="male">Male
	<input type="radio" name="gender" value="female">Female
<?php
	if($isPost==true && $gender==""){
		echo "<span style='color:red;'>	Gender selection Required</span>";
	}

?>	
	<br><br>
	Skills: <input type="checkbox" name="skills[]" value="C">C
	<input type="checkbox" name="skills[]" value="C++">C++
	<input type="checkbox" name="skills[]" value="JAVA">Java
	<input type="checkbox" name="skills[]" value="C#">C#
<?php
	if($isPost==true && $skills==""){
		echo "<span style='color:red;'>	Checkbox mark Required</span>";
	}

?>
	<br><br>
	
	Department : <select name="dept">
	<option value="cse">CSE</option>
	<option value="eee">EEE</option>
	<option value="bba">BBA</option>
	</select>
<?php
	if($isPost==true && $dept==""){
		echo "<span style='color:red;'>	Department selection Required</span>";
	}

?>
	<br><br><br>
	Adress : <textarea rowspan="3" colspan="40" name="address"></textarea>
<?php
	if($isPost==true && $address==""){
		echo "<span style='color:red;'>	Address Required</span>";
	}

?>
	<br><br><br>
	
	Birthday : <input type="date" id="birthday" name="birthday">
<?php
	if($isPost==true && $birthday==""){
		echo "<span style='color:red;'>	Birthday Required</span>";
	}

?>
	<br><br>
	
	
	<input type="submit" name="btnClick" value="Click">


</form>
