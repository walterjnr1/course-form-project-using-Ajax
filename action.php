<?php 
if (isset($_GET['surname']) AND isset($_GET['studno'])) {
    $sanitizer = filter_var_array($_GET, FILTER_SANITIZE_STRING);
    $surname = $sanitizer['surname'];
    $studno = $sanitizer['studno'];

    $xml = simplexml_load_file("assets/student.xml");
    if (file_exists('assets/student.xml')) {
            $xml = new SimpleXMLElement('assets/student.xml', 0, true);
            if ($surname==$xml->Student->Surname && $studno == $xml->Student->StudentNo) {
                echo 'Login Successful. Redirecting in 2s...';
                session_start();
                $_SESSION['studno'] = $studno;
            }
            else {
                echo 'Invalid login credentials.';
            }
        }   
}



 ?>