<html>
<head>
<title></title>
	<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js">
	<link href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js">
</head>
<body>
	<h1 align="center"><b>stud reg form</b></h1>
	<form method="post" action="save.php">
		<div class="container">
			<div class="row">
				<div class="col" style="background-color:lightblue;">

					<div class="form-group">
						<label class="form-lable">STUDENT NAME</label>
						<input type="text" class="form-control" name="sname" placeholder="Enter your name">
						
					</div>
					<div class="form-group">
						<label class="form-lable">CORSE</label>
						<select class="form-control" name="city" placeholder="Enter your city">
							<option>COMPUTER SCIENCE</option>
							<option>MECH</option>
							<option>ELECTRONICS</option>
						</select>
						
					</div><br>
					<div class="form-group">
						<label class="form-lable">DEPARTMENT</label>
						<select class="form-control" name="city" placeholder="Enter your dept">
							<option>bca</option>
							<option>cs</option>
							<option>bba</option>
						</select>
						
					</div><br>

						
						<div class="form-group">
						<label class="form-lable">EMAIL</label>
						<input type="email" class="form-control" name="email" placeholder="Enter your email" required>
					</div>
					<div class="form-group">
						<label class="form-lable">PERSONAL NUMBER</label>
						<input type="text" class="form-control" name="no" placeholder="Enter no">

					</div>
					<div class="form-group">
						<label class="form-lable">PASSWORD</label>
						<input type="password" class="form-control" name="psw" placeholder="Enter your passwoprd" required>
					</div>
					<div class="form-group">
						<label class="form-lable">CONFRIM PASSWORD</label>
						<input type="password" class="form-control" name="psw" placeholder="confrim passwoprd" required>
					</div>
										<div class="form-group">
						<label class="form-lable">SEMESTER</label>
						<select class="form-control" name="sem" placeholder="Enter your sem">
							    <option>1stsemester</option>
                               <option>2ndsemester</option>
                                <option>3rdsemester</option>
                               <option>4thsemester</option>
                             <option>5thsemester</option>
                          <option>6thsemester</option>
						</select>
						
					</div><br>

					<div class="form-group">
						<label class="form-lable">DATE</label>
						<input type="date" id="date" name="date">
						
					</div>
					

						<div class="form-group">
							<input type="submit" class="btn btn-success" name="submit">
							<input type="reset" class="btn btn-danger" name="reset">
							
						
							
						</div>
						

				</div>
				
			</div>
							
			</div>

		
	</form>
</body>
</html>