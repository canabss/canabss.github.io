<?php

    function filterData($data, $isAllowed = true) {
        if($isAllowed) {
            $data = trim($data);
            $data = stripslashes($data);
        }
        $data = htmlspecialchars($data);
        return $data;
    }
    
    function firstnameValidation($firstname){
        if(empty($firstname)) {
            $_SESSION["errors"]["firstname"] = 'Required Firstname field.';
            unset($_SESSION['firstname']);
        }else{
            if(!preg_match("/^[a-zA-Z-' ]*$/", $firstname)) {
                $_SESSION["errors"]["firstname"] = 'Invalid Firstname.';
                unset($_SESSION['firstname']);
            }else{
                $_SESSION['firstname'] = $firstname;
            }
        }
    }

    function lastnameValidation($lastname){
        if(empty($lastname)) {
            $_SESSION["errors"]["lastname"] = 'Required Lastname field.';
            unset($_SESSION['lastname']);
        }else{
            if(!preg_match("/^[a-zA-Z-' ]*$/", $lastname)) {
                $_SESSION["errors"]["lastname"] = 'Invalid Lastname.';
                unset($_SESSION['lastname']);
            }else{
                $_SESSION['lastname'] = $lastname;
            }   
        }
    }

    function contactValidation($contactno){
        if(empty($contactno)) {
            $_SESSION["errors"]["contact"] = 'Required Contact No. field.';
            unset($_SESSION['contact']);
        }else{
            if(!preg_match("/^[0-9+ ]+$/D", $contactno)){
                $_SESSION["errors"]["contact"] = 'Invalid Contact No. format.';
                unset($_SESSION['contact']);
            }
            else{
                $_SESSION['contact'] = $contactno;
            }
        }
    }

    
    function emailValidation($email){
        if(empty($email)) {
            $_SESSION["errors"]["email"] = 'Required Email field.';
            unset($_SESSION['email']);
        }else{
            if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $_SESSION["errors"]["email"] = 'Incorrect Email format.';
                if(isset($_SESSION['email'])) {
                    unset($_SESSION['email']);
                }
            }
            else{
                $_SESSION['email'] = $email;
            }
        }
    }

    function messageValidation($message){
        if(empty($message)) {
            $_SESSION["errors"]["message"] = 'Require Message field.';
            unset($_SESSION['message']);
        }else{
            $_SESSION['message'] = $message;
        }
    }    
?>  