<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Update profile</title>
        <link rel="icon" href="media/logo1.jpg">
                <style>
				body { 
    
    background-image:url("media/back1.jpg");
			   background-repeat: no-repeat;
               background-size: cover;

}
 nav ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: #333333;
     width: 78%;
}

nav li {
    float: left;
}

nav li a {
    display: block;
    color: white;
    text-align: center;
    padding: 16px;
    text-decoration: none;
}
            footer{
				width: 100%;
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

                    
 
</style>
    </head>
	<?php
session_start();
if(isset($_SESSION["flag"]) && $_SESSION["flag"]=="loginSuccess")
{
?>
    <body>
        <table width=100%>
            <tr>
                <td>
                    <a href="Homepage.html"><img src="media/logo1.jpg" alt="Logo" height="90px" width="340px" /></a>
                </td>
                <td>
                   <form action="search.php" method="POST">
				   <label style="color:navy;font-size:23px;font-family:Verdana;"><b>Search by</b></label>
				   <select name="cat"  style="padding:10px;margin:5px;background-color:black;color:aliceblue;font-family:sans-serif;font-size:20px;" >
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
        <sectio>
        <form action="validation.php" method="post" style="padding:40px;font-family:verdana;margin-left:400px;margin-top:10px;display:block;padding-right:500px;">
            <center><h1 style="color:Navy;">Easy Books</h1></center>
            <fieldset>
                <legend><b>Update profile:</b> &nbsp;</legend>
                First Name:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <input type="text" name="fname"/><br><br>
                Last Name:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <input type="text" name="lname"/><br><br>
                Email:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <input type="text" name="email"/><br><br>
                Phone No:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <input type="text" name="phone"/><br><br>
                Address:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <textarea rows="1" cols="22" name="address"></textarea><br><br>
                Password: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <input type="Password" name="password"/><br><br>
                Confirm password:
                <input type="Password" name="cpassword"/><br><br>
                Date of Birth:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <select name="day">
				    <option value="0"></option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
					<option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
					<option value="7">7</option>
                    <option value="8">8</option>
                    <option value="9">9</option>
					<option value="10">10</option>
                    <option value="11">11</option>
                    <option value="12">12</option>
					<option value="13">13</option>
                    <option value="14">14</option>
                    <option value="15">15</option>
					<option value="16">16</option>
                    <option value="17">17</option>
                    <option value="18">18</option>
					<option value="19">19</option>
                    <option value="20">20</option>
                    <option value="21">21</option>
					<option value="22">22</option>
                    <option value="23">23</option>
                    <option value="24">24</option>
					<option value="25">25</option>
                    <option value="26">26</option>
                    <option value="27">27</option>
					<option value="28">28</option>
                    <option value="29">29</option>
                    <option value="30">30</option>
					<option value="31">31</option>
                </select>
                <select name="month">
				    <option value="0"></option>
                    <option value="1">January</option>
                    <option value="2">February</option>
                    <option value="3">March</option>
					<option value="4">April</option>
                    <option value="5">May</option>
                    <option value="6">June</option>
					<option value="7">July</option>
                    <option value="8">August</option>
                    <option value="9">September</option>
					<option value="10">October</option>
                    <option value="11">November</option>
                    <option value="12">December</option>
                </select>
                <select name="year">
				    <option value="0"></option>
                    <option value="1990">1990</option>
                    <option value="1991">1991</option>
                    <option value="1992">1992</option>
					<option value="1993">1993</option>
                    <option value="1994">1994</option>
                    <option value="1995">1995</option>
					<option value="1996">1996</option>
                    <option value="1997">1997</option>
                    <option value="1998">1998</option>
					<option value="1999">1999</option>
                    <option value="2000">2000</option>
					<option value="2001">2001</option>
					<option value="2002">2002</option>
					<option value="2003">2003</option>
					<option value="2004">2004</option>
					<option value="2005">2005</option>
					<option value="2006">2006</option>
					<option value="2007">2007</option>
					<option value="2008">2008</option>
					<option value="2009">2009</option>
					<option value="2010">2010</option>
					<option value="2011">2011</option>
					<option value="2012">2012</option>
					<option value="2013">2013</option>
					<option value="2014">2014</option>
					<option value="2015">2015</option>
					<option value="2016">2016</option>
					<option value="2017">2017</option>
                   </select>
		   
                
				<br><br>
                Gender:
                <input type="radio" name="gender" value="male"> Male &nbsp;&nbsp;
                <input type="radio" name="gender" value="female"> Female &nbsp;&nbsp;
                <input type="radio" name="gender" value="other"> Other<br><br>
                <input type="submit" name="submit" value="Update status" /><br><br><hr>
                
            </fieldset>
        </form>
        </sectio>
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
<?php
}
else
			header("Location:login.php?msg=Invalid User: Sign in or Sign up");

?>