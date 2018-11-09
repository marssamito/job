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
        $title=($_POST['Title']);
        $expertise=($_POST['Expertise']);
        $description=($_POST['Description']);
        $experience=($_POST['Experience']);
        // $employer_id=($_POST['EmployerId']);

        $employer_id=ltrim(($_POST['EmployerId']));
        $jobCategory=($_POST['category']);
        
 
 
 
 $sqlpostjob="INSERT into jobs(title,expertise,experience,description,employer_id,category)
                        values('$title','$expertise','$experience','$description','$employer_id','$jobCategory')";


 if(mysqli_query($db,$sqlpostjob)){
 
 echo "success";
 }
 
 mysqli_close($db);
 }
 else{
 echo "Error";
 }
 
 ?>