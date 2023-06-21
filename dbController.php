<?php 
session_start();
require 'Exception.php';
require 'PHPMailer.php';
require 'SMTP.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;


class myAjaxAssignment{

    private $dsn = "mysql:host=localhost;dbname=assignment";
    private $user = "root";
    private $pass = "";
    public $pdo;

    public function __construct()
    {
        try {
            $this->pdo = new PDO($this->dsn,$this->user,$this->pass);
        } catch (PDOException $e) {
           echo $e->getMessage(); 
        }
    }


    // process the registration

    public function registerDetails($lname,$fname,$studno,$dept,$cgpa,$semester){
    	$sql = "INSERT INTO students_tbl(lname,fname,studno,dept,cgpa,semester)
                                VALUES(:lname,:fname,:studno,:dept,:cgpa,:semester)";
        $stmt = $this->pdo->prepare($sql);
        if ($stmt->execute(['lname'=>$lname,'fname'=>$fname,'studno'=>$studno,'dept'=>$dept,'cgpa'=>$cgpa,'semester'=>$semester])){
            echo "Details uploaded successfully";
        }
        else {
            echo "An error occured. Try again";
        }
    }

        // send comment(s) to email address
        public function sendComment($comment){
        $mail = new PHPMailer();
        $mail->isSMTP();
        $mail->Host         = ' '; //your email address
        $mail->SMTPAuth     = true; 
        $mail->Username     = 'newleastpaysolution@gmail.com'; //your email address
        $mail->Password     = 'escobarxxxxxxxxxx'; //your password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
        $mail->Port         = "465";

        $mail->setFrom(' '); //your email address
        // Set Recepient
        $mail->addAddress($email); //your email address
        $message = $comment;
        $mail->isHTML(true);
        $mail->Subject = 'Email Verification';
        $mail->Body    = $message;

        if ($mail->send()) {
            echo "Comment sent successfully";
        }
        else {
            echo "An error occured. Try again";
        }
    }

}


 ?>