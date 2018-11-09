<?php
 
 if($_SERVER['REQUEST_METHOD']=='POST'){
/**my database
    *named e-fundi
    *table named contractor_jobs
*/
   define('DB_SERVER', 'localhost');
   define('DB_USERNAME', 'root');
   define('DB_PASSWORD', '');
   define('DB_DATABASE', 'jobapplication');
   $db = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);
 
  //variables to save to database
        $userID=($_POST['User_Id']);
        $idNumber=($_POST['idNumber']);
        $jobID=($_POST['job_id']);
        
 
 
 
 $sqlpostjob="INSERT into appleyJob(job_id,user_id,id_no)
                        values('$jobID','$userID','$idNumber')";


 if(mysqli_query($db,$sqlpostjob)){
 
 echo "success";
 }
 
 mysqli_close($db);
 }
 else{
 echo "Error";
 }
 
 ?>