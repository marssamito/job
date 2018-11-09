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
        $User_Id=($_POST['User_Id']);
        $employer_fname=($_POST['Fname']);
        $employer_lname=($_POST['Lname']);
        $companyName=($_POST['Company']);
        $Id_No=($_POST['Id_No']);
        $website=($_POST['Website']);
        $Location=($_POST['Location']);
        $Work_Address=($_POST['Work_Address']);
        $occupation=($_POST['Occupation']);
        $kra=($_POST['KRA']);
        $email=($_POST['Email']);
        $phone=($_POST['Phone']);

        $sql = "SELECT User_Id from employer_profile where User_Id='$User_Id'";
 
       $res = mysqli_query($db,$sql);
       while($row = mysqli_fetch_array($res)){
        $id=$row['User_Id'];
       // echo "$id";
       }


 if ($User_Id!=$id) {
 
 $sqlprofile="INSERT into employer_profile(User_Id,First_Name,Other_Names,CompanyName,Id_No,Website,Location,Work_Address,occupation,kra,Telephone_No,Email)
                        values('$User_Id','$employer_fname','$employer_lname','$companyName','$Id_No','$website','$Location','$Work_Address','$occupation','$kra','$phone','$email')";


 if(mysqli_query($db,$sqlprofile)){
 
 echo "success";
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