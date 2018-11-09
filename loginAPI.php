<?php
  // if($_SERVER['REQUEST_METHOD']=='Get'){

 define('DB_SERVER', 'localhost');
   define('DB_USERNAME', 'root');
   define('DB_PASSWORD', '');
   define('DB_DATABASE', 'jobapplication');
   $db = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);

  $uname=($_POST['email']);
  $password=($_POST['password']);
    

 $sql = "SELECT * from users Where Email='$uname' && Password='$password'";
 
 $res = mysqli_query($db,$sql);
 
 
 //$result = array();
 
 while($row = mysqli_fetch_array($res)){
//array_push($result,array('role'=>$row['Role'],'name'=>$row['user_name']));
 	//$result->('role'=$row['Role']);
 	$result = ['name' => $row['First_Name'], 'userId' => $row['User_Id'], 'IDNO' => $row['Id_No']];
 }
 
 echo json_encode($result);

 mysqli_close($db);
//}
 //header('Content-type: application/json');
?>