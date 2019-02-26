<?php
function loadfile()
{
	$myfile = fopen("myfile.txt", "r") or die("Unable to open file!");
    global  $auth;
	while($line=fgets($myfile))
{
	$line=trim($line);
	$up=explode("-",$line);
	$auth[$up[2]]=$up[5];
}
}
function loadbookxml()
{
$xml=simplexml_load_file("boo.xml") or die("Error: Cannot create object");
global $a;
foreach($xml as $b)
{
	    $dar=array();
		$dar["name"]=(string)$b->name;
		$dar["author"]=(string)$b->author;
		$a[]=$dar;
}
}
function bookdetails($book)
{
	$xml=simplexml_load_file("boo.xml") or die("Error: Cannot create object");
	global $a;
	foreach($xml as $b)
   {
	    $dar=array();
		if($b->name==$book)
		{
		$dar["name"]=(string)$b->name;
		$dar["author"]=(string)$b->author;
		$dar["year"]=(string)$b->year;
		$dar["genre"]=(string)$b->genre;
		$dar["price"]=(string)$b->price;
		$dar["link"]=(string)$b->link;
		$a[]=$dar;	
		}
		
    }
}
function searchbook($item,$cat)
{
	$xml=simplexml_load_file("boo.xml") or die("Error: Cannot create object");
    global $a;
	Global $c;
	if($cat=="name")
	{
		foreach($xml as $b)
		{
			if(stripos($b->name,$item)!== false)
			{
				$dar["name"]=(string)$b->name;
				$a[]=$dar;	
				$c++;
			}
		}
	}
	else if($cat=="author")
	{
		foreach($xml as $b)
		{
			if(stripos($b->author,$item)!== false)
			{
				$dar["name"]=(string)$b->name;
				$a[]=$dar;	
				$c++;
			}
		}
	}
	else if($cat=="genre")
	{
		foreach($xml as $b)
		{
			if(stripos($b->genre,$item)!== false)
			{
				$dar["name"]=(string)$b->name;
				$a[]=$dar;	
				$c++;
			}
		}
	}
	else if($cat=="year")
	{
		foreach($xml as $b)
		{
			if(stripos($b->year,$item)!== false)
			{
				$dar["name"]=(string)$b->name;
				$a[]=$dar;	
				$c++;
			}
		}
	}
	else if($cat=="price")
	{
		foreach($xml as $b)
		{
			if(stripos($b->price,$item)!== false)
			{
				$dar["name"]=(string)$b->name;
				$a[]=$dar;	
				$c++;
			}
		}
	}
}
function loadauthorfile()
{
  $myfile = fopen("authors.txt", "r") or die("Unable to open file!");
    global  $a;
	while($line=fgets($myfile))
{
	$line=trim($line);
	$up=explode("  ",$line);
	$a[$up[0]]=$up[1];
}
}
?>