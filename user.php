<?php session_start();?>
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
	<h1 class="text-center">Manage User</h1>
	<p class='text-center'></p>
	<div class="col-sm-2"></div>
		
	<div class="col-sm-8">
	<table class="table table-bordered">
    <tr>
      <td>User Name</td>
      <td>Full Name</td>
      <td>Email Address</td>
      <td>Mobile No</td>
      <td>Employee ID</td>
      <td>User Type</td>
      <td>Action</td>
    </tr>
    
		<?php
			/**
			* 
			* connection with database
			* 
			*/
				$db_host = 'localhost';
				$db_user = 'root';
				$db_password = '';
				$db_name ='library management';
				
				$location = mysql_pconnect($db_host, $db_user, $db_password);
				
				if (!$location) 
				{
					die('Not connected : ' . mysql_error());
				}                
				$db_selected = mysql_select_db($db_name, $location);
				if (!$db_selected) 
				{
					die ('Error : ' . mysql_error());
				}
				$query = "SELECT * FROM users";
			
				$result = mysql_query($query,$location);
				
				
				while ($row = mysql_fetch_array($result)){
					echo "<tr>
						<td>$row[username]</td>
						<td>$row[fullname]</td>
						<td>$row[email]</td>
						<td>$row[mobile]</td>
						<td>$row[address]</td>
						<td>$row[type]</td>
						
						<td>
							<a href = 'delete.php?asdfg=$row[id]'>Delete</a>
							<a href = 'update.php?id=$row[id]'>Update</a>
						<td>	
						</tr>";
				}
		?>
	</table>
	</div>
	
	<div class="col-sm-2"></div>
</div>
    
  </body>
</html>
