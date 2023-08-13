<?php
session_start();
include('./common.php');
?>

<div class="py-5">




<div class="container">
    <div class= "row justify-content-center">
        <div class= "col-md-8">
            <?php if(isset($_SESSION['message']))
            {
                ?>
                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                    <strong>Sorry!</strong> 
                    <?= $_SESSION['message'];?>
                    <button type="button" class="btn-close" data-bs-dismiss="alert"aria-label="Close"></button>
                 </div>
                 <?php
                 unset($_SESSION['message']);
            }
                 ?>


            <div class="card">
                <div class="card-header">
                                    <h4>
                        Registration Form
                    </h4>
                    <div class="card-body">
                            <form action="functions/authcode.php" method="POST">
                        <div class="mb-3">
                            <label class="form-label">Name</label>
                            <input type="text" name="name"class="form-control" >
                            
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Phone</label>
                            <input type="Number" name="phone"class="form-control" >
                            
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Email address</label>
                            <input type="email" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp">
                            
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Password</label>
                            <input type="password" class="form-control" id="exampleInputPassword1" name="password">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Confirm Password</label>
                            <input type="cpassword" class="form-control" id="exampleInputPassword1" name="cpassword">
                        </div>
                        <button type="submit" name="register_btn"class="btn btn-primary">Submit</button>
                        </form>

                    </div>


                </div>
            </div>


            
            
                            

        </div>
    </div>
</div>
</div>
<?php
include('./footer.php')
?>