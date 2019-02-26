<!DOCTYPE html>
<html>
    <head>
        <title>Books</title>
        <link rel="icon" href="media/logo1.jpg">
        <style>
		body { 
    
    background-image:url("media/back2.jpeg");
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
				position: fixed;
				left: 0;
				bottom: 0;
				width: 100%;
                background-color: black;
                color: White;
                font-family: sans-serif;
				
            }
			a {
    color: navy;
}
            address{
                float: left;
            } 
            footer p{
                float: right;
            }
            input {
             padding: 10px; 
                margin: 5px;
                background-color: black;
                color: aliceblue;
                font-family: sans-serif;
                font-size: 20px;
            }
			  select {
             padding: 10px; 
                margin: 5px;
                background-color: black;
                color: aliceblue;
                font-family: sans-serif;
                font-size: 20px;
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
				   <select name="cat">
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
                    <li><a href="#p01">Contuct us</a></li>
                </ul>
            </nav>
<?php
$a=array();
$c=0;
require('lib.php');
searchbook($_REQUEST['search'],$_REQUEST['cat']);
echo '<font face="Verdana" >';
echo '<table width="100%" border="1" bordercolor="#e6f2ff" cellpadding="3" cellspacing="3">
<tr>
 <th style="color:#003399">'.$_REQUEST['search'].'</th>
</tr>';
foreach($a as $v)
{
 echo '<tr><td><a href="book.php?book='.$v["name"].'">'.$v["name"].'</a></td></tr>'; 
}
if($c==0)
{
	header('Location:not.html');
}
echo '</table>';
?>
 <footer>
            <hr>
            <Address id="p01">
                &nbsp; 408/1 kuratoli road,khilkhet<br>
                &nbsp; Dhaka-1229<br>
                &nbsp; Bangladesh
            </Address>
            <p id="p01"><i>mr.x<br>phone no:xxxxxxxxx<br>xyz@gmail.comss</i></p><br><br><br>
            <center><h3>Copyright &copy; 2018 All Rights Reserved</h3></center>
        </footer>
    </body>
        </html>
