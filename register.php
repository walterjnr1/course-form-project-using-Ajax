<?php 
session_start();
if (!isset($_SESSION['studno'])) {
	header('location:login.html');
}
else {
	$studno = $_SESSION['studno'];
}
if(isset($_GET['logout'])=='yes'){
    session_destroy();
    header("Location: ./login.html");
}
 ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Register Courses</title>

	<link rel="stylesheet" type="text/css" href="./assets/styles.css">
</head>
<body>

<div class="header">

	<img src="./assets/logo.jpeg" alt="sch_logo">

	<h4>European University of Lefke</h4>


	<div class="profile">
		<img src="./assets/avatar.png" alt="student_img">
		<a href="?logout=yes">Logout</a>
	</div>
</div>


<dib class="body-wrapper">
	<div class="left">
		<div class="left-body">
			<h4 class="prof"> Profile Dashboard</h4>
			<div class="student-details">
				
			</div>

			<table class="profile_tbl">
				<thead>
					<tr>
						<th><img class="stud_img" src="./assets/avatar.png" alt="student_img"></th>
					</tr>
				</thead>
				<tbody>

					<?php 

					$dbHost = "localhost";
					$dbUsername = "root";
					$dbPassword = "";
					$dbName = "assignment";

					$dsn = "mysql:host=".$dbHost.";dbname=".$dbName;
					$pdo = new PDO($dsn, $dbUsername, $dbPassword);
					$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
					$pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

					$sql = "SELECT * FROM students_tbl WHERE studno = :studno";
			        $stmt=$pdo->prepare($sql);
			        $stmt->execute(['studno'=>$studno]);
			        if($stmt->rowCount()>0){
			        $results = $stmt->fetch(PDO::FETCH_ASSOC);
			        	?>
			        	<tr>
							<td><?php echo $results['lname'] .', '.$results['fname'] ?></td>
						</tr>
						<tr>
							<td><?php echo $results['dept'] ?></td>
						</tr>
						<tr>
							<td><?php echo $results['semester'] ?></td>
						</tr>
						<tr>
							<td><?php echo 'CGPA: '.$results['cgpa'] ?></td>
						</tr>
			        	<?php
			        }
			        else {
			        	?>

			        	<tr>
							<td>LASTNAME, FIRSTNAME</td>
						</tr>
						<tr>
							<td>DEPARTMENT</td>
						</tr>
						<tr>
							<td>SEMESTER</td>
						</tr>
						<tr>
							<td>CGPA</td>
						</tr>

			        	<?php
			        }
					 ?>


					
				</tbody>
			</table>


			<div class="insert-form">
				<form id="regStudentForm" autocomplete="off">
					<h4 class="insert-form-title">Register Student Info</h4>


					<div class="input-field">
						<input type="text" name="lname" id="lname" placeholder="Last Name">
					</div>

					<div class="input-field">
						<input type="text" name="fname" id="fname" placeholder="First Name">
					</div>

					<div class="input-field">
						<input type="text" name="studno" id="studno" placeholder="Student No.">
					</div>

					<div class="input-field">
						<input type="text" name="dept" id="dept" placeholder="Department">
					</div>

					<div class="input-field">
						<input type="text" name="cgpa" id="cgpa" placeholder="CGPA">
					</div>

					<div class="input-field">
						<input type="text" name="semester" id="semester" placeholder="Semester">
					</div>

					<div class="input-field">
						<button type="submit" name="login_btn" id="login_btn">Submit</button>
					</div>

					<div id="error-msg"></div>
					<div id="succMsg"></div>
				</form>
			</div>
		</div>
	</div>
	<div class="right">
		
		<div class="header-title">
			<h5>Course Registration Form</h5>
		</div>

		<p class="warning-para">
			Please click on the "<b>Check Box</b>" beside each course to register the course or courses... <br>

			<b>NOTE:</b> You cannot register more than five courses for the semester.
		</p>
		<div id="errRegMess" style="text-align:center; color: red;"></div>
		<table style="font-size:14px; font-weight: 300; text-transform: uppercase;">
			<thead>
				<tr>
					<th style="font-weight:500; text-align: center;">Register</th>
					<th style="font-weight:500; text-align: center;">Course Code</th>
					<th style="font-weight:500; text-align: center;">Course Title</th>
					<th style="font-weight:500; text-align: center;">Course Unit</th>
				</tr>
			</thead>
			<form id="registerCourseForm">
			<tbody id="coursesWrapper"></tbody>

		</table>
		<br>
		<hr style="border:1px solid rgba(0, 0, 0, 0.2);">
		<div style="text-align: right; margin-top: 10px;">
			<button style="width: 25%; margin-right: 15%;" type="submit">Register Courses</button>
		</div>
		</form>


		<div class="header-title">
			<h5>Registered Courses</h5>
		</div>

		<p class="warning-para">
			View all registered courses
		</p>

		<table style="font-size:14px; font-weight: 300; text-transform: uppercase;">
			<thead>
				<tr>
					<th style="font-weight:500; text-align: center;">S/N</th>
					<th style="font-weight:500; text-align: center;">Course Title</th>
					<!-- <th style="font-weight:500; text-align: center;">Remove</th> -->
				</tr>
			</thead>
		<form id="deleteCourses">
				<tbody id="innerWrapper"></tbody>	
					
			</table>
			<br>
			<hr style="border:1px solid rgba(0, 0, 0, 0.2);">
			<div style="text-align: right; margin-top: 10px;">
				<button style="width: 25%; margin-right: 15%;" type="submit">Delete Course(s)</button>
			</div>
		</form>

		<script type="text/javascript">
			var deleteCourses = document.getElementById('deleteCourses');
			deleteCourses.addEventListener('submit', function(event){
				event.preventDefault();
				deleteCourses();
			});

		</script>

		<div class="header-title">
			<h5>Make Comment(s)</h5>
		</div>

		<p class="warning-para">
			To make comment(s), type in your comment in the textarea provided below and click on the send button.
		</p>

		<form id="sendComment">
			<textarea id="comment" class="tarea" rows="7" placeholder="Type your comment here..."></textarea>

			<div style="text-align: right; margin-top: 10px;">
				<button style="width: 15%; margin-right: 5%;" type="submit">Send</button>
			</div>
		</form>
		<br><br><br>

	</div>

