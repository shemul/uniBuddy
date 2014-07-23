<!DOCTYPE html>
<html lang="en">
	<head>
		<title>uniBuddy</title>
		<meta charset="UTF-8">
		<meta name=description content="">
		<meta name=viewport content="width=device-width, initial-scale=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<!-- Bootstrap CSS -->
		<link href="http://netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" media="screen">
		<link rel="stylesheet" type="text/css" href="lib/css/style.css">
	</head>
	<body>
		<?php include_once("lib/menu.html"); ?>
		<div id="portal_body"> 
			
			<legend><h1 class="text-center">Take your seat in desire section</h1></legend>
			<div class="btn-group-horizontal">
				<button type="button" class="btn btn-primary" data-toggle="modal" href='#addNew' >Add new</button>
				<button type="button" class="btn btn-primary">Refresh</button>
				<button type="button" class="btn btn-primary">Login</button>
				<button type="button" data-loading-text="Loading..." class="btn btn-primary" id="veryTest">
				  Loading state
				</button>
			</div><br>
			<div class="table-responsive">
				<table class="table table-bordered table-hover">
					<thead>
						<tr>
							<th>Course Name</th>
							<th>Section</th>
							<th>Seat Left</th>
							<th>Asking Course</th>
							<th>Contact</th>
							<th>Report</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>Data Structure</td>
							<td>F</td>
							<td>37/40</td>
							<td>Digital Logic Development</td>
							<td><button type="button" class="btn btn-xs btn-success">Contact</button></td>
							<td><button type="button" class="btn btn-xs btn-primary">Report</button></td>
						</tr>
						<tr>
							<td>Programming Language</td>
							<td>B</td>
							<td>38/40</td>
							<td>Data Structure</td>
							<td><button type="button" class="btn btn-xs btn-success">Contact</button></td>
							<td><button type="button" class="btn btn-xs btn-primary">Report</button></td>
						</tr>
						
					</tbody>
				</table>
			</div>

			<!-- add new -->
			
			<div class="modal fade" id="addNew">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
							<h4 class="modal-title">Add New Entry</h4>
						</div>
						<div class="modal-body">
							<form class="addNewForm" role="form">
								<div class="form-group">
									<label for="">Offering Course</label>
									<input type="text" class="form-control" id="valid" name="courseOff" required>
								</div>
								<div class="form-group">
									<label for="">Section</label>
									<input type="text" class="form-control" id="" name="courseOffSec">
								</div>
								<div class="form-group">
									<label for="">Asking Course</label>
									<input type="text" class="form-control" id="" name="askCourse">
								</div>
							</form>
							
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
							<button type="button" class="btn btn-primary" id="addNewSubmit">submit</button>
						</div>
					</div><!-- /.modal-content -->
				</div><!-- /.modal-dialog -->
			</div><!-- /.modal -->

			<div id="notice">
				
			</div>

		</div>
		<!-- jQuery -->
		<script src="http://code.jquery.com/jquery.js"></script>
		<!-- Bootstrap JavaScript -->
		<script src="http://netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
		<script type="text/javascript" src="lib/js/notify.min.js"></script>
		<script type="text/javascript" src="lib/js/main.js"></script>

	</body>
</html>