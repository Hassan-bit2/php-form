<!DOCTYPE html>
<html>
<body>

<h1>My first PHP page</h1>

Welcome <?php echo $_GET["name"]; ?><br>
Your email address is: <?php echo $_GET["email"]; ?>

//echo "Hello World!<br>";
/*
$txt = "Hello world!";
$x = 5;
$y = 10.5;

echo $txt;
echo "<br>";
echo $x;
echo "<br>";
echo $y;
*/

/*$x = 1;
$y = 2;
$z = $x+$y;

echo $x;
echo "<br>";
echo $y;
echo "<br>";
echo $z;
echo "<br>";

echo "This is it!<br>";
echo "This ", "is ", "it! <br>";

$x = null;
echo "<br>";
var_dump($x);
echo "<br>";
echo "hello to the future!<br>";
echo str_replace("future", "world", "hello to the future!");
echo "<br>";
echo (pi());
echo "<br>";

$x = "Hello ";
$y = "world";
echo $x.$y;

echo "<br>";

$num = 30;

if ($num < 20) {
	echo "30 is greater than 20!";
} else {
	echo "30 is not greater number";
}

echo "<br>";

$age = 40;

switch($age) {
	case 20:
	echo "Your age is 20!";
	break;
	
	case 10:
	echo "Your age is 10!";
	break;
	
	case 30:
	echo "Your age is 30!";
	break;
	
	default:
	echo "Your age is unknown!";
}*/

/*$x = 1;
while($x <= 10) {
	echo "$x <br>";
	//echo "<br>";
	$x++;
}

$y=1;

do{
	echo "$y <br>";
	//echo "<br>";
	$y++;
}while($y <=50);
*/

/*for($x=0; $x <= 10; $x++) {
	echo "$x <br>";
}
*/

//echo "<br>";

/*$guns = array("Glock-17", "AK-47", "Canik", "Desert-Eagle", "Makarov");
foreach($guns as $weapons) {
	echo "$weapons <br>";
}
*/


/* for ($x = 0; $x <= 100; $x++) {
	if($x==15) {
		break;
	}
	echo "$x <br>";
}

for ($x = 0; $x <= 100; $x++) {
	if($x==15) {
		continue;
	}
	echo "$x <br>";
}
*/


// php functions

/*function add_num($x, $y){
	return $x + $y;
	echo "<br>";
}

echo add_num(15, 1);
*/

//echo $_SERVER['PHP_SELF']; //returns the file name of the currently executing script.
//echo "<br>";
//echo $_SERVER['SERVER_NAME']; //returns the version of common gateway interface version the server is using
//echo "<br>";
//echo $_SERVER['SERVER_ADDR']; //returns the ip address of host server.
//echo "<br>";
//echo $_SERVER['SERVER_NAME']; //returns name of the host server.//
//echo "<br>";
//echo $_SERVER['SERVER_SOFTWARE']; //returns the server identification string.
//echo "<br>";
//echo $_SERVER['SERVER_PROTOCOL']; //Returns the name and revision of the information protocol.
//echo "<br>";
//echo $_SERVER['REQUEST_METHOD']; //Returns the request method used to access the page (such as POST).
//echo "<br>";
//echo $_SERVER['REQUEST_TIME']; //Returns the timestamp of the start of the request (such as 1377687496).
//echo $_SERVER['QUERY_STRING']; //Returns the query string if the page is accessed via a query string.
//echo "<br>";
//echo $_SERVER['HTTP_ACCEPT']; //Returns the Accept header from the current request.
//echo "<br>";
//echo $_SERVER['HTTP_HOST']; //Returns the Host header from the current request.
//echo "<br>";
//echo $_SERVER['HTTP_REFERER']; //returns the complete url of the current page.
//echo $_SERVER['REMOTE_ADDR']; //returns the ip address from where the user is viewing the current page.
//echo $_SERVER['REMOTE_PORT']; //returns the port being used on user's machine to communicate with the web server.
//echo $_SERVER['SCRIPT_FILENAME']; //returns the absolute pathname of the currently executing script. 
//echo $_SERVER['SERVER_PORT']; //returns the port on the server machine being used by the web server for communication.
//echo $_SERVER['SERVER_SIGNATURE']; //Returns the server version and virtual host name which are added to server-generated pages
//echo $_SERVER['PATH_TRANSLATED']; //Returns the file system based path to the current script.
//echo $_SERVER['SCRIPT_NAME']; //returns the path of the current script.
//echo $_SERVER['SCRIPT_URI']; //Returns the URI of the current page

?>



</body>
</html>
