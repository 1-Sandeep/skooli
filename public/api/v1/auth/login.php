<?php

    // access control
    include '../../ac.php';

    // init
    include '../../config.php';

    // the method to call this page
    $pagemethod = "POST";

    // uploaded data
    $email = isset($_POST['email']) ? $_POST['email'] : '';
    $password = isset($_POST['password']) ? $_POST['password'] : '';

    $RESPONSE = array (
        "error"   => true,
        "reason"  => "user_error",
    );

    $currentUser = $Skooli->isSkooliUser ($email);
    if ($currentUser) {
        // now check the password and move ahead
        if (password_verify($password, $currentUser->PASSWORD)) {
                    
            // new token
            $token = bin2hex(random_bytes(16));
            $token = 'tkn_' . $token;

            // now save current token to the user's list
            $created = DATETIME;
            $Skooli->UpdateLoginToken ($currentUser->USERID, $token);

            // update the response code
            $RESPONSE = array (
                'error'     => false,
                'reason'    => 'success',
                'response'  => array(
                    'token' => $token,
                )
            );

           
        }
    }

    // return the response in json format
    echo json_encode ($RESPONSE);


?>

