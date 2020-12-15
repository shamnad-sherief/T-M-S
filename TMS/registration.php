<?php include('header.php'); ?>
<div class="clearfix"></div>
<div id="titlebar" class="gradient">
	<div class="container">
		<div class="row">
			<div class="col-md-12">

				<h2><i class="sl sl-icon-plus"></i> Sign Up Form</h2>

				<!-- Breadcrumbs -->
				<nav id="breadcrumbs">
					<ul>
						<li><a href="#">Home</a></li>
						<li>Register</li>
					</ul>
				</nav>

			</div>
		</div>
	</div>
</div>

<div class="container">
	<div class="row">
		<div class="col-lg-12 text-center">
			<div class="notification notice large margin-bottom-55">
				<h4>Don't Have an Account? 🙂</h4>
				<p>If you don't have an account you can create one by entering your email address in contact details section.</p>
			</div>
				<?php 
				$u_id=1;
				$query = "SELECT u_id FROM tbl_userid_genl";
				$exe=mysqli_query($con,$query);
				while($rowval=mysqli_fetch_array($exe))
				{
				$u_id=$u_id+1;
				} ?>
			<form method="post"  action="code_regi.php" class=" ">	
				<input type="hidden" name="uid"  value="U<?php echo $u_id; ?>" readonly="readonly" />
				<p class="form-row form-row-wide col-sm-4">
					<label for="username2" style="color:white;">
						<input type="text" name="name" placeholder="Enter Your Name" required=""/>
					</label>
				</p>
				<p class="form-row form-row-wide col-sm-4">
					<label for="username2" style="color:white;">
						<input type="text" name="uname" placeholder="Enter Your User Name" required=""/>
					</label>
				</p>	
				<p class="form-row form-row-wide col-sm-4">
					<label for="username2" style="color:white;">
						<input type="password" name="pass" placeholder="Enter Your Password" required=""/>
					</label>
				</p>
				<p class="form-row form-row-wide col-sm-12">
					<label for="username2" style="color:white;">
						<textarea name="addr" placeholder="Enter The Address" required=""></textarea>
					</label>
				</p>
				<p class="form-row form-row-wide col-sm-3">
					<label for="username2" style="color:white;">
						<select name="gender"  required="">
						<option value="">Select The Gender</option>
						<option value="male">Male</option>
						<option value="female">Female</option>
						</select>
					</label>
				</p>
				<p class="form-row form-row-wide col-sm-3">
					<label for="username2" style="color:white;">
						<input type="date" name="dob" placeholder="Enter Your Date of brith" id="dob" required=""/>
					</label>
				</p>
				<p class="form-row form-row-wide col-sm-3">
					<label for="username2" style="color:white;">
						<input type="email" name="mail" placeholder="Enter Your Email id" required=""/>
					</label>
				</p>
				<p class="form-row form-row-wide col-sm-3">
					<label for="username2" style="color:white;">
						<input type="text" name="phone" placeholder="Enter your Mobile no:" required=""/>
					</label>
				</p>
				<input type="submit" class="button border fw margin-top-10" name="register" value="Register" />
			</form>
		</div>
	</div>
</div>

<?php include('footer.php'); ?>