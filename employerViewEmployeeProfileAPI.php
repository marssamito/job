<?php
  // if($_SERVER['REQUEST_METHOD']=='Get'){

 	define('DB_SERVER', 'localhost');
   define('DB_USERNAME', 'root');
   define('DB_PASSWORD', '');
   define('DB_DATABASE', 'jobapplication');
   $db = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);

 $userID= $_GET['userID'];
 
 $sql = "SELECT * from employee_profile where User_Id='$userID' ";
 
 $res = mysqli_query($db,$sql);
 
 
 //$result = array();
 
 while($row = mysqli_fetch_array($res)){
 // array_push($result,array('name'=>$row['First_Name'],'secName'=>$row['Other_Name'],'Dob'=>$row['Dob'],'id'=>$row['Id_No'],'email'=>$row['Email'],
 // 	'Nationality'=>$row['Nationality'],'Languages'=>$row['Language_Spoken'],'low'=>$row['Low_Levels'],'high'=>$row['High_levels'],'other'=>$row['Other_Levels'],
 // 	'mission'=>$row['Mission'],'vision'=>$row['Vision'],'skills'=>$row['Skills'],'experience'=>$row['Voluntership'],'refName'=>$row['Referee_Name'],
 // 	'contact'=>$row['Referee_Contact'],'occupation'=>$row['Referee_Occupation']));
//$result = ['name' => $row['First_Name'], 'userId' => $row['User_Id'], 'IDNO' => $row['Id_No']];
 	$result = ['name'=>$row['First_Name'],'secName'=>$row['Other_Name'],'Dob'=>$row['Dob'],'id'=>$row['Id_No'],'email'=>$row['Email'],
 	'Nationality'=>$row['Nationality'],'Languages'=>$row['Language_Spoken'],'low'=>$row['Low_Levels'],'high'=>$row['High_levels'],'other'=>$row['Other_Levels'],
 	'mission'=>$row['Mission'],'vision'=>$row['Vision'],'skills'=>$row['Skills'],'experience'=>$row['Voluntership'],'refName'=>$row['Referee_Name'],
 	'contact'=>$row['Referee_Contact'],'occupation'=>$row['Referee_Occupation']];
 }
 
 echo json_encode($result);
  
 
 mysqli_close($db);
//}
?>