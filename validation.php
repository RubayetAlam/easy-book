<?php

$count=0;
$c=0;
$c1=0;
$c2=0;
if(strlen($_REQUEST["fname"])>0)
{
	$count++;
	$m1=$_REQUEST["fname"];
}
else
	$m1="First Name can't be empty! <br/>";


if(strlen($_REQUEST["lname"])>0)
{
 $count++;
$m2=$_REQUEST["lname"];
}
else
	$m2="Last Name can't be empty! <br/>";


if(strlen($_REQUEST["email"])>0)
{
$count++;
$c++;
}
else
	$m3="Email can't be empty! <br/>";

if(strlen($_REQUEST["email"])>0)
{
	$count1=strpos($_REQUEST["email"],"@");
	$count2=strpos($_REQUEST["email"],".");
	if($count1==0 || $count2==0 || $count1>=$count2)
	{
		$m4="Invalid Email Format <br/>";
	}
	else
	{
		$count++;
		$c++;
		//$m4=$_REQUEST["email"];
	}
}
if($c==2)
{
	$m17=$_REQUEST["email"];
	
}
if(strlen($_REQUEST["phone"])>0)
{
    $c1++;
	$count++;
}
else
	$m5="Phone can't be empty! <br/>";

if(strlen($_REQUEST["phone"])>0 && !is_numeric($_REQUEST["phone"]))
	$m6="Phone should be numeric! <br/>";
else
{
    $c1++;
	$count++;
}

if(strlen($_REQUEST["phone"])>0 && strlen($_REQUEST["phone"])<8)
	$m7="Phone should be at least 8 characters long! <br/>";
else
{
	$c1++;
	$count++;
}
if($c1==3)
{
	$m21=$_REQUEST["phone"];
}
if(strlen($_REQUEST["address"])>0)
{
	$m18=$_REQUEST["address"];
	$count++;
}
else
	$m8="Address can't be empty! <br/>";

if(strlen($_REQUEST["password"])>0)
{
$count++;

}
else
	$m9="Password can't be empty! <br/>";

if(strlen($_REQUEST["cpassword"])>0)
{
$count++;

}
else
	$m10="Re enter password! <br/>";

if(strlen($_REQUEST["password"])>0 && strlen($_REQUEST["password"])<8)
	$m11="Password should be at least 8 characters! <br/>";
else
{
$count++;
}

if(strlen($_REQUEST["password"])>=8 && strlen($_REQUEST["password"])>=8)
{	
	if($_REQUEST["password"]!==$_REQUEST["cpassword"])
   {
	   $m12="Password do not match <br/>";
   }
else
{
$count++;
}
}
if(($_REQUEST["day"])==0)
	$m13="Select a day for birthday! <br/>";
else
{
$count++;
$m19=$_REQUEST["day"];
}

if(($_REQUEST["month"])==0)
	$m14="Select a month for birthday! <br/>";
else
	{
$count++;
$m20=$_REQUEST["month"];
}

if(($_REQUEST["year"])==0)
$m15="Select a year for birthday! <br/>";
else
{
$count++;
$m22=$_REQUEST["year"];
}

if(isset($_REQUEST["gender"]))
{
$count++;
$m16=$_REQUEST["gender"];
}
else
	$m16="Gender can't be empty! <br/>";
if($count==16)
{
	 $file=fopen('myfile.txt','a') or die("fle open error");
	fwrite($file,"\r\n");
	fwrite($file,$_REQUEST["fname"]);
	fwrite($file,"-");
	fwrite($file,$_REQUEST["lname"]);
	fwrite($file,"-");
	fwrite($file,$_REQUEST["email"]);
	fwrite($file,"-");
	fwrite($file,$_REQUEST["phone"]);
	fwrite($file,"-");
	fwrite($file,$_REQUEST["address"]);
	fwrite($file,"-");
	fwrite($file,md5($_REQUEST["password"]));
	fwrite($file,"-");
	fwrite($file,$_REQUEST["gender"]);
	fwrite($file,"-");
	fwrite($file,$_REQUEST["day"]);
	fwrite($file," ");
	fwrite($file,$_REQUEST["month"]);
	fwrite($file," ");
	fwrite($file,$_REQUEST["year"]);
	fclose($file);
	header('Location:login.php?msg=Sign Up Successful!!');
}
else
{
	
	header ('Location:signup.php?m1='.$m1.'& m2='.$m2.'& m3='.$m3.'& m4='.$m4.'& m5='.$m5.'& m6='.$m6.'& m7='.$m7.'& m8='.$m8.'& m9='.$m9.'& m10='.$m10.'& m11='.$m11.'& m12='.$m12.'& m13='.$m13.'& m14='.$m14.'& m15='.$m15.'& m16='.$m16.'& m17='.$m17.'& m18='.$m18.'& m19='.$m19.'& m20='.$m20.'& m21='.$m21.'& m22='.$m22);
	
}
?>