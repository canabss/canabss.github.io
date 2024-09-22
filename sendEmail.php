<?php
    require_once('assets/PHPMailer/Exception.php');
    require_once('assets/PHPMailer/PHPMailer.php');
    require_once('assets/PHPMailer/SMTP.php');
    require_once('validations.php');
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\SMTP;
    use PHPMailer\PHPMailer\Exception;

    session_start();

    if($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['send'])){
        $firstname = filterData($_POST['first-name']);
        $lastname = filterData($_POST['last-name']);
        $contactno = filterData($_POST['contact-no']);
        $email = filterData($_POST['email']);
        $message = filterData($_POST['message'], false);

        unset($_SESSION["errors"]["firstname"]);
        unset($_SESSION["errors"]["lastname"]);
        unset($_SESSION["errors"]["contact"]);
        unset($_SESSION["errors"]["email"]);
        unset($_SESSION["errors"]["message"]);

        $errors = array();

        firstnameValidation($firstname);
        lastnameValidation($lastname);
        contactValidation($contactno);
        emailValidation($email);
        messageValidation($message);

        if(!isset($_SESSION["errors"]["firstname"]) && !isset($_SESSION["errors"]["lastname"]) && !isset($_SESSION["errors"]["contact"]) && !isset($_SESSION["errors"]["email"]) && !isset($_SESSION["errors"]["message"])){
            $mail = new PHPMailer(true);
            $mail->isSMTP();
            $mail->Host       = 'smtp.gmail.com';
            $mail->SMTPAuth   = true;
            $mail->Username   = ''; //Add your email here
            $mail->Password   = ''; //Add your email password here
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
            $mail->Port       = 465;
            try {
                $mail->setFrom($email, $firstname.' '.$lastname);
                $mail->addAddress('', ''); //Change this line, add your email and name, this is optional so you can delete this line.
                $mail->isHTML(true);
                $mail->Subject = 'You have messages from your own web site';
                $mail->Body  = $message.'<br><br>Contact Number: '.$contactno.'<br>Email: '.$email.'<br>'.$firstname.' '.$lastname;
            
                if($mail->send()){
                    $_SESSION["send"] = true;
                    unset($_SESSION["firstname"]);
                    unset($_SESSION["lastname"]);
                    unset($_SESSION["contact"]);
                    unset($_SESSION["email"]);
                    unset($_SESSION["message"]);
                    header("Location: index.php");
                }
            } catch (Exception $exception) {
                $_SESSION["send"] = false;
                header("Location: index.php?#contact");
           }
        }
        else{
            header("Location: index.php?#contact");
        }
   }