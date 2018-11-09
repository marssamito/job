<?php
  // if($_SERVER['REQUEST_METHOD']=='Get'){

 define('DB_SERVER', 'localhost');
   define('DB_USERNAME', 'root');
   define('DB_PASSWORD', '');
   define('DB_DATABASE', 'jobapplication');
   $db = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);

$natinal=($_POST['id']);

 $sql = "select * from authenticators where National_Id='$natinal'";
 
 $res = mysqli_query($db,$sql);
 
 
 //$result = array();
 
 while($row = mysqli_fetch_array($res)){
 //array_push($result,array('helb'=>$row['Helb_Status'],'kra'=>$row['KRA_Status'],'crb'=>$row['CRB_Status']));
 $result = ['helb'=>$row['Helb_Status'],'kra'=>$row['KRA_Status'],'crb'=>$row['CRB_Status']];
 }
 
 //echo json_encode($result);
 echo json_encode($result);
  
 
 mysqli_close($db);
//}
?>