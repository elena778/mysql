<?
$login=name; // $_POST['name']
$password=pass;

if ($login=="" || $password==""){
	//print("Empty login or password");
	redirect("http://localhost/views/sign_up.php",false);
} 

if ($login!==name || $password!==pass){
 	//print("Wrong login or password");
	redirect('http://localhost/views/sign_up.php',false);
}


if ($_POST["login"] || $_POST["password"]) {
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