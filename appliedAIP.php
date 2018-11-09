<?php
  // if($_SERVER['REQUEST_METHOD']=='Get'){

 	define('DB_SERVER', 'localhost');
   define('DB_USERNAME', 'root');
   define('DB_PASSWORD', '');
   define('DB_DATABASE', 'jobapplication');
   $db = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);

 $jobId= $_GET['jobId'];

 $sql = "SELECT appleyjob.job_id as jobId,appleyjob.user_id as applicantID,appleyjob.date_applied as datePosted,users.First_Name as applicantName,
 users.Id_No as applicantPhone,users.Phone_number as Phone_number FROM appleyjob JOIN users ON users.User_Id=appleyjob.user_id WHERE appleyjob.job_id='$jobId'";
 
 $res = mysqli_query($db,$sql);
 
 
 $result = array();
 
 while($row = mysqli_fetch_array($res)){
 array_push($result,array('phone'=>$row['Phone_number'],'jobId'=>$row['jobId'],'applicantID'=>$row['applicantID'],'applicantName'=>$row['applicantName'],'datePosted'=>$row['datePosted'],
 	'applicantPhone'=>$row['applicantPhone']));
 }
 
 echo json_encode($result);
  
 
 mysqli_close($db);
//}
?>