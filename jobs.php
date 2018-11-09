
<table class="table table-responsive" width="100%">
                        <thead>
                            <tr>
                                <td>Job ID</td>
                                <td>Job Tittle</td>
                                <td>Job Expertise</td>
                                <td>Job Experience</td>
                                <td>Job Description</td>
                                <td>Job Category</td>
                                <td>Action</td>
                            </tr>
                        </thead>
                     <tbody>
 <?php 
 include('config.php');
       // $result=("SELECT * FROM sells");

//$result = "SELECT users.FullName as username, food.food_name as foodname,sells.Location as location,sells.Quantity as quantity FROM sells JOIN users JOIN food";
 $result = "SELECT * FROM jobs where status='0'";
        $result=mysqli_Query($db,$result);
        ?>

         
       <?php
        while($res=mysqli_fetch_array($result))
        {
            ?>   
                        <tr>
                            <td><?php echo $res['job_id'];?></td>

                            <td><?php echo $res['title'];?></td>
                           
                            <td><?php echo $res['expertise'];?></td>

                            <td><?php echo $res['experience'];?></td>

                            <td><?php echo $res['description'];?></td>

                            <td><?php echo $res['category'];?></td>

                            <td> <label for="<?php echo $res['job_id'];?>">Approve</label>
                    <input type="button" name="approve"   data-toggle="modal" data-target="#comment"
                     value="<?php echo $res['job_id'];?>" id="<?php echo $res['job_id'];?>" hidden></td>
                        </tr>
                   
        <?php
    }
    ?>
     </tbody>
 </table>

 <?php
include('comments.php');
?>
 
<script type="text/javascript">
$("input[type='button']").click(function(){
var x=(this.value);
var demo = document.getElementById('demo');
demo.value=x;


});
</script>