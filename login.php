asdsadsadas sad

<div class="modal fade" id="sign-in" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalCenterTitle">Modal title</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
             <form action='functions/authcode.php'method="POST">
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
            <!-- Email input -->
            <div class="form-outline mb-4">
                <input type="email" id="form2Example1" class="form-control"name=email />
                <label class="form-label" for="form2Example1">Email address</label>
            </div>

            <!-- Password input -->
            <div class="form-outline mb-4">
                <input type="password" id="form2Example2" class="form-control"name="password" />
                <label class="form-label" for="form2Example2">Password</label>
            </div>

            <!-- 2 column grid layout for inline styling 
            <div class="row mb-4">
                <div class="col d-flex justify-content-center">
                < Checkbox >
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="form2Example31" checked />
                    <label class="form-check-label" for="form2Example31"> Remember me </label>
                </div>
                </div>

            </div> -->

            <!-- Submit button -->
                <button type="submit" class="btn btn-primary btn-block mb-4"name="login_btn">Sign in</button>

                <!-- Register buttons -->
                <div class="text-center">

                    <p>Not a member? </p>
                    <div>
                    <a class= "btn btn-primary btn-block mb-4"href="registration.php">Register</a>
                    </div>

                    
                </div>
            </form>
        </div>
        
        </div>
    </div>
    </div>
