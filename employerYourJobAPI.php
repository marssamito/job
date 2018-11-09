<?php
  // if($_SERVER['REQUEST_METHOD']=='Get'){

 	define('DB_SERVER', 'localhost');
   define('DB_USERNAME', 'root');
   define('DB_PASSWORD', '');
   define('DB_DATABASE', 'jobapplication');
   $db = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);

 $userID= $_GET['userID'];
 
 $sql = "SELECT job_id,title,employer_id,date_posted from jobs where employer_id='$userID' ";
 
 $res = mysqli_query($db,$sql);
 
 
 $result = array();
 
 while($row = mysqli_fetch_array($res)){
 array_push($result,array('jobId'=>$row['job_id'],'jobTittle'=>$row['title'],'empoyerID'=>$row['employer_id'],'datePosted'=>$row['date_posted']));
 }
 
 echo json_encode($result);
  
 
 mysqli_close($db);
//}
?>