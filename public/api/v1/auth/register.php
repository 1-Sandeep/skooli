<?php

    // access control
    include '../../ac.php';

    // init
    include '../../config.php';

    // the method to call this page
    $pagemethod = "POST";

    // uploaded data
    $firstname = isset($_POST['firstname']) ? $_POST['firstname'] : '';
    $lastname = isset($_POST['lastname']) ? $_POST['lastname'] : '';
    $email = isset($_POST['email']) ? $_POST['email'] : '';
    $mobile = isset($_POST['mobile']) ? $_POST['mobile'] : '';
    $password = isset($_POST['password']) ? $_POST['password'] : '';

    // first of all check if the current email user is already register with us
    $Duplicate = $Skooli->isDuplicateUser ($email);

    if (!$Duplicate) {

        // generate hash password
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);

        // default avatar
        $avatar = "";

        // token
        $token = bin2hex(random_bytes(16));
        $token = 'tkn_' . $token;

        // created
        $created = DATETIME;

        // now create new account
        $userid = $Skooli->CreateNewUser ($firstname, $lastname, $email, $mobile, $hashed_password, $token);

        // type of user
        $subjectid = rand(1000, 58585);
        $teacher = $Skooli->CreateTeacher ($userid, $subjectid);

        // now return success data
        $RESPONSE = array (
            "success"   => true,
            "reason"    => "created",
            "response"  => array (
                'user'  => $userid
            )
        );

    
    // if the user is already registered
    }else {
        $RESPONSE = array (
            "success"   => false,
            "reason"    => "duplicate",
        );
    }    

    // return the response in json format
    echo json_encode ($RESPONSE);
    
?>