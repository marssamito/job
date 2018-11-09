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
        $fname=($_POST['fname']);
        $lname=($_POST['lname']);
        $email=($_POST['email']);
        $password=($_POST['password']);
        $idno=($_POST['idNo']);
        $phoneno=($_POST['phoneno']);
        
 
 
 
 $sqlreg="INSERT into Users(First_Name,Last_Name,Email,Password,Id_No,Phone_number)
                        values('$fname','$lname','$email','$password',' $idno',' $phoneno')";


 if(mysqli_query($db,$sqlreg)){

 $sqlauth="INSERT into authenticators(National_Id,Helb_Status,KRA_Status,CRB_Status)
                        values('$idno','0','0','0')";


 if(mysqli_query($db,$sqlauth)){
  echo "success";
 }
 
 }
 
 mysqli_close($db);
 }
 else{
 echo "Error";
 }
 
 ?>