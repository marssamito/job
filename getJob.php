<?php
  // if($_SERVER['REQUEST_METHOD']=='Get'){

 define('DB_SERVER', 'localhost');
   define('DB_USERNAME', 'root');
   define('DB_PASSWORD', '');
   define('DB_DATABASE', 'jobapplication');
   $db = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);
//

 $sql = "SELECT job_id,title,expertise,experience,description,date_posted from jobs where Status='1'";
 
 $res = mysqli_query($db,$sql);
 
 
 $result = array();
 
 while($row = mysqli_fetch_array($res)){
 array_push($result,array('job_id'=>$row['job_id'],'title'=>$row['title'],'expertise'=>$row['expertise'],'experience'=>$row['experience'],
 	'description'=>$row['description'],'date_posted'=>$row['date_posted']));
 }
 
 echo json_encode($result);
  
 
 mysqli_close($db);
//}
?>