</div>

<script src="./assets/main.js"></script>
<script src="./assets/register.js"></script>
<script src="./assets/sendComment.js"></script>
<script type="text/javascript">
	loadCourses();

	function loadCourses(){
		var coursesWrapper = document.getElementById("coursesWrapper");
		var req;
		if (window.XMLHttpRequest) {
			req = new XMLHttpRequest(); 
		}
		else if (window.ActiveXObject) {
			req = new ActiveXObject("Microsoft.XMLHTTP");
		}
		req.open("GET","http://localhost:80/myass/ajx.php?action=getCourses",true);
		req.send();

		req.onreadystatechange=function(){
			if(req.readyState == 4 && req.status == 200){
				coursesWrapper.innerHTML = req.responseText
			}
		};
	}

	function deleteCourses(){
		var innerWrapper = document.getElementById("innerWrapper");
		var coursesWrapper = document.getElementById("coursesWrapper");
		var req;
		if (window.XMLHttpRequest) {
			req = new XMLHttpRequest(); 
		}
		else if (window.ActiveXObject) {
			req = new ActiveXObject("Microsoft.XMLHTTP");
		}
		req.open("GET","http://localhost:80/myass/ajx.php?action=deleteCourses",true);
		req.send();

		req.onreadystatechange=function(){
			if(req.readyState == 4 && req.status == 200){
				coursesWrapper.innerHTML = req.responseText
				innerWrapper.innerHTML = ""
			}
		};
	}



</script>
</body>
</html>