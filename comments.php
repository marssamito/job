<?php
if (isset($_POST['book'])) {
    $id=$_POST['demo'];

 $sqlpostjob="UPDATE jobs set status='1' where job_id='$id'";


 if(mysqli_query($db,$sqlpostjob)){
 
 echo "Job approved";
 }else{
    echo "Approval failed";
 }
 
}
?>

<div class="modal fade" id="comment" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <form method="post">
            
        <div class="modal-content">
            <div class="modal-header navbar-custom">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <h4 align="left"><font color="#ffffff">Approve Job</font></h4>
            </div>
            <div class="modal-body"> 
               
             <div class="table-responsive"> 
                
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            Once the job has been passed it is Irreversible
                        </div>
                    </div>
                </div>  

               
                 <input type="text" name="demo" value="" id="demo" hidden>
               
                       
                </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Deny</button>
                <button type="submit" name="book" class="btn btn-primary">Approve</button>
            </div>
        </div>
        </form>
    </div>
</div>
