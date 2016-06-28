<html ng-app="myApp"> 
  <head>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css"/>
    <link rel="stylesheet" type="text/css" href="css/style.css"/>
  </head>   
  <body >
    <div class="navbar navbar-default" id="navbar">
      <div class="container" id="navbar-container">
      	<div class="navbar-header">
      		<a href="#" class="navbar-brand">
      			
      		</a><!-- /.brand -->
      		
      	</div><!-- /.navbar-header -->
        
      	<div class="navbar-header pull-right" role="navigation">
             
      	</div>
      </div>
    </div>
    
      <div class="row">
	<h1 class="text-center">Register</h1>

	<div class="col-sm-2"></div>
	
	<div class="well col-sm-8">

		 <form class="form-horizontal" action="insert.php" method="post">
			<div class="form-group field-user-username required">
				<label class="col-xs-4 col-sm-3 col-md-2 col-lg-3 control-label">
				<label for="users-username" class="control-label">Username</label></label>
				<div class="col-xs-8 col-sm-7 col-md-5 col-lg-6">
					<input type="text" maxlength="50" name="User[username]" class="form-control" id="user-username" required>
				
				</div>

				<div class="col-xs-6 col-sm-5 col-md-3 col-lg-3">
					<div class="help-block"></div>
				</div>
			</div>	
			
			<div class="form-group field-user-password required">
				<label class="col-xs-4 col-sm-3 col-md-2 col-lg-3 control-label">
				<label for="users-password" class="control-label">Password</label></label>
				<div class="col-xs-8 col-sm-7 col-md-5 col-lg-6">
					<input type="password" maxlength="50" name="User[password]" class="form-control" id="user-password" required>
				
				</div>

				<div class="col-xs-6 col-sm-5 col-md-3 col-lg-3">
					<div class="help-block"></div>
				</div>
			</div>
			
			<div class="form-group field-user-email_address required">
				<label class="col-xs-4 col-sm-3 col-md-2 col-lg-3 control-label">
				<label for="users-email_address" class="control-label">Email</label></label>
				<div class="col-xs-8 col-sm-7 col-md-5 col-lg-6">
					<input type="email" maxlength="50" name="User[email_address]" class="form-control" id="user-email_address" required>
				
				</div>

				<div class="col-xs-6 col-sm-5 col-md-3 col-lg-3">
					<div class="help-block"></div>
				</div>
			</div>				 
			
			<div class="form-group field-user-full_name required">
				<label class="col-xs-4 col-sm-3 col-md-2 col-lg-3 control-label">
				<label for="users-full_name" class="control-label">Full Name</label></label>
				<div class="col-xs-8 col-sm-7 col-md-5 col-lg-6">
					<input type="text" maxlength="100" name="User[full_name]" class="form-control" id="user-full_name" required>
				
				</div>

				<div class="col-xs-6 col-sm-5 col-md-3 col-lg-3">
					<div class="help-block"></div>
				</div>
			</div>
			
			<div class="form-group field-user-mobile_no required">
				<label class="col-xs-4 col-sm-3 col-md-2 col-lg-3 control-label">
				<label for="user-mobile_no" class="control-label">Mobile No</label></label>
				<div class="col-xs-8 col-sm-7 col-md-5 col-lg-6">
					<input type="text" maxlength="100" name="User[mobile_no]" class="form-control" id="user-mobile_no" required>
				
				</div>

				<div class="col-xs-6 col-sm-5 col-md-3 col-lg-3">
					<div class="help-block"></div>
				</div>
			</div>
			
			<div class="form-group field-user-address required">
				<label class="col-xs-4 col-sm-3 col-md-2 col-lg-3 control-label">
				<label for="users-address" class="control-label">Address</label></label>
				<div class="col-xs-8 col-sm-7 col-md-5 col-lg-6">
					<input type="text" maxlength="100" name="User[address]" class="form-control" id="user-address" required>
				
				</div>

				<div class="col-xs-6 col-sm-5 col-md-3 col-lg-3">
					<div class="help-block"></div>
				</div>
			</div>
			
			<div class="form-group field-user-user_type required">
				<label class="col-xs-4 col-sm-3 col-md-2 col-lg-3 control-label">
				<label for="user-user_type" class="control-label">User Type</label></label>
				<div class="col-xs-8 col-sm-7 col-md-5 col-lg-6">
					<select name="User[user_type]" class="form-control" id="user-user_type">
					<option value="Admin">Admin</option>
					<option value="User">Student</option>
					</select>
				</div>

				<div class="col-xs-6 col-sm-5 col-md-3 col-lg-3">
					<div class="help-block"></div>
				</div>
			</div>				
			
			<div class="form-group text-center">
				<button type="submit" class="btn btn-default">Create</button>
			</div>
		</form>
		<br />
	</div>
	
	<div class="col-sm-2"></div>
</div>
    
  </body>
</html>
