<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Sign Up</title>
        <link rel="icon" href="media/logo1.jpg">
          <style>
		  body { 
    
    background-image:url("media/back1.jpg");
			   background-repeat: no-repeat;
               background-size: cover;

}
				
 ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: #333333;
     width: 79%;
}

li {
    float: left;
}

li a {
    display: block;
    color: white;
    text-align: center;
    padding: 16px;
    text-decoration: none;
}
            footer{
                background-color: black;
                color: White;
                font-family: sans-serif;
            }
            address{
                float: left;
            } 
            footer p{
                float: right;
            }
			
            nav input {
             padding: 10px; 
                margin: 5px;
                background-color: black;
                color: aliceblue;
                font-family: sans-serif;
                font-size: 20px;
}
            table tr td input {
             padding: 10px; 
                margin: 5px;
                background-color: black;
                color: aliceblue;
                font-family: sans-serif;
                font-size: 20px;
}
a {
	color:#002b80;
}
 
</style>
    </head>
    <body>
        <table width=100%>
            
            <tr>
                <td>
                    <a href="Homepage.html"><img src="media/logo1.jpg" alt="Logo" height="90px" width="340px" /></a>
                </td>
                <td>
                   <form action="search.php" method="POST">
				   <label style="color:navy;font-size:23px;font-family:Verdana;"><b>Search by</b></label>
				   <select name="cat"  style="padding:10px;margin:5px;background-color:black;color:aliceblue;font-family:sans-serif;font-size:20px;">
				     <option value="name">Name</option>
					 <option value="author">Author</option>
					 <option value="genre">Genre</option>
					 <option value="year">Year</option>
					 <option value="price">Price</option>
				   </select>&nbsp;
				   <input type="text" name="search" onfocus="this.value=''" value="Enter text to search" />
                   <input type="submit" value="search" /> 
                   </form>  
                </td>
                <td>
                    <a href="login.php" ><input type="submit" value="sign in" name="submit"></a>
                </td>
            </tr>
        </table>
        
            <nav >
                <ul>
                 <li><a href="Homepage.html">Home</a></li>
                 <li><a href="Homepage.html #c01">Catagories</a></li>
                 <li><a href="Homepage.html #n02">New Books</a></li>
                 <li><a href="Homepage.html #a01">Classic Book</a></li>
                <li><a href="see.php">Books</a></li>
                 <li><a href="Author.php">Authors</a></li>
                 <li><a href="Request.html">Request book</a></li>
                 <li><a href="AboutUs.html">About us</a></li>
                    <li><a href="#p01">Contact us</a></li>
                </ul>
            </nav>
        <form action="validation.php" method="post" style="padding:40px;font-family:verdana;margin-left:400px;margin-top:10px;display:block;padding-right:500px;">
            <center><h1 style="color:navy;">Easy Books</h1></center>
            <fieldset>
                <legend><b>Sign up:</b> &nbsp;</legend>
                First Name:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <input type="text" name="fname" value="<?php if(isset($_REQUEST["m1"])) { $m1=$_REQUEST["m1"]; if(strlen($m1)<25) {echo $m1;} } ?>"/><br>
				<p style="color:red;text-align:center;">
				<?php
				if(isset($_REQUEST["m1"]))
				{
				$m1=$_REQUEST["m1"];
				if(strlen($m1)>=25) 
				echo $m1;
                }		        
				?>
				</p>
				<br>
                Last Name:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <input type="text" name="lname" value="<?php if(isset($_REQUEST["m2"])) { $m2=$_REQUEST["m2"]; if(strlen($m2)<25) {echo $m2;} } ?>"/><br>
				<p style="color:red;text-align:center;">
				<?php
				if(isset($_REQUEST["m2"]))
				{
				$m2=$_REQUEST["m2"];
				if(strlen($m2)>=25) 
				echo $m2;
                }		        
				?>
				</p>
				<br>
                Email:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <input type="text" name="email" value="<?php if(isset($_REQUEST["m17"])) { $m17=$_REQUEST["m17"]; echo $m17;}?>"/><br>
				<p style="color:red;text-align:center;">
				<?php
				if(isset($_REQUEST["m3"]))
                echo $_REQUEST["m3"];
				if(isset($_REQUEST["m4"]))
                echo $_REQUEST["m4"];
				?>
				</p>
				<br>
                Phone No:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <input type="text" name="phone" value="<?php if(isset($_REQUEST["m21"])) echo $_REQUEST["m21"];?>" /><br>
				<p style="color:red;text-align:center;">
				<?php
				if(isset($_REQUEST["m5"]))
				{
					if(strlen($_REQUEST["m5"])>18)
					{
						echo $_REQUEST["m5"];
					}
				}
                
				if(isset($_REQUEST["m6"]))
                echo $_REQUEST["m6"];
				if(isset($_REQUEST["m7"]))
                echo $_REQUEST["m7"];
				?>
				</p>
				<br>
                Address:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <textarea rows="1" cols="22" name="address"><?php if(isset($_REQUEST["m18"])) { $m18=$_REQUEST["m18"]; echo $m18;}?></textarea><br>
				<p style="color:red;text-align:center;">
				<?php
				if(isset($_REQUEST["m8"]))
                echo $_REQUEST["m8"];
				?>
				</p>
				<br>
                Password: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <input type="Password" name="password" /><br>
				<p style="color:red;text-align:center;">
				<?php
				if(isset($_REQUEST["m9"]))
                echo $_REQUEST["m9"];
				if(isset($_REQUEST["m11"]))
                echo $_REQUEST["m11"];
				if(isset($_REQUEST["m12"]))
                echo $_REQUEST["m12"];
				?>
				</p>
				<br>
                Confirm password:
                <input type="Password" name="cpassword"/><br>
				<p style="color:red;text-align:center;">
				<?php
				if(isset($_REQUEST["m10"]))
                echo $_REQUEST["m10"];
				if(isset($_REQUEST["m12"]))
                echo $_REQUEST["m12"];
				?>
				</p>
				<br>
                Date of Birth:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <select name="day">
				<option value="0"></option>
				    <?php
					if(isset($_REQUEST["m19"]))
					{
						$d=$_REQUEST["m19"];
					}
				     for($i=1;$i<=31;$i++)
					 {
						 if($i==$d)
						 echo '<option value="'.$i.'" selected>'.$i.'</option>';
					 else
						 echo '<option value="'.$i.'">'.$i.'</option>';
					 }
					?>
                </select>
                <select name="month">
				    <option value="0"></option>
                    <option value="1" <?php if(isset($_REQUEST["m20"])) { $m=$_REQUEST["m20"]; if($m==1) echo "selected";} ?>>January</option>
                    <option value="2" <?php if(isset($_REQUEST["m20"])) { $m=$_REQUEST["m20"]; if($m==2) echo "selected";} ?>>February</option>
                    <option value="3" <?php if(isset($_REQUEST["m20"])) { $m=$_REQUEST["m20"]; if($m==3) echo "selected";} ?>>March</option>
					<option value="4" <?php if(isset($_REQUEST["m20"])) { $m=$_REQUEST["m20"]; if($m==4) echo "selected";} ?>>April</option>
                    <option value="5" <?php if(isset($_REQUEST["m20"])) { $m=$_REQUEST["m20"]; if($m==5) echo "selected";} ?>>May</option>
                    <option value="6" <?php if(isset($_REQUEST["m20"])) { $m=$_REQUEST["m20"]; if($m==6) echo "selected";} ?>>June</option>
					<option value="7" <?php if(isset($_REQUEST["m20"])) { $m=$_REQUEST["m20"]; if($m==7) echo "selected";} ?>>July</option>
                    <option value="8" <?php if(isset($_REQUEST["m20"])) { $m=$_REQUEST["m20"]; if($m==8) echo "selected";} ?>>August</option>
                    <option value="9" <?php if(isset($_REQUEST["m20"])) { $m=$_REQUEST["m20"]; if($m==9) echo "selected";} ?>>September</option>
					<option value="10"<?php if(isset($_REQUEST["m20"])) { $m=$_REQUEST["m20"]; if($m==10) echo "selected";} ?>>October</option>
                    <option value="11"<?php if(isset($_REQUEST["m20"])) { $m=$_REQUEST["m20"]; if($m==11) echo "selected";} ?>>November</option>
                    <option value="12"<?php if(isset($_REQUEST["m20"])) { $m=$_REQUEST["m20"]; if($m==12) echo "selected";} ?>>December</option>
                </select>
                <select name="year">
				    <option value="0"></option>
                    <?php
					if(isset($_REQUEST["m22"]))
					{
						$y=$_REQUEST["m22"];
					}
				     for($i=1990;$i<=2018;$i++)
					 {
						 if($i==$y)
						 echo '<option value="'.$i.'" selected>'.$i.'</option>';
					 else
						 echo '<option value="'.$i.'">'.$i.'</option>';
					 }
					 
					?>
                   </select>   
                
				<br>
				<p style="color:red;text-align:center;">
				<?php
				if(isset($_REQUEST["m13"]))
                echo $_REQUEST["m13"];
				if(isset($_REQUEST["m14"]))
                echo $_REQUEST["m14"];
				if(isset($_REQUEST["m15"]))
                echo $_REQUEST["m15"];
				?>
				</p>
				<br>
                Gender:
                <input type="radio" name="gender" value="male" <?php if(isset($_REQUEST["m16"])) { $m16=$_REQUEST["m16"]; if($m16=="male") echo "checked";}?> > Male &nbsp;&nbsp;
                <input type="radio" name="gender" value="female" <?php if(isset($_REQUEST["m16"])) { $m16=$_REQUEST["m16"];  if($m16=="female") echo "checked";}?>> Female &nbsp;&nbsp;
                <input type="radio" name="gender" value="other" <?php if(isset($_REQUEST["m16"])) { $m16=$_REQUEST["m16"];  if($m16=="other") echo "checked";}?>> Other<br>
				<p style="color:red;text-align:center;">
				<?php
				if(isset($_REQUEST["m16"]))
				{
					if(strlen($_REQUEST["m16"])>8)
						echo $_REQUEST["m16"];
				}
                
				?>
				</p>
				<br>
                <input type="submit" name="submit" value="Create Account"  /><br><br><hr>
                <a href="login.php">Already have an account?Sign in!</a>
                
            </fieldset>
        </form>
        <footer>
            <hr>
            <Address id="p01">
                &nbsp; 408/1 kuratoli road,khilkhet<br>
                &nbsp; Dhaka-1229<br>
                &nbsp; Bangladesh
            </Address>
            <p id="p01"><i>mr.x<br>phone no:xxxxxxxxx<br>xyz@gmail.com</i></p><br><br><br>
            <center><h3>Copyright &copy; 2018 All Rights Reserved</h3></center>
        </footer>
    </body>
</html>