<?php 
function db($sql,$data = array())
{
	 $pdo = new PDO("mysql:host=localhost;dbname=goygoyedulogin;charset=utf8","root","");
	 $sql = $pdo -> prepare($sql);
	 $sql -> execute($data);
     $obj = ($pdo);
	 return $sql->fetchAll(PDO::FETCH_CLASS); 
}
// function db($sql,$data = array())
// {
// 	 $pdo = new PDO("mysql:host=localhost;dbname=goygoydblogin;charset=utf8","root","");
// 	 $sql = $pdo -> prepare($sql);
// 	 $sql -> execute($data);
//      $obj = ($pdo);
// 	 return $sql->fetchAll(); 
// }
 ?>