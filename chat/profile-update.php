<?php
include 'header.php';
?>       
	   
            <!-- Main Content -->
            <div id="content">
				<div class="container-fluid">
					<div class="card mt-5">
					<div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    <div class="col-lg-7">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Update Profile</h1>
                            </div>
                            <form class="user" action="profile-update-save.php" method="post">
                                
                                <div class="form-group row">
								
                                    <div class="col-sm-12 mb-3 mb-sm-0">
									
                                        <input type="number" readonly class="form-control form-control-user"
                                            id="exampleInputPassword" value="<?php echo $mobile_number; ?>" name="mobile_number">
                                    </div>
									</div>
									
									<div class="form-group row">
                                    <div class="col-sm-12 mb-3 mb-sm-0">
										
                                        <input type="text" autofocus class="form-control form-control-user"
                                            id="exampleInputPassword" placeholder="ENTER Name" name="name">
										
                                    </div>
                                </div>
								<div class="form-group row">
                                    <div class="col-sm-12 mb-3 mb-sm-0">
										
                                        <input type="password" autofocus class="form-control form-control-user"
                                            id="exampleInputPassword" placeholder="ENTER Password" name="password">
										
                                    </div>
                                </div>
								<div class="form-group row">
                                    <div class="col-sm-12 mb-3 mb-sm-0">
										
                                        <input type="file" autofocus class="form-control"
                                            id="exampleInputPassword" placeholder="ENTER Password" name="photo" accept="image/*">
										
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary btn-user btn-block">
                                    Save Profile
                                </button>
                                
                            </form>
                            <hr>
                            <div class="text-center">
                                <a class="small" href="forgot-password.html">Forgot Password?</a>
                            </div>
                            <div class="text-center">
                                <a class="small" href="login.html">Already have an account? Login!</a>
								
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        
					</div>

                
                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->
<?php
include 'footer.php';
?>