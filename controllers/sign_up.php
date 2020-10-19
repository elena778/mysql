<?
$login=$_POST['name']; // $_POST['name']
$password=$_POST['pass'];

$query = mysql_query("SELECT email FROM users WHERE 'email' = '$email'");


if ($login=="" || $password==""){
	exit("Empty login or password");
	redirect("http://localhost",false);
} 

if ($login!==$_POST["name"] || $password!==$_POST["pass"]){
 	exit("Wrong login or password");
	redirect('http://localhost',false);
}


if (!empty($_POST["name"]) and !empty($_POST["pass"])) {
	redirect('http://localhost',false);
}

/*$fp=fopen('text.txt','w');
fwrite($fp,'TEXT');
fclose($fp);*/


function redirect($url, $statusCode = 303)
{
   header('Location: ' . $url, true, $statusCode);
   die();
}

?>