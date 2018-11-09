<?php
  // if($_SERVER['REQUEST_METHOD']=='Get'){

 	define('DB_SERVER', 'localhost');
   define('DB_USERNAME', 'root');
   define('DB_PASSWORD', '');
   define('DB_DATABASE', 'jobapplication');
   $db = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);

 $userID= $_GET['userID'];
 
 $sql = "SELECT * from employer_profile where User_Id='$userID' ";
 
 $res = mysqli_query($db,$sql);
 
 while($row = mysqli_fetch_array($res)){
 	$result = ['Fname'=>$row['First_Name'],'Lname'=>$row['Other_Names'],'Company'=>$row['CompanyName'],'idnumber'=>$row['Id_No'],'website'=>$row['Website'],
 	'location'=>$row['Location'],'workAddress'=>$row['Work_Address'],'Occupation'=>$row['occupation'],'KRA'=>$row['kra'],'phone'=>$row['Telephone_No'],
 	'Email'=>$row['Email']];
 }
 
 echo json_encode($result);
  
 
 mysqli_close($db);
//}
?>