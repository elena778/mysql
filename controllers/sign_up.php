<?
$login=$_POST['name']; // $_POST['name']
$password=$_POST['pass'];

if ($login=="" || $password==""){
	print("Empty login or password");
	redirect("http://localhost",false);
} 

if ($login!==$_POST["name"] || $password!==$_POST["pass"]){
 	print("Wrong login or password");
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