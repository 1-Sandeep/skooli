<?php

    // access control
    include '../../ac.php';

    // init
    include '../../config.php';

    // tenant classes
    include '../../class/Teacher.class.php';

    // the method to call this page
    $pagemethod = "GET";

    // data to return to the requsted user
    $RESPONSE = array();
    
    // requster or user validation via header info
    $UserSchema = array (
        'requested_method'  => isset($_SERVER['REQUEST_METHOD']) ? $_SERVER['REQUEST_METHOD'] : null,
        'token'         => isset($_SERVER['HTTP_X_USER_TOKEN']) ? $_SERVER['HTTP_X_USER_TOKEN'] : null,
        'user'  => 'Teacher'
    );

    // now this function will check the multiple layers of request
    // this will return false if only didn't matched
    $ValidatedUser = $Skooli->ValidateUserSchema ($UserSchema, $pagemethod);
    if ($ValidatedUser || gettype($ValidatedUser) == 'array') {

        // now return current teacher info
        $CurrentTeacher = new Teacher($ValidatedUser);

        $list = $Skooli->ListAllUsers ();

        $RESPONSE = array (
            'error'     => false,
            'reason'    => 'listed',
            'response'  => $list
        );       

    // if the schema validation is not matched 
    // return error message
    }else {
        $RESPONSE = array(
            'error'     => true,
            'reason'    => 'user error',
            'response'  => null
        );
    }

    // return the response in json format
    echo json_encode ($RESPONSE);

?>