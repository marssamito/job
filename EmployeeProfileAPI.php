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
        $UserId=($_POST['User_Id']);
        $Fname=($_POST['First_Name']);
        $Lname=($_POST['Other_Name']);
        $Dob=($_POST['Dob']);
        $Idno=($_POST['Id_No']);
        $Email=($_POST['Email']);
        $Nationality=($_POST['Nationality']);
        $Languges=($_POST['Language_Spoken']);
        $Low=($_POST['Low_Levels']);
        $high=($_POST['High_levels']);
        $Others=($_POST['Other_Levels']);
        $Mission=($_POST['Mission']);
        $Vision=($_POST['Vision']);
        $Skills=($_POST['Skills']);
        $Voluntership=($_POST['Voluntership']);
        $RefereeName=($_POST['Referee_Name']);
        $RefereeContact=($_POST['Referee_Contact']);
        $RefereeOccupation=($_POST['Referee_Occupation']);
       
  $sql = "SELECT User_Id from employee_profile where User_Id='$UserId'";
 
       $res = mysqli_query($db,$sql);
       while($row = mysqli_fetch_array($res)){
        $id=$row['User_Id'];
       // echo "$id";
       }


 if ($UserId!=$id) {
 
 $sqlemployee="INSERT into employee_profile(User_Id,First_Name,Other_Name,Dob,Id_No,Email,Nationality,Language_Spoken,Low_Levels,
                      High_levels,Other_Levels,Mission,Vision,Skills,Voluntership,Referee_Name,Referee_Contact,Referee_Occupation)
                        values('$UserId','$Fname','$Lname','$Dob',' $Idno','$Email','$Nationality','$Languges','$Low','$high','$Others','$Mission','$Vision',
                          '$Skills','$Voluntership','$RefereeName','$RefereeContact','$RefereeOccupation')";


 if(mysqli_query($db,$sqlemployee)){
  echo "Success"; 
 }
 
 mysqli_close($db);
}
 else{
 echo "profile exist";
}
}
 else{
 echo "Error";
 }
 
 ?>