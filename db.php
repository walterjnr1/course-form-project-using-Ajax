<?php 

require(__DIR__ . '/dbController.php');

$db = new myAjaxAssignment();

if (isset($_GET['lname']) OR $_GET['fname'] OR $_GET['studno'] OR $_GET['dept'] OR $_GET['cgpa'] OR $_GET['semester']) {
	$sanitizer = filter_var_array($_GET, FILTER_SANITIZE_STRING);
    $lname = $sanitizer['lname'];
    $fname = $sanitizer['fname'];
    $studno = $sanitizer['studno'];
    $dept = $sanitizer['dept'];
    $cgpa = $sanitizer['cgpa'];
    $semester = $sanitizer['semester'];

    $db->registerDetails($lname,$fname,$studno,$dept,$cgpa,$semester);
}

if (isset($_GET['comment'])) {
    $sanitizer = filter_var_array($_GET, FILTER_SANITIZE_STRING);
    $comment = $sanitizer['comment'];
    $db->sendComment($comment);
}


 ?>