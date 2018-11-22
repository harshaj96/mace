
	<link rel="stylesheet" type="text/css" href="<?= base_url(); ?>resources/home/css/util.css">
	<link rel="stylesheet" type="text/css" href="<?= base_url(); ?>resources/home/css/main.css">
	
	
		
<!--===============================================================================================-->
	<script src="<?= base_url(); ?>resources/home/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="<?= base_url(); ?>resources/home/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="<?= base_url(); ?>resources/home/vendor/bootstrap/js/popper.js"></script>
	<script src="<?= base_url(); ?>resources/home/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="<?= base_url(); ?>resources/home/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="<?= base_url(); ?>resources/home/vendor/daterangepicker/moment.min.js"></script>
	<script src="<?= base_url(); ?>resources/home/vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="<?= base_url(); ?>resources/home/vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="<?= base_url(); ?>resources/home/js/main.js"></script>
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100 p-t-50 p-b-90">
				<form class="login100-form validate-form flex-sb flex-w" method="post" action="<?php  echo base_url('Home/faculty_register')?>">
					<span class="login100-form-title p-b-51">
						Register
					</span>

					<div class="wrap-input100 validate-input m-b-16" data-validate = "Name is required">
						<input class="input100" required type="text" name="name" placeholder="Name">
						<span class="focus-input100"></span>
					</div>
					
					<div class="wrap-input100 validate-input m-b-16" data-validate = "Employee ID is required">
						<input class="input100" required type="text" name="employee_id" placeholder="Employee ID">
						<span class="focus-input100"></span>
					</div>
					
				
					
					<div class="wrap-input100 validate-input m-b-16" data-validate = "Date Of Birth">
						
						<select class="input100" required name="gender" >	
						  <option >Select Gender</option>						
						  <option value="Male">Male</option>
						  <option value="Female">Female</option>
						</select>
						<span class="focus-input100"></span>
					</div>
					
					<div class="wrap-input100 validate-input m-b-16" data-validate = "Date Of Birth">
						<input class="input100" required type="text" name="dob" placeholder="Date Of Birth">
						<span class="focus-input100"></span>
					</div>
					
					
						<div class="wrap-input100 validate-input m-b-16" data-validate = "Designationis required">
						<select class="input100" required name="designation" >	
						  <option >Select Designation</option>						
						  <option value="Head of the Department">Head of the Department</option>
						  <option value="Associate Professor">Associate Professor</option>
						  <option value="Assistant Professor">Assistant Professor</option>
						  <option value="Other">Other</option>
						  <!--<option value="audi"></option>-->
						</select>
						<span class="focus-input100"></span>
					</div>
					
					
					<div class="wrap-input100 validate-input m-b-16" data-validate = "Email required">
						<input class="input100" required type="email" name="email" placeholder="Email ID">
						<span class="focus-input100"></span>
					</div>
					
					<div class="wrap-input100 validate-input m-b-16" data-validate = "Contact Number">
						<input class="input100" required type="number" name="contact_number" placeholder="Contact Number">
						<span class="focus-input100"></span>
					</div>
					
					
					<div class="wrap-input100 validate-input m-b-16" data-validate = "Username is required">
						<input class="input100" required type="text" pattern=".{6,}" title="Six or more characters" name="username" placeholder="Username">
						<span class="focus-input100"></span>
					</div>
					
					
					<div class="wrap-input100 validate-input m-b-16" data-validate = "Password is required">
						<input class="input100" required type="password" pattern=".{6,}" title="Six or more characters" name="password" placeholder="Password">
						<span class="focus-input100"></span>
					</div>
					
					
					
					<div class="flex-sb-m w-full p-t-3 p-b-24">
						

					
						<div>
							<a href="<?php  echo base_url('Home/login')?>" class="txt1">
								Login!
							</a>
						</div>
					</div>

					<div class="container-login100-form-btn m-t-17">
						<button type="submit" name="submit" class="login100-form-btn">
							Register
						</button>
					</div>

				</form>
			</div>
		</div>
	</div>
	

	<div id="dropDownSelect1"></div